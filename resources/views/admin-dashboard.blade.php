@extends('layout.admin')

@section('content')
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order Status</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
                                    <th> Client Name </th>
                                    <th> DOB </th>
                                    <th> Type </th>
                                    <th> SSN </th>
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
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            {{-- <img src="assets/images/faces/face2.jpg" alt="image" /> --}}
                                            <span class="ps-2">{{ $kyc->fullname }}</span>
                                        </td>
                                        <td> {{ $kyc->date_of_birth }} </td>
                                        <td> {{ $kyc->type }} </td>
                                        <td> {{ $kyc->ssn }} </td>
                                        <td> {{ $kyc->user_id }} </td>
                                        <td> {{ $kyc->created_at }}</td>
                                        <td>
                                            <div class="badge badge-outline-warning">{{ $kyc->status }}</div>
                                        </td>
                                        <td>
                                            <a href="{{ route('show', $kyc) }}"
                                                class="badge badge-outline-warning">Edit</a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- content-wrapper ends -->
@endsection
