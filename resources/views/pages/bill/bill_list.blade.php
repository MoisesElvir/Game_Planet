@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Supplier</h1>
    <a href="#" class="btn btn-primary mb-2" ><i class='bx bxs-user-plus'></i></a>

    <table class="table" >
        <thead>
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