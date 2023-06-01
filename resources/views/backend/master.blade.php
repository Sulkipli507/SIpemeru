<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>SIpemeru</title>

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



    {{-- Sidebar --}}
    @include('backend.partial.sidebar')
    {{-- End Sidebar --}}

	<div class="mobile-menu-overlay"></div>

    <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<h1>test</h1>
						</div>
					</div>
				</div>
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
