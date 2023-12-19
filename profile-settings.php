<!doctype html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/dashboard/profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2023 10:41:44 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>EYEGLASS|Official Website</title>
	<script src="../../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
	<link rel="icon" href="assets/images/others/favicon.ico">
	<link rel="stylesheet" href="assets/vendors/lightgallery/css/lightgallery-bundle.min.css">
	<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
	<link rel="stylesheet" href="assets/vendors/slick/slick.css">
	<link rel="stylesheet" href="assets/vendors/mapbox-gl/mapbox-gl.min.css">
	<link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css">
	<link
		href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="assets/css/theme.css">
</head>

<body>
	<?php require_once('header.php'); ?>
	<div class="wrapper dashboard-wrapper">
		<div class="d-flex flex-wrap flex-xl-nowrap">
			
			<div class="page-content">

				<main id="content" class="bg-body-tertiary-01 d-flex flex-column main-content">
					<div class="dashboard-page-content">
						<div class="row mb-9 align-items-center justify-content-between">
							<div class="col-sm-6 mb-8 mb-sm-0">
								<h2 class="fs-4 mb-0">Profile settings</h2>
							</div>
						</div>
						<div class="card mb-4 rounded-4 p-7">
							<div class="card-body pt-7 pb-0 px-0">
								<div class="row mx-n8">
									<aside class="col-lg-3 border-end px-8">
										<nav class="nav nav-pills flex-lg-column mb-7 nav-add-product">
											<a class="nav-link" href="profile-settings.php">My profile</a>
											<a class="nav-link active" aria-current="page" href="order-detail.php">Order
												list</a>

											<a class="nav-link" href="#">Customer Care</a>

										</nav>
									</aside>
									<div class="col-lg-9 px-8">
										<section class="p-xl-8">
											<form class="form-border-1">
												<div class="row">
													<div class="col-lg-8">
														<div class="row gx-9">
															<div class="col-6 mb-6">
																<label
																	class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
																	for="first-name">First name</label>
																<input class="form-control" type="text"
																	placeholder="Type here" id="first-name"
																	name="first-name">
															</div>
															<div class="col-6 mb-6">
																<label
																	class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
																	for="last-name">Last name</label>
																<input class="form-control" type="text"
																	placeholder="Type here" id="last-name"
																	name="last-name">
															</div>
															<div class="col-lg-6 mb-6">
																<label
																	class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
																	for="email">Email</label>
																<input class="form-control" type="email"
																	placeholder="example@mail.com" id="email"
																	name="email">
															</div>
															<div class="col-lg-6 mb-6">
																<label
																	class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
																	for="phone">Phone</label>
																<input class="form-control" type="tel"
																	placeholder="+1234567890" id="phone" name="phone">
															</div>
															<div class="col-lg-12 mb-6">
																<label
																	class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
																	for="address">Address</label>
																<input class="form-control" type="text"
																	placeholder="Type here" id="address" name="address">
															</div>
															<div class="col-lg-6 mb-6">
																<label
																	class="mb-5 fs-13px ls-1 fw-semibold text-uppercase"
																	for="birthday">Birthday</label>
																<input class="form-control" type="date" id="birthday"
																	name="birthday">
															</div>
														</div>
													</div>
													<aside class="col-lg-4">
														<div class="text-lg-center">
															<div class="mx-auto">
																<img class="mb-9 rounded-pill lazy-image" src="#"
																	data-src="../assets//images/dashboard/avatar-1.png"
																	alt="User Photo" height="196" width="196">
															</div>
															<div>
																<a class="btn border hover-white bg-hover-primary border-hover-primary"
																	href="#"><i class="fas fa-cloud-upload"></i> Upload
																</a>
															</div>
														</div>
													</aside>
												</div>
												<br>
												<button class="btn btn-primary" type="submit">Save changes</button>
											</form>
											<hr class="my-8">
											<div class="row">
												<div class="col-md-5">
													<article class="d-flex p-6 mb-6 bg-body-tertiary border rounded">
														<div class="mr-auto">
															<h6 class="fs-14px mb-0 font-weight-500">Password</h6>
															<small class="text-muted d-block" style="width: 70%">You can
																reset or change your password by clicking here</small>
														</div>
														<div>
															<a class="btn border btn-hover-text-light btn-hover-bg-primary btn-hover-border-primary btn-sm"
																href="#">Change</a>
														</div>
													</article>
												</div>
												<div class="col-md-5">
													<article class="d-flex p-6 mb-6 bg-body-tertiary border rounded">
														<div class="mr-auto">
															<h6 class="fs-14px mb-0 font-weight-500">Remove account</h6>
															<small class="text-muted d-block" style="width: 70%">Once
																you delete your account, there is no going back.</small>
														</div>
														<div>
															<a class="btn border btn-hover-text-light btn-hover-bg-primary btn-hover-border-primary btn-sm"
																href="#">Deactivate</a>
														</div>
													</article>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
					<footer class="pt-6 pb-10 footer-dashboard mt-auto">
						<div class="row">
							<div class="col-sm-6 text-sm-start text-center">
								<script>
									document.write(new Date().getFullYear());
								</script>
								© Glowing - Beauty & Cosmetics Shop HTML Template .
							</div>
							<div class="col-sm-6 text-sm-end text-center">
								All rights reserved
							</div>
						</div>
					</footer>
				</main>
			</div>
		</div>
	</div>
	<?php require_once("footer.php"); ?>
	<script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="assets/vendors/clipboard/clipboard.min.js"></script>
	<script src="assets/vendors/vanilla-lazyload/lazyload.min.js"></script>
	<script src="assets/vendors/waypoints/jquery.waypoints.min.js"></script>
	<script src="assets/vendors/lightgallery/lightgallery.min.js"></script>
	<script src="assets/vendors/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
	<script src="assets/vendors/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
	<script src="assets/vendors/lightgallery/plugins/video/lg-video.min.js"></script>
	<script src="assets/vendors/lightgallery/plugins/vimeoThumbnail/lg-vimeo-thumbnail.min.js"></script>
	<script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="assets/vendors/slick/slick.min.js"></script>
	<script src="assets/vendors/gsap/gsap.min.js"></script>
	<script src="assets/vendors/gsap/ScrollToPlugin.min.js"></script>
	<script src="assets/vendors/gsap/ScrollTrigger.min.js"></script>
	<script src="assets/vendors/mapbox-gl/mapbox-gl.js"></script>
	<script src="assets/js/theme.min.js"></script>
	<?php require_once("svg.php"); ?>
</body>


<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/dashboard/profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2023 10:41:44 GMT -->

</html>