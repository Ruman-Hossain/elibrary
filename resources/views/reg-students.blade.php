@extends('layouts.navbar')
@section('content')

<div class="content-wrapper">
	<div class="container">
		<div class="row pad-botm">
			<div class="col-md-12">
				<h4 class="header-line" style="color:white;">Manage Registered Students</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading">
						Reg Students
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
									<tr>
										<th>#</th>
										<th>Student ID</th>
										<th>Student Name</th>
										<th>Email id </th>
										<th>Mobile Number</th>
										<th>Reg Date</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td class="center"></td>
										<td class="center"></td>
										<td class="center"></td>
										<td class="center"></td>
										<td class="center"></td>
										<td class="center"></td>
										<td class="center"></td>
										<td class="center">
											<a href="reg-students.php?inid=" onclick="return confirm('Are you sure you want to block this student?');" >  <button class="btn btn-warning"> Inactive</button>
												<a href="reg-students.php?id=" onclick="return confirm('Are you sure you want to active this student?');"><button class="btn btn-primary"> Active</button> 
													<a href="reg-students.php?del=" onclick="return confirm('Are you sure you want to delete?');">  <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!--End Advanced Tables -->
						</div>
					</div>
				</div>
			</div>
			@endsection