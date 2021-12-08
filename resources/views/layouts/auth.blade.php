<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>@yield('title')</title>
		<link rel="icon" href="img/LogoPAYgold.png" type="image/svg" />

		<!-- Style-->
		@stack('prepend-style')
		@include('includes.style')
		@stack('addon-style')
</head>

<body>
		<div class="page-dashboard">
				<div class="d-flex" id="wrapper" data-aos="fade-right">

						<!-- page content -->
						<div id="page-content-wrapper">

								<!-- Section Content -->
								@yield('content')
						</div>
				</div>

		</div>
		<!-- Script -->
		@stack('prepend-script')
		@include('includes.script')
		@stack('addon-scrpit')
</body>

</html>
