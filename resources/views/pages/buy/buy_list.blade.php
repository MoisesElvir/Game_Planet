@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Buy</h1>
    <br>
    <button class="create" onclick="window.location.href = '{{ url('/Buy_form') }}'">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Add
        </span>
    </button>
    <br>
    <table class="table">
        <thead id="superior">
            <th>Quantity</th>
            <th>Payment Method</th>
            <th>Customer</th>
            <th>Product</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($buy as $item)
                <tr>
                    <td>{{ $item->quantity }} </td>
                    <td>{{ $item->payment_method }} </td>
                    <td>{{ $item->id_customer }} </td>
                    <td>{{ $item->id_product }} </td>
                    <td> 
                        <button class="edit" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                            <span class="transition"></span>
                            <span class="gradient"></span>
                            <span class="label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><path fill="currentColor" fillRule="evenodd" d="M17.586 2a2 2 0 0 1 2.828 0L22 3.586a2 2 0 0 1 0 2.828L20.414 8L16 3.586L17.586 2zm-3 3l-5 5A2 2 0 0 0 9 11.414V13a2 2 0 0 0 2 2h1.586A2 2 0 0 0 14 14.414l5-5L14.586 5z" clipRule="evenodd"/><path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 14H5a2 2 0 0 0-2 2v0a2 2 0 0 0 2 2h14a2 2 0 0 1 2 2v0a2 2 0 0 1-2 2h-4"/></g></svg></span>
                        </button>
                        <br>
                        <br>
                        <form class="disableBc" action="{{ route('deleteBuy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <span class="transition"></span>
                                <span class="gradient"></span>
                                <span class="label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7Zm2-4h2V8H9v9Zm4 0h2V8h-2v9Z"/></svg></span>
                            </button>
                        </form>
                    </td>
                </tr>
                
                <div class="custom-modal" id="exampleModal{{ $item->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit info</h1>
                            </div>
                
                            <form action="{{ route('updateBuy', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="modal-body">
                                <h2>Edit Branch <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><path fill="currentColor" fillRule="evenodd" d="M17.586 2a2 2 0 0 1 2.828 0L22 3.586a2 2 0 0 1 0 2.828L20.414 8L16 3.586L17.586 2zm-3 3l-5 5A2 2 0 0 0 9 11.414V13a2 2 0 0 0 2 2h1.586A2 2 0 0 0 14 14.414l5-5L14.586 5z" clipRule="evenodd"/><path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 14H5a2 2 0 0 0-2 2v0a2 2 0 0 0 2 2h14a2 2 0 0 1 2 2v0a2 2 0 0 1-2 2h-4"/></g></svg></h2>
                                <br>
                                <div class="wave-group">
                                    <input required="" type="text" class="input" name="quantity" required>
                                    <span class="bar"></span>
                                    <label class="label">
                                    <span class="label-char" style="--index: 0">Q</span>
                                    <span class="label-char" style="--index: 1">u</span>
                                    <span class="label-char" style="--index: 2">a</span>
                                    <span class="label-char" style="--index: 3">n</span>
                                    <span class="label-char" style="--index: 4">t</span>
                                    <span class="label-char" style="--index: 5">i</span>
                                    <span class="label-char" style="--index: 6">t</span>
                                    <span class="label-char" style="--index: 7">y</span>
                                    </label>
                                </div>
                                <br>
                                <div class="wave-group">
                                    <input required="" type="text" class="input" name="payment_method" required>
                                    <span class="bar"></span>
                                    <label class="label">
                                    <span class="label-char" style="--index: 0">P</span>
                                    <span class="label-char" style="--index: 1">a</span>
                                    <span class="label-char" style="--index: 2">y</span>
                                    <span class="label-char" style="--index: 3">M</span>
                                    <span class="label-char" style="--index: 4">e</span>
                                    <span class="label-char" style="--index: 5">t</span>
                                    <span class="label-char" style="--index: 6">h</span>
                                    <span class="label-char" style="--index: 7">o</span>
                                    <span class="label-char" style="--index: 8">d</span>
                                    </label>
                                </div>
                                <br>
                                <select name="id_product" id="" class="custom-select">
                                    <option value="" >Select Product</option>
                                    @foreach ($buy as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <br>
                                <select name="id_customer" id="" class="custom-select">
                                    <option value="" >Select Customer</option>
                                    @foreach ($buy as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <center><button class="button" type="submit"  value="Submit"> Submit
                                </button>
                                </button></center>
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

        $('.disableBc').on('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Are you sure you want to delete this branch?',
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
                        'The branch has been deleted.',
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