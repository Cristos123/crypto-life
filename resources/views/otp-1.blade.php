@extends('layout.app-dashboard')

@section('title', 'OTP 1')

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
                            <a class="page-back text-muted" href="signin.html">
                                <span><i class="fa fa-angle-left"></i></span> Back</a>
                            <h3 class="text-center">OTP Verification</h3>
                            <p class="text-center mb-5">We will send one time code on this number</p>
                            <form action="otp-2.html">
                                <div class="form-group">
                                    <label>Your phone number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text pl-4 pr-4"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" value="+1 12365480">
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-success btn-block">Send</button>
                                </div>
                            </form>
                            <div class="new-account mt-3 d-flex justify-content-between">
                                <p>Don't get code? <a class="text-primary" href="otp-1.html">Resend</a></p>
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
