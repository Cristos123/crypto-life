@extends('layout.app')

@section('title', 'Terms and Conditions - Bullish Experts')

@section('content')

    <div class="bg-light section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section-title">
                        <h2 class="text-dark">Terms and Conditions</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p>
                        We at <strong class="text-dark">BULLISH EXPERT TRADERS</strong> provide services for trading
                        derivative financial
                        contracts.
                        Our contracts are traded on a margin or leverage basis, a type of trading
                        which <strong class="text-dark">CARRIES A VERY LOW DEGREE OF RISK</strong> to your capital.
                        The price of the contract you make with us may change quickly and your profits
                        may be more than the amount of your investment or funds but I no occasion will
                        your losses be more than 15% of your capital and this is in a worse case scenario.
                        If you do not hold sufficient funds to meet your margin requirements, then we may
                        close your open positions immediately and without notice. We are <strong
                            class="text-dark">FULLY INSURED</strong>
                        against
                        large trade loss and <strong class="text-dark">BACKED UP BY THE BANK OF INVESTMENT AND
                            DEVELOPMENT OF
                            VIETNAM</strong>.
                        You should not deal in our contracts unless you understand and accept the risks of
                        margin trading. Trading in these products may not be suitable for everyone.
                    </p>



                    <p>
                    <ol>
                        <li>
                            <p class="font-weight-bold d-inline-block">
                                YOU CONSENT TO THE FOLLOWING TERMS AND CONDITIONS THAT:
                            </p>

                            <ol>
                                <li>
                                    Our trading service is an electronic service and you specifically consent to us
                                    communicating
                                    with you by email, by SMS, by letter or telephone and/or by any other
                                    electronic means or methods agreed in writing.
                                    We will not send a paper form of any communication sent to you unless you
                                    request us to do so. We reserve the right to charge for
                                    communications and/or documents sent to
                                    you in a paper form.
                                </li>

                                <li>
                                    You confirm that you have regular access to the internet
                                    and consent to us providing you with information about us and
                                    our services (including the Market Information), our costs and
                                    charges, information about our Products, our Notices and Policies and
                                    any other information that we are required to
                                    provide to you pursuant to FCA Rules by email or by posting such
                                    information on our Website or the Trading Platform. This is without
                                    prejudice to any rights you may have to request copies
                                    of the information or, by notifying us in writing, to receive such
                                    information in hard copy, rather than by email or other electronic means.
                                    We reserve the right to charge for information and/or documents sent to you in a paper
                                    form.
                                </li>

                                <li>
                                    We will deal with you as principal and not as agent on your behalf.
                                    This means that any Trades are agreed directly between you and us and
                                    we will be the counterparty to all of your Trades.
                                </li>

                                <li>
                                    Unless we agree otherwise in writing, you will also deal with us as principal and not as
                                    an
                                    agent or representative of another person. You will not permit any person to deal on
                                    your behalf
                                    unless we agree that such person (the “Agent”) can act on your
                                    behalf. We will be entitled to rely on any instructions given to us by the Agent in
                                    relation to
                                    your Account. We may require
                                    confirmation that the Agent has authority to act on your behalf at any time we
                                    reasonably
                                    consider appropriate.
                                </li>

                                <li>
                                    In order to ensure that we can deal with you and discharge
                                    our obligations under applicable laws and regulations, you will
                                    provide us, as appropriate, with your legal entity identifier
                                    (“LEI”) (provided you are eligible for one) or such other
                                    information relating to, for example, your nationality as we will
                                    require to determine your national client identifier.
                                </li>
                            </ol>
                        </li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection()


@push('styles')
    <style>
        OL {
            counter-reset: item
        }

        LI {
            display: block;
            padding-bottom: 10px;
        }

        LI:before {
            content: counters(item, ".") " ";
            counter-increment: item;
            font-weight: 500;
        }

    </style>
@endpush

@push('scripts')
@endpush
