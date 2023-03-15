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
		
		<div class="pd-30 bg-white border-radius-4 box-shadow mb-30">
            @yield('content')
		</div>

            {{-- Footer --}}
        @include('backend.partial.footer')
            {{-- End Footer --}}
	</div>



	<!-- js -->
	@include('backend.partial.js')
</body>
</html>
