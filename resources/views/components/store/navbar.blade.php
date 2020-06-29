<div id="header" class="header">
	<div class="container">
		<div class="header-container">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div class="header-logo">
				<a href="{{ route('home') }}">
					<span class="brand-logo"></span>
					<span class="brand-text">
						<span class="text-blue">Dermahealth
						<small>de Venezuela</small>
					</span>
				</a>
			</div>

			<div class="header-nav">
				<div class=" collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav">
						<li class="{{ active('home') }}">
							<a href="{{ route('home') }}">Inicio</a>
						</li>

						<li class="dropdown dropdown-hover {{ active('product') }}">
							<a href="#" data-toggle="dropdown">
								Productos
								<b class="caret"></b>
								<span class="arrow top"></span>
							</a>
							<x-store.product-menu/>
						</li>
						<li class="{{ active('payment') }}">
							<a href="{{ route('payment') }}">Pagos</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="header-nav">
				<ul class="nav pull-right">

					<x-store.shopping-bag/>

					<li class="divider"></li>

					<li>
						<a href="my_account.html">
							@auth
								<img src="{{ asset ('nutricell/user/user-1.jpg') }}" class="user-img" alt="" />
							@else                
								<img src="{{ asset ('nutricell/user/user-2.jpg') }}" class="user-img d-xl-none" alt="" />
								<span class="d-none d-xl-inline">Login / Registrar</span>
							@endauth
						</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</div>