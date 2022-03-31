@extends('layout.app-dashboard')

@section('title', ' Admin Withdrawal')
@section('content')

    </div>

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('layout.partials.admin.page-title')
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Withdrawal History</h4>

                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Reference </th>
                                                <th> Status </th>
                                                <th> Amount </th>
                                                <th> Balance </th>
                                                <th> Wallet Type </th>
                                                <th> User Name </th>
                                                <th> Created Date </th>
                                                <th>Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($withdrawals as $withdrawal)
                                                <tr>

                                                    <td> {{ $withdrawal->reference }}</td>
                                                    <td class="{{ statusColor($withdrawal->status) }}">
                                                        <span class="badge badge-{{ state($withdrawal->status) }} text-uppercase">{{ ($withdrawal->status) }}</span>
                                                    </td>
                                                    <td> {{ toMoney($withdrawal->amount) }} </td>
                                                    <td> {{ toMoney($withdrawal->balance) }}</td>
                                                    <td> {{ $withdrawal->asset->name }}</td>
                                                    <td> {{ $withdrawal->user->fullname }}</td>
                                                    <td> {{ $withdrawal->created_at }}</td>


                                                    <td>
                                                        <a href="{{ route('admin.withdrawal.show', $withdrawal) }}"
                                                            class="btn btn-info">Show</a>
                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center">NO withdrawals History yet</td>
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
