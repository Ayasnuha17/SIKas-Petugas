{{-- templating berasal dari app pada folder layouts --}}
@extends('layouts.app-pengurus')

@section('title')
		Kas Keluar SI PAY - Pengurus
@endsection

{{-- pake section karena kontennya nanti isinya beda-beda --}}
@section('content')
		<!-- Section Content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up"
        >
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Kas Keluar</h2>
                    <p class="dashboard-sub">Selamat datang Pengurus Yayasan RM.Suryowinoto Yogyakarta
                    </p>
                </div>
                <!-- untuk kotak saldo yang di dalem konten -->
                <div class="dashboard-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="dashboard-card-title">
                                        Pengeluaran
                                    </div>
                                    <!-- kelas untuk nominalnya -->
                                    <div class="dashboard-card-subtitle">
                                            Rp 4,000,000
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="dashboard-card-title">
                                            Jumlah Kas Keluar
                                        </div>
                                        <!-- kelas untuk nominalnya -->
                                        <div class="dashboard-card-subtitle">
                                                20
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <!-- <label>Store</label> -->
                        <!-- <p class="text-muted"> Apakah anda ingin membuka toko?</p> -->
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                class="custom-control-input"
                                name="is_Semua"
                                id="SemuaTrue"
                                v-model="is_Semua"
                                :value="true"
                            />
                            <label for="SemuaTrue" class="custom-control-label">Semua</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                type="radio"
                                class="custom-control-input"
                                name="is_Semua"
                                id="SemuaFalse"
                                v-model="is_Semua"
                                :value="false"
                            />
                            <label for="SemuaFalse" class="custom-control-label">Custom</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="is_Semua"
                                    id="SemuaFalse"
                                    v-model="is_Semua"
                                    :value="false"
                                />
                                <label for="SemuaFalse" class="custom-control-label">Bulanan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                                <input
                                    type="radio"
                                    class="custom-control-input"
                                    name="is_Semua"
                                    id="SemuaFalse"
                                    v-model="is_Semua"
                                    :value="false"
                                />
                                <label for="SemuaFalse" class="custom-control-label">Tahunan</label>
                        </div>
                    
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-md-11 mt-2">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5>
                                        Pemasukan Terbaru
                                    </h5>
                                    <div class="table-responsive-xl">
                                        <table class="table table-borderless">
                                            <thead class="thead-table">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Penerima Uang</th>
                                                    <th>Petugas</th>
                                                    <th>Tipe Pengeluaran</th>
                                                    <th>Nominal</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbody-table">
                                                <tr>
                                                    <td>1.</td>
                                                    <td>2021-06-18 05:51</td>
                                                    <td>Natasha</td>
                                                    <td>Noviana</td>
                                                    <td>Tamu</td>
                                                    <td>Rp 4,000,000</td>
                                                    <th>
                                                        <a href="detailkeluar-pengurus.html">Detail</a>
                                                    </th>
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
