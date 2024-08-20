@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="login-container">
                    <h2 class="text-center">Sign up</h2 style="border-bottom:  1px sold#333;padding-bottom:15px">
                        <div class="login-box d-flex">
                            <img src="https://via.placeholder.com/400x200?text=Welcome+again!+We're+happy+to+have+you+in+our+community" alt="Welcome Image " style="border-right:  1px soft#333;padding-right:15px">

                    <form method="post" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
    <label for="firstName" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
    <div class="col-md-6">
        <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>
        @error('firstName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
    <div class="col-md-6">
        <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
        @error('lastName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>
    <div class="col-md-6">
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>

<div class="row mb-3">
    <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
    <div class="col-md-6">
        <select id="gender" name="gender" class="form-select" required>
            <option value="">{{ __('Choose your gender') }}</option>
            <option value="Male">{{ __('Male') }}</option>
            <option value="Female">{{ __('Female') }}</option>
        </select>
        @error('gender')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="cohort" class="col-md-4 col-form-label text-md-end">{{ __('Cohort') }}</label>
    <div class="col-md-6">
        <select id="cohort" name="cohort" class="form-select" required>
            <option value="">{{ __('Choose your cohort') }}</option>
            <option value="2021">{{ __('2021') }}</option>
            <option value="2022">{{ __('2022') }}</option>
            <option value="2023">{{ __('2023') }}</option>
        </select>
        @error('cohort')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="country" class="col-md-4 col-form-label text-md-end">{{ __('Country of Origin') }}</label>
    <div class="col-md-6">
        <select id="country" name="country" class="form-select" required>
            <option value="">{{ __('Choose your country') }}</option>
            <option value="Kenya">{{ __('Kenya') }}</option>
            <option value="Uganda">{{ __('Uganda') }}</option>
            <option value="Tanzania">{{ __('Tanzania') }}</option>
        </select>
        @error('country')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="residence" class="col-md-4 col-form-label text-md-end">{{ __('Residence') }}</label>
    <div class="col-md-6">
        <input id="residence" type="text" class="form-control @error('residence') is-invalid @enderror" name="residence" value="{{ old('residence') }}" required autocomplete="residence">
        @error('residence')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection