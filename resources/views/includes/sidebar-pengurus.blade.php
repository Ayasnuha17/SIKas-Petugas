<div class="border-right" id="sidebar-wrapper">
		<!-- untuk gambar biar ditengah -->
		<div class="sidebar-heading d-flex justify-content-center">
				<img src="/img/LogoPAYbitmap.png" width="50" alt="" class="my-4 mr-2">
				<div class="heading-title text-left my-4">
						Sistem Kas Yayasan <br> RM. Suryowinoto Yogyakarta
				</div>
		</div>
		<!-- navigasi sidebar list group -->
		<div class="list-group list-group-flush">
				<a href="{{url('pengurus')}}" class="list-group-item list-group-item-action {{ Request::segment(2) == '' ? 'active' : ''}}">
						Dashboard
				</a>
				<a href="{{url('pengurus/kasmasuk')}}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'kasmasuk' ? 'active' : ''}}">
						Kas Masuk
				</a>
				<a href="{{url('pengurus/kaskeluar')}}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'kaskeluar' ? 'active' : ''}}">
						Kas Keluar
				</a>
				<a href="{{url('pengurus/rekaptotal')}}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'rekaptotal' ? 'active' : ''}}">
						Rekap Total
				</a>
				<a href="{{url('pengurus/donatur')}}" class="list-group-item list-group-item-action {{ Request::segment(2) == 'donatur' ? 'active' : ''}}">
						Donatur
				</a>
		</div>
</div>
