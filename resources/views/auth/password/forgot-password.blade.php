@extends('layout.basic')

@section('title', 'Forget Password')

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
                            <h4 class="card-title">Reset password</h4>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="/forgot-password" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        placeholder="hello@example.com">
                                    @error('email')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Send password Reset
                                        Link</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                {{-- <p class="mb-1">Don't Received? </p> --}}
                                <a class="text-primary" href="{{ route('login') }}">Cancel </a>
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
