@extends('layouts.navbar')
@section('content')

<div class="content-wrapper">
	<div class="container">
		<div class="row pad-botm">
			<div class="col-md-12">
				<h4 class="header-line"  style="color:white;">Manage Categories</h4>
			</div>


		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<a href="{{Route('category.create')}}"><button class="btn btn-success"><i class="fa fa-plus "></i> Add New</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
						<div class="panel-heading">
							Categories Listing
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>#</th>
											<th>Category</th>
											<th>Status</th>
											<th>Creation Date</th>
											<th>Updation Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>                                               
										<tr class="odd gradeX">
											<td class="center"></td>
											<td class="center"></td>
											<td class="center">
												<a href="#" class="btn btn-success btn-xs">Active</a>
												<a href="#" class="btn btn-danger btn-xs">Inactive</a>
											</td>
											<td class="center"></td>
											<td class="center"></td>
											<td class="center">

												<a href="edit-category.php?catid="><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button> 
													<a href="manage-categories.php?del=" onclick="return confirm('Are you sure you want to delete?');" >  <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
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