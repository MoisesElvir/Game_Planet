@extends('template')

@section('content')
    <form action="{{ route('addP')}}" method="POST" class="form">
        @csrf
        <h1 class="text-center">ADD PRODUCT</h1>
        <label for="name">Product Name</label>
        <input type="text" class="form-control" name="name">
        <label for="description">Product Description</label>
        <input type="text" class="form-control" name="description">
        <label for="price">Price</label>
        <input type="double" class="form-control" name="price">
        <label for="image">Image</label>
        <input type="text" class="form-control" name="image">

        <label for="supplier" class="form-control">Select Supplier</label>
        <select name="supplier" id="" class="form-control">
            @foreach ($supplier as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>

        <div class="row container">
            <div class="col-md-6">
                <label for="brand">Select Brand</label>
                <select name="brand" id="" class="form-control">
                    @foreach ($brand as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="categporie">Select Categorie</label>
                <select name="categorie" id="" class="form-control">
                    @foreach ($categorie as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <input type="submit" class="btn btn-primary mt-4" value="Add Product">
        
    </form>
@endsection