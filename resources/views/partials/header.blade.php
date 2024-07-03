<header>
	<div class="nav-bar">
		@if (Route::currentRouteName() !== 'home')
			<a href="{{ route('home') }}">HOME</a>
		@endif
		@if (Route::currentRouteName() !== 'trains')
			<a href="{{ route('trains') }}">TRAINS</a>
		@endif
	</div>
</header>
