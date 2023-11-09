@extends('template')

@section('content')
    <h1 class="text-center text-success " >Gestion de Product</h1>
    <a href="{{ route('showAddProd')}}" class="btn btn-primary mb-2" ><i class='bx bxs-user-plus'></i></a>
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