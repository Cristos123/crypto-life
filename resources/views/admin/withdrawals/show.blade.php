@extends('layout.app-dashboard')

@section('title', 'show Withdrawal Details')

@section('content')


    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('layout.partials.admin.page-title')
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card profile_card">
                        <div class="card-body">
                            <h1>Withdrawal Details</h1>
                            <a class="btn  mt-2 mb-3 btn-primary" href="{{ route('admin.withdrawal.index') }}">Go back </a>

                            <div class="media">

                                <div class="media-body">

                                    <h4 class="mb-2">{{ $withdrawal->user->fullname }}</h4>
                                    <p class="mb-1"> <span class="mr-3 ">Status:</span>
                                        <span class="{{ statusColor($withdrawal->status) }}">
                                            {{ status($withdrawal->status) }}</span>
                                    </p>
                                    <p class="mb-1"> <span class="mr-4 ">References</i></span>
                                        {{ $withdrawal->reference }}
                                    </p>
                                </div>
                            </div>

                            <ul class="card-profile__info">
                                <li>
                                    <h5 class="mr-4">Amount</h5>
                                    <span class="text-secondary">{{ toMoney($withdrawal->amount) }} </span>

                                </li>
                                <li>
                                    <h5 class="mr-4">Balance</h5>
                                    <span class="text-secondary">{{ toMoney($withdrawal->balance) }} </span>

                                </li>
                                <li class="mb-1 mt-2">
                                    <h5 class="mr-4">Assets</h5>
                                    <span class="text-primary">{{ $withdrawal->asset->name }}</span>
                                </li>
                                <li>
                                    <h5 class=" mr-4">Created date</h5>
                                    <span class="text-secondary">{{ $withdrawal->created_at }}</span>
                                </li>
                            </ul>
                            @if ($withdrawal->status == 'pending')
                                <form method="post" action="{{ route('admin.withdrawal.update', $withdrawal) }}">
                                    @csrf @method('PUT')
                                    <input type="hidden" value="approve" name="approve">
                                    <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure to approve withdrawal>')">Approve Withdrawal</button>

                                </form>

                                <form method="post" action="{{ route('admin.withdrawal.update', $withdrawal) }}">
                                    @csrf @method('PUT')

                                    <input type="hidden" value="cancel" name="cancel">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to cancel withdrawal>')">Cancel Request</button>
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
