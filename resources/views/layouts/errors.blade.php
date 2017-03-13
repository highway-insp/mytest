<div class="fixed" id="errorsBar">
	@foreach ($errors->all() as $error)
		<div class="w3-light-green w3-border w3-border-green w3-bottombar w3-text-white w3-large w3-tag w3-round w3-border-green w3-card-2 w3-animate-opacity">
			{{ $error}}
		</div>
	@endforeach
</div>
