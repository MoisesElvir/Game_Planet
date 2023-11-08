@extends('template')

@section('content')
    <h1>Create a Branch</h1>

    
    <div class="containers">
        <form id="registrationForm" action="{{ route('saveBranch') }}" method="POST">
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
                <input required="" type="text" class="input" name="address" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">A</span>
                <span class="label-char" style="--index: 1">d</span>
                <span class="label-char" style="--index: 2">d</span>
                <span class="label-char" style="--index: 3">r</span>
                <span class="label-char" style="--index: 4">e</span>
                <span class="label-char" style="--index: 5">s</span>
                <span class="label-char" style="--index: 6">s</span>
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
            <div class="wave-group">
                <select name="id_product" id="" class="form-control">
                    @foreach ($product as $item)
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

@section('scripts')

    <script>
        $('#registrationForm').on('submit', function(e) {

            e.preventDefault();
                Swal.fire({
                    icon: 'success',
                    title: 'The branch has been successfully created',
                    confirmButtonColor: '#A5DC86',
                    confirmButtonText: 'Ok',
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                })
        })
    </script>
    
@endsection