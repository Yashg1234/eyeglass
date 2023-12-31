<!doctype html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/dashboard/order-list-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2023 10:43:30 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Shop Layout V2 - Glowing - Bootstrap 5 HTML Templates</title>
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
	<div class="wrapper dashboard-wrapper">
		<div class="d-flex flex-wrap flex-xl-nowrap">
			<div class="db-sidebar bg-body">
				<aside class="navbar navbar-expand-xl navbar-light d-block px-0 header-sticky dashboard-nav py-0">
					<div class="sticky-area border-right">
						<div class="d-flex px-6 px-xl-10 w-100 border-bottom py-7 justify-content-between">
							<a href="../index-2.html" class="navbar-brand py-4">
								<img class="light-mode-img" src="../assets/images/others/logo.png" width="179"
									height="26" alt="Glowing - Bootstrap 5 HTML Templates">
								<img class="dark-mode-img" src="../assets/images/others/logo-white.png" width="179"
									height="26" alt="Glowing - Bootstrap 5 HTML Templates"></a>
							<div class="ml-auto d-flex align-items-center ">
								<div class="d-flex align-items-center d-xl-none">
									<div class="color-modes position-relative px-4">
										<a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
											href="#" aria-expanded="true" data-bs-toggle="dropdown"
											data-bs-display="static" aria-label="Toggle theme (light)">
											<svg class="bi my-1 theme-icon-active">
												<use href="#sun-fill"></use>
											</svg>
										</a>
										<ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
											<li>
												<button type="button"
													class="dropdown-item d-flex align-items-center active"
													data-bs-theme-value="light" aria-pressed="true">
													<svg class="bi me-4 opacity-50 theme-icon">
														<use href="#sun-fill"></use>
													</svg>
													Light
													<svg class="bi ms-auto d-none">
														<use href="#check2"></use>
													</svg>
												</button>
											</li>
											<li>
												<button type="button" class="dropdown-item d-flex align-items-center"
													data-bs-theme-value="dark" aria-pressed="false">
													<svg class="bi me-4 opacity-50 theme-icon">
														<use href="#moon-stars-fill"></use>
													</svg>
													Dark
													<svg class="bi ms-auto d-none">
														<use href="#check2"></use>
													</svg>
												</button>
											</li>
											<li>
												<button type="button" class="dropdown-item d-flex align-items-center"
													data-bs-theme-value="auto" aria-pressed="false">
													<svg class="bi me-4 opacity-50 theme-icon">
														<use href="#circle-half"></use>
													</svg>
													Auto
													<svg class="bi ms-auto d-none">
														<use href="#check2"></use>
													</svg>
												</button>
											</li>
										</ul>
									</div>
									<div class="dropdown no-caret py-4 px-3 d-flex align-items-center notice me-6">
										<a href="#"
											class="dropdown-toggle text-body-emphasis fs-5 fw-500 lh-1 position-relative"
											data-bs-toggle="dropdown">
											<i class="far fa-bell"></i>
											<span
												class="badge bg-primary rounded-pill position-absolute fw-bold fs-13px bottom-100 start-100 translate-middle-x">1</span>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item" href="#">Action</a>
											<a class="dropdown-item" href="#">Another action</a>
											<a class="dropdown-item" href="#">Something else here</a>
										</div>
									</div>
								</div>
								<button class="navbar-toggler border-0 px-0" type="button" data-bs-toggle="collapse"
									data-bs-target="#primaryMenuSidebar" aria-controls="primaryMenuSidebar"
									aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
							</div>
						</div>
						<div class="collapse navbar-collapse bg-body position-relative z-index-5"
							id="primaryMenuSidebar">
							<form class="d-block d-xl-none pt-8 px-6">
								<div class="input-group position-relative bg-body-tertiary">
									<input type="text" class="form-control border-0 bg-transparent pl-4 shadow-none"
										placeholder="Search Item">
									<div class="input-group-append fs-14px px-6 border-start border-2x ">
										<button class="bg-transparent border-0 outline-none py-5">
											<i class="far fa-search"></i>
										</button>
									</div>
								</div>
							</form>
							<ul class="list-group list-group-flush list-group-no-border w-100 p-6">
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
									<a href="dashboard.html"
										class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center"
										title="Dashboard">
										<span class="sidebar-item-icon w-40px d-inline-block text-muted">
											<i class="fas fa-home-lg-alt"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Dashboard</span>
									</a>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
									<a href="#product"
										class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative"
										data-bs-toggle="collapse" aria-expanded="false" title="Products">
										<span class="sidebar-item-icon d-inline-block w-40px text-muted">
											<i class="fas fa-shopping-bag"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Products</span>
										<span class="position-absolute top-50 end-5 translate-middle-y"><i
												class="far fa-angle-down"></i></span>
									</a>
									<div class="collapse menu-collapse" id="product">
										<ul class="sub-menu list-unstyled">
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="product-list.html" title="Product List">Product List</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="product-grid.html" title="Product Grid">Product Grid</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="product-grid-02.html" title="Product Grid 2">Product Grid
													2</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="product-categories.html" title="Categoried">Categoried</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
									<a href="#order"
										class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative"
										data-bs-toggle="collapse" aria-expanded="false" title="Order">
										<span class="sidebar-item-icon d-inline-block w-40px text-muted">
											<i class="fas fa-shopping-cart"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Order</span>
										<span class="position-absolute top-50 end-5 translate-middle-y"><i
												class="far fa-angle-down"></i></span>
									</a>
									<div class="collapse menu-collapse" id="order">
										<ul class="sub-menu list-unstyled">
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="order-list.html" title="Order List 1">Order List 1</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="order-list-2.html" title="Order List 2">Order List 2</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="order-detail.html" title="Order detail">Order detail</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
									<a href="#sellers"
										class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative"
										data-bs-toggle="collapse" aria-expanded="false" title="Sellers">
										<span class="sidebar-item-icon d-inline-block w-40px text-muted">
											<i class="fas fa-users"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Sellers</span>
										<span class="position-absolute top-50 end-5 translate-middle-y"><i
												class="far fa-angle-down"></i></span>
									</a>
									<div class="collapse menu-collapse" id="sellers">
										<ul class="sub-menu list-unstyled">
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="sellers-cards.html" title="Sellers Cards">Sellers Cards</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="sellers-list.html" title="Sellers List">Sellers List</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="sellers-profile.html" title="Sellers Profile">Sellers
													Profile</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
									<a href="#add_product"
										class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative"
										data-bs-toggle="collapse" aria-expanded="false" title="Add Product">
										<span class="sidebar-item-icon d-inline-block w-40px text-muted">
											<i class="fas fa-plus-square"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Add Product</span>
										<span class="position-absolute top-50 end-5 translate-middle-y"><i
												class="far fa-angle-down"></i></span>
									</a>
									<div class="collapse menu-collapse" id="add_product">
										<ul class="sub-menu list-unstyled">
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="add-product-1.html" title="Add Product 1">Add Product 1</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="add-product-2.html" title="Add Product 2">Add Product 2</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="add-product-3.html" title="Add Product 3">Add Product 3</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="add-product-4.html" title="Add Product 4">Add Product 4</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
									<a href="#transaction"
										class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative"
										data-bs-toggle="collapse" aria-expanded="false" title="Transactions">
										<span class="sidebar-item-icon d-inline-block w-40px text-muted">
											<i class="fas fa-circle-dollar-to-slot"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Transactions</span>
										<span class="position-absolute top-50 end-5 translate-middle-y"><i
												class="far fa-angle-down"></i></span>
									</a>
									<div class="collapse menu-collapse" id="transaction">
										<ul class="sub-menu list-unstyled">
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="transactions-1.html" title="Transactions 1">Transactions 1</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="transactions-2.html" title="Transactions 2">Transactions 2</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
									<a href="#account"
										class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative"
										data-bs-toggle="collapse" aria-expanded="false" title="Account">
										<span class="sidebar-item-icon d-inline-block w-40px text-muted">
											<i class="fas fa-user"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Account</span>
										<span class="position-absolute top-50 end-5 translate-middle-y"><i
												class="far fa-angle-down"></i></span>
									</a>
									<div class="collapse menu-collapse" id="account">
										<ul class="sub-menu list-unstyled">
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="../user-login.html" title="User login">User login</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="../user-registration.html" title="User registration">User
													registration</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
									<a href="reviews.html"
										class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center"
										title="Reivews">
										<span class="sidebar-item-icon w-40px d-inline-block text-muted">
											<i class="fas fa-comment-alt"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Reivews</span>
									</a>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
									<a href="brands.html"
										class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center"
										title="Brand">
										<span class="sidebar-item-icon w-40px d-inline-block text-muted">
											<i class="fas fa-certificate"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Brand</span>
									</a>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
									<a href="#setting"
										class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative"
										data-bs-toggle="collapse" aria-expanded="false" title="Setting">
										<span class="sidebar-item-icon d-inline-block w-40px text-muted">
											<i class="fas fa-cog"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Setting</span>
										<span class="position-absolute top-50 end-5 translate-middle-y"><i
												class="far fa-angle-down"></i></span>
									</a>
									<div class="collapse menu-collapse" id="setting">
										<ul class="sub-menu list-unstyled">
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="profile-settings.html" title="Profile settings">Profile
													settings</a>
											</li>
											<li class="sidebar-item">
												<a class="sidebar-link pe-5 ps-8 py-5 lh-1 text-decoration-none fs-14px fw-semibold"
													href="site-settings.html" title="Site settings">Site settings</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
									<a href="starter-page.html"
										class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center"
										title="Starter page">
										<span class="sidebar-item-icon w-40px d-inline-block text-muted">
											<i class="fas fa-tag"></i>
										</span>
										<span class="sidebar-item-text fs-14px fw-semibold">Starter page</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</aside>
			</div>
			<div class="page-content">
				<header class="main-header bg-body position-relative d-none d-xl-block px-10 py-6">
					<div class="container-fluid">
						<nav class="navbar navbar-light py-0 row no-gutters px-3 px-lg-0">
							<div class="col-md-4 px-0 px-md-6 order-1 order-md-0">
								<form>
									<div class="input-group position-relative bg-input rounded">
										<input type="text" class="form-control border-1 pl-4 shadow-none"
											placeholder="Search Item">
										<div class="input-group-append fs-14">
											<button
												class="btn btn-hover-bg-primary btn-hover-border-primary rounded-0 rounded-end border-start border-0 h-100 px-8 py-5">
												<i class="far fa-search"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
							<div
								class="col-md-6 d-flex flex-wrap justify-content-md-end align-items-center order-0 order-md-1">
								<div class="color-modes position-relative pe-4">
									<a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
										href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static"
										aria-label="Toggle theme (light)">
										<svg class="bi my-1 theme-icon-active">
											<use href="#sun-fill"></use>
										</svg>
									</a>
									<ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
										<li>
											<button type="button" class="dropdown-item d-flex align-items-center active"
												data-bs-theme-value="light" aria-pressed="true">
												<svg class="bi me-4 opacity-50 theme-icon">
													<use href="#sun-fill"></use>
												</svg>
												Light
												<svg class="bi ms-auto d-none">
													<use href="#check2"></use>
												</svg>
											</button>
										</li>
										<li>
											<button type="button" class="dropdown-item d-flex align-items-center"
												data-bs-theme-value="dark" aria-pressed="false">
												<svg class="bi me-4 opacity-50 theme-icon">
													<use href="#moon-stars-fill"></use>
												</svg>
												Dark
												<svg class="bi ms-auto d-none">
													<use href="#check2"></use>
												</svg>
											</button>
										</li>
										<li>
											<button type="button" class="dropdown-item d-flex align-items-center"
												data-bs-theme-value="auto" aria-pressed="false">
												<svg class="bi me-4 opacity-50 theme-icon">
													<use href="#circle-half"></use>
												</svg>
												Auto
												<svg class="bi ms-auto d-none">
													<use href="#check2"></use>
												</svg>
											</button>
										</li>
									</ul>
								</div>
								<div class="dropdown no-caret px-4 mx-3 py-2">
									<a href="#"
										class="dropdown-toggle fs-5 text-decoration-none fw-500 lh-1 animation-shake position-relative"
										data-bs-toggle="dropdown">
										<i class="far fa-bell"></i>
										<span class="badge text-bg-dark rounded-circle">4</span>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</div>
								<a href="#" class="request-full-screen d-block px-4 mx-3 fs-5" title="Full screen">
									<i class="far fa-rss-square"></i>
								</a>
								<div class="dropdown px-4 mx-3 py-2 dropdown-language">
									<a href="#" class="dropdown-toggle fs-5" data-bs-toggle="dropdown"><i
											class="far fa-globe-americas"></i></a>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item text-brand" href="#"><img
												src="../assets/images/dashboard/flag-us.png" alt="English">English</a>
										<a class="dropdown-item" href="#"><img
												src="../assets/images/dashboard/flag-fr.png" alt="Français">Français</a>
										<a class="dropdown-item" href="#"><img
												src="../assets/images/dashboard/flag-jp.png" alt="Français">Français</a>
										<a class="dropdown-item" href="#"><img
												src="../assets/images/dashboard/flag-cn.png" alt="Français">Français</a>
									</div>
								</div>
								<div class="dropdown pl-2 py-2">
									<a href="#"
										class="dropdown-toggle text-heading pr-3 pr-sm-6 d-flex align-items-center justify-content-end"
										data-bs-toggle="dropdown">
										<img src="../assets/images/dashboard/avatar-2.png" alt="Ronald Hunter"
											class="rounded-circle" width="40">
									</a>
									<div class="dropdown-menu dropdown-menu-end w-100">
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">Logout</a>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</header>
				<main id="content" class="bg-body-tertiary-01 d-flex flex-column main-content">
					<div class="dashboard-page-content">
						<div class="row mb-9 align-items-center justify-content-between">
							<div class="col-sm-6 mb-8 mb-sm-0">
								<h2 class="fs-4 mb-0">Order List</h2>
								<p class="mb-0">Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-9">
								<div class="card mb-4 rounded-4 p-7">
									<div class="card-header bg-transparent px-0 pt-0 pb-7">
										<div class="row align-items-center justify-content-between">
											<div class="col-md-4 col-12 mr-auto mb-md-0 mb-6">
												<input type="text" placeholder="Search..."
													class="form-control bg-input border-0">
											</div>
											<div class="col-md-8">
												<div class=" row justify-content-end flex-nowrap d-flex">
													<div class="col-lg-3 col-md-6 col-6">
														<select class="form-select">
															<option>Status</option>
															<option>Active</option>
															<option>Disabled</option>
															<option>Show all</option>
														</select>
													</div>
													<div class="col-lg-3 col-md-6 col-6">
														<select class="form-select">
															<option>Show 20</option>
															<option>Show 30</option>
															<option>Show 40</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body px-0 pt-7 pb-0">
										<div class="table-responsive">
											<table
												class="table table-hover align-middle table-nowrap mb-0 table-borderless">
												<thead class="table-light">
													<tr>
														<th class="align-middle" scope="col">#ID
														</th>
														<th class="align-middle" scope="col">Customer Name
														</th>
														<th class="align-middle" scope="col">Price
														</th>
														<th class="align-middle" scope="col">Status
														</th>
														<th class="align-middle" scope="col">Date
														</th>
														<th class="align-middle text-center" scope="col">Actions
														</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="#">#901</a></td>
														<td class="text-body-emphasis">Marvin McKinney</td>
														<td>$9.00</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-warning border-0 text-capitalize fs-12">Pending</span>
														</td>
														<td>03.12.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="#">#2323</a></td>
														<td class="text-body-emphasis">Leslie Alexander</td>
														<td>$46.61</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-warning border-0 text-capitalize fs-12">Pending</span>
														</td>
														<td>21.02.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="#">#1233</a></td>
														<td class="text-body-emphasis">Esther Howard</td>
														<td>$9.00</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-danger border-0 text-capitalize fs-12">Cancel</span>
														</td>
														<td>03.12.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="#">#901</a></td>
														<td class="text-body-emphasis">Marvin McKinney</td>
														<td>$9.00</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-success border-0 text-capitalize fs-12">Received</span>
														</td>
														<td>03.12.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="#">#2323</a></td>
														<td class="text-body-emphasis">Leslie Alexander</td>
														<td>$46.61</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-success border-0 text-capitalize fs-12">Received</span>
														</td>
														<td>21.02.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="#">#1233</a></td>
														<td class="text-body-emphasis">Esther Howard</td>
														<td>$9.00</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-success border-0 text-capitalize fs-12">Received</span>
														</td>
														<td>03.12.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="#">#901</a></td>
														<td class="text-body-emphasis">Marvin McKinney</td>
														<td>$9.00</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-warning border-0 text-capitalize fs-12">Pending</span>
														</td>
														<td>03.12.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="#">#2323</a></td>
														<td class="text-body-emphasis">Leslie Alexander</td>
														<td>$46.61</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-success border-0 text-capitalize fs-12">Received</span>
														</td>
														<td>21.02.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="#">#1233</a></td>
														<td class="text-body-emphasis">Esther Howard</td>
														<td>$9.00</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-danger border-0 text-capitalize fs-12">Cancel</span>
														</td>
														<td>03.12.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td><a href="#">#901</a></td>
														<td class="text-body-emphasis">Marvin McKinney</td>
														<td>$9.00</td>
														<td>
															<span
																class="badge rounded-lg rounded-pill alert py-3 px-4 mb-0 alert-success border-0 text-capitalize fs-12">Received</span>
														</td>
														<td>03.12.2020</td>
														<td class="text-center">
															<div class="d-flex flex-nowrap justify-content-center">
																<a href="order-detail.html"
																	class="btn btn-primary py-4 fs-13px btn-xs me-4">Detail</a>
																<div class="dropdown no-caret">
																	<a href="#" data-bs-toggle="dropdown"
																		class="dropdown-toggle btn btn-outline-primary btn-xs hover-white btn-hover-bg-primary py-4 px-5">
																		<i class="far fa-ellipsis-h"></i> </a>
																	<div class="dropdown-menu dropdown-menu-end m-0">
																		<a class="dropdown-item"
																			href="order-detail.html">View detail</a>
																		<a class="dropdown-item" href="#">Edit info</a>
																		<a class="dropdown-item text-danger"
																			href="#">Delete</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="card mb-5 rounded-4">
									<div class="card-body">
										<h5 class="mb-6 fs-6">Filter by</h5>
										<form class="form-border-1">
											<div class="mb-7">
												<label for="order_id"
													class="mb-4 fs-13px letter-spacing-01 font-weight-600 text-uppercase">Order
													ID</label>
												<input type="text" placeholder="Type here" class="form-control"
													id="order_id">
											</div>
											<div class="mb-7">
												<label for="order_customer"
													class="mb-4 fs-13px letter-spacing-01 font-weight-600 text-uppercase">Customer</label>
												<input type="text" placeholder="Type here" class="form-control"
													id="order_customer">
											</div>
											<div class="mb-7">
												<label
													class="mb-4 fs-13px letter-spacing-01 font-weight-600 text-uppercase">Order
													Status</label>
												<select class="form-select">
													<option>Published</option>
													<option>Draft</option>
												</select>
											</div>
											<div class="mb-7">
												<label for="order_total"
													class="mb-4 fs-13px letter-spacing-01 font-weight-600 text-uppercase">Total</label>
												<input type="text" placeholder="Type here" class="form-control"
													id="order_total">
											</div>
											<div class="mb-7">
												<label for="order_created_date"
													class="mb-4 fs-13px letter-spacing-01 font-weight-600 text-uppercase">Date
													Added</label>
												<input type="text" placeholder="Type here" class="form-control"
													id="order_created_date">
											</div>
											<div class="mb-7">
												<label for="order_modified_date"
													class="mb-4 fs-13px letter-spacing-01 font-weight-600 text-uppercase">Date
													Modified</label>
												<input type="text" placeholder="Type here" class="form-control"
													id="order_modified_date">
											</div>
											<div class="mb-7">
												<label for="order_customer_1"
													class="mb-4 fs-13px letter-spacing-01 font-weight-600 text-uppercase">Customer</label>
												<input type="text" placeholder="Type here" class="form-control"
													id="order_customer_1">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<nav aria-label="Page navigation example" class="mt-6 mb-4">
							<ul class="pagination justify-content-start">
								<li class="page-item active mx-3"><a class="page-link" href="#">01</a></li>
								<li class="page-item mx-3"><a class="page-link" href="#">02</a></li>
								<li class="page-item mx-3"><a class="page-link" href="#">03</a></li>
								<li class="page-item mx-3"><a class="page-link dot" href="#">...</a></li>
								<li class="page-item mx-3"><a class="page-link" href="#">16</a></li>
								<li class="page-item mx-3">
									<a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
								</li>
							</ul>
						</nav>
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

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/dashboard/order-list-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2023 10:43:31 GMT -->

</html>