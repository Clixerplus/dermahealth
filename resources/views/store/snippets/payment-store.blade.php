<form action="{{ action('Store\PaymentController@store') }}" method="POST" name="payment_store" class="form-horizontal">
    @csrf
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Referencia <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" value="{{ $ref ?? old('order_ref') }}" placeholder="No. de referencia de venta" disabled/>
            <input type="hidden" name="order_ref" value="{{ $ref ?? old('order_ref') }}"/>
            @error('order_ref') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Correo asociado <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" placeholder="Correo electrónico" disabled />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Banco <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <select class="custom-select" name="bank_name">
                <option selected>Elija una opción</option>
                @foreach (config('store.bank_name') as $item)
                <option value="{{ $item }}" @if($item == old('bank_name')) selected @endif>{{ $item }}</option>
                @endforeach
              </select>
            @error('bank_name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Banco <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <select class="custom-select" name="currency">                
                <option value="VES" selected >Bolívares (VES)</option>
              </select>
            @error('currency') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Número de referencia <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="transaction_ref" value="{{ old('transaction_ref') }}" placeholder="Referencia de la transferencia" />
            @error('transaction_ref') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Fecha de pago <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="date" class="form-control" name="date" value="{{ old('date') }}" placeholder="Fecha de transferencia" />
            @error('date') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
    </div>                    
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Monto <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="amount" value="{{ old('amount') }}" placeholder="0.00" pattern="[0-9.]+" />
            @error('amount') <small class="text-danger">{{ $message }}</small> @enderror
            <p class="form-text m-b-0 f-s-12 text-muted f-w-600 m-t-10">Introduzca el monto con 2 decimales separados punto(.)</p>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
            &nbsp; <span class="text-danger">&nbsp;</span>
            </label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-block btn-inverse btn-theme">ENVIAR <i class="fas fa-paper-plane m-l-10"></i></button>
        </div>
    </div>
</form>