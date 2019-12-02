@extends('layouts.navbar')
@section('content')
 <div class="content-wrapper">
       <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Edit Sub category</h4>
                <?php //echo "<h1 style='color:white;'>Hello : ".$_SESSION['alogin']." Admin UserName : ".$admin."</h1>"; ?>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
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
                                <?php 
                                $status=1;
                                $sql = "SELECT * from  category where Status=:status";
                                $query = $dbh -> prepare($sql);
                                $query -> bindParam(':status',$status, PDO::PARAM_STR);
                                $query->execute();
                                $results=$query->fetchAll(PDO::FETCH_OBJ);
                                $cnt=1;
                                if($query->rowCount() > 0)
                                {
                                  foreach($results as $result)
                                    {               ?>  
                                      <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->CategoryName);?></option>
                                      <?php }} ?> 
                                  </select>
                              </div>
                              <?php 
                              $catid=intval($_GET['catid']);
                              $sql="SELECT * from subcategory where id=:catid";
                              $query=$dbh->prepare($sql);
                              $query-> bindParam(':catid',$catid, PDO::PARAM_STR);
                              $query->execute();
                              $results=$query->fetchAll(PDO::FETCH_OBJ);
                              if($query->rowCount() > 0)
                              {
                                foreach($results as $result)
                                {               
                                  ?>
                                  <div class="form-group">
                                    <label>Sub Category Name</label>
                                    <input class="form-control" type="text" name="subcategory" value="<?php echo htmlentities($result->subCategoryName);?>" required />
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <?php if($result->Status==1) {?>
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
                                    <?php } else { ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="status" value="0" checked="checked">Inactive
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="status" value="1">Active
                                        </label>
                                        </div
                                        <?php } ?>
                                    </div>
                                    <?php }} ?>
                                    <button type="submit" name="update" class="btn btn-info">Update </button>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


@endsection