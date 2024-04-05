@extends('layouts.main')

@push('footer-style')
    <style>
        .nk-footer {
            display: none;
        }

        .progress-bar {
            display: flex;
            flex-direction: row;
            align-items: center;
            background-color: rgba(191, 203, 218, .12);
            font-size: 85%;
        }

        .step-active {
            background-color: rgba(191, 203, 218, .22);
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .progress-step {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 12px 0;
            cursor: pointer;
        }

        .step-num {
            width: 26px px;
            height: 26px;
            line-height: 26px;
            text-align: center;
            border: 1px solid rgba(191, 203, 218, .52);
            border-radius: 50%;
        }

        .num-active {
            border: 2px solid rgb(0, 219, 134) !important;
            color: rgb(0, 198, 121);
            background-color: rgba(0, 221, 136, 0.16);
        }

        .step-txt {
            margin-left: 8px;
        }

        .progress-step {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 12px 0;
            cursor: pointer;
        }

        .step-num {
            width: 26px;
            height: 26px;
            line-height: 26px;
            text-align: center;
            border: 1px solid rgba(191, 203, 218, .52);
            border-radius: 50%;
        }

        .step-txt {
            margin-left: 8px;
        }

        .form-holder {
            width: 70%;
            margin: 3% auto;
        }

        .form-section {
            margin-bottom: 2%;
        }

        .form-title {
            font-size: 135%;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-desc {
            font-size: 90%;
            font-weight: 300;
            margin-bottom: 2%;
        }

        .checkout-row {
            display: flex;
            justify-content: space-between;
            margin-top: 4%;
        }

        .checkout-col {
            width: 48%;
        }

        .card-input-holder {
            display: flex;
        }

        #postal-code-input {
            width: 25%;
        }

        .disclaimer-holder {
            display: flex;
            justify-content: space-between;
            font-size: 63%;
            font-weight: 300;
            margin: 1.5% auto 4% auto;
            width: 99%;
        }

        .lock {
            width: 8px;
            filter: brightness(0);
            opacity: 0.6;
        }

        .payment-request-holder .seperator {
            margin: 29px 0 !important;
        }

        .seperator {
            text-align: center;
            border-bottom: 2px solid gainsboro;
            line-height: 0.1em;
            margin: 8% 0;
        }

        .seperator span {
            background: white;
            color: #9c9c9c;
            padding: 0 10px;
        }

        .checkout-col {
            width: 48%;
        }

        .checkout-row .package-holder {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding-bottom: 3%;
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            border: none;
            box-shadow: none;
        }

        .package-holder {
            display: flex;
            flex-direction: column;
            border-radius: 8px;
            box-shadow: var(--lightBoxShadow);
            padding: 18px 20px;
            border: 1px solid var(--black);
        }

        .packages-img {
            width: 65px;
            height: 65px;
            border-radius: 8px;
            object-fit: cover;
        }

        .package-detail-holder {
            margin-left: 10px;
        }

        .checkout-row .package-title {
            font-weight: 600;
            font-size: 90%;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            font-size: 85%;
            margin-top: 3%;
        }

        .tax-row {
            display: none;
        }

        .total-price-row {
            font-weight: 600;
        }

        .guides-holder {
            display: flex;
            justify-content: space-between;
            margin-top: 5%;
        }

        .guide-holder {
            width: 30%;
        }

        .guide-title {
            display: flex;
            align-items: center;
            font-size: 110%;
        }

        .guide-num {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            margin-right: 12px;
            font-size: 140%;
        }

        .form-section+.form-section {
            display: none;
        }

        .form-section {
            margin-bottom: 2%;
        }

        .form-title {
            font-size: 135%;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .form-desc {
            font-size: 90%;
            font-weight: 300;
            margin-bottom: 2%;
        }

        .box-holder {
            margin: 3% 0;
        }

        .box-title {
            font-size: 115%;
            font-weight: 600;
            margin: 4% 0 2% 0;
        }

        .tooltip-img {
            width: 15px;
        }

        .question-form .input {
            margin-bottom: 3%;
        }

        .box-holder .input {
            width: calc(100% - 10px);
        }

        .checkout-row .btn {
            width: 100%;
        }

        .btn {
            display: block;
            text-align: center;
            font-weight: 600;
            border: none;
            font-size: 100%;
            font-family: inherit;
            border-radius: 8px;
            box-shadow: var(--lightBoxShadow);
            text-decoration: none;
            cursor: pointer;
            transition-duration: 0.3s;
            position: relative;
        }

        .btn {
            background-color: var(--black);
            color: white;
            margin: 0 0 0 auto;
            width: 200px;
            padding: 16px;
            min-width: fit-content;
        }

        .textarea {
            min-height: 80px !important;
        }

        .gender-option {
            display: flex;
            align-items: center;
            width: calc(100% - 32px);
            border-radius: 8px;
            padding: 15px 0 15px 30px;
            font-weight: 500;
            border: 1px solid rgba(191, 203, 218, .52);
            margin-bottom: 2%;
            cursor: pointer;
        }

        .gender-circle {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 1px solid rgba(191, 203, 218, .52);
            margin-right: 10px;
            transition-duration: 0.3s;
        }

        .gender-selected {
            display: none;
            background-color: var(--black);
            height: 16px;
            width: 16px;
            border-radius: 50%;
        }

        .shipping-option {
            margin-bottom: 6%;
        }

        .gender-option {
            display: flex;
            align-items: center;
            width: calc(100% - 32px);
            border-radius: 8px;
            padding: 15px 0 15px 30px;
            font-weight: 500;
            border: 1px solid rgba(191, 203, 218, .52);
            margin-bottom: 2%;
            cursor: pointer;
        }

        .gender-circle {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 1px solid rgba(191, 203, 218, .52);
            margin-right: 10px;
            transition-duration: 0.3s;
        }

        .gender-selected {
            display: none;
            background-color: var(--black);
            height: 16px;
            width: 16px;
            border-radius: 50%;
        }

        .question-form .input {
            margin-bottom: 3%;
        }

        .input {
            min-height: 45px;
            padding: 0 4px;
        }

        .textarea,
        .input,
        #card-element {
            font-family: 'Inter', sans-serif;
            border-radius: 8px;
            background-color: white;
            border: 1px solid rgba(191, 203, 218, .9);
            transition-duration: 0.3s;
        }

        #card-element {
            width: 75%;
            margin-right: 6px;
        }

        .product-cost {
            margin: -4% 0 6% 0 !important;
            display: none;
        }

        .box-subtitle {
            color: gray;
            font-size: 85%;
            margin-top: -1%;
            margin-bottom: 24px;
        }

        .question-form .input {
            margin-bottom: 3%;
        }

        .box-holder .input {
            width: calc(100% - 10px);
        }

        .input,
        .textarea,
        select {
            -webkit-appearance: none;
            appearance: none;
        }

        .input {
            min-height: 45px;
            padding: 0 4px;
        }

        .remember-holder {
            display: flex;
            position: relative;
            padding-left: 18px;
            cursor: pointer;
            font-size: 15px;
            line-height: 15px;
            width: fit-content;
        }

        .name-answers-holder {
            display: none;
        }

        .box-holder {
            margin: 3% 0;
        }

        #msg-holder {
            display: none;
        }
    </style>
