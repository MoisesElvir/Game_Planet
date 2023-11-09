@extends('template')

@section('content')
<h1>Brand Registration</h1>
<br>
<img class="">
<div class="containers">
    <form id="resgistrationForm" action="{{ route('addBrand') }}" method="POST">
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
        <br>
        <center><button class="button" type="submit"  value="Submit"> Submit
        </button>
        </button></center>
    </form>
</div>
@endsection
