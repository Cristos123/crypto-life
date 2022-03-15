@extends('layout.admin')

@section('title', 'show KYC')

@section('content')

    <div class="card mb-3" style=";">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="" class="card-img" alt="...">
            </div>
            <div class="col-md-4">
                <img src="" class="card-img" alt="...">
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title">KYC Details</h5>
                    <p class="card-text">{{ $kyc->fullname }} </p>
                    <p class="card-text">UserID<small class="text-muted ml-2">{{ $kyc->user_id }}</small></p>
                    <p class="card-text pl-2">{{ $kyc->type }}</p>
                    <p class="card-text"> {{ $kyc->ssn }}</p>
                    <p class="card-text"> {{ $kyc->created_at }}</p>
                    <p class="card-text"> {{ $kyc->date_of_birth }}</p>
                    <p class="card-text badge badge-outline-warning"> {{ $kyc->status }}</p>
                    <a href="{{ route('admin-dashboard', $kyc) }}" class="btn btn-primary ml-3" role="button">Change
                        Status</a>
                </div>
            </div>
            {{-- <a type="button" class="btn btn-warning">Warning</a> --}}

        </div>

    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Featured
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <p class="card-text">{{ $kyc->fullname }} </p>
                <p class="card-text">UserID<small class="text-muted ml-2">{{ $kyc->user_id }}</small></p>
            </li>
            <li class="list-group-item">
                <p class="card-text pl-2">Identification Type {{ $kyc->type }}</p>
            </li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>

    {{-- <div class="card profile_card">
        <div class="card-body">
            <div class="media">
                <img class="mr-3 rounded-circle mr-0 mr-sm-3" src="{{ asset('assets/images/profile/2.png') }}" width="60"
                    height="60" alt="">
                <div class="media-body">
                    <span>Hello</span>
                    <h4 class="mb-2">{{ $kyc->fullname }}</h4>
                    <p class="mb-1"> <span><i class="fa fa-phone mr-2 text-primary"></i>UserID</span>
                        {{ $kyc->user_id }}</p>
                    <p class="mb-1"> <span><i class="fa fa-envelope mr-2 text-primary"></i></span>
                        {{ $kyc->type }}
                    </p>
                    <p class="mb-1"> <span><i class="fa fa-envelope mr-2 text-primary"></i></span>
                        {{ $kyc->ssn }}
                    </p>
                </div>
            </div>

            <ul class="card-profile__info">
                <li>
                    <h5 class="mr-4">Address</h5>
                    <span class="text-muted">House 14, Road 9, Gulshan, Dhaka</span>
                </li>
                <li class="mb-1">
                    <h5 class="mr-4">Total Log</h5>
                    <span>103 Time (Today 5 Times)</span>
                </li>
                <li>
                    <h5 class="text-danger mr-4">Last Log</h5>
                    <span class="text-danger">3 February, 2020, 10:00 PM</span>
                </li>
            </ul>
            <div class="social-icons">
                <a class="facebook text-center" href="javascript:void(0)"><span><i class="fa fa-facebook"></i></span></a>
                <a class="twitter text-center" href="javascript:void(0)"><span><i class="fa fa-twitter"></i></span></a>
                <a class="youtube text-center" href="javascript:void(0)"><span><i class="fa fa-youtube"></i></span></a>
                <a class="googlePlus text-center" href="javascript:void(0)"><span><i class="fa fa-google"></i></span></a>
            </div>
        </div>
    </div> --}}
@endsection();
