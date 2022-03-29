@extends('layout.app-dashboard')

@section('title', ' Withdrawal')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @include('layout.partials.dashboard.header')
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Withdrawal History</h4>
                            <a href="{{ route('withdrawals.create') }}" class="btn btn-primary">
                                Withdrawal Funds </a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Reference </th>
                                                <th>Amount </th>
                                                <th>Wallet Currency</th>
                                                <th>Created Date </th>
                                                <th>Status </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($withdrawals as $withdrawal)
                                                <tr>
                                                    <th> {{ $withdrawal->reference }}</th>
                                                    <td> {{ toMoney($withdrawal->amount) }} </td>
                                                    <td> {{ $withdrawal->asset->name }}</td>
                                                    <td> {{ $withdrawal->created_at() }}</td>
                                                    <td class="{{ statusColor($withdrawal->status) }}">
                                                        {{ status($withdrawal->status) }} </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="8" class="text-center">NO Withdrawal created yet</td>
                                                </tr>
                                            @endforelse




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
    <!-- content-wrapper ends -->
@endsection
