@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body bg-indigo">
 

    <div class="login-container">
    <h2 class="text-center">Login</h2 style="border-bottom:  1px sold#333;padding-bottom:15px">
        <div class="login-box d-flex">
            <img src="https://via.placeholder.com/400x200?text=Welcome+again!+We're+happy+to+have+you+in+our+community" alt="Welcome Image " style="border-right:  1px soft#333;padding-right:15px">
            
            <form  method="post" action="{{ route('login') }}" >
<!-- Suggested code may be subject to a license. Learn more: ~LicenseLog:3681634908. -->
<!-- Suggested code may be subject to a license. Learn more: ~LicenseLog:998055967. -->
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email or Username</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">Please enter your email or username.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password"  class="form-control" id="password" name="password" required>
                    <div class="invalid-feedback">Please enter your password.</div>
                </div>
                <button type="submit" class="btn btn-dark w-100">Login</button>
                <div class="text-center mt-3">
                    <a href="#">Forgot your password?</a>
                </div>
                <div class="text-center mt-2">
                    Don’t you have an account? <a href="#">Sign up</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

            </div>
        </div>
    </div>
</div>
@endsection