@extends('template')

@section('content')
    <div class="containers">
        <form action="{{ url('/addSupplier')}}" method="POST" class="form">
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
            <div class="wave-group">
                <input required="" type="text" class="input" name="address" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">A</span>
                <span class="label-char" style="--index: 1">d</span>
                <span class="label-char" style="--index: 2">d</span>
                <span class="label-char" style="--index: 3">r</span>
                <span class="label-char" style="--index: 4">r</span>
                <span class="label-char" style="--index: 5">e</span>
                <span class="label-char" style="--index: 6">s</span>
                <span class="label-char" style="--index: 7">s</span>
                </label>
            </div>
            <br>
            <div class="wave-group">
                <input required="" type="text" class="input" name="phone" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">P</span>
                <span class="label-char" style="--index: 1">h</span>
                <span class="label-char" style="--index: 2">o</span>
                <span class="label-char" style="--index: 3">n</span>
                <span class="label-char" style="--index: 3">e</span>
                </label>
            </div>
            <br>
            <br>
            <center><button class="button" type="submit"  value="Submit"> Submit
            </button>
            </button></center>
            <!--<input type="submit" class="btn btn-primary" value="Add">-->
        </form>
    </div>
@endsection