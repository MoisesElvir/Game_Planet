@extends('template')

@section('content')
    <h1 class="text-center text-success">Gestión de Brands</h1>
    <a href="#" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addBrandModal">
        <i class='bx bxs-user-plus'></i> Agregar Brand
    </a>

    <table class="table">
        <thead>
            <th>Name</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($brand as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editBrandModal{{ $item->id }}"><i class="bx bxs-edit"></i></button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteBrandModal{{ $item->id }}"><i class="bx bxs-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal para agregar Brand -->
    <div class="modal fade" id="addBrandModal" tabindex="-1" role="dialog" aria-labelledby="addBrandModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBrandModalLabel">Agregar Brand</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addBrand') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="brandName">Nombre:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach ($brand as $item)
        <!-- Modal para editar Brand -->
        <div class="modal fade" id="editBrandModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editBrandModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editBrandModalLabel{{ $item->id }}">Editar Brand</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('updateBrand', $item->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="editBrandName{{ $item->id }}">Nombre:</label>
                                <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para eliminar Brand -->
        <div class="modal fade" id="deleteBrandModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteBrandModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteBrandModalLabel{{ $item->id }}">Eliminar Brand</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Estás seguro de que deseas eliminar esta marca ({{ $item->name }})?</p>
                        <form action="{{ route('deleteBrand', $item->id) }}" method="post">
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
