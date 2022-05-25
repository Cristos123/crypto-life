@extends('layout.app')

@section('title', 'About Bullish Experts')

@section('content')

    <div class="bg-light section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title">
                        <h2 class="text-dark">About Bullish Experts</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p>
                        <strong class="text-dark">OUR MISSION</strong> Is to offer a platform of multiple experts and
                        transparent
                        traders that ensure accurate management of your funds, easy to understand
                        terms of investment that allows our subscribers to be able to self-calculate
                        approximate returns on every investment with us.
                    </p>

                    <p>
                        <strong class="text-dark">OUR VISION</strong> is creating loss proof investment options to our
                        customers and never to
                        watch them suffer any loss alone in the very unlikely possibility of such occurrence.
                    </p>

                    <hr>

                    <p>
                        The <strong class="text-dark">GOAL</strong> of the <strong
                            class="text-dark">BULLISHEXPERTS</strong> company is to keep offering better services and
                        improving your user
                        experience with us while we keep up the possibility of a continuous and expanding profit for you.
                    </p>
                </div>


            </div>

            <div class="row text-center py-5">
                <div class="col">
                    <div class="counter bg-dark">
                        <i class="fa fa-bitcoin fa-2x"></i>
                        <div class="d-flex flex-row justify-content-center">
                            <h2 class="timer count-title count-number" data-to="150" data-speed="1500"></h2>
                            <h2 class="count-title count-number">+</h2>
                        </div>
                        <p class="count-text ">Expert Traders</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter bg-dark">
                        <i class="fa fa-exchange fa-2x"></i>
                        <div class="d-flex flex-row justify-content-center">
                            <h2 class="timer count-title count-number" data-to="17" data-speed="1500"></h2>
                            <h2 class="count-title count-number">m+</h2>
                        </div>
                        <p class="count-text ">Monthly Net Traders</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter bg-dark">
                        <i class="fa fa-users fa-2x"></i>
                        <div class="d-flex flex-row justify-content-center">
                            <h2 class="timer count-title count-number" data-to="1500" data-speed="1500"></h2>
                            <h2 class="count-title count-number">+</h2>
                        </div>
                        <p class="count-text ">New Daily Users</p>
                    </div>
                </div>
                <div class="col">
                    <div class="counter bg-dark">
                        <i class="fa fa-flag fa-2x"></i>
                        <div class="d-flex flex-row justify-content-center">
                            <h2 class="timer count-title count-number" data-to="90" data-speed="1500"></h2>
                            <h2 class="count-title count-number">+</h2>
                        </div>
                        <p class="count-text ">Countries Covered</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()


@push('styles')
    <style>
        .counter {
            /* background-color: #f5f5f5; */
            padding: 20px 0;
            border-radius: 5px;
        }

        .count-title {
            font-size: 40px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .count-text {
            font-size: 13px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .fa-2x {
            margin: 0 auto;
            float: none;
            display: table;
            color: #4ad1e5;
        }

    </style>
@endpush

@push('scripts')
    <script>
        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
@endpush
