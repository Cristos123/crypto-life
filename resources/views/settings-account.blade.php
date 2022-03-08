@extends('layout.app-dashboard')

@section('title', 'settings Account')

@section('content')

    @include('layout.partials.page-title')

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card sub-menu">
                        <div class="card-body">
                            <ul class="d-flex">
                                <li class="nav-item">
                                    <a href="./settings.html" class="nav-link">
                                        <i class="mdi mdi-account-settings-variant"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./settings-preferences.html" class="nav-link">
                                        <i class="mdi mdi-settings"></i>
                                        <span>Preferences</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./settings-security.html" class="nav-link">
                                        <i class="mdi mdi-lock"></i>
                                        <span>Security</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./settings-account.html" class="nav-link">
                                        <i class="mdi mdi-bank"></i>
                                        <span>Linked Account</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Linked Account or Card</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table linked_account ">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <span class="mr-3"><i class="fa fa-bank"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-1">Bank of America</h5>
                                                        <p>Bank **************5421</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="edit-option">
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="verify">
                                                    <div class="verified">
                                                        <span><i class="la la-check"></i></span>
                                                        <a href="#">Verified</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <span class="mr-3"><i class="fa fa-credit-card"></i></span>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-1">Debit Card</h5>
                                                        <p>Prepaid Card *********5478</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="edit-option">
                                                    <a href="#"><i class="fa fa-eye"></i></a>
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="verify">
                                                    <div class="not-verify">
                                                        <span><i class="la la-close"></i></span>
                                                        <a href="#">Not verified</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-3">
                                    <a href="./verify-step-5.html" class="btn btn-primary px-4 py-2 mr-3 my-2">Add Bank
                                        Account</a>
                                    <a href="./verify-step-1.html" class="btn btn-success px-4 py-2 my-2">Add Debit
                                        Account</a>
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
