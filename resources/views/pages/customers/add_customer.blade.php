@extends('template')

@section('content')
    <h1>Customer Registration</h1>
    <br>
    <img class="mario">
    <div class="containers">
        <form id="registrationForm" action="{{ route('saveCustomer') }}" method="POST">
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
                <input required="" type="text" class="input" name="lastname" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">L</span>
                <span class="label-char" style="--index: 1">a</span>
                <span class="label-char" style="--index: 2">s</span>
                <span class="label-char" style="--index: 3">t</span>
                <span class="label-char" style="--index: 4">N</span>
                <span class="label-char" style="--index: 5">a</span>
                <span class="label-char" style="--index: 6">m</span>
                <span class="label-char" style="--index: 7">e</span>
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
            <div class="radio-container">
                <div class="radio-wrapper">
                  <label class="radio-button">
                    <input name="gender" id="Masculine" value="Masculine" type="radio">
                    <span class="radio-checkmark"></span>
                    <span class="radio-label">Male</span>
                  </label>
                </div>
              
                <div class="radio-wrapper">
                  <label class="radio-button">
                    <input name="gender" id="Feminine" value="Feminine" type="radio">
                    <span class="radio-checkmark"></span>
                    <span class="radio-label">Female</span>
                  </label>
                </div>
            </div>
            <br>              
            <div class="wave-group">
                <input type="text" class="input" name="email" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">E</span>
                <span class="label-char" style="--index: 1">m</span>
                <span class="label-char" style="--index: 2">a</span>
                <span class="label-char" style="--index: 3">i</span>
                <span class="label-char" style="--index: 3">l</span>
                </label>
            </div>
            <br>
            <div class="wave-group">
                <input required="" type="Password" class="input" name="password" required>
                <span class="bar"></span>
                <label class="label">
                <span class="label-char" style="--index: 0">P</span>
                <span class="label-char" style="--index: 1">a</span>
                <span class="label-char" style="--index: 2">s</span>
                <span class="label-char" style="--index: 3">s</span>
                <span class="label-char" style="--index: 3">w</span>
                <span class="label-char" style="--index: 3">o</span>
                <span class="label-char" style="--index: 3">r</span>
                <span class="label-char" style="--index: 3">d</span>

                </label>
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
                    title: 'The user has been successfully registered',
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