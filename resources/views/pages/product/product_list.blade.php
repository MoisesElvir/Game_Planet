@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Product</h1>
    <a href="{{ route('showAddProd')}}" class="btn btn-primary mb-2" ><i class='bx bxs-user-plus'></i></a>

    <table class="table">
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Supplier</th>
            <th>Image</th>
            <th>Product Type</th>
            <th>Brand</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <td>{{ $item->name }} </td>
                    <td>{{ $item->description }} </td>
                    <td>{{ $item->price }} </td>
                    <td>{{ $item->supplier_id }} </td>
                    <td>{{ $item->image_id }} </td>
                    <td>{{ $item->product_type_id }} </td>
                    <td>{{ $item->brand_id }} </td>
                    <td> 
                        <button class="btn btn-warning"><i class="bx bxs-edit"></i></button>
                    </td>
                    <td> 
                        <form action="{{route('deleteP' , $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="bx bxs-trash"></i></button>
                        </form>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>
@endsection