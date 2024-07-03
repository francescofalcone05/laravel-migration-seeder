@extends('layouts.app')

@section('content')
	<div class="container">


		@foreach ($trains as $train)
			<div class="card">
				<p>{{ $train->name }}</p>
				<p><b>Stazione di partenza:</b> {{ $train->departure_station }}</p>
				<p><b>Stazione di arrivo:</b> {{ $train->arrival_station }}</p>
				<p><b>Orario di partenza:</b> {{ date('H:i', strtotime($train->departure_time)) }}</p>
				<p><b>Orario di arrivo:</b> {{ date('H:i', strtotime($train->arrival_time)) }}</p>
				@if ($train->on_time == 0)
					<p><b>Il treno e` in ritardo</b> </p>
				@else
					<p><b>Il treno e` in orario</b> </p>
				@endif
				@if ($train->canceled == 0)
					<p><b> Status Treno:</b> ok </p>
				@else
					<p><b>Treno</b> cancellato </p>
				@endif

			</div>
		@endforeach

	</div>
@endsection
