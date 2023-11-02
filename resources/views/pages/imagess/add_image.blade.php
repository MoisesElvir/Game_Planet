@extends ('template')

@section('content')
    <h1 class="text-center">Registro De Empleados</h1>

    <form action="" action="post">

        <div class="inputbox">
            <input required="required" type="text" name="url">
            <span>Url Name</span>
            <i></i>
        </div>
        <input type="submit" class="btn btn-dark mt-4" value="Guardar Datos">
        
    </form>

@endsection