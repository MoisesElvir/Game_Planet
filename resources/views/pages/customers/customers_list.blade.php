@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Customers</h1>
    <a href="#" class="btn btn-primary mb-2" ><i class='bx bxs-user-plus'></i></a>

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
                        <button class="btn btn-warning"><i class="bx bxs-edit"></i></button>
                    </td>
                    <td> 
                        <button class="btn btn-danger"><i class="bx bxs-trash"></i></button>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
@endsection