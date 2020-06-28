@extends('layouts.store')

@section('page_title', ' - Contacto')

@section('main-banner')

<div id="page-header" class="section-container page-header-container bg-black">    
    <div class="page-header-cover">
        <img src="{{ asset('nutricell/cover/cover-15.jpg') }}" alt="" />
    </div>    
    
    <div class="container">
        <h1 class="page-header"><b>Contáctanos</b></h1>
    </div>    
</div>
    
@endsection
@section('content')




<div id="product" class="section-container p-t-20">
    <div class="container">
        <div class="row row-space-30">
            
            <div class="col-md-8">
                <h4 class="m-t-0">Formulario de Contacto</h4>
                <p class="m-b-30 f-s-13">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis tortor justo, elementum volutpat ante porta eu. 
                    Sed eget tellus neque. Nam feugiat magna turpis. Vestibulum pharetra nibh et pretium efficitur. Donec porta sollicitudin laoreet. 
                    Sed a condimentum urna. Curabitur placerat ornare venenatis. Cras iaculis venenatis imperdiet.
                </p>
                <form class="form-horizontal" name="contact_us_form" action="{{--  --}}" method="POST">
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 text-lg-right">Nombre <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 text-lg-right">Email <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 text-lg-right">Asunto <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 text-lg-right">Mensaje <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <textarea class="form-control" rows="10" name="message" value="{{ old('message') }}" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3"></label>
                        <div class="col-md-7">
                            <button type="submit" class="btn btn-inverse btn-theme">ENVIAR <i class="fas fa-paper-plane m-r-10"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            
            
            <div class="col-md-4">
                <h4 class="m-t-0">Información de Contacto</h4>
                <div class="embed-responsive embed-responsive-16by9 m-b-15">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3306.9584799260138!2d-118.49437019999998!3d34.019276700000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2a4cedd1266ff%3A0x1ffe328381544853!2sGoogle+Inc!5e0!3m2!1sen!2s!4v1435718319426" allowfullscreen></iframe>
                </div>
                <div><b>SeanTheme Store, Inc</b></div>
                <p class="m-b-15">
                    795 Folsom Ave, Suite 600<br />
                    San Francisco, CA 94107<br />
                    P: (123) 456-7890<br />
                </p>
                <div><b>Email</b></div>
                <p class="m-b-15">
                    <a href="mailto:hello@emailaddress.com" class="text-inverse">info@seantheme.com</a><br />
                    <a href="mailto:hello@emailaddress.com" class="text-inverse">business@seantheme.com</a><br />
                    <a href="mailto:hello@emailaddress.com" class="text-inverse">support@seantheme.com</a><br />
                </p>
                <div class="m-b-5"><b>Redes Sociales</b></div>
                <p class="m-b-15">
                    <a href="#" class="btn btn-icon btn-white btn-circle"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="btn btn-icon btn-white btn-circle"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-icon btn-white btn-circle"><i class="fab fa-google-plus"></i></a>
                    <a href="#" class="btn btn-icon btn-white btn-circle"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-icon btn-white btn-circle"><i class="fab fa-dribbble"></i></a>
                </p>
            </div>
            
        </div>
        
    </div>
    
</div>

@endsection