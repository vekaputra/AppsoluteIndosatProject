@extends('admin.app')

@section('content')
	<div class="container">
		<h3>Daftar Buddies</h3>
		@include('admin.component.table', ['data' => $data])
	</div>
@endsection