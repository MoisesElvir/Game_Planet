@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Supplier</h1>
    
    <button class="create" onclick="window.location.href = '{{ url('/Product_Type') }}'">
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Add
        </span>
    </button>

    <table class="table" >
        <thead id="superior">
            <th>Bill Number</th>
            <th>Bill Date</th>
            <th>total</th>
            <th>Buy</th>
            <th>Employee</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($bill as $item)
                <tr>
                    <td>{{ $item->bill_number }} </td>
                    <td>{{ $item->Bill_Date }} </td>
                    <td>{{ $item->total }} </td>
                    <td>{{ $item->id_buy }} </td>
                    <td>{{ $item->id_employee }} </td>
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