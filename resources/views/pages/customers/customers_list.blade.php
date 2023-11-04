@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Customers</h1>
    <a href="{{ url('/Customer_form') }}" class="btn btn-primary mb-2" ><i class='bx bxs-user-plus'></i></a>

    <table class="table">
        <thead>
            <th>Name</th>
            <th>LastName</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($customer as $item)
                <tr>
                    <td>{{ $item->name }} </td>
                    <td>{{ $item->lastname }} </td>
                    <td>{{ $item->phone }} </td>
                    <td>{{ $item->gender }} </td>
                    <td>{{ $item->email }} </td>
                    <td>{{ $item->password }} </td>
                    <td> 
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}"><i class="bx bxs-edit"></i></button>
                    </td>
                    <td> 
                        <form class="disableCx" action="{{ route('customerDisabled', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger"><i class="bx bxs-trash"></i></button>
                        </form>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit info</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="{{ route('updateCustomer', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="modal-body">

                                <label class="form-label" for="">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ $item->name }}" required>
                        
                                <label class="form-label" for="">Lastname <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="lastname" value="{{ $item->lastname }}" required>
                        
                                <label class="form-label" for="">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="phone" value="{{ $item->phone }}" required>
                        
                                <label class="form-label" for="">Gender <span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" id="Masculine" value="Masculine" required>
                                    <label class="form-check-label" for="Masculine">
                                        Masculine
                                    </label>
                                </div> 
                        
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" id="Feminine" value="Feminine" required>
                                    <label class="form-check-label" for="Feminine">
                                        Feminine
                                    </label>
                                </div>
                        
                                <label class="form-label" for="">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="email" value="{{ $item->email }}" required>

                                <label class="form-label" for="">Password <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="password" value="{{ $item->password }}" required>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update changes</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')

    <script>

        $('.disableCx').on('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Are you sure you want to delete this user?',
                text: "You won't be able to revert this process",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'The profile has been deleted.',
                        'success',
                    ).then(() => {
                        setTimeout(() => {
                            this.submit();
                        }, 2000);  
                    })
                }
            })
        })

    </script>
    
@endsection