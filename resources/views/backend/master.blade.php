<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>SIpemaru</title>

	<!-- Site favicon -->
	@include('backend.partial.link')

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
	@include('backend.partial.js')
</body>
</html>
