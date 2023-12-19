<!doctype html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/user-registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2023 10:41:19 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <script src="../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link rel="icon" href="assets/images/others/favicon.ico">
    <link rel="stylesheet" href="assets/vendors/lightgallery/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="assets/vendors/mapbox-gl/mapbox-gl.min.css">
    <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/theme.css">
</head>

<body>
<?php require_once("header.php"); ?>
    <main id="content" class="wrapper layout-page">
        <section class="pb-lg-20 pb-16">
            <div class="bg-body-secondary py-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                        <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Register
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="container">
                <div class=" text-center pt-13 mb-12 mb-lg-15">
                    <div class="text-center">
                        <h2 class="fs-36px mb-11 mb-lg-14">Register</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 mx-auto">
                    <form class>
                        <div class="mb-6">
                            <label for="first_name" class="visually-hidden">Email address</label>
                            <input name="first_name" id="first_name" type="text" class="form-control"
                                placeholder="First name" required>
                        </div>
                        <div class="mb-6">
                            <label for="last_name" class="visually-hidden">Email address</label>
                            <input name="last_name" id="last_name" type="text" class="form-control"
                                placeholder="Last name" required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="visually-hidden">Email address</label>
                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email"
                                required>
                        </div>
                        <div class="mb-7">
                            <label for="password" class="visually-hidden">Email address</label>
                            <input name="password" id="password" type="password" class="form-control"
                                placeholder="Password" required>
                        </div>
                        <div class="form-check mb-7">
                            <input name="agree" type="checkbox" class="form-check-input rounded-0" id="agree_terms">
                            <label class="form-check-label text-secondary" for="agree_terms">
                                Yes, I agree with Grace <a href="#" class="text-decoration-underline">Privacy Policy</a>
                                and <a href="#" class="text-decoration-underline">Terms of Use</a>
                            </label>
                        </div>
                        <button type="submit" value="Login" class="btn btn-primary w-100">Sign Up</button>
                        <div class="border-bottom mt-10"></div>
                        <div class="text-center mt-n4 lh-1 mb-7">
                            <span class="fs-14 bg-body lh-1 px-4">or Sign Up with</span>
                        </div>
                        <div class="d-flex">
                            <a href="#" class="btn btn-outline-primary w-100 px-2 font-weight-500 me-5"><i
                                    class="fab fa-facebook-f me-4" style="color: #2E58B2"></i>Facebook</a>
                            <a href="#" class="btn btn-outline-primary w-100 px-2 font-weight-500 mt-0"><i
                                    class="fab fa-google me-4" style="color: #DD4B39"></i>Google</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php require_once("footer.php"); ?>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/user-registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Oct 2023 10:41:19 GMT -->

</html>