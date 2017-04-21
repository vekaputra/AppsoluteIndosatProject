@extends('admin.app')

@section('content')
	<div class="container">
		<form action="{{ route('dashboard') }}" method="GET">
			<div class="row">
				<div class="col-xs-3">
					@include('fields.dropdown', [
						'field' => [
							'key' => 'event_id',
							'text' => 'Event',
							'values' => $data['eventLists'],
							'placeholder' => 'Event',
							'class' => 'right-10'
						]
					])
				</div>
				<div class="col-xs-3">
					@include('fields.dropdown', [
						'field' => [
							'key' => 'sales_area_id',
							'text' => 'Sales Area',
							'values' => $data['salesAreaLists'],
							'placeholder' => 'Sales Area',
							'class' => 'right-10'
						]
					])
				</div>
				<div class="col-xs-3">
					@include('fields.date', [
						'field' => [
							'key' => 'from',
							'text' => 'Dari',
							'value' => $data['date']['from'],
							'placeholder' => 'Dari'
						]
					])
				</div>
				<div class="col-xs-3">
					@include('fields.date', [
						'field' => [
							'key' => 'to',
							'text' => 'Sampai',
							'value' => $data['date']['to'],
							'placeholder' => 'Sampai'
						]
					])
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					@include('fields.submit', [
						'field' => [
							'text' => 'Kirim'
						]
					])
				</div>
			</div>
		</form>
		<div class="row">
			<div class="col-xs-12">
				@include('charts.chart', [
					'field' => [
						'key' => 'salesAgent',
						'data' => $data['chartData']
					]
				])
			</div>
		</div>
	</div>
@append