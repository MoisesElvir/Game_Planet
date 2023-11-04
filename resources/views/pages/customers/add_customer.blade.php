@extends('template')

@section('content')
    <a href="{{ url('/Customers_List') }}" class="btn btn-outline-secondary mb-2" ><i class='bx bxs-left-arrow'></i>Return</a>
    <h1 class="text-center">User Registration</h1>
    <p><span class="text-danger">*</span> Required fields</p>

    <form id="registrationForm" action="{{ route('saveCustomer') }}" method="POST">
        @csrf

        <label class="form-label" for="">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="name" required>

        <label class="form-label" for="">Lastname <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="lastname" required>

        <label class="form-label" for="">Phone <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="phone" required>

        <label class="form-label" for="">Gender <span class="text-danger">*</span></label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="gender" id="Masculine" value="Masculine" required>
            <label class="form-check-label" for="Masculine">
                Masculine
            </label>
        </div>

        <div class="form-check">
            <input type="radio" class="form-check-input" name="gender" id="Feminine" value="Feminine" required>
            <label class="form-check-label" for="Feminine">
                Feminine
            </label>
        </div>

        <label class="form-label" for="">Email <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="email" required>

        <label class="form-label" for="">Password <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="password" required>


        <input type="submit" class="btn btn-dark mt-4" value="Submit">
    </form>
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