@endpush

@section('main-section')
    <link rel="stylesheet" href="{{ url('assets/css/banner.css') }}">
    <div id="msg-holder">
        <div id="msg-holder-row">
            <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/succ.svg" class="succ-err-msg-img"
                id="msg-img-succ">
            <img src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/creatorMarketplace/err.svg" class="succ-err-msg-img"
                id="msg-img-err">
            <div id="msg"></div>
        </div>
    </div>
    <div id="content">
        <div class="form-holder">
            <div>
                <div class="form-section">
                    <div class="form-title">Place Order</div>

                    <!--<div class="form-desc">A hold on your payment method will be placed for 72 hours. You will only be charged if Ina accepts your request.</div>-->
                    <div class="form-desc">Your payment will be held for 72 hours. If {{ $package->username }} declines the
                        order, the amount
                        will be added to your Collabstr balance.</div>


                    <div class="checkout-row">
                        <form action="{{ route('order.process') }}" class="checkout-col checkout-form" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="package_id" value="{{ $package->id }}">
                            <input type="hidden" name="creator_id" value="{{ $package->user_id }}">
                            <input type="hidden" name="package_content_type" value="{{ $package->package_content_type_ }}">
                            <input type="hidden" name="price"
                                value="{{ ($package->package_price_ * 10) / 100 + $package->package_price_ }}.00">

                            <div class="new-card-holder">
                                {{-- <div class="card-input-holder">
                                    <input id="card-number" type="text" class="form-control form-control-lg"
                                        name="card_number" autofocus placeholder="Card Number" required>
                                    &nbsp;
                                    <input type="text" class="form-control form-control-lg" name="postal_code"
                                        id="postal-code-input" placeholder="Zip/Postal Code" autofocus required>
                                </div> --}}

                                <div class="card-input-holder my-3">
                                    <input id="full-name" type="text" class="form-control form-control-lg"
                                        name="full_name" autofocus placeholder="Full Name">
                                </div>
                                <span class="text-danger">{{ $errors->first('full_name') }}</span>


                                <div class="card-input-holder my-3">
                                    <input id="address" type="text" class="form-control form-control-lg" name="address"
                                        autofocus placeholder="Your Premanent Address">
                                </div>
                                <span class="text-danger">{{ $errors->first('address') }}</span>


                                <div class="card-input-holder my-3">
                                    <select name="status" class="form-control form-control-lg" id="payment-type" autofocus>
                                        <option>--Select--</option>
                                        <option value="Case On Delivery">Cash on Delivery</option>
                                    </select>
                                </div>
                                <span class="text-danger">{{ $errors->first('status') }}</span>


                                <div class="card-input-holder my-3">
                                    <textarea name="description" class="form-control form-control-lg" id="message" autofocus
                                        placeholder="Message (Optional)" placeholder="Full Name">
                                    </textarea>
                                </div>
                                <span class="text-danger">{{ $errors->first('description') }}</span>


                                {{-- <div class="disclaimer-holder">
                                    <div class="secure-holder">
                                        <img alt="" class="lock"
                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/password.svg" /> Secure
                                        payments with Stripe
                                    </div>
                                </div> --}}
                            </div>

                            <button class='btn' type="submit">Place Order</button>

                            {{-- <div class="payment-request-holder">
                                <div class="seperator"><span>or</span></div>
                                <div id="payment-request-button"></div>
                            </div> --}}
                        </form>
                        <div class="checkout-col">
                            <div class="package-holder">
                                <div>
                                    <img class="packages-img" src="{{ url('assets/images/' . $package->file_path) }}">
                                </div>
                                <div class="package-detail-holder">
                                    <div class="package-title">
                                        {{ $package->package_quantity_ }}{{ $package->package_content_type_ }}</div>
                                </div>
                            </div>
                            <div>
                                <div class="price-row">
                                    <div>Subtotal</div>
                                    <div>&#8377;{{ $package->package_price_ }}.00</div>
                                </div>
                                <div class="price-row">
                                    <div class="">Fee <img class="tooltip-img"
                                            src="https://d5ik1gor6xydq.cloudfront.net/websiteImages/tooltip.svg"
                                            title="This helps us operate our platform and cover payment processing fees.">
                                    </div>
                                    <div>&#8377;{{ ($package->package_price_ * 10) / 100 }}.00</div>
                                </div>
                                <div class="price-row tax-row">
                                    <div>Tax</div>
                                    <div id="tax-price"></div>
                                </div>

                                <div class="price-row total-price-row">
                                    <div>Total</div>
                                    <div id="total-price">
                                        &#8377;{{ ($package->package_price_ * 10) / 100 + $package->package_price_ }}.00 INR
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="guides-holder">
                        <div class="guide-holder">
                            <div class="guide-title">
                                <div class="guide-num">1</div>Place Order
                            </div>
                            <!--<div class="guide-txt">Submit the details of the collaboration. Ina has 72 hours to accept your request before the hold on your card is removed.</div>-->
                            <div class="guide-txt">Submit the details of the collaboration. {{ $package->username }} has 72 hours to accept your
                                request, otherwise the amount is added to your Collabstr balance.</div>
                        </div>

                        <div class="guide-holder">
                            <div class="guide-title">
                                <div class="guide-num">2</div>Chat With Influencer
                            </div>
                            <div class="guide-txt">Chat with {{ $package->username }} and arrange the collaboration. Your funds are held securely
                                until they complete the work.</div>
                        </div>

                        <div class="guide-holder">
                            <div class="guide-title">
                                <div class="guide-num">3</div>Receive Content
                            </div>
                            <div class="guide-txt">Receive your content to review and approve. The collaboration is complete
                                and payment is released to the influencer.</div>
                        </div>
                    </div>

                </div>

                <form class="form-section question-form">
                    @csrf
                    <div class="form-title">Submit Requirements</div>
                    <div class="form-desc">Let Ina know what you are looking for.</div>
                    <div>
                        <div class="box-holder">
                            <div class="box-title">Describe the product/service you are promoting</div>
                            <textarea class="input textarea" name="description"
                                placeholder="E.g. We just launched our summer dress collection and want you to promote our sundresses that are 100% handmade"
                                maxlength="800" required></textarea>
                        </div>

                        <div class="box-holder">
                            <div class="box-title">What are the content requirements?</div>
                            <textarea class="input textarea" name="content_requirements"
                                placeholder="E.g. We would like you to style the dress with different accessories and make the content vibrant and colorful"
                                maxlength="800" required></textarea>
                        </div>

                        <div class="box-holder">
                            <div class="box-title">Select all that apply</div>

                            <div class="gender-option">
                                <div class="gender-circle">
                                    <div class="gender-selected"></div>
                                </div>
                                <div>Content approval required before posting?</div>
                                <input type="hidden" name="content_approval" value="">
                            </div>

                            <div class="gender-option shipping-option">
                                <div class="gender-circle">
                                    <div class="gender-selected"></div>
                                </div>
                                <div>Are you shipping a physical product?</div>
                                <input type="hidden" name="shipping_info" value="">
                            </div>

                            <input class="input product-cost" type="number" name="product_cost"
                                placeholder="What is your cost on the product (USD)" min="0">
                        </div>

                        <div class="box-holder">
                            <div class="box-title">What do you need from Ina to get started?</div>
                            <textarea class="input textarea" name="info_needed"
                                placeholder="E.g. Please send us your dress size and color preference" maxlength="800"></textarea>
                        </div>



                        <div class="box-holder">
                            <div class="box-title">When do you expect the content to be delivered by?</div>
                            <div class="box-subtitle">This helps Ina understand your timeline. It should be used as a
                                guideline and not a deadline.</div>
                            <input class="input" type="text" placeholder="MM/DD/YYYY" name="delivery_date">
                        </div>

                        <div>
                            <label class="remember-holder">Save answers for re-use
                                <input type="checkbox" name="saved_answers">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="box-holder name-answers-holder">
                            <input class="input" name="saved_answers_name" placeholder="Give your saved answers a name"
                                maxlength="255" />
                        </div>

                    </div>

                    <input type='hidden' name='campaign_id'>
                    <button class='btn question-btn'>Continue</button>
                </form>
            </div>
        </div>

        <script>
            function copyLink() {
                let textArea = document.createElement("textarea");
                textArea.value = 'https://collabstr.com/user';
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand("Copy");
                textArea.remove();
                showMsg('Profile URL copied to clipboard.', 'succ')
            }
        </script>
    @endsection