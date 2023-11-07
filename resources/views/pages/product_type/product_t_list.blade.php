@extends('template')

@section('content')
    <h1 class="text-center text-success">Gestión de Tipos de Productos</h1>
    <a href="#" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addProductTypeModal">
        <i class='bx bxs-user-plus'></i>
    </a>

    <button class="create" onclick="window.location.href = '{{ url('/Product_Type') }}'">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Add
        </span>
    </button>

    <table class="table">
        <thead>
            <th>Name</th>
            <th>Actions</th>
        </thead>
        <tbody>
        @foreach ($productt as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editProductTypeModal{{ $item->id }}"><i class="bx bxs-edit"></i></button>
                </td>
                <td>
                    <form action="{{ route('deleteCategorie', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="bx bxs-trash"></i></button>
                    </form>
                </td>
            </tr>
        
            <!-- Modal de edición para esta fila -->
            <div class="custom-modal" id="editProductTypeModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit info</h1>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('updateCategorie', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="editProductTypeName{{ $item->id }}">Name:</label>
                                    <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
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