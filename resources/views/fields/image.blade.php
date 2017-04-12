<div class="image-upload form-group {{ $errors->has($field['key']) ? 'has-error' : '' }}">
	@if(isset($field['text']))
		<label>{{ $field['text'] }}</label>
	@endif
	<div>
		<input id="{{ $field['key'] }}"
		       type="file"
		       accept="image/*"
		       capture="camera"
		       name="{{ $field['key'] }}" class="{{ isset($field['class']) ? $field['class'] : '' }}">
		<label for="{{ $field['key'] }}" class="btn btn-danger border-round">Upload file</label>
		<img id="{{ $field['key'] }}-preview" src="">
	</div>
	@if ($errors->has($field['key']))
		<span class="help-block"><strong>{{ $errors->first($field['key']) }}</strong></span>
	@endif
</div>

@section('scripts')
	<script>
		$(function() {
			$('#{{ $field['key'] }}').change(function() {
				readURL(this);
			});
		});

		function readURL(input) {
			if (input.files && input.files[0]) {
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#{{ $field['key'] }}-preview').attr('src', e.target.result);
				};
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>
@append