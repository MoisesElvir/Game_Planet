@extends('template')

@section('content')
    <h1 class="h1">Management Of Suppliers</h1>
    <br>
    <button class="create" onclick="window.location.href = '{{ url('/Supplier_form') }}'">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
            </svg> Add
        </span>
    </button>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($supplier as $item)
                <tr>
                    <td>{{ $item->name }} </td>
                    <td>{{ $item->address }} </td>
                    <td>{{ $item->phone }} </td>
                    <td> 
                        <button class="edit" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                            <span class="transition"></span>
                            <span class="gradient"></span>
                            <span class="label">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="currentColor" fillRule="evenodd" d="M17.586 2a2 2 0 0 1 2.828 0L22 3.586a2 2 0 0 1 0 2.828L20.414 8L16 3.586L17.586 2zm-3 3l-5 5A2 2 0 0 0 9 11.414V13a2 2 0 0 0 2 2h1.586A2 2 0 0 0 14 14.414l5-5L14.586 5z"
                                            clipRule="evenodd"></path>
                                        <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                            d="M6 14H5a2 2 0 0 0-2 2v0a2 2 0 0 0 2 2h14a2 2 0 0 1 2 2v0a2 2 0 0 1-2 2h-4"></path>
                                    </g>
                                </svg>
                            </span>
                        </button>
                        <br>
                        <br>
                        
                        <form class="disableCx" action="{{ route('deleteSupplier', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <span class="transition"></span>
                                <span class="gradient"></span>
                                <span class="label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7Zm2-4h2V8H9v9Zm4 0h2V8h-2v9Z">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="custom-modal" id="exampleModal{{ $item->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit info</h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" id="closeModal"></button>
                            </div>

                            <form action="{{ route('updateSupplier', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="modal-body">
                                    <h2>Edit Supplier
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path fill="currentColor" fillRule="evenodd"
                                                    d="M17.586 2a2 2 0 0 1 2.828 0L22 3.586a2 2 0 0 1 0 2.828L20.414 8L16 3.586L17.586 2zm-3 3l-5 5A2 2 0 0 0 9 11.414V13a2 2 0 0 0 2 2h1.586A2 2 0 0 0 14 14.414l5-5L14.586 5z"
                                                    clipRule="evenodd"></path>
                                                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                                                    strokeWidth="2"
                                                    d="M6 14H5a2 2 0 0 0-2 2v0a2 2 0 0 0 2 2h14a2 2 0 0 1 2 2v0a2 2 0 0 1-2 2h-4">
                                                </path>
                                            </g>
                                        </svg>
                                    </h2>
                                    <br>
                                    <div class="wave-group">
                                        <input required="" type="text" class="input" name="name" value="{{ $item->name }}"
                                            required>
                                        <span class="bar"></span>
                                        <label class="label">
                                            <span class="label-char" style="--index: 0">N</span>
                                            <span class="label-char" style="--index: 1">a</span>
                                            <span class="label-char" style="--index: 2">m</span>
                                            <span class="label-char" style="--index: 3">e</span>
                                        </label>
                                    </div>
                                    <br>
                                    <div class="wave-group">
                                        <input required="" type="text" class="input" name="address" value="{{ $item->address }}"
                                            required>
                                        <span class="bar"></span>
                                        <label class="label">
                                            <span class="label-char" style="--index: 0">A</span>
                                            <span class="label-char" style="--index: 1">d</span>
                                            <span class="label-char" style="--index: 2">d</span>
                                            <span class="label-char" style="--index: 3">r</span>
                                            <span class="label-char" style="--index: 4">e</span>
                                            <span class="label-char" style="--index: 5">s</span>
                                            <span class="label-char" style="--index: 6">s</span>
                                        </label>
                                    </div>
                                    <br>
                                    <div class="wave-group">
                                        <input required="" type="text" class="input" name="phone" value="{{ $item->phone }}"
                                            required>
                                        <span class="bar"></span>
                                        <label class="label">
                                            <span class="label-char" style="--index: 0">P</span>
                                            <span class="label-char" style="--index: 1">h</span>
                                            <span class="label-char" style="--index: 2">o</span>
                                            <span class="label-char" style="--index: 3">n</span>
                                            <span class="label-char" style="--index: 3">e</span>
                                        </label>
                                    </div>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" strokeLinecap="round" strokeWidth="1.5">
                                                <path
                                                    d="M2 4a2 2 0 0 1 2-2h1.829a1 1 0 0 1 .658.293L13 10.585l3.708-3.707a1 1 0 0 1 1.414 0L21.586 9.586A1 1 0 0 1 22 10a1 1 0 0 1-1 1a1 1 0 0 1-.707-.293L13 3.415l-4.293 4.293a1 1 0 0 1-1.414 0L3.172 5.293A1 1 0 0 1 2.514 5.586A1 1 0 0 1 2 5H1a1 1 0 0 1-1-1a1 1 0 0 1 .293-.707A1 1 0 0 1 2 3z">
                                                </path>
                                                <path
                                                    d="M13 2v10a2 2 0 0 0 2 2h8M2 5l20 0M6 16l-4-4a1 1 0 0 1 0-1.414a1 1 0 0 1 1.414 0L6 14.586l7.293-7.293a1 1 0 0 1 1.414 0L21.586 17.586a1 1 0 0 1-1.414 0L13 11.415l-6.293 6.293a1 1 0 0 1-1.414 0L3 16.586a1 1 0 0 1 0-1.414a1 1 0 0 1 1.414 0l4 4">
                                                </path>
                                            </g>
                                        </svg>
                                    </button>
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
                title: 'Are you sure you want to delete this supplier?',
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
                        'The supplier has been deleted.',
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
