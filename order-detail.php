<!doctype html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/dashboard/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2023 10:43:31 GMT -->
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
								<h2 class="fs-4 mb-0">Order List</h2>
								<p class="mb-0">Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="card rounded-4">
							<header class="card-header bg-transparent p-7">
								<div class="row align-items-center">
									<div class="col-md-6 mb-lg-0 mb-6">
										<span class="d-inline-block"><i class="far fa-calendar me-3"></i>Wed, Aug 13,
											2020, 4:34PM </span>
										<br>
										<small class="text-muted">Order ID: 3453012</small>
									</div>
									<div class="col-md-6 ml-auto d-flex justify-content-md-end flex-wrap">
										<div class="mw-210 me-5 my-3">
											<select class="form-select">
												<option>Change status</option>
												<option>Awaiting payment</option>
												<option>Confirmed</option>
												<option>Shipped</option>
												<option>Delivered</option>
											</select>
										</div>
										<a class="btn btn-primary my-3" href="#">Save</a>
										<a class="btn btn-dark print ms-5 my-3" href="#"><i
												class="far fa-print"></i></a>
									</div>
								</div>
							</header>



							<div class="card-body p-7">


								<div class="row mb-8 mt-4 order-info-wrap">
									<aside class="col-lg-3 border-end px-8">
										<nav class="nav nav-pills flex-lg-column mb-7 nav-add-product">
											<a class="nav-link active" aria-current="page" href="order-detail.php">Order
												list</a>
											<a class="nav-link" href="profile-setting.php">My profile</a>
											<a class="nav-link" href="#">Customer Care</a>

										</nav>
									</aside>
									<div class="col-md-3 mb-md-0 mb-7">
										<div class="d-flex flex-nowrap">
											<div class="icon-wrap">
												<span
													class="rounded-circle px-6 py-5 bg-green-light me-6 text-green d-inline-block">
													<i class="fas fa-user px-1"></i>
												</span>
											</div>
											<div class="media-body">
												<h6 class="mb-4">Customer</h6>
												<p class="mb-4">
													John Alexander <br>
													alex@example.com <br>
													+998 99 22123456
												</p>
												<a href="#" class="btn-link-custom">View profile</a>
											</div>
										</div>
									</div>
									<div class="col-md-3 mb-md-0 mb-7">
										<div class="d-flex flex-nowrap">
											<div class="icon-wrap">
												<span
													class="rounded-circle p-5 bg-green-light me-6 text-green d-inline-block">
													<i class="fas fa-truck px-2"></i>
												</span>
											</div>
											<div class="media-body">
												<h6 class="mb-4">Order info</h6>
												<p class="mb-4">
													Shipping: Fargo express <br>
													Pay method: card <br>
													Status: new
												</p>
												<a href="#" class="btn-link-custom">Download info</a>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="d-flex flex-nowrap">
											<div class="icon-wrap">
												<span
													class="rounded-circle p-5 bg-green-light me-6 text-green d-inline-block">
													<i class="fas fa-truck px-2"></i>
												</span>
											</div>
											<div class="media-body">
												<h6 class="mb-4">Deliver to</h6>
												<p class="mb-4">
													City: Tashkent, Uzbekistan <br>Block A, House 123, Floor 2 <br>
													Po Box 10000
												</p>
												<a href="#" class="btn-link-custom">View profile</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">

									<!-- <aside class="col-lg-3 border-end px-8">
										<nav class="nav nav-pills flex-lg-column mb-7 nav-add-product">
											<a class="nav-link active" aria-current="page" href="#">General</a>
											<a class="nav-link" href="#">Moderators</a>
											<a class="nav-link" href="#">Admin account</a>
											<a class="nav-link" href="#">SEO settings</a>
											<a class="nav-link" href="#">Mail settings</a>
											<a class="nav-link" href="#">Newsletter</a>
										</nav>
									</aside> -->
									<div class="col-lg-9">
										<div class="table-responsive">
											<table class="table table-borderless">
												<thead>
													<tr>
														<th>Product</th>
														<th>Unit Price</th>
														<th>Quantity</th>
														<th class="text-end">Total</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center flex-nowrap">
																<a href="../shop/product-details-v1.html"
																	title="Flowers cotton dress">
																	<img src="#"
																		data-src="../assets/images/products/product-03-75x100.jpg"
																		alt="Flowers cotton dress" class="lazy-image"
																		width="60" height="80">
																</a>
																<a href="../shop/product-details-v1.html"
																	title="Flowers cotton dress" class="ms-6">
																	<p class="fw-semibold text-body-emphasis mb-0">
																		Flowers cotton dress</p>
																</a>
															</div>
														</td>
														<td>$44.25</td>
														<td>2</td>
														<td class="text-end">$88.50</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center flex-nowrap">
																<a href="../shop/product-details-v1.html"
																	title="Hoodie with pocket">
																	<img src="#"
																		data-src="../assets/images/products/product-04-75x100.jpg"
																		alt="Hoodie with pocket" class="lazy-image"
																		width="60" height="80">
																</a>
																<a href="../shop/product-details-v1.html"
																	title="Hoodie with pocket" class="ms-6">
																	<p class="fw-semibold text-body-emphasis mb-0">
																		Hoodie with pocket</p>
																</a>
															</div>
														</td>
														<td>$7.50</td>
														<td>2</td>
														<td class="text-end">$15.00</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center flex-nowrap">
																<a href="../shop/product-details-v1.html"
																	title="Oversize cotton sweatshirt">
																	<img src="#"
																		data-src="../assets/images/products/product-06-75x100.jpg"
																		alt="Oversize cotton sweatshirt"
																		class="lazy-image" width="60" height="80">
																</a>
																<a href="../shop/product-details-v1.html"
																	title="Oversize cotton sweatshirt" class="ms-6">
																	<p class="fw-semibold text-body-emphasis mb-0">
																		Oversize cotton sweatshirt</p>
																</a>
															</div>
														</td>
														<td>$43.50</td>
														<td>2</td>
														<td class="text-end">$87.00</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center flex-nowrap">
																<a href="../shop/product-details-v1.html"
																	title="Striped cotton-blend sweatshirt">
																	<img src="#"
																		data-src="../assets/images/products/product-09-75x100.jpg"
																		alt="Striped cotton-blend sweatshirt"
																		class="lazy-image" width="60" height="80">
																</a>
																<a href="../shop/product-details-v1.html"
																	title="Striped cotton-blend sweatshirt"
																	class="ms-6">
																	<p class="fw-semibold text-body-emphasis mb-0">
																		Striped cotton-blend sweatshirt</p>
																</a>
															</div>
														</td>
														<td>$99.00</td>
														<td>3</td>
														<td class="text-end">$297.00</td>
													</tr>
													<tr>
														<td colspan="4">
															<div
																class="d-flex flex-column align-items-end justify-content-end">
																<div class="mw-40 w-40">
																	<div class="d-flex w-100">
																		<span
																			class="d-inline-block w-50">Subtotal:</span>
																		<span
																			class="d-inline-block w-50 text-end fw-normal">$973.35</span>
																	</div>
																	<div class="d-flex w-100">
																		<span class="d-inline-block w-50">Shipping
																			cost:</span>
																		<span
																			class="d-inline-block w-50 text-end fw-normal">$10.00</span>
																	</div>
																	<div class="d-flex w-100 mb-5">
																		<span class="d-inline-block w-50">Grand
																			total:</span>
																		<span
																			class="d-inline-block w-50 text-end fs-5 fw-semibold">$983.00</span>
																	</div>
																	<div class="d-flex w-100">
																		<span
																			class="d-inline-block w-50 text-muted">Status:</span>
																		<span
																			class="d-inline-block w-50 text-end fs-20 fw-semibold"><span
																				class="badge rounded-pill alert alert-success text-success fs-12px px-4 py-3">Payment
																				done</span>
																		</span>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-lg-4 offset-lg-1">
										<div class="box shadow-sm bg-body-tertiary p-6">
											<h6 class="mb-6">Payment info</h6>
											<div>
												<div class="d-flex">
													<div class="me-4">
														<img src="../assets/images/dashboard/master-card.png"
															class="border" alt="Card" width="28">
													</div>
													<p class="mb-0"> Master Card **** ****4768</p>
												</div>
												<p class="mb-0">
													Business name: Grand Market LLC <br>
													Phone: +1 (800) 555-154-52
												</p>
											</div>
										</div>
										<div class="h-25 pt-8">
											<div class="mb-6">
												<label
													class="mb-5 fs-13px ls-1 fw-semibold text-uppercase">Notes</label>
												<textarea class="form-control" name="notes" id="notes"
													placeholder="Type some note"></textarea>
											</div>
											<button class="btn btn-primary">Save note</button>
										</div>
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


<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/dashboard/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2023 10:43:31 GMT -->

</html>