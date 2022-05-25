@extends('layout.app-dashboard')

@section('title', ' KYC')
@section('content')



    <div class="content-body">

        <div class="container">
            <div class="row">
                @include('layout.partials.admin.page-title')
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">KYC Submissions</h4>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th> Fullname </th>
                                                <th> DOB </th>
                                                <th> Type </th>
                                                {{-- <th> SSN </th> --}}
                                                <th> UserID </th>
                                                <th> Created Date </th>
                                                <th> Status </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kycs as $kyc)
                                                <tr>

                                                    <td>
                                                        <img class="mr-3 rounded-circle mr-0 mr-sm-3"
                                                            src="{{ Storage::url($kyc->photo) }}" width="60" height="60"
                                                            alt="">
                                                        <span class="ps-2">{{ $kyc->fullname }}</span>
                                                    </td>
                                                    <td> {{ $kyc->date_of_birth }} </td>
                                                    <td> {{ $kyc->type }} </td>
                                                    {{-- <td> {{ $kyc->ssn }} </td> --}}
                                                    <td> {{ $kyc->user_id }} </td>
                                                    <td> {{ $kyc->created_at }}</td>
                                                    <td>
                                                        <div class="text-success text-capitalize">{{ $kyc->status }}</div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.kyc.show', $kyc) }}"
                                                            class="text-warning">View</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="colspan7">NO KYC</td>
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
