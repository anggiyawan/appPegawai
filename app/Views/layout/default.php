<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Layout</title>
	<link rel="shortcut icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">

	<link href="<?php echo base_url('assets/plugins/custom/leaflet/leaflet.bundle.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/plugins/custom/datatables/datatables.bundle.css'); ?>" rel="stylesheet" type="text/css">
	<!--end::Vendor Stylesheets-->


	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="<?php echo base_url('assets/plugins/global/plugins.bundle.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css">
	<!--end::Global Stylesheets Bundle-->

</head>

<body id="cc" class="easyui-layout">

	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">

		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-default  aside-hoverable " data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">

					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto px-10 pt-9 pb-5" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="/">
							<h1>Aplikasi Pegawai</h1>
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->

					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid px-4 px-lg-7">
						<!--begin::Aside Menu-->

						<?= $this->renderSection('content') ?>

					</div>
					<!--end::Aside-->

				</div>
				<!--end::Page-->
			</div>
			<!--end::Root-->

			<script src="<?php echo base_url('assets/plugins/global/plugins.bundle.js'); ?>"></script>
			<script src="<?php echo base_url('assets/js/scripts.bundle.js'); ?>"></script>
			<!--end::Global Javascript Bundle-->

			<!--begin::Vendors Javascript(used for this page only)-->
			<script src="<?php echo base_url('assets/plugins/custom/leaflet/leaflet.bundle.js'); ?>"></script>
			<script src="<?php echo base_url('assets/plugins/custom/datatables/datatables.bundle.js'); ?>"></script>
			<!--end::Vendors Javascript-->

	</body>

</html>