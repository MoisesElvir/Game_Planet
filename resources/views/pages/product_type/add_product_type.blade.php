@extends('template')

@section('content')
<h1>Product Type Registration</h1>
<br>
<img class="mario">
<div class="containers">
    <form id="PTresgistrationForm" action="{{ route('saveCategorie') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="productTypeName">Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection