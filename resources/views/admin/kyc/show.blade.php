@extends('layout.app-dashboard')

@section('title', 'show KYC')

@section('content')


    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('layout.partials.admin.page-title')
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card profile_card">
                        <div class="card-body">
                            <div class="media">
                                <img class="mr-3 rounded-circle mr-0 mr-sm-3" src="{{ Storage::url($kyc->photo) }}"
                                    width="60" height="60" alt="">
                                <div class="media-body">
                                    <span>Hello</span>
                                    <h4 class="mb-2">{{ $kyc->fullname }}</h4>
                                    <p class="mb-1"> <span class="mr-3 ">Status:</span>
                                        <span class="{{ $kyc->status == 'succeed' ? 'text-success' : 'text-warning' }}">
                                            {{ $kyc->status }}</span>
                                    </p>
                                    <p class="mb-1"> <span class="mr-4 ">DOB</i></span>
                                        {{ $kyc->date_of_birth }}
                                    </p>
                                </div>
                            </div>

                            <ul class="card-profile__info">
                                <li>
                                    <h5 class="mr-4">Identification</h5>
                                    <span class="text-muted"> </span>
                                    <img class="mr-3  mr-0 mr-sm-3" src="{{ Storage::url($kyc->identification) }}"
                                        width="300" height="200" alt="">
                                </li>
                                <li class="mb-1 mt-2">
                                    <h5 class="mr-4">Identification Type</h5>
                                    <span class="text-primary">{{ $kyc->type }}</span>
                                </li>
                                <li>
                                    <h5 class="text-danger mr-4">Created date</h5>
                                    <span class="text-danger">{{ $kyc->created_at }}</span>
                                </li>
                            </ul>
                            @if ($kyc->status !== 'succeed')
                                <form method="post" action="{{ route('admin.kyc.store', $kyc) }}">
                                    @csrf
                                    <input type="hidden" value="approved" name="approved">
                                    <button
                                        onclick="return confirm('Proceed to approve the KYC')"
                                    type="submit" class="btn btn-warning">Approve</button>

                                </form>

                                <form method="post" action="{{ route('admin.kyc.store', $kyc) }}">
                                    @csrf

                                    <input type="hidden" value="rejected" name="rejected">
                                    <button
                                        onclick="return confirm('Proceed to rejecting the KYC')"
                                    type="submit" class="btn btn-danger">Reject</button>
                                </form>
                            @else
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection();
