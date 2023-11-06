@extends('template')

@section('content')
    <h1 class="text-center text-success">Gestión de Suppliers</h1>
    <a href="{{ url('/Customer_form') }}" class="btn btn-primary mb-2" ><i class='bx bxs-user-plus'></i></a>


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
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editSupplierModal{{ $item->id }}"><i class="bx bxs-edit"></i></button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSupplierModal{{ $item->id }}"><i class="bx bxs-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach ($supplier as $item)
        <!-- Modal to edit supplier  -->
        <div class="modal fade" id="editSupplierModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editSupplierModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editSupplierModalLabel{{ $item->id }}">Editar Supplier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('updateSupplier', $item->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="editSupplierName{{ $item->id }}">Nombre:</label>
                                <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                            </div>
                            <div class="form-group">
                                <label for="editSupplierAddress{{ $item->id }}">Dirección:</label>
                                <input type="text" name="address" class="form-control" value="{{ $item->address }}">
                            </div>
                            <div class="form-group">
                                <label for="editSupplierPhone{{ $item->id }}">Teléfono:</label>
                                <input type="text" name="phone" class="form-control" value="{{ $item->phone }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal to delete supplier -->
        <div class="modal fade" id="deleteSupplierModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteSupplierModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteSupplierModalLabel{{ $item->id }}">Eliminar Supplier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Estás seguro de que deseas eliminar este proveedor ({{ $item->name }})?</p>
                        <form action="{{ route('deleteSupplier', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection