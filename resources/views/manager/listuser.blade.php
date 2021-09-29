@extends('layouts.app')
@section('title', 'Dasboard')
@section('content')

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header text-left"> List User <li class="fa fa-users"></li></h3>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				  List user
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th class="text-center">Action</th>
									<th class="text-center">Role</th>
									<th class="text-center">Email</th>
									<th class="text-center">Name</th>
									<th class="text-center">No</th>
								</tr>
							</thead>
							<tbody>
								@php $no = 0; @endphp
								@foreach($user as $user)
								<tr class="odd gradeX">
									<td class="center">
										<button class="btn btn-sm btn-primary"><li class="fa fa-check"></li> Approve</button>
										<button class="btn btn-sm btn-danger"><li class="fa fa-times"></li> Approve</button>
									</td>
									<td>{{$user->role->namaRule}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->name}}</td>
									<td>{{$no++}}</td>
								</tr>
								@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('s')
<script src="js/metisMenu/metisMenu.min.js"></script>
<script src="js/jquery/jquery.dataTables.min.js"></script>
<script src="js/bootstrap/dataTables.bootstrap.min.js"></script>
@endsection