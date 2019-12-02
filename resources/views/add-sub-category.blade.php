@extends('layouts.navbar')
@section('content')
<div class="content-wrapper">
	<div class="container">
		<div class="row pad-botm">
			<div class="col-md-12">
				<h4 class="header-line">Add Sub category</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						Sub Category Info
					</div>
					<div class="panel-body">
						<form role="form" method="post">
							<div class="form-group">
								<label> Category Name<span style="color:red;">*</span></label>
								<select class="form-control" name="categoryId" required="required">
									<option value=""> Select Category</option>
									<option value=""></option>
								</select>
							</div>
							<div class="form-group">
								<label>Sub Category Name<span style="color:red;">*</span></label>
								<input class="form-control" type="text" name="subCategoryName" placeholder="Enter Sub Category Name..." autocomplete="off" required />
							</div>
							<div class="form-group">
								<label>Status</label>
								<div class="radio">
									<label>
										<input type="radio" name="status" id="status" value="1" checked="checked">Active
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="status" id="status" value="0">Inactive
									</label>
								</div>
							</div>
							<button type="submit" name="create" class="btn btn-info">Create </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection