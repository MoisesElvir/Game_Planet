@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Buy</h1>
    <a href="#" class="btn btn-primary mb-2" ><i class='bx bxs-user-plus'></i></a>

    <table class="table">
        <thead>
            <th>Quantity</th>
            <th>Payment Method</th>
            <th>Customer</th>
            <th>Product</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($buy as $item)
                <tr>
                    <td>{{ $item->quantity }} </td>
                    <td>{{ $item->payment_method }} </td>
                    <td>{{ $item->id_customer }} </td>
                    <td>{{ $item->id_product }} </td>
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