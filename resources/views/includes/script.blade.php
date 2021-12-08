		<!-- JQuery and Bootstrap Bundle (includes Popper) -->
		<script src="/vendor/jquery/jquery.slim.min.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<!-- Animate -->
		<script>
		  AOS.init();
		</script>

		<!-- menampilkan menu sidebar mobile -->
		<script>
		  $("#menu-toggle").click(function(e) {
		    e.preventDefault();
		    $("#wrapper").toggleClass("toggled");
		  });
		</script>
