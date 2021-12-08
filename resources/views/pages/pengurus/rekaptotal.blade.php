{{-- templating berasal dari app pada folder layouts --}}
@extends('layouts.app-pengurus')

@section('title')
		Rekap Total SI PAY - Pengurus
@endsection

{{-- pake section karena kontennya nanti isinya beda-beda --}}
@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up"
>
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Rekap Total</h2>
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
                                Saldo
                            </div>
                            <!-- kelas untuk nominalnya -->
                            <div class="dashboard-card-subtitle">
                                    Rp 5,000,000
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
                                            <th>Id Kas</th>
                                            <th>Tanggal</th>
                                            <th>Asal Pemasukan</th>
                                            <th>Tipe Pengeluaran</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                            <th>Saldo</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-table">
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
                                <hr>
                                <div>
                                        <a href="#">Lihat Semua</a>
                                </div>
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
