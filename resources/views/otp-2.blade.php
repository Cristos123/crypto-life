@extends('layout.app-dashboard')

@section('title', 'OTP 2')

@section('content')

    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="mini-logo text-center my-5">
                        <a href="index.html"><img src="./images/logo.png" alt=""></a>
                    </div>
                    <div class="auth-form card">
                        <div class="card-body">
                            <a class="page-back text-muted" href="otp-1.html"><span><i class="fa fa-angle-left"></i></span>
                                Back</a>
                            <h3 class="text-center">OTP Verification</h3>
                            <p class="text-center mb-5">We will send one time code on this number</p>
                            <form action="index.html">
                                <div class="form-group">
                                    <label>Your OTP Code</label>
                                    <input type="text" class="form-control text-center font-weight-bold" value="11 22 33">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Verify</button>
                                </div>
                            </form>
                            <div class="info mt-3">
                                <p class="text-muted">You dont recommended to save password to browsers!</p>
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
@endpush
