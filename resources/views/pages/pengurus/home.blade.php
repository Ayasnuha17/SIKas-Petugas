{{-- templating berasal dari app pada folder layouts --}}
@extends('layouts.app-pengurus')

@section('title')
		Dashboard SI PAY - Pengurus
@endsection

{{-- pake section karena kontennya nanti isinya beda-beda --}}
@section('content')
		<div class="section-content section-dashboard-home" data-aos="fade-up">
				<div class="container-fluid">
						<div class="dashboard-heading">
								<h2 class="dashboard-title">Dashboard</h2>
								<p class="dashboard-subtitle">Selamat datang Pengurus Yayasan RM.Suryowinoto Yogyakarta
								</p>
						</div>
						<!-- untuk kotak saldo yang di dalem konten -->
						<div class="dashboard-content">
								<div class="row">
										<div class="col-md-4">
												<div class="card mb-2">
														<div class="card-body">
																<div class="dashboard-card-title">
																		Saldo
																</div>
																<!-- kelas untuk nominalnya -->
																<div class="dashboard-card-subtitle">
																		Rp 2,000,000
																</div>
														</div>
												</div>
										</div>
								</div>
								<div class="row mt-4">
										<div class="col-12 col-md-11 mt-2">
												<div class="card mb-3">
														<div class="card-body">
																<h5>
																		Rekapan Terbaru
																</h5>
																<div class="table-responsive-xl">
																		<table class="table table-borderless">
																				<thead class="thead-table">
																						<tr>
																								<th>No</th>
																								<th>Id Rekap Total</th>
																								<th>Tanggal</th>
																								<th>Asal Pemasukan</th>
																								<th>Tipe Pengeluaran</th>
																								<th>Debit</th>
																								<th>Kredit</th>
																								<th>Saldo</th>
																								<th>Aksi</th>
																						</tr>
																				</thead>
																				<tbody>
																						<tr>
																								<td>1.</td>
																								<td>SW0012020</td>
																								<td>07/12/2020</td>
																								<td>Tamu</td>
																								<td>-</td>
																								<td>Rp 4,000,000</td>
																								<td>-</td>
																								<td>Rp 4,000,000</td>
																								<th>Detail</th>
																						</tr>
																				</tbody>
																		</table>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
@endsection
