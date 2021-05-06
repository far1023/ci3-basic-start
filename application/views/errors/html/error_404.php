<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Lost!</title>

	<link rel="stylesheet" href="<?= base_url();?>assets/template/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/template/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
	<div class="wrapper">

		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
			<div class="container">
				<a href="<?= site_url();?>" class="navbar-brand" title="Seksi Pengembangan Aplikasi dan TI">
					<img src="<?= base_url('assets/img/logo/kominfo.jpg') ?>" alt="Sipasti" class="brand-image img-circle"
					style="opacity: .8">
					<span class="brand-text font-weight-light text-dark"> &nbsp<b>SiPAsTI</b></span>
				</a>
			</div>
		</nav>
		<div class="content-wrapper" style="padding-bottom: 150px">
			<section class="content-header">
				<div class="container-fluid"></div>
			</section>
			<section class="content">
				<div class="error-page">
					<h2 class="headline text-muted"> 404</h2>
					<div class="error-content px-4">
						<p>
							Halaman yang dimaksud tidak ditemukan, halaman mungkin telah berubah atau dihapus.
							Silahkan <a href="<?= site_url() ?>">kembali ke Beranda</a>.
						</p>
					</div>
				</div>
			</section>
		</div>
		<footer class="main-footer text-sm text-center">
			Copyright &copy; <?php echo date('Y'); ?> Dinas Komunikasi dan Informatika Kab. Siak
		</footer>
	</div>
	<script src="<?= base_url();?>assets/template/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url();?>assets/template/dist/js/adminlte.min.js"></script>
</body>
</html>
