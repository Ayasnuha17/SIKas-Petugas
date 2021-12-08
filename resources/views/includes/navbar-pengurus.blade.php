<nav class="navbar navbar-expand-lg navbar-light navbar-pay fixed-top" data-aos="fade-down">
		<div class="container-fluid">
				<!-- navbar-toggler untuk btn responsive -->
				<button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
						&laquo; Menu
				</button>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarResponsive">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<!-- Desktop menu -->
						<ul class="navbar-nav d-none d-lg-flex ml-auto">
								<!-- d-none style tidak muncul dimobile -->
								<li class="nav-item dropdown">
										<a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
												<img src="{{ asset('img/navigasi.png') }}" class="rounded-circle mr-2 profile" width="45" alt="" />
												Hi, Pengurus
										</a>
										<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Pengaturan Akun</a>
												<div class="dropdown-divider"></div>
												<a href="login.html" class="dropdown-item">Keluar</a>
										</div>
								</li>
						</ul>

						<!-- Mobile Menu -->
						<ul class="navbar-nav d-block d-lg-none">
								<!-- d-block (saat ukuran model ditampilkan) dan d-lg-none(ketika ukurannya besar hide) -->
								<li class="nav-item">
										<a href="" class="nav-link">Hi, Pengurus</a>
								</li>
								<li class="nav-item">
										<a href="" class="nav-link d-inline-block">Pengaturan Akun</a>
								</li>
								<li class="nav-item">
										<a href="" class="nav-link d-inline-block">Keluar</a>
								</li>
						</ul>
				</div>
		</div>
</nav>
