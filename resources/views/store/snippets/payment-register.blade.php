<form action="{{ route('payment-register') }}" method="GET" name="payment_register" class="form-horizontal">
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
        Referencia <span class="text-danger">*</span>
        </label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="ref" value="{{ old('ref') }}" placeholder="No. de referencia de venta" />
            @error('ref') <small class="text-danger">{{ $message }}</small> @enderror
                
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-md-4 text-lg-right">
            &nbsp; <span class="text-danger">&nbsp;</span>
            </label>
        <div class="col-md-4">
            <button type="submit" class="btn btn-block btn-inverse btn-theme">BUSCAR <i class="fas fa-search m-l-10"></i></button>
        </div>
    </div>
</form>