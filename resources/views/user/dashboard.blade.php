@extends('layout.app-dashboard')

@section('title', 'Dashboard')

@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Your Portfolio </h4>
                        </div>
                        <div class="card-body">
                            <div class="total-balance">
                                <h3>$ {{ toMoney($user->balance()) }}</h3>
                                <h6>Total Balance</h6>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Size</th>
                                            <th>Current</th>
                                            <th>Duration (Days)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($investments as $portfolio)
                                            <tr>
                                                <td>
                                                    {{ $portfolio->category->name }} <br>
                                                    <br>
                                                    <small>{{ $portfolio->asset->name }}</small>
                                                </td>
                                                <td>{{ toMoney($portfolio->amount) }}</td>
                                                <td>{{ toMoney($portfolio->amount) }}</td>
                                                <td>{{ $portfolio->duration->duration }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <th colspan="4">
                                                    <h5 class="text-center my-3">Empy Portfolio!</h5>
                                                </th>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">BTC - USD Perpetual Swap</h4>
                            <span>24h Change <strong class="text-success"> +5.30%</strong></span>
                        </div>
                        <div class="card-body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div id="tradingview_d32e9"></div>
                            </div>
                            <!-- TradingView Widget END -->


                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-xxl-5">
                    <div class="card">
                        <div class="card-body">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                                    {
                                        "colorTheme": "dark",
                                        "dateRange": "12M",
                                        "exchange": "NYSE",
                                        "showChart": false,
                                        "locale": "en",
                                        "largeChartUrl": "",
                                        "isTransparent": false,
                                        "showSymbolLogo": false,
                                        "showFloatingTooltip": false,
                                        "width": "100%",
                                        "height": "480",
                                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                        "gridLineColor": "rgba(240, 243, 250, 0)",
                                        "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xxl-7">
                    <div class="card">
                        <div class="card-header">
                            Invest Now
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.store-investment') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mr-sm-2">Choose Asset Category</label>
                                    <select class="form-control @error('type') is-invalid @enderror" id="selected_type"
                                        required name="categoryId">
                                        <option value="">Select</option>
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                        @empty
                                        @endforelse


                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <br>

                                <div class="form-group ">
                                    <label class="mr-sm-2">Choose an Asset</label>
                                    <select class="form-control @error('type') is-invalid @enderror" id="selected_type"
                                        required name="assetId">
                                        <option value="">Select</option>
                                        @forelse ($assets as $asset)
                                            <option value="{{ $asset->id }}"> {{ $asset->name }} </option>
                                        @empty
                                        @endforelse


                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <br>

                                <div class="form-group">
                                    <label class="mr-sm-2">Trade Expiry</label>
                                    <select class="form-control @error('type') is-invalid @enderror" id="selected_type"
                                        required name="durationId">
                                        <option value="">Select</option>
                                        @forelse ($durations as $duration)
                                            <option value="{{ $duration->id }}"> {{ $duration->duration }} Days</option>
                                        @empty
                                        @endforelse


                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label>Amount (USD)</label>
                                    <input type="text" value="{{ old('amount') }}" placeholder="Enter amount"
                                        class="form-control @error('amount') is-invalid @enderror" name="amount">
                                    @error('amount')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Invest Now</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Trade History</h4>
                                </div>
                                <div class="card-body trade-history">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-danger">10393.50</td>
                                                    <td>0.010</td>
                                                    <td>14.109</td>
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
        </div>

    </div>

@endsection()




@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/waves/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>


    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>

    {{-- Charts --}}
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
        new TradingView.widget({
            "width": "100%",
            "height": 400,
            "symbol": "BINANCE:BTCUSDT",
            "interval": "D",
            "timezone": "Etc/UTC",
            "theme": "dark",
            "style": "1",
            "locale": "en",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "allow_symbol_change": true,
            "container_id": "tradingview_d32e9"
        });
    </script>
@endpush
