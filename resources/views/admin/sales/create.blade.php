@extends('admin.app')

@section('content')
	<div class="container">
		<form role="form" method="POST" action="{{ route('post-sales') }}">
			{{ csrf_field() }}
			<h3>Buat Akun Sales</h3>
			@include('fields.email', [
				'field' => [
					'key' => 'email',
					'text' => 'Email',
					'required' => true
				]
			])
			@include('fields.password', [
				'field' => [
					'key' => 'password',
					'text' => 'Password',
					'required' => true
				]
			])
			@include('fields.password', [
				'field' => [
					'key' => 'password_confirmation',
					'text' => 'Konfirmasi password',
					'required' => true
				]
			])
			@include('fields.text', [
				'field' => [
					'key' => 'name',
					'text' => 'Nama',
					'required' => true
				]
			])
			@include('fields.radio', [
				'field' => [
					'key' => 'gender',
					'text' => 'Gender',
					'values' => [
						['key' => 'male', 'text' => 'Laki-laki', 'checked' => true],
						['key' => 'female', 'text' => 'Perempuan']
					]
				]
			])
			@include('fields.phone', [
				'field' => [
					'key' => 'phone',
					'text' => 'No telepon',
					'required' => true
				]
			])
			@include('fields.number', [
				'field' => [
					'key' => 'balance',
					'text' => 'Saldo awal',
					'required' => true,
					'step' => 50000,
					'value' => 50000
				]
			])
			<div class="form-group text-center">
				<button type="reset" class="btn btn-danger border-round">Batal</button>
				<button type="submit" class="btn btn-success border-round">Buat Akun</button>
			</div>
		</form>
	</div>
@endsection