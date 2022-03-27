@extends('layout.basic')

@section('title', 'Email Verification')

@section('content')

    <div class="verification">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <div class="identity-content">
                                    @if (session('status') == 'verification-link-sent')
                                        <span class="icon"><i class="fa fa-check"></i></span>
                                        <div class="alert alert-success">
                                            A new email verification link has been emailed to you!
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <h3>Verify e-mail address</h3>
                                    <p>You must verify your email address to access this page.</p>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                                @csrf
                                <button type="submit" class="btn btn-success pl-5 pr-5">Resend verification email</button>
                            </form>
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
