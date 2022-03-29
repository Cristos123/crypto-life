@extends('layout.app-dashboard')

@section('title', ' Withdrawal')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card sub-menu">
                        <div class="card-body">
                            <ul class="d-flex">
                                <li class="nav-item">
                                    <a href="./account-overview.html" class="nav-link">
                                        <i class="mdi mdi-bullseye"></i>
                                        <span>Overview</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('withdrawal.create') }}" class="nav-link">
                                        <i class="mdi mdi-heart"></i>
                                        <span>Deposit</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('withdrawals.create') }}" class="nav-link">
                                        <i class="mdi mdi-pentagon"></i>
                                        <span>Withdraw</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                                                <th> Status </th>
                                                <th> Amount </th>
                                                <th>Balance </th>
                                                <th>Asset </th>
                                                <th>Reference </th>
                                                <th> User Name </th>
                                                <th>Created Date </th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($withdrawals as $withdrawal)
                                                <tr>


                                                    <td class="{{ statusColor($withdrawal->status) }}">
                                                        {{ status($withdrawal->status) }} </td>
                                                    <td> {{ toMoney($withdrawal->amount) }} </td>
                                                    <td> {{ toMoney($withdrawal->balance) }}</td>

                                                    <td> {{ $withdrawal->asset->name }}</td>
                                                    <td> {{ $withdrawal->reference }}</td>
                                                    <td> {{ $withdrawal->user->fullname }}</td>
                                                    <td> {{ $withdrawal->created_at }}</td>



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
