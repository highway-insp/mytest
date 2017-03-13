@extends('layouts.master')

@section('title', 'Home')

@section('content')

<!-- Slide -->
@if(Auth()->check())
<div class="w3-container w3-blue w3-center w3-padding-48 w3-animate-zoom">
	<div class="w3-padding w3-xxxlarge ">Xin chào <b>{{ Auth()->user()->name }}</b></div>
	<div class="myBody w3-large w3-margin-bottom " style="max-width: 50%">Chúc bạn một ngày tốt lành</div>
	<button class="w3-btn w3-light-green w3-text-white w3-xlarge w3-margin-top w3-round-large w3-padding-xlarge w3-border w3-border-green w3-bottombar w3-animate-opacity">Quản lý nội dung của tôi</button>
</div>
<div class="w3-blue myCloud">
	<img class="">
</div>
@else
<div class="w3-container w3-blue w3-center w3-padding-48 w3-animate-zoom">
	<div class="w3-padding w3-xxxlarge ">Xây dựng bài Test và gửi cho bạn bè</div>
	<div class="myBody w3-large w3-margin-bottom " style="max-width: 50%">Chỉ với một vài click, bạn đã có một bài Test trông vô cùng chuyên nghiệp</div>
	<button class="w3-btn w3-light-green w3-text-white w3-xlarge w3-margin-top w3-round-large w3-padding-xlarge w3-border w3-border-green w3-bottombar w3-animate-opacity" onclick="document.getElementById('registerForm').style.display='block'">Đăng kí ngay</button>
</div>
<div class="w3-blue myCloud">
	<img class="">
</div>

@endif
<!-- End Slide -->

<!-- Page Content -->

<!-- Button List -->
<div class="w3-white" style="">
	<div class="myBody" style="padding-top: 48px">
		<div class="w3-xlarge w3-text-dark-grey">Bước 1: Chọn kiểu bài Test</div>
		<div class="w3-center w3-margin-top">
			<div class="w3-row">
				<button class="w3-btn-block w3-light-grey myCategorySelected myCategory w3-third w3-padding-48">
					<div class="w3-xxxlarge w3-text-blue"><i class="fa fa-bar-chart"></i></div>
					<div class="w3-large w3-text-dark-grey"><b>Khảo sát</b></div>
				</button>

				<button class="w3-btn-block w3-white w3-hover-light-grey myCategory w3-third w3-padding-48">
					<div class="w3-xxxlarge w3-text-red"><i class="fa fa-book"></i></div>
					<div class="w3-large w3-text-dark-grey"><b>Bài Test</b></div>
				</button>

				<button class="w3-btn-block w3-white w3-hover-light-grey myCategory w3-third w3-padding-48">
					<div class="w3-xxxlarge w3-text-orange"><i class="fa fa-pencil-square-o"></i></div>
					<div class="w3-large w3-text-dark-grey"><b>Form đăng kí</b></div>
				</button>
			</div>
		</div>
	</div>
</div>
<!--End Button List -->
	
<div class="w3-light-grey" >
	<div class="myBody w3-row w3-padding-48">
		<div class="w3-half w3-container">
			<div class="w3-xxlarge w3-text-dark-grey">Building a survey</div>
			<div class="w3-large w3-text-dark-grey">Create a full page survey with multiple questions, question types and pages. Advanced features like question branching/skip-logic, file uploading and more.</div><br>
			<div class="">
				<div class="myTagList w3-margin-bottom">
					<span class="w3-tag w3-round w3-border w3-round-large w3-white w3-padding-medium w3-center">Various question formats <i class="fa fa-question-circle w3-text-grey"></i></span>
					<span class="w3-tag w3-round w3-border w3-round-large w3-white w3-padding-medium w3-center">Question Logic <i class="fa fa-question-circle w3-text-grey"></i></span>
					<span class="w3-tag w3-round w3-border w3-round-large w3-white w3-padding-medium w3-center">Multiple questions and Pages <i class="fa fa-question-circle w3-text-grey"></i></span>
					<span class="w3-tag w3-round w3-border w3-round-large w3-white w3-padding-medium w3-center">Complete brand control <i class="fa fa-question-circle w3-text-grey"></i></span>
					<span class="w3-tag w3-round w3-border w3-round-large w3-white w3-padding-medium w3-center">Custom reports <i class="fa fa-question-circle w3-text-grey"></i></span>
					<span class="w3-tag w3-round w3-border w3-round-large w3-white w3-padding-medium w3-center">Data Export <i class="fa fa-question-circle w3-text-grey"></i></span>
				</div>
				<div class="w3-margin-bottom">Name your survey</div>
				<input type="text" placeholder="Bình chọn hotboy" class="w3-input w3-border w3-round" style="max-width: 50%">
				<button class="w3-btn w3-light-green w3-border w3-bottombar w3-border-green w3-round w3-text-white w3-margin-top w3-padding-xlarge w3-xlarge" style="width: 50%">Next Step</button>
			</div>
		</div>
		<div class="w3-half w3-container">
			<img src="https://freeonlinesurveys.com/FOSHome/Images/create-new--survey-screenshot.png">
		</div>
	</div>
</div>

<div class="w3-white">
		<div class="myBody w3-padding-48">
			<div class="w3-center w3-xlarge w3-text-grey">Testimonials</div>
			<div class="w3-row w3-margin-top">
				<div class="w3-third w3-panel">
					<div class="w3-center w3-xxxlarge w3-text-grey"><i class="fa fa-behance"></i></div>
					<p><span class="w3-xxxlarge w3-text-blue" style="line-height:0.6em">&#10077;</span>
					Your service helped us to substantially optimize the development and evaluation of our delegate questionnaire The possibility to individualize the questionnaire with our Dow Jones logo and to link it to our website is very useful</p>
				</div>
				<div class="w3-third">
					<div class="w3-center w3-xxxlarge w3-text-grey"><i class="fa fa-behance"></i></div>
					<p><span class="w3-xxxlarge w3-text-blue" style="line-height:0.6em">&#10077;</span>
					Your service helped us to substantially optimize the development and evaluation of our delegate questionnaire The possibility to individualize the questionnaire with our Dow Jones logo and to link it to our website is very useful</p>
				</div>
				<div class="w3-third">
					<div class="w3-center w3-xxxlarge w3-text-grey"><i class="fa fa-behance"></i></div>
					<p><span class="w3-xxxlarge w3-text-blue" style="line-height:0.6em">&#10077;</span>
					Your service helped us to substantially optimize the development and evaluation of our delegate questionnaire The possibility to individualize the questionnaire with our Dow Jones logo and to link it to our website is very useful</p>
				</div>
			</div>
		</div>
</div>
<!-- End page content -->

@endsection