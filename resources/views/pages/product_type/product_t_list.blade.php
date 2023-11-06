@extends('template')

@section('content')
    <h1 class="text-center text-success">Gestión de Tipos de Productos</h1>
    <a href="#" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addProductTypeModal">
        <i class='bx bxs-user-plus'></i>
    </a>

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
                <div class="modal fade" id="editProductTypeModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editProductTypeModalLabel{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editProductTypeModalLabel{{ $item->id }}">Edit Categorie</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('updateCategorie', $item->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="editProductTypeName{{ $item->id }}">Name:</label>
                                        <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="addProductTypeModal" tabindex="-1" role="dialog" aria-labelledby="addProductTypeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductTypeModalLabel">Add Categorie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('saveCategorie') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="productTypeName">Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection