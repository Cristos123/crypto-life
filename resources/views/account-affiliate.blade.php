@extends('layout.app-dashboard')

@section('title', 'Accont affiliate')

@section('content')

    <div class="page-title dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="page-title-content">
                        <p>Welcome Back,
                            <span> Saiful Islam</span>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <ul class="breadcrumbs list-unstyle">
                        <li><a href="./settings.html">Settings </a></li>
                        <li class="active"><a href="#">Security</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
                                    <a href="./account-deposit.html" class="nav-link">
                                        <i class="mdi mdi-heart"></i>
                                        <span>Deposit</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./account-withdraw.html" class="nav-link">
                                        <i class="mdi mdi-pentagon"></i>
                                        <span>Withdraw</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./account-api.html" class="nav-link">
                                        <i class="mdi mdi-database"></i>
                                        <span>API</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./account-affiliate.html" class="nav-link">
                                        <i class="mdi mdi-diamond"></i>
                                        <span>Affiliate</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Affiliate Program</h4>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-lg-6">
                                    <h5>Affiliate Link</h5>
                                    <p>Copy and paste this link to send to friends or use in your articles. When
                                        users sign up using this link, your account will be credited with referral
                                        bonuses.</p>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <h5>Share your link</h5>
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                value="https://exchange.tradio.com/register?ref=0595b6ff8865ee37">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary text-white">Copy</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Affiliate Status</h4>
                            <small class="mb-0">Pay on a daily basis</small>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Total</th>
                                            <th>Previous Day</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Invites</td>
                                            <td>5 User</td>
                                            <td>3 User</td>
                                        </tr>
                                        <tr>
                                            <td>Total Turnover</td>
                                            <td>0.248 BTC</td>
                                            <td>0.354 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>Free Paid</td>
                                            <td>0.255 BTC</td>
                                            <td>0.253 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>Affiliate Level (% of Commissions)</td>
                                            <td>50%</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Affiliate Payouts
                                                <br>
                                                <small>Not listed on affiliate leaderboard</small>
                                            </th>
                                            <th>0.925 BTC</th>
                                            <th>0.235 BTC</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Affiliate Payout Status</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Time</th>
                                            <th>Free Paid (BTC)</th>
                                            <th>Affiliate Level</th>
                                            <th>Payouts (BTC)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>March 8th, 2020</td>
                                            <td>0.2954 BTC</td>
                                            <td>Level 3</td>
                                            <td>0.2547 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>March 8th, 2020</td>
                                            <td>0.2954 BTC</td>
                                            <td>Level 3</td>
                                            <td>0.2547 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>March 8th, 2020</td>
                                            <td>0.2954 BTC</td>
                                            <td>Level 3</td>
                                            <td>0.2547 BTC</td>
                                        </tr>
                                        <tr>
                                            <td>March 8th, 2020</td>
                                            <td>0.2954 BTC</td>
                                            <td>Level 3</td>
                                            <td>0.2547 BTC</td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <script src="{{ asset('assets/vendor/waves/waves.min.js') }}"></script>
@endpush
