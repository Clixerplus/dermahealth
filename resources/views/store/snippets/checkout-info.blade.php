<div class="checkout-body">
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        First Name <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="first_name" value="" placeholder="" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Last Name <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="last_name" value="" placeholder="" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Company Name (optional)<span class="text-danger">&nbsp;</span>
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="company_name" value="" placeholder="" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Area Code <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="area_code" value="" placeholder="" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Primary Phone <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="primary_phone" value="" placeholder="" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Street Address <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control m-b-10" name="address_1" value="" placeholder="" />
            <input type="text" class="form-control" name="address_2" value="" placeholder="" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        ZIP Code<span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="zip_code" value="" placeholder="" />
            <p class="form-text m-b-0 f-s-12 text-muted f-w-600 m-t-10">Enter ZIP for City and State ZIP Code</p>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4">
        &nbsp;
        </label>
        <div class="col-md-4">
            <label class="f-w-500">
            <input type="checkbox" name="business_address" value="1" />
            This is a business address
            <a href="#" class="m-l-5 text-muted" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="This helps us choose the best shipping method for you. Business shipments are normally delivered on weekdays by 5:00 p.m. local time. Residential shipments are normally delivered Monday - Saturday by 8:00 p.m. local time.">
            <i class="fa fa-question-circle"></i>
            </a>
            </label>
        </div>
    </div>
    <hr />
    <div class="m-b-5"><b>Shipping Policy</b></div>
    <ul class="checkout-info-list">
        <li>Signature may be required for delivery</li>
        <li>We do not ship to P.O. boxes</li>
        <li>Delivery estimates below include item preparation and shipping time</li>
        <li>We do not ship directly to APO/FPO addresses.</li>
    </ul>
</div>

<div class="checkout-footer">
    <button type="button" class="btn btn-white btn-theme pull-left" onclick="activate_tab('checkout-info','checkout-cart')">ANTERIOR</button>
    <button type="button" class="btn btn-inverse btn-lg btn-theme width-200" onclick="activate_tab('checkout-info','checkout-payment')">SIGUIENTE</button>
</div>