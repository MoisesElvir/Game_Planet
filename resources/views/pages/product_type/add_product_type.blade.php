@extends('template')

@section('content')
<h1>Product Type Registration</h1>
<br>
<img class="mario">
<div class="containers">
    <form id="PTresgistrationForm" action="{{ route('saveCategorie') }}" method="POST">
        @csrf
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
        <center><button class="button" type="submit"  value="Submit"> Submit
            </button>
    </form>
</div>
@endsection