@extends('layout.basic')

@section('title', 'Verify KYC')

@section('content')



    <div class="verification section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-body">
                            <form action="verify-step-4.html" class="identity-upload">
                                <div class="identity-content">
                                    <span class="icon"><i class="fa fa-shield"></i></span>
                                    <h4>We are verifying your ID</h4>
                                    <p>Your identity is being verified. We will email you once your verification has
                                        completed.
                                    </p>
                                </div>

                                <div class="upload-loading text-center mb-3">
                                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <a class="text-center" href="{{ route('home') }}">Go to Dashboard</a>
                                </div>
                            </form>
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
