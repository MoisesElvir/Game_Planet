@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Imagenes</h1>
    <a href="#" class="btn btn-primary mb-2" ><i class='bx bxs-user-plus'></i></a>

    <table class="table">
        <thead>
            <th>Url</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($image as $item)
                <tr>
                    <td>{{ $item->url }} </td>
                    <td> 
                        <button class="edit" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                            <span class="transition"></span>
                            <span class="gradient"></span>
                            <span class="label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><path fill="currentColor" fillRule="evenodd" d="M17.586 2a2 2 0 0 1 2.828 0L22 3.586a2 2 0 0 1 0 2.828L20.414 8L16 3.586L17.586 2zm-3 3l-5 5A2 2 0 0 0 9 11.414V13a2 2 0 0 0 2 2h1.586A2 2 0 0 0 14 14.414l5-5L14.586 5z" clipRule="evenodd"/><path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 14H5a2 2 0 0 0-2 2v0a2 2 0 0 0 2 2h14a2 2 0 0 1 2 2v0a2 2 0 0 1-2 2h-4"/></g></svg></span>
                        </button>
                        <br>
                        <br>
                        <form class="disableCx" action="{{ route('customerDisabled', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit">
                                <span class="transition"></span>
                                <span class="gradient"></span>
                                <span class="label"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7Zm2-4h2V8H9v9Zm4 0h2V8h-2v9Z"/></svg></span>
                            </button>
                        </form>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
@endsection