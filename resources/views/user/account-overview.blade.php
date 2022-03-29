@extends('layout.app-dashboard')

@section('title', 'Account Overview')

@section('content')
    @php
    $user = auth()->user();
    @endphp
    @include('layout.partials.page-title')
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @include('layout.partials.dashboard.header')
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card profile_card">
                        <div class="card-body">
                            <div class="media">

                                <div class="media-body">
                                    <span>Hello</span>
                                    <h4 class="mb-2">{{ $user->fullname }}</h4>
                                    <p class="mb-1"> <span><i class="fa fa-phone mr-2 text-primary"></i></span>
                                        {{ "(+{$user->country_code}){$user->mobilenumber}" }}</p>
                                    <p class="mb-1"> <span><i class="fa fa-envelope mr-2 text-primary"></i></span>
                                        {{ $user->email }}
                                    </p>
                                </div>
                            </div>

                            <ul class="card-profile__info">
                                <li>
                                    <h5 class="mr-4">Address</h5>
                                    <span class="text-muted">{{ "{$user->state}, {$user->country}" }}.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card acc_balance">
                        <div class="card-header">
                            <h4 class="card-title">Wallet</h4>
                        </div>
                        <div class="card-body">
                            <span>Available Balance</span>
                            <h3>{{ toMoney($user->balance()) }} USD</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Payout History</h4>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Payout ID</th>
                                                <th>Time</th>
                                                <th>Amount</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payouts as $payout)
                                                <tr>
                                                    <td>#{{ $payout->reference }}</td>
                                                    <td>{{ $payout->created_at() }}</td>
                                                    <td>{{ toMoney($payout->amount) }} USD</td>
                                                    <td>{{ toMoney($payout->balance) }} USD</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
