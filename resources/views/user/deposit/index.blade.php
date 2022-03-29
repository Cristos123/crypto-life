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
                            <h4 class="card-title"> Deposit History</h4>
                            <a href="{{ route('deposits.create') }}" class="btn btn-primary">
                                Make Deposits </a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Reference </th>
                                                <th> Status </th>
                                                <th> Amount (USD) </th>
                                                <th>Currency </th>
                                                <th>Date </th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($deposits as $deposit)
                                                <tr>
                                                    <th> {{ $deposit->reference }}</th>
                                                    <td class="{{ statusColor($deposit->status) }}">
                                                        {{ status($deposit->status) }} </td>
                                                    <td> {{ toMoney($deposit->amount) }} </td>

                                                    <td> {{ $deposit->currency }}</td>
                                                    <td> {{ $deposit->created_at }}</td>
                                                    <td>
                                                        @if($deposit->status == 'pending')
                                                            <form method="POST" action="{{ route('deposits.cancel', $deposit) }}">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-danger" onclick="return confirm('Proceed to cancel deposit?')">Cancel</button>
                                                            </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="8" class="text-center">No Deposits initiated yet!</td>
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
