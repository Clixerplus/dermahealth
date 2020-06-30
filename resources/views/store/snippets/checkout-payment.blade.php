<div class="checkout-body">
    <h4 class="checkout-title">Elija un método de pago</h4>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-lg-right">Método de pago <span class="text-danger">*</span></label>
        <div class="col-md-4">
            <input type="text" class="form-control required" name="cardholder" placeholder="Transferencia banca nacional" disabled />
        </div>
    </div>
   
    <div class="form-group row">
    <label class="col-md-4 col-form-label text-lg-right">Entidades bancarias <span class="text-danger">*</span></label>
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
   
</div>

<div class="checkout-footer">
    <button type="button" class="btn btn-white btn-theme pull-left" onclick="activate_tab('checkout-payment','checkout-info')">ANTERIOR</button>
    <button type="submit" class="btn btn-inverse btn-theme m-l-10">CONFIRMAR <i class="fas fa-security"></i></button>
</div>