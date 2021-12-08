@extends('layouts.auth')

@section('content')
		<div class="container" style="display: none">
				<div class="row justify-content-center">
						<div class="col-md-8">
								<div class="card">
										<div class="card-header">{{ __('Login') }}</div>

										<div class="card-body">
												<form method="POST" action="{{ route('login') }}">
														@csrf

														<div class="form-group row">
																<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

																<div class="col-md-6">
																		<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
																				value="{{ old('email') }}" required autocomplete="email" autofocus>

																		@error('email')
																				<span class="invalid-feedback" role="alert">
																						<strong>{{ $message }}</strong>
																				</span>
																		@enderror
																</div>
														</div>

														<div class="form-group row">
																<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

																<div class="col-md-6">
																		<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
																				name="password" required autocomplete="current-password">

																		@error('password')
																				<span class="invalid-feedback" role="alert">
																						<strong>{{ $message }}</strong>
																				</span>
																		@enderror
																</div>
														</div>

														<div class="form-group row">
																<div class="col-md-6 offset-md-4">
																		<div class="form-check">
																				<input class="form-check-input" type="checkbox" name="remember" id="remember"
																						{{ old('remember') ? 'checked' : '' }}>

																				<label class="form-check-label" for="remember">
																						{{ __('Remember Me') }}
																				</label>
																		</div>
																</div>
														</div>

														<div class="form-group row mb-0">
																<div class="col-md-8 offset-md-4">
																		<button type="submit" class="btn btn-primary">
																				{{ __('Login') }}
																		</button>

																		@if (Route::has('password.request'))
																				<a class="btn btn-link" href="{{ route('password.request') }}">
																						{{ __('Forgot Your Password?') }}
																				</a>
																		@endif
																</div>
														</div>
												</form>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!-- ini utk bungkus semuanya (lembar putih paling luar)-->
		<div class="page-auth">
				<!-- utk membungkus 2 kolom dalam 1 baris (kolom putih dan abu2), data-aos utk animasi halaman login biar ada efek naik-->
				<div class="row no-gutterss section-pay-auth d-flex align-item-center" data-aos="fade-up">
						<!-- buat kolom, lg tu utk desktop. kenapa 6 karena 1 grid 12 dibagi 2 jadi 6 6. kenapa col 12 karena utk tampilan mobile menampilkan 1 kolom -->
						<div class="col-lg-6 col-12 section-left">
								<div class="container login-logo text-center">
										<!-- kalo di mobile, isi konten dalam kolom bahah ini di hide -->
										<img src="/img/Logo-PAY-gold.png" class="w-50 mb-4 mb-lg-none" alt="">
								</div>
						</div>
						<div class="col-12 col-lg-6 section-right">
								<!-- baris untuk konten yang di sebelah kanan -->
								<!-- d-flex justify-content-center biar posisi konten berada di tengah -->
								<!-- mx-2 untuk rata kanan kirnya jaraknya sama -->
								<div class="row login-form d-flex justify-content-center mx-2">
										<!-- col-12 untuk mobile -->
										<!-- col-md-6 untuk desktop atau tablet, md-6 agar ukurannya engga gede2 baget. kalo ga pecaya ganti jadi 8, pasti gede -->
										<div class="col-12 col-md-6">
												<!-- section konten form login -->
												<!-- pt-3 dan mt-3 itu utk memberi jarak dari atas. biar konntennya agak turun. coba hilangin kalo ga percaya -->
												<div class="form-login pt-3 align-items-center mt-3">
														<!-- d-lg-none untuk kontennya di desktop dihide -->
														<div class="logo text-center d-lg-none">
																<!-- gambar atas ketika mobile -->
																<img src="/img/Logo-PAY-gold.png" class="w-50 mb-4 mb-lg-none" alt="">
														</div>
														<h3 class="login-title">
																Selamat Datang ! <br />Yayasan RM. Suryowinoto Yogyakarta
														</h3>
														<!-- mt-4 utk memberikan jarak antara login tittle(selamat datang) dan form ligin (dari username masuk) -->
														<form action="" class="mt-4">
																<div class="form-group">
																		<label for="">Username</label>
																		<input type="text" class="form-control" name="" id="">
																</div>
																<div class="form-group">
																		<label for="">Kata Sandi</label>
																		<input type="password" class="form-control" name="" id="">
																</div>
																<div class="form-group form-check">
																		<input type="checkbox" class="form-check-input" id="ingkat" name="remember">
																		<label class="form-check-label" for="ingkat">Ingatkan Saya</label>
																</div>
																<p class="text-right">
																		<a href="">Lupa <b>Password</b> ?</a>
																</p>
																<div class="col text-center">
																		<button class="btn btn-login-auth btn-block">Masuk</button>
																</div>
														</form>
												</div>
										</div>
								</div>
						</div>
						<!-- buat section login
																														<div class="form-login pt-3 align-item-center mt-3">
																																		logo 
																																			d-lg-none untuk membuat yang tampilan yang mobile. nnt logo yang d desktop ilang 
																																		<div class="logo text-center d-lg-none">
																																						<img src="/img/Logo-PAY-gold.png" alt="">
																																		</div>
																																		<h3 class="login-title"> 
																																						Selamat Datang! <br /> Yayasan RM. Suryowinoto Yogyakarta
																																		</h3>

																														</div> -->

				</div>
		</div>
@endsection
