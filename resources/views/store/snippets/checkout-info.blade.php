<div class="checkout-body">
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Nombres <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Apellidos <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Correo electrónico <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Teléfono <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="phone" class="form-control" name="phone" value="{{ old('phone') }}" required />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Dirección <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control m-b-10" name="address" value="{{ old('address') }}" required />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Estado <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control m-b-10" name="state" value="{{ old('state') }}" required />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Ciudad <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control m-b-10" name="city" value="{{ old('city') }}" required />
        </div>
    </div>

    <hr />

    <div class="m-b-5"><b>Condiciones de envío</b></div>
    <ul class="checkout-info-list">
        <li>Los envío se realizarán mediante compañías nacionles.</li>
        <li>No existe seguro ni reembolsos por extravío o perdida en el envío.</li>
        <li>Los tiempos de entrega dependerán de las compañías de envío.</li>
        
    </ul>
</div>

<div class="checkout-footer">
    <button type="button" class="btn btn-white btn-theme pull-left" onclick="activate_tab('checkout-info','checkout-cart')">ANTERIOR</button>
    <button type="button" class="btn btn-inverse btn-lg btn-theme width-200" onclick="activate_tab('checkout-info','checkout-payment')">SIGUIENTE</button>
</div>