<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">


</head>
<body class="w3-blue">
@include('layouts.nav')

<!-- Slide -->
<div class="w3-container w3-blue w3-center w3-padding-48">
	<div class="w3-padding w3-xxxlarge">Xây dựng bài Test và gửi cho bạn bè</div>
	<div class="myBody w3-large w3-margin-bottom" style="max-width: 50%">Chỉ với một vài click, bạn đã có một bài Test trông vô cùng chuyên nghiệp</div>
	<button class="w3-btn w3-light-green w3-text-white w3-xlarge w3-margin-top w3-round-large w3-padding-xlarge w3-border w3-border-green w3-bottombar">Đăng kí gay</button>
</div>
<div class="w3-blue myCloud">
	<img class="">
</div>
<!-- End Slide -->

<!-- Page Content -->

<div class="w3-white" style="height: 500px">
	<!-- Button List -->
	<div class="myBody w3-padding-48">
		<div class="w3-xlarge w3-text-dark-grey">Bước 1: Chọn kiểu bài Test</div>
		<div class="w3-center w3-margin-top">
			<div class="w3-row">
				<button class="w3-btn-block w3-light-grey myCategorySelected myCategory w3-third w3-padding-48">
					<div class="w3-xxxlarge w3-text-blue"><i class="fa fa-cloud"></i></div>
					<div class="w3-large">Khảo sát</div>
				</button>

				<button class="w3-btn-block w3-white w3-hover-light-grey myCategory w3-third w3-padding-48">
					<div class="w3-xxxlarge w3-text-red"><i class="fa fa-cloud"></i></div>
					<div class="w3-large">Bài Test</div>
				</button>

				<button class="w3-btn-block w3-white w3-hover-light-grey myCategory w3-third w3-padding-48">
					<div class="w3-xxxlarge w3-text-orange"><i class="fa fa-cloud"></i></div>
					<div class="w3-large">Form đăng kí</div>
				</button>
			</div>
		</div>
	</div>
	<!--End Button List -->
	

</div>

<!-- End page content -->



@yield('section')


</body>
</html>

