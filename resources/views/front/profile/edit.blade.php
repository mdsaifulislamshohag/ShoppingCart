<br>
<div class="col-md-12">
	<form action="" method="post">
        @csrf 
        @method('patch')
		<fieldset class="form-group">
			<label>Full Name: </label>
			<input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" required>
		</fieldset>

		<fieldset class="form-group">
			<label>Phone Number: </label>
			<input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control">
		</fieldset>

		<fieldset class="form-group">
			<label>Country: </label>
			<textarea name="address" class="form-control">{{ Auth::user()->country }}</textarea>
		</fieldset>

		<fieldset class="form-group">
			<label>Present Address: </label>
			<textarea name="address" class="form-control">{{ Auth::user()->present_address }}</textarea>
		</fieldset>

		<fieldset class="form-group">
			<label>Parmanent Address: </label>
			<textarea name="address" class="form-control">{{ Auth::user()->parmanent_address }}</textarea>
		</fieldset>

		<fieldset class="form-group">
			<button type="Update" class="btn btn-success">Update</button>
		</fieldset>
	</form>
</div>