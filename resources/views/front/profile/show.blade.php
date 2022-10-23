<br>
<div class="row">
	<div class="col-md-12">
		<div class="well well-sm">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<form action="" method="post" enctype="multipart/form-data">
						@csrf 
				        @method('patch')

						<div class="avatar-upload">
						    <div class="avatar-edit">
						        <input name="image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" required/>
						        <label for="imageUpload"></label>
						    </div>
						    <div class="avatar-preview">
						    	@if(Auth::user()->image)
						        	<div id="imagePreview" style="background-image: url('/images/user/{{ Auth::user()->image }}');">
						        	</div>
						        @else
						        	<div id="imagePreview" style="background-image: url('{{ asset('images/profile.jpg') }}');">
						        	</div>
						        @endif
						    </div>
						</div>

						<input type="submit" class="btn btn-success form-control" value="UPDATE APP LOGO">
							
					</form>
				</div>
				<div class="col-sm-6 col-md-8">
						<table class="table table-striped">
							<tr>
								<td><b>Full Name: </b></td>
								<td>{{ Auth::user()->name }}</td>
							</tr>
							<tr>
								<td><b>Email: </b></td>
								<td>{{ Auth::user()->email }}</td>
							</tr>
							<tr>
								<td><b>Phone: </b></td>
								<td>{{ Auth::user()->phone }}</td>
							</tr>
							<tr>
								<td><b>Country: </b></td>
								<td>{{ Auth::user()->country }}</td>
							</tr>
							<tr>
								<td><b> Present Address: </b></td>
								<td>{{ Auth::user()->present_address }}</td>
							</tr>
							<tr>
								<td><b> Parmanent Address: </b></td>
								<td>{{ Auth::user()->parmanent_address }}</td>
							</tr>
							<tr>
								<td><b>Member Since: </b></td>
								<td>{{ Auth::user()->created_at }}</td>
							</tr>
						</table>
				</div>
			</div>
		</div>
	</div>
</div>



