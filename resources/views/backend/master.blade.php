<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>SIpemaru</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('backend/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('backend/vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/styles/style.css')}}">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	{{-- Loading --}}
    @include('backend.partial.loading')
	{{-- End Loading --}}


    {{-- Header --}}
    @include('backend.partial.header')
    {{-- End Header --}}


    {{-- Setting --}}
    @include('backend.partial.setting')
    {{-- End Setting --}}


    {{-- Sidebar --}}
    @include('backend.partial.sidebar')
    {{-- End Sidebar --}}

	<div class="mobile-menu-overlay"></div>

    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				{{-- <div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>blank</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">blank</li>
								</ol>
							</nav>
						</div>
					</div>
				</div> --}}
				<div class="pd-30 bg-white border-radius-4 box-shadow mb-30">
                    @yield('content')
				</div>
			</div>

            {{-- Footer --}}
            @include('backend.partial.footer')
            {{-- End Footer --}}
		</div>
	</div>



	<!-- js -->
	<script src="{{asset('backend/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('backend/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('backend/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('backend/vendors/scripts/layout-settings.js')}}"></script>
</body>
</html>
