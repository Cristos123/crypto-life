@extends('layout.app-dashboard')

@section('title', 'Sign-up')

@section('content')

    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="mini-logo text-center my-5">
                        <a href="index.html"><img src="./images/logo.png" alt=""></a>
                    </div>
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Sign up your account</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" name="myform" class="signup_validate">
                                <div class="form-group">
                                    <label>fullname</label>
                                    <input type="text" class="form-control" placeholder="fullname" name="fullname">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                                </div>

                                <div class="form-group ">
                                    <label class="mr-sm-2">Country</label>
                                    <select class="form-control " id="country" name="country">
                                        <option value="">Select</option>
                                        @forelse ($countries as $country)
                                            <option value="{{ $country['country_name'] }}">
                                                {{ $country['country_name'] }}</option>
                                        @empty
                                            <option value="">Select</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                        @endforelse

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="mr-sm-2">State</label>
                                    <select class="form-control" id="state" name="state">


                                    </select>
                                </div>


                                <div class="row ">
                                    <div class=" form-group col-xl-3 col-md-3">

                                        <label>Country Code</label>
                                        <select class="form-control" name="code">
                                            <option value="">Select</option>
                                            <option value="Afghanistan">Afghanistan</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-xl-8 col-md-8">

                                        <label>Mobile Number</label>
                                        <input type="tel" class="form-control" placeholder="0810227485"
                                            name="memailobilenumber">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        name="confirm_password">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-success btn-block">Sign up</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>Already have an account? <a class="text-primary" href="signin.html">Sign in</a>
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
@endpush

@push('scripts')
    <script src="{{ asset('assets/vendor/validator/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/validator/validator-init.js') }}"></script>
    <script>
        // const selects = document.getElementById('country')
        // selects.addEventListener('change', () => getState())

        // function getState() {
        //     const options = selects.options[selects.selectedIndex].value
        //     console.log({
        //         options
        //     });

        //     const fetchPromise = fetch(`/get-state/${options}`);

        //     fetchPromise
        //         .then(response => {
        //             if (!response.ok) {
        //                 throw new Error(`HTTP error: ${response.status}`);
        //             }
        //             return response.json();
        //         })
        //         .then(json => {
        //             console.log(json);
        //         })
        //         .catch(error => {
        //             console.error(`Could not get products: ${error}`);
        //         });
        //     // getState();
        // }


        $(document).ready(function() {

            $('#country').change(function() {
                var options = $('#country').val();
                console.log({
                    options
                });
                $.get(`/get-state/${options}`, function(data, textStatus, jqXHR) {
                    console.log({
                        data,
                        textStatus
                    });
                    var optionsState = '<option value="null">Select State</option>'


                    data.forEach(state => {
                        optionsState = ' <option value=\'' + JSON.stringify(state) + '\'>' +
                            state.state_name + '</option>'
                    });
                    $('#state').appendTo(optionsState)

                    console.log({
                        optionsState
                    });
                });

            });

        });
    </script>
@endpush
