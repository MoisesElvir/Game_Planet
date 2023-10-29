@extends('template');
@section('content')
    <form action="" class="container form">
        <h1 class="text-center">Add Product</h1>
        <label for="" class="form-label">Product Name:</label>
        <input type="text" class="form-control" name="name">

        <label for="" class="form-label">Description:</label>
        <input type="textarea" class="form-control" name="description">

        <label for="" class="form-label">Price:</label>
        <input type="number" class="form-control" name="price">

        <div class="row">
            <div class="col-md-6">
                <select name="brand" id="" class="form-control">
                    @foreach ($brand as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <select name="categorie" id="" class="form-control">
                    @foreach ($categorie as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
@endsection