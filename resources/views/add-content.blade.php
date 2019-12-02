@extends('layouts.navbar')
@section('content')
<div class="content-wrapper">
	<div class="container">
		<div class="row pad-botm">
			<div class="col-md-12">
				<h4 class="header-line" style="color:white;">Add A New Content</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						Content Info
					</div>
					<div class="panel-body">
						<form role="form" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Content Name<span style="color:red;">*</span></label>
								<input class="form-control" type="text" name="contentName" placeholder="Enter Content Name" autocomplete="off"  required />
							</div>
							<div class="form-group">
								<label> Category<span style="color:red;">*</span></label>
								<select class="form-control" name="categoryId" id="category" required="required">
									<option value=""> Select Category</option>
									<option value=""></option> 
								</select>
							</div>
							<div class='form-group'>
								<label> Sub Category<span style='color:red;'>* </span></label><span id="msg">(Nothing Selected)</span>
								<select class='form-control' name='subCategoryId' id='sub-category' required='required'>
								</select>
							</div>
							<div class="form-group">
								<label>Author</label>
								<input class="form-control" type="text" name="author"  placeholder="Enter Author Name" autocomplete="off"  />
								<p class="help-block">Writter of the Content or Book</p>
							</div>

							<div class="form-group">
								<label>Edition</label>
								<input class="form-control" type="text" name="edition" autocomplete="off"   placeholder="Enter Content Edition"  />
							</div>
							<div class="form-group">
								<label>Session</label>
								<input class="form-control" type="text" name="session" autocomplete="off"   placeholder="Enter Session" />
							</div>
							<div class="form-group">
								<label>File</label>
								<input class="form-control" type="file" name="file" autocomplete="off" />
							</div>
							<div class="form-group">
								<label>Submitted By</label>
								<input class="form-control" type="text" name="submittedBy" autocomplete="off"  placeholder="Enter Your Name" />
							</div>
							<button type="submit" name="add" class="btn btn-info">Add </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection