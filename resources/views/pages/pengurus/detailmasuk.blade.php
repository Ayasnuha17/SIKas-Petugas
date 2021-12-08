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
                            <h2 class="dashboard-title">Detail Kas Masuk</h2>
                            <p class="dashboard-sub">Selamat datang Pengurus Yayasan RM.Suryowinoto Yogyakarta
                            </p>
                        </div>
                        <!-- untuk kotak saldo yang di dalem konten -->
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-10">
                                    <form action="">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive-xl">
                                                    <div class="col-md-12">
                                                        <table class="table table-borderless">
                                                            <tr>
                                                                <div class="col-md-6">
                                                                    <td>Id Donatur</td>
                                                                </div>
                                                                <td>:</td>
                                                                <td>
                                                                    <input type="text" class="form-control"/>
                                                                </td>
                                                                <div class="col-md-6">
                                                                        <td>Nama Petugas</td>
                                                                </div>
                                                                <td>:</td>
                                                                <td>
                                                                    <input type="text" class="form-control"/>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                    <div class="col-md-6">
                                                                        <td>Tipe Donatur</td>
                                                                    </div>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <input type="text" class="form-control"/>
                                                                    </td>
                                                                    <div class="col-md-6">
                                                                        <td>Asal Pemasukan</td>
                                                                    </div>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <input type="text" class="form-control"/>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <div class="col-md-6">
                                                                        <td>Nama Donatur</td>
                                                                    </div>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <input type="text" class="form-control"/>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <div class="col-md-6">
                                                                        <td>Nominal</td>
                                                                    </div>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <input type="text" class="form-control"/>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <div class="col-md-6">
                                                                        <td>Tanggal</td>
                                                                    </div>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <input type="text" class="form-control"/>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                    <div class="col-md-6">
                                                                        <td>Jam</td>
                                                                    </div>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <input type="text" class="form-control"/>
                                                                    </td>
                                                            </tr>
                                                        </table>
                                                        <div class="row">
                                                            <div class="col text-right">
                                                                <button type="submit" class="btn btn-success px-5">Cetak</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label>Id Donatur</label>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>
@endsection
