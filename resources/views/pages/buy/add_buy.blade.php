@extends('template')

@section('content')
    <h1>Create a Buy</h1>

    
    <div class="containers">
        <form id="registrationForm" action="{{ route('saveBuy') }}" method="POST">
            @csrf
            <br>
            <div class="wave-group">
                <input required="" type="text" class="input" name="quantity" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">Q</span>
                <span class="label-char" style="--index: 1">u</span>
                <span class="label-char" style="--index: 2">a</span>
                <span class="label-char" style="--index: 3">n</span>
                <span class="label-char" style="--index: 4">t</span>
                <span class="label-char" style="--index: 5">i</span>
                <span class="label-char" style="--index: 6">t</span>
                <span class="label-char" style="--index: 7">y</span>
                </label>
            </div>
            <br>
            <div class="wave-group">
                <input required="" type="text" class="input" name="payment_method" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">P</span>
                <span class="label-char" style="--index: 1">a</span>
                <span class="label-char" style="--index: 2">y</span>
                <span class="label-char" style="--index: 3">M</span>
                <span class="label-char" style="--index: 4">e</span>
                <span class="label-char" style="--index: 5">t</span>
                <span class="label-char" style="--index: 6">h</span>
                <span class="label-char" style="--index: 7">o</span>
                <span class="label-char" style="--index: 8">d</span>
                </label>
            </div>
            <br>
            <select name="supplier" id="" class="custom-select">
                <option value="" >Select Product</option>
                @foreach ($product as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <select name="supplier" id="" class="custom-select">
                <option value="" >Select Customer</option>
                @foreach ($customer as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <center><button class="button" type="submit"  value="Submit"> Submit
            </button>
            </button></center>
        </form>
    </div>
@endsection
