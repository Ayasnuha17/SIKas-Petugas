{{-- templating berasal dari app pada folder layouts --}}
@extends('layouts.app-pengurus')

@section('title')
		Donatur SI PAY - Pengurus
@endsection

{{-- pake section karena kontennya nanti isinya beda-beda --}}
@section('content')
     <!-- Section Content -->
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
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label>Id Donatur</label>
                                                 <input input="text" class="form-control"/>
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label>Nama Petugas</label>
                                                         <input input="text" class="form-control"/>
                                                 </div>
                                             </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label>Nama Penerima Uang</label>
                                                     <input input="text" class="form-control"/>
                                                 </div>
                                         </div>
                                         <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label>Tipe Pengeluaran</label>
                                                     <input input="text" class="form-control"/>
                                                 </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                             <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label>Nominal</label>
                                                         <input input="text" class="form-control"/>
                                                     </div>
                                             </div>
                                             <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label>Bukti Pengeluaran</label>
                                                         <input input="text" class="form-control"/>
                                                     </div>
                                             </div>
                                     </div>
                                     <div class="row">
                                             <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label>Tanggal</label>
                                                         <input input="text" class="form-control"/>
                                                     </div>
                                             </div>
                                     </div>
                                     <div class="row">
                                             <div class="col-md-6">
                                                     <div class="form-group">
                                                         <label>Waktu</label>
                                                         <input input="text" class="form-control"/>
                                                     </div>
                                             </div>
                                     </div>
                                          
                                     <div class="col text-right">
                                         <button type="submit" class="btn btn-success px-5">Cetak</button>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
                 
         </div>
         
     </div>
 </div>
@endsection
