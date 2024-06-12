		
		<!-- Footer Section Ending Here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>
		<!-- scrollToTop ending here -->



		<!-- <script src="<?= base_url('assets_pelanggan/'); ?>js/jquery.js"></script> -->
		<script src="<?= base_url('assets_pelanggan/'); ?>js/waypoints.min.js"></script>

		<!-- Datepicker -->
		<script src="<?= base_url('assets_admin/'); ?>vendors/datepicker/daterangepicker.js"></script>

		<!-- Select2 -->
		<script src="<?= base_url('assets_admin/'); ?>vendors/select2/js/select2.min.js"></script>

		<script src="<?= base_url('assets_pelanggan/'); ?>js/bootstrap.min.js"></script>
		<script src="<?= base_url('assets_pelanggan/'); ?>js/isotope.pkgd.min.js"></script>
		<script src="<?= base_url('assets_pelanggan/'); ?>js/wow.min.js"></script>
		<script src="<?= base_url('assets_pelanggan/'); ?>js/tab.js"></script>
		<script src="<?= base_url('assets_pelanggan/'); ?>js/swiper.min.js"></script>
		<script src="<?= base_url('assets_pelanggan/'); ?>js/lightcase.js"></script>
		<script src="<?= base_url('assets_pelanggan/'); ?>js/jquery.counterup.min.js"></script>
		<script src="<?= base_url('assets_pelanggan/'); ?>js/functions.js"></script>

		<script>
			$('.select2').select2({
				placeholder: 'Select'
			});
		</script>

		<script>
			var date2 = new Date();
			date2.setDate(date2.getDate());
			console.log(date2);

			var date3 = new Date();
			date3.setDate(date3.getDate() +31);
			console.log(date3);

			$('#datepicker').daterangepicker({
				singleDatePicker: true,
				showDropdowns: true,
				minDate:date2,
				maxDate:date3,
			});
		</script>

		</body>

		</html>