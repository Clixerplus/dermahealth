<div class="checkout-body">
    <h4 class="checkout-title">Choose a payment method</h4>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-lg-right">Cardholder Name <span class="text-danger">*</span></label>
        <div class="col-md-4">
            <input type="text" class="form-control required" name="cardholder" placeholder="" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-lg-right">Card Number <span class="text-danger">*</span></label>
        <div class="col-md-4">
            <input type="text" class="form-control required" name="cardnumber" placeholder="" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-lg-right">Payment Types <span class="text-danger">*</span></label>
        <div class="col-md-8">
            <ul class="list-inline payment-type">
                <li class="active"><a href="#" data-click="set-payment" data-value="Paypal" data-toggle="tooltip" data-title="Paypal" data-placement="top" data-trigger="hover"><i class="fab fa-cc-paypal"></i></a></li>
                <li><a href="#" data-click="set-payment" data-value="Visa" data-toggle="tooltip" data-title="Visa" data-placement="top" data-trigger="hover"><i class="fab fa-cc-visa"></i></a></li>
                <li><a href="#" data-click="set-payment" data-value="Master Card" data-toggle="tooltip" data-title="Master Card" data-placement="top" data-trigger="hover"><i class="fab fa-cc-mastercard"></i></a></li>
                <li><a href="#" data-click="set-payment" data-value="Credit Card" data-toggle="tooltip" data-title="Credit Card" data-placement="top" data-trigger="hover"><i class="fab fa-cc-discover"></i></a></li>
            </ul>
            <input type="hidden" name="payment_type" value="" data-id="payment-type" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-lg-right">Expiration Date <span class="text-danger">*</span></label>
        <div class="col-md-8">
            <div class="width-100">
                <div class="row row-space-0">
                    <div class="col-5">
                        <input type="text" name="mm" placeholder="MM" class="form-control required p-l-5 p-r-5 text-center" />
                    </div>
                    <div class="col-2 text-center">
                        <div class="text-muted p-t-5 m-t-2">/</div>
                    </div>
                    <div class="col-5">
                        <input type="text" name="yy" placeholder="YY" class="form-control required p-l-5 p-r-5 text-center" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-lg-right">CSC <span class="text-danger">*</span></label>
        <div class="col-md-8">
            <div class="width-100 pull-left m-r-10">
                <input type="text" name="number" placeholder="" class="form-control required p-l-5 p-r-5 text-center" />
            </div>
            <a href="#" class="text-muted f-s-12 pull-left m-t-5 p-t-2"><i class="fa fa-question-circle"></i> What's this?</a>
        </div>
    </div>
</div>

<div class="checkout-footer">
    <button type="button" class="btn btn-white btn-theme pull-left" onclick="activate_tab('checkout-payment','checkout-info')">ANTERIOR</button>
    <button type="submit" class="btn btn-inverse btn-theme m-l-10">CONFIRMAR <i class="fas fa-security"></i></button>
</div>