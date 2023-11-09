@extends('template')

@section('content')
    <h1>Create a Buy</h1>

    
    <div class="containers">
        <form id="registrationForm" action="{{ route('saveBill') }}" method="POST">
            @csrf
            <br>
            <div class="wave-group">
                <input required="" type="text" class="input" name="bill_number" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">B</span>
                <span class="label-char" style="--index: 1">i</span>
                <span class="label-char" style="--index: 2">l</span>
                <span class="label-char" style="--index: 3">l</span>
                <span class="label-char" style="--index: 4">N</span>
                <span class="label-char" style="--index: 5">u</span>
                <span class="label-char" style="--index: 6">m</span>
                <span class="label-char" style="--index: 7">b</span>
                <span class="label-char" style="--index: 7">e</span>
                <span class="label-char" style="--index: 7">r</span>
                </label>
            </div>
            <br>
            <div class="wave-group">
                <input required="" type="date" class="input" name="Bill_Date" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">D</span>
                <span class="label-char" style="--index: 1">a</span>
                <span class="label-char" style="--index: 2">t</span>
                <span class="label-char" style="--index: 3">e</span>
                
                </label>
            </div>
            <br>
            <div class="wave-group">
                <select name="id_buy" id="" class="form-control">
                    @foreach ($buy as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="wave-group">
                <select name="id_employee" id="" class="form-control">
                    @foreach ($employee as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
            <br>
            <center><button class="button" type="submit"  value="Submit"> Submit
            </button>
            </button></center>
        </form>
    </div>
@endsection
