@extends('template')

@section('content')
    <form action="{{route('addSupplier')}}" method="POST" class="form">
        @csrf
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">

        <label for="adress">Adress</label>
        <input type="text" class="form-control" name="address">

        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone">

        <input type="submit" class="btn btn-primary" value="Add">
    </form>
@endsection