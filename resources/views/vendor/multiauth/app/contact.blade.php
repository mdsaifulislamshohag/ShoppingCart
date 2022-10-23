<br>
<div class="col-md-12">
	<form action="{{ route('admin.app.update', $app->id) }}" method="post">
        @csrf 
        @method('patch')
		<fieldset class="form-group">
			<label>Email Address: </label>
			<input type="email" name="email" value="{{ $app->email }}" class="form-control">
		</fieldset>

		<fieldset class="form-group">
			<label>App Category: </label>
			<input type="text" name="phone" value="{{ $app->phone }}" class="form-control">
		</fieldset>


		<fieldset class="form-group">
			<button type="Update" class="btn btn-success">Update</button>
		</fieldset>
	</form>
</div>