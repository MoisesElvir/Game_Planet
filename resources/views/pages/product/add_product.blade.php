@extends('template')

@section('content')
    <form action="" class="form">
        <h1 class="text-center">ADD PRODUCT</h1>
        <label for="name">Product Name</label>
        <input type="text" class="form-control" name="name">
        <label for="description">Product Description</label>
        <input type="text" class="form-control" name="description">

        <select name="brand" id="">
            @foreach ($collection as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </form>
@endsection