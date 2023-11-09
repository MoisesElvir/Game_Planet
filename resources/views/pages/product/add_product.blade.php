@extends('template')

@section('content')
<h1 class="text-center">ADD PRODUCT</h1>
<br>
<img class="">
<div class="containers">
    <form action="{{ route('addP')}}" method="POST" class="form">
        @csrf
        <br>
        <div class="wave-group">
            <input required="" type="text" class="input" name="name" required>
            <span class="bar"></span>
            <label class="label">
            <span class="label-char" style="--index: 0">N</span>
            <span class="label-char" style="--index: 1">a</span>
            <span class="label-char" style="--index: 2">m</span>
            <span class="label-char" style="--index: 3">e</span>
            </label>
        </div>     
        <br>
        <div class="wave-group">
            <input required="" type="text" class="input" name="description" required>
            <span class="bar"></span>
            <label class="label">
            <span class="label-char" style="--index: 0">D</span>
            <span class="label-char" style="--index: 1">e</span>
            <span class="label-char" style="--index: 2">s</span>
            <span class="label-char" style="--index: 3">c</span>
            <span class="label-char" style="--index: 4">r</span>
            <span class="label-char" style="--index: 5">i</span>
            <span class="label-char" style="--index: 6">p</span>
            <span class="label-char" style="--index: 7">t</span>
            <span class="label-char" style="--index: 8">i</span>
            <span class="label-char" style="--index: 9">o</span>
            <span class="label-char" style="--index: 10">n</span>
            </label>
        </div> 
        <br>
        <div class="wave-group">
            <input required="" type="text" class="input" name="price" required>
            <span class="bar"></span>
            <label class="label">
            <span class="label-char" style="--index: 0">P</span>
            <span class="label-char" style="--index: 1">r</span>
            <span class="label-char" style="--index: 2">i</span>
            <span class="label-char" style="--index: 3">c</span>
            <span class="label-char" style="--index: 4">e</span>
            </label>
        </div>  
        <br>
        <div class="wave-group">
            <input required="" type="text" class="input" name="image" required>
            <span class="bar"></span>
            <label class="label">
            <span class="label-char" style="--index: 0">I</span>
            <span class="label-char" style="--index: 1">m</span>
            <span class="label-char" style="--index: 2">a</span>
            <span class="label-char" style="--index: 3">g</span>
            <span class="label-char" style="--index: 4">e</span>
            </label>
        </div>
        <br>
        <br>
        <select name="supplier" id="" class="custom-select">
            <option value="" >Select Supplier</option>
            @foreach ($supplier as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <select name="supplier" id="" class="custom-select">
            <option value="" >Select Brand</option>
            @foreach ($brand as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <select name="supplier" id="" class="custom-select">
            <option value="" >Select Categorie</option>
            @foreach ($categorie as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input type="submit" class="btn btn-primary mt-4" value="Add Product">
        
    </form>
</div>
@endsection