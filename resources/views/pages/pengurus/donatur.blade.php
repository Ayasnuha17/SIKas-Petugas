{{-- templating berasal dari app pada folder layouts --}}
@extends('layouts.app-pengurus')

@section('title')
		Donatur SI PAY - Pengurus
@endsection

{{-- pake section karena kontennya nanti isinya beda-beda --}}
@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up"
>
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Donatur</h2>
            <p class="dashboard-sub">Selamat datang Pengurus Yayasan RM.Suryowinoto Yogyakarta
            </p>
        </div>
        <!-- untuk kotak saldo yang di dalem konten -->
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Total Donatur
                            </div>
                            <!-- kelas untuk nominalnya -->
                            <div class="dashboard-card-subtitle">
                                    15.000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Donatur Tetap
                                </div>
                                <!-- kelas untuk nominalnya -->
                                <div class="dashboard-card-subtitle">
                                        20
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-3">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">
                                    Donatur Tidak Tetap
                                </div>
                                <!-- kelas untuk nominalnya -->
                                <div class="dashboard-card-subtitle">
                                        20
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Tipe Donatur</label>
                        <select name="category" class="form-control">
                            <option value="" disabled>
                                Select Tipe Donatur
                            </option>
                        </select>
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
                                            <th>Nama</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                                            <th>Tipe Donatur</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-table">
                                        <tr>
                                            <td>1.</td>
                                            <td>Natasha</td>
                                            <td>0812837373</td>
                                            <td>Notoprajan NG/ II 647 B RT 36 RW 06 Ngampilan Yogyakarta</td>
                                            <td>Tetap</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <div>
                                    <a href="#">Cetak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
