@extends('layout.basic')

@section('title', 'Sign In')

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
                            <h4 class="card-title">Sign in</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" name="myform" class="signin_validate" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" placeholder="hello@example.com" name="email">
                                    @error('email')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
                                <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                    <div class="form-group mb-0">
                                        <label class="toggle">
                                            <input class="toggle-checkbox" type="checkbox">
                                            <span class="toggle-switch"></span>
                                            <span class="toggle-label">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="form-group mb-0">
                                        <a href="/forgot-password">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign
                                        up</a></p>
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
@endpush
