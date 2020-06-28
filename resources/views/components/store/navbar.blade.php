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
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{ route('product', $product->slug ?? 'slug') }}">Nutricell</a>
							</div>
						</li>
						<li class="{{ active('payment') }}">
							<a href="{{ route('payment') }}">Pagos</a>
						</li>
					</ul>
				</div>
			</div>

			<x-store.shopping-bag/>

		</div>

	</div>

</div>