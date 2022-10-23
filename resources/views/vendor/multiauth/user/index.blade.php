@extends('multiauth::layouts.app')
@section('content')
<section class="content-header well">
	<h1>
	Dashboard
	<small>Users</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Users</li>
	</ol>
	<br>
</section>
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-primary well">
		<div class="panel-heading">
			<span class="pull-left">
				All Users
			</span>
			{{-- <button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#addtodo">Add New</button> --}}
			<div class="clearfix"></div>
		</div>
		<div class="panel-body">
			@include('multiauth::message')
			<table class="table table-hover table-responsive table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Country</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td width="15px;">
							{{ $user->id }}
						</td>
						<td>
							{{ $user->name }}
						</td>
						<td>
							{{ $user->email }}
						</td>
						<td>
							{{ $user->phone }}
						</td>
						<td>
							{{ $user->country }}
						</td>
						<td class="pull-right">
							<form action="{{ route('user.delete',[Crypt::encrypt($user->id)]) }}" method="POST">
								@csrf @method('delete')
								<button type="submit" class="btn btn-xs btn-danger" onclick="return deleteconfig()"><i class="fa fa-trash"></i></button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="row">
				<div class="pull-left">
					&nbsp; Showing {{ $users->firstItem() }} - {{ $users->lastItem() }}/{{ $users->total() }}
				</div>
				<div class="pull-right" style="margin-top: -30px;">
					{{ $users->links() }}
				</div>
			</div>
			

			
		</div>
		
	</div>
</div>
<div class="clearfix"></div>
@endsection