@extends('template')

@section('content')
    <h1 class="text-center text-success h1" >Gestion de Employees</h1>
    <br>
    <button class="create" onclick="window.location.href = '{{ url('/Customer_form') }}'">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Add
        </span>
    </button>
    <table class="table">
        <thead id="superior">
            <th>Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Branch</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($employee as $item)
                <tr>
                    <td>{{ $item->name }} </td>
                    <td>{{ $item->lastname }} </td>
                    <td>{{ $item->phone }} </td>
                    <td>{{ $item->gender }} </td>
                    <td>{{ $item->email }} </td>
                    <td>{{ $item->password }} </td>
                    <td>{{ $item->id_branch }} </td>
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