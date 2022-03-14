@extends('layout.basic')

@section('title', 'Sign-up')

@section('content')

    <div class="authincation">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="mini-logo text-center my-5">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                    </div>
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Sign up your account</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" name="myform" class="signup_validate">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                                        value="{{ old('fullname') }}" placeholder="Full Name" name="fullname">
                                    @error('fullname')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" placeholder="Your Email" name="email">
                                    @error('email')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <label class="mr-sm-2">Country</label>
                                    <select class="form-control @error('country') is-invalid @enderror " id="country"
                                        name="country">
                                        <option>Select</option>
                                        @forelse ($countries as $country)
                                            <option @if (old('country') == $country['country_name']) selected @endif
                                                value="{{ $country['country_name'] . '/' . $country['country_phone_code'] }}">
                                                {{ $country['country_name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <br>

                                <div class="form-group">
                                    <label class="mr-sm-2">State <i class="fa fa-spinner fa-spin" id="spinner"></i>
                                    </label>
                                    <select class="form-control @error('state') is-invalid @enderror"
                                        value="{{ old('fullname') }}" id="state-list" name="state">
                                        <option value="">Select</option>
                                    </select>
                                    @error('state')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="row ">
                                    <div class=" form-group col-3 col-xl-3 col-md-3">

                                        <label> Code</label>
                                        <input type="text" id="code" readonly
                                            class="form-control @error('code') is-invalid @enderror"
                                            value="{{ old('code') }}" placeholder="+122" name="code">

                                        @error('code')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="form-group col-9 col-xl-9 col-md-9">

                                        <label>Mobile Number</label>
                                        <input type="tel" class="form-control @error('mobilenumber') is-invalid @enderror"
                                            value="{{ old('mobilenumber') }}" placeholder="Enter your Mobile Number"
                                            name="mobilenumber">
                                        @error('mobilenumber')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password" name="password">
                                    @error('password')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm Password" name="password_confirmation">
                                    @error('password_confirmation')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-success btn-block" id="sign-up-btn">Sign
                                        up</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign
                                        in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()


@push('styles')
    <style>
        .nice-select .list {
            max-height: 200px;
            /* or whatever the height you want */
            overflow-y: scroll !important;
        }

    </style>
@endpush

@push('scripts')
    <script src="{{ asset('assets/vendor/validator/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/validator/validator-init.js') }}"></script>
    <script>
        let countries = @json($countries)

        function updateCountryCode(code) {
            $('#code').val(`+${code}`)
        }

        function enableSubmit(enable) {
            let registerButton = $('#sign-up-btn');

            if (!enable) registerButton.attr('disabled', true)
            else registerButton.removeAttr('disabled')
        }

        function showLoader(show) {
            let spinner = $('#spinner');

            if (show) spinner.show()
            else spinner.hide()
        }

        function setState(states) {
            let stateSelectInput = $('#state-list')

            // Clear the state
            stateSelectInput.empty()

            // Update the state of the select
            stateSelectInput.niceSelect('update');

            let stateOptions = "";
            states.forEach((state) => {
                stateSelectInput.append(`<option value="${state.state_name}">${state.state_name}</option>`)
            });

            // Update the state of the select
            stateSelectInput.niceSelect('update');

        }

        $(document).ready(function() {
            // 0.0 Hide the loader from the start
            showLoader(false);
            enableSubmit(false);

            $('#country').change(function() {

                // 0. Get the country name from the select
                let selectedOption = $('#country').val();

                // 1. Explode the selectedOption
                let [countryName, countryPhoneCode] = selectedOption.split("/");

                // 2. Update the country code to the respective input
                updateCountryCode(countryPhoneCode);

                // 3. Show spin loader
                showLoader(true);

                // 4. Fetch states for the country and update the states select input
                $.get(`/get-state/${countryName}`, function(data, textStatus, jqXHR) {
                    setState(data);
                    showLoader(false);
                    enableSubmit(true);
                }, );

            });

        });
    </script>
@endpush
