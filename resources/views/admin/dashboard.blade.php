<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
	<meta name="description" content="Jobi is a beautiful website template designed for job board websites.">
    <meta property="og:site_name" content="Jano">
    <meta property="og:url" content="https://creativegigstf.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Jobi - Responsive Job Board HTML Template">
	<meta name='og:image' content='{{ url('')}}/assets/images/{{ url('')}}/assets/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#244034">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#244034">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#244034">
	<title>MrKim</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.min.css') }}" media="all">

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>

<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
				Loading Transition
			==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
	
				<div class="txt-loading">
					<span data-text-preloader="M" class="letters-loading">
						M
					</span>
                    <span data-text-preloader="M" class="letters-loading">
						r
					</span>
					<span data-text-preloader="K" class="letters-loading">
						K
					</span>
					<span data-text-preloader="i" class="letters-loading">
						i
					</span>
					<span data-text-preloader="m" class="letters-loading">
						m
					</span>
				</div>
			</div>
		</div>

		<!-- 
		=============================================
				Dashboard Aside Menu
		============================================== 
		-->
		<aside class="dash-aside-navbar">
			<div class="position-relative">
				<div class="logo text-md-center d-md-block d-flex align-items-center justify-content-between">
					<a href="candidate-dashboard-index.html">
						<img src="images/logo_01.png" alt="">
					</a>
					<button class="close-btn d-block d-md-none"><i class="bi bi-x-lg"></i></button>
				</div>
				<div class="user-data">
					<div class="user-avatar online position-relative rounded-circle">
						<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/avatar_03.jpg" alt="" class="lazy-img">
					</div>
					<!-- /.user-avatar -->
					<div class="user-name-data">
						<button class="user-name dropdown-toggle" type="button" id="profile-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
							Mr. Kim
						</button>
						<ul class="dropdown-menu" aria-labelledby="profile-dropdown">
						    <li>
                                <a class="dropdown-item d-flex align-items-center" href="candidate-dashboard-profile.html"><img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_23.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Profile</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="candidate-dashboard-settings.html"><img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_24.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Account Settings</span></a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="employer-dashboard-index.html#"><img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_25.svg" alt="" class="lazy-img"><span class="ms-2 ps-1">Notification</span></a>
                            </li>
						</ul>
					</div>
				</div>
				<!-- /.user-data -->
				<nav class="dasboard-main-nav">
					<ul class="style-none">
						<li><a href="employer-dashboard-index.html#" class="d-flex w-100 align-items-center active">
							<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_1_active.svg" alt="" class="lazy-img">
							<span>Dashboard</span>
						</a></li>
						<li><a href="employer-dashboard-profile.html" class="d-flex w-100 align-items-center">
							<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_2.svg" alt="" class="lazy-img">
							<span>My Profile</span>
						</a></li>
						<li><a href="employer-dashboard-jobs.html" class="d-flex w-100 align-items-center">
							<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_3.svg" alt="" class="lazy-img">
							<span>My Jobs</span>
						</a></li>
						<li><a href="employer-dashboard-message.html" class="d-flex w-100 align-items-center">
							<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_4.svg" alt="" class="lazy-img">
							<span>Messages</span>
						</a></li>
                        <li><a href="employer-dashboard-submit-job.html" class="d-flex w-100 align-items-center">
							<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_39.svg" alt="" class="lazy-img">
							<span>Submit Job</span>
						</a></li>
                        <li><a href="employer-dashboard-saved-candidate.html" class="d-flex w-100 align-items-center">
							<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_6.svg" alt="" class="lazy-img">
							<span>Saved Candidate</span>
						</a></li>
						<li><a href="employer-dashboard-membership.html" class="d-flex w-100 align-items-center">
							<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_40.svg" alt="" class="lazy-img">
							<span>Membership</span>
						</a></li>
						<li><a href="employer-dashboard-settings.html" class="d-flex w-100 align-items-center">
							<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_7.svg" alt="" class="lazy-img">
							<span>Account Settings</span>
						</a></li>
						<li><a href="employer-dashboard-index.html#" class="d-flex w-100 align-items-center" data-bs-toggle="modal" data-bs-target="#deleteModal">
							<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_8.svg" alt="" class="lazy-img">
							<span>Delete Account</span>
						</a></li>
					</ul>
				</nav>
				<!-- /.dasboard-main-nav -->
				<div class="profile-complete-status">
					<div class="progress-value fw-500">87%</div>
					<div class="progress-line position-relative">
						<div class="inner-line" style="width:80%;"></div>
					</div>
					<p>Profile Complete</p>
				</div>
				<!-- /.profile-complete-status -->

				<a href="employer-dashboard-index.html#" class="d-flex w-100 align-items-center logout-btn">
					<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_9.svg" alt="" class="lazy-img">
					<span>Logout</span>
				</a>
			</div>
		</aside>
		<!-- /.dash-aside-navbar -->

		<!-- 
		=============================================
			Dashboard Body
		============================================== 
		-->
		<div class="dashboard-body">
			<div class="position-relative">
				<!-- ************************ Header **************************** -->
				<header class="dashboard-header">
					<div class="d-flex align-items-center justify-content-end">
						<button class="dash-mobile-nav-toggler d-block d-md-none me-auto">
							<span></span>
						</button>
						<form action="employer-dashboard-index.html#" class="search-form">
							<input type="text" placeholder="Search here..">
							<button><img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_10.svg" alt="" class="m-auto lazy-img"></button>
						</form>
						<div class="profile-notification ms-2 ms-md-5 me-4">
							<button class="noti-btn dropdown-toggle" type="button" id="notification-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
								<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_11.svg" alt="" class="lazy-img">
								<div class="badge-pill"></div>
							</button>
							<ul class="dropdown-menu" aria-labelledby="notification-dropdown">
								<li>
									<h4>Notification</h4>
									<ul class="style-none notify-list">
										<li class="d-flex align-items-center unread">
											<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_36.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>You have 3 new mails</h6>
												<span class="time">3 hours ago</span>
											</div>
										</li>
										<li class="d-flex align-items-center">
											<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_37.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>Your job post has been approved</h6>
												<span class="time">1 day ago</span>
											</div>
										</li>
										<li class="d-flex align-items-center unread">
											<img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_38.svg" alt="" class="lazy-img icon">
											<div class="flex-fill ps-2">
												<h6>Your meeting is cancelled</h6>
												<span class="time">3 days ago</span>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div><a href="employer-dashboard-submit-job.html" class="job-post-btn tran3s">Post a Job</a></div>
					</div>
				</header>
				<!-- End Header -->

				<h2 class="main-title">Dashboard</h2>
				<div class="row">
					<div class="col-lg-3 col-6">
						<div class="bg-white dash-card-one border-30 position-relative mb-15">
							<div class="d-sm-flex align-items-center justify-content-between">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_12.svg" alt="" class="lazy-img"></div>
								<div class="order-sm-0">
									<div class="value fw-500">07</div>
									<span>Posted Job</span>
								</div>
							</div>
						</div>
						<!-- /.dash-card-one -->
					</div>
					<div class="col-lg-3 col-6">
						<div class="bg-white dash-card-one border-30 position-relative mb-15">
							<div class="d-sm-flex align-items-center justify-content-between">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_13.svg" alt="" class="lazy-img"></div>
								<div class="order-sm-0">
									<div class="value fw-500">03</div>
									<span>Shortlisted</span>
								</div>
							</div>
						</div>
						<!-- /.dash-card-one -->
					</div>
					<div class="col-lg-3 col-6">
						<div class="bg-white dash-card-one border-30 position-relative mb-15">
							<div class="d-sm-flex align-items-center justify-content-between">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_14.svg" alt="" class="lazy-img"></div>
								<div class="order-sm-0">
									<div class="value fw-500">1.7k</div>
									<span>Application</span>
								</div>
							</div>
						</div>
						<!-- /.dash-card-one -->
					</div>
					<div class="col-lg-3 col-6">
						<div class="bg-white dash-card-one border-30 position-relative mb-15">
							<div class="d-sm-flex align-items-center justify-content-between">
								<div class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"><img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/icon/icon_15.svg" alt="" class="lazy-img"></div>
								<div class="order-sm-0">
									<div class="value fw-500">04</div>
									<span>Save Candidate</span>
								</div>
							</div>
						</div>
						<!-- /.dash-card-one -->
					</div>
				</div>

				<div class="row d-flex pt-50 lg-pt-10">
					<div class="col-xl-7 col-lg-6 d-flex flex-column">
						<div class="bg-white user-activity-chart border-20 mt-30 h-100">
							<h4 class="dash-title-two">Job Views</h4>
                            <div class="d-sm-flex align-items-center job-list">
                                <div class="fw-500 pe-3">Jobs:</div>
                                <div class="flex-fill xs-mt-10">
                                    <select class="nice-select">
                                        <option>Web & Mobile Prototype designer....</option>
                                        <option>Document Writer</option>
                                        <option>Outbound Call Service</option>
                                        <option>Product Designer</option>
                                    </select>
                                </div>
                            </div>
							<div class="ps-5 pe-5 mt-50"><img src="{{ url('')}}/assets/images/lazy.svg" data-src="images/main-graph.png" alt="" class="m-auto lazy-img"></div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 d-flex">
						<div class="bg-white recent-job-tab border-20 mt-30 w-100">
							<h4 class="dash-title-two">Posted Job</h4>
							<div class="wrapper">
								<div class="job-item-list d-flex align-items-center">
									<div><img src="{{ url('')}}/assets/images/lazy.svg" data-src="{{ url('')}}/assets/images/logo/media_22.png" alt="" class="lazy-img logo"></div>
									<div class="job-title">
										<h6 class="mb-5"><a href="employer-dashboard-index.html#">Web & Mobile Prototype</a></h6>
										<div class="meta"><span>Fulltime</span> . <span>Spain</span></div>
									</div>
									<div class="job-action">
										<button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span></span>
										</button>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">View Job</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Archive</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Delete</a></li>
										</ul>
									</div>
								</div>
								<!-- /.job-item-list -->
								<div class="job-item-list d-flex align-items-center">
									<div><img src="{{ url('')}}/assets/images/lazy.svg" data-src="{{ url('')}}/assets/images/logo/media_23.png" alt="" class="lazy-img logo"></div>
									<div class="job-title">
										<h6 class="mb-5"><a href="employer-dashboard-index.html#">Document Writer</a></h6>
										<div class="meta"><span>Part-time</span> . <span>Italy</span></div>
									</div>
									<div class="job-action">
										<button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span></span>
										</button>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">View Job</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Archive</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Delete</a></li>
										</ul>
									</div>
								</div>
								<!-- /.job-item-list -->
								<div class="job-item-list d-flex align-items-center">
									<div><img src="{{ url('')}}/assets/images/lazy.svg" data-src="{{ url('')}}/assets/images/logo/media_24.png" alt="" class="lazy-img logo"></div>
									<div class="job-title">
										<h6 class="mb-5"><a href="employer-dashboard-index.html#">Outbound Call Service</a></h6>
										<div class="meta"><span>Fulltime</span> . <span>USA</span></div>
									</div>
									<div class="job-action">
										<button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span></span>
										</button>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">View Job</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Archive</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Delete</a></li>
										</ul>
									</div>
								</div>
								<!-- /.job-item-list -->
								<div class="job-item-list d-flex align-items-center">
									<div><img src="{{ url('')}}/assets/images/lazy.svg" data-src="{{ url('')}}/assets/images/logo/media_25.png" alt="" class="lazy-img logo"></div>
									<div class="job-title">
										<h6 class="mb-5"><a href="employer-dashboard-index.html#">Product Designer</a></h6>
										<div class="meta"><span>Part-time</span> . <span>Dubai</span></div>
									</div>
									<div class="job-action">
										<button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span></span>
										</button>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">View Job</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Archive</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Delete</a></li>
										</ul>
									</div>
								</div>
								<!-- /.job-item-list -->
								<div class="job-item-list d-flex align-items-center">
									<div><img src="{{ url('')}}/assets/images/lazy.svg" data-src="{{ url('')}}/assets/images/logo/media_26.png" alt="" class="lazy-img logo"></div>
									<div class="job-title">
										<h6 class="mb-5"><a href="employer-dashboard-index.html#">Marketing Specialist</a></h6>
										<div class="meta"><span>Part-time</span> . <span>UK</span></div>
									</div>
									<div class="job-action">
										<button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<span></span>
										</button>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">View Job</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Archive</a></li>
										  <li><a class="dropdown-item" href="employer-dashboard-index.html#">Delete</a></li>
										</ul>
									</div>
								</div>
								<!-- /.job-item-list -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.dashboard-body -->



		<!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="text-center remove-account-popup modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<img src="{{ asset('images/lazy.svg')}}" data-src="images/icon/icon_22.svg" alt="" class="m-auto lazy-img">
						<h2>Are you sure?</h2>
						<p>Are you sure to delete your account? All data will be lost.</p>
						<div class="button-group d-inline-flex justify-content-center align-items-center pt-15">
							<a href="employer-dashboard-index.html#" class="confirm-btn fw-500 tran3s me-3">Yes</a>
							<button type="button" class="btn-close fw-500 ms-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
						</div>
                    </div>
                    <!-- /.remove-account-popup -->
                </div>
            </div>
        </div>
		


		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="{{ asset('vendor/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('vendor/wow/wow.min.js')}}"></script>
		<!-- Slick Slider -->
		<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
		<!-- Lazy -->
		<script src="{{ asset('vendor/jquery.lazy.min.js')}}"></script>
		<!-- js Counter -->
		<script src="{{ asset('vendor/jquery.counterup.min.js')}}"></script>
		<script src="{{ asset('vendor/jquery.waypoints.min.js')}}"></script>
		<!-- Nice Select -->
		<script src="{{ asset('vendor/nice-select/jquery.nice-select.min.js')}}"></script>
		<!-- validator js -->
		<script src="{{ asset('vendor/validator.js')}}"></script>

		<!-- Theme js -->
		<script src="{{ asset('js/theme.js')}}"></script>
	</div> <!-- /.main-page-wrapper -->
</body>

</html>