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
                    <td>{{ $item->supplier }} </td>
                    <td>
                        <img src="{{ $item->image }}" alt="{{ $item->name }}" style="max-width: 100px;">
                    </td>
                    <td>{{ $item->productType }} </td>
                    <td>{{ $item->brand}} </td>
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