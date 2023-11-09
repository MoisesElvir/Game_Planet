@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Buy</h1>
    <a href="#" class="btn btn-primary mb-2" ><i class='bx bxs-user-plus'></i></a>
    <button class="create" onclick="window.location.href = '{{ url('/Supplier_form') }}'">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
            </svg> Add
        </span>
    </button>

    <table class="table">
        <thead id="superior">
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
                        <!--<button class="btn btn-warning"><i class="bx bxs-edit"></i></button>-->
                    </td>
                    <td> 
                        <!--<button class="btn btn-danger"><i class="bx bxs-trash"></i></button>-->
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
@endsection