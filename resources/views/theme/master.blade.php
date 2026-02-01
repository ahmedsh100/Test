<!doctype html>
<html lang="en">

@include("partial.head")
	<body>

		<!-- Start Header/Navigation -->
        @include("partial.nav")
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
        @include("partial.hero")
		<!-- End Hero Section -->

		<!-- Deferent Content -->
        @yield("content")

		<!-- Start Footer Section -->
        @include("partial.footer")
		<!-- End Footer Section -->


        @include("partial.script")
	</body>

</html>
