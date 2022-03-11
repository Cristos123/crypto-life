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
                            @if ($errors->any())
                                {{ implode('', $errors->all($message)) }}
                            @endif
                            <form method="POST" action="{{ route('register') }}" name="myform" class="signup_validate">
                                @csrf
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
                                    <select class="form-control " id="state-list" name="state">
                                        <option value="">Select</option>


                                    </select>
                                </div>


                                <div class="row ">
                                    <div class=" form-group col-sm-4 col-xl-4 col-md-">

                                        <label> Code</label>
                                        <input type="text" id="code" readonly value="" class="form-control"
                                            placeholder="0810227485" name="code">


                                    </div>
                                    <div class="form-group col-sm-8 col-xl-8 col-md-8">

                                        <label>Mobile Number</label>
                                        <input type="tel" class="form-control" placeholder="0810227485"
                                            name="mobilenumber">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        name="password_confirmation">
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
    <?php $comments = 'php variables'; ?>
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


        function displayCountryCode() {



            let country = document.getElementById("country").value
            let code = document.getElementById("code").value
            if (country != 'select') {
                code
            } else {

            }

        }

        function getState(states) {

            let select = document.getElementById("state-list");

            if (select.style.display = "none") {
                for (const i in states) {
                    select.add(new Option(states[i].state_name, states[i].state_name))
                }
                document.getElementById("state-list").style.display = "block";
                // document.getElementById("state-list").classList.remove('nice-select')

            } else {
                document.getElementById('state-list').style.display = "none";

            }


        }
        let country;
        @php
        
        echo 'country = ' . json_encode($countries) . ';';
        @endphp
        console.log(country);
        $(document).ready(function() {


            $('#country').change(function() {
                var options = $('#country').val();

                $.get(`/get-state/${options}`, function(data, textStatus, jqXHR) {

                    getState(data)
                });
                let countryName = $('#country').val()
                $(country).each(function(index) {
                    if (country[index].country_name == countryName) {
                        $('#code').val(country[index].country_phone_code)
                        return
                    }
                })

            });




        });
    </script>
@endpush
