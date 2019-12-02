@extends('layouts.navbar')
@section('content')
      <div class="content-wrapper">
       <div class="container">
        <div class="row pad-botm">
          <div class="col-md-12">
            <h4 class="header-line" style="color:white;">Update Content</h4>
            <?php //echo "<h1 style='color:white;'>Hello : ".$_SESSION['alogin']." Admin UserName : ".$admin."</h1>"; ?>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
            <div class="panel panel-info">
              <div class="panel-heading">
                Update Content Info
              </div>
              <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                  <?php 
                  $contentid=intval($_GET['contentid']);
                  $sql="SELECT category.CategoryName,subcategory.subCategoryName,contents.contentName,contents.author,contents.edition,contents.session,contents.submittedBy from category join subcategory on category.id=subcategory.categoryId join contents on subcategory.id=contents.subCategoryId where contents.id=:contentid";

                  $query = $dbh -> prepare($sql);
                  $query->bindParam(':contentid',$contentid,PDO::PARAM_INT);
                  $query->execute();
                  $results=$query->fetchAll(PDO::FETCH_OBJ);
                  $cnt=1;
                  if($query->rowCount() > 0)
                  {
                    foreach($results as $result)
                    { 
                      ?>  
                      <div class="form-group">
                        <label>Content Name<span style="color:red;">*</span></label>
                        <input class="form-control" type="text" name="contentName" value="<?php echo htmlentities($result->contentName);?>" placeholder="Enter Content or Book Name" required />
                      </div>

                      <div class="form-group">
                        <label> Category</label>
                        <select class="form-control" name="categoryId" id="category" required="required">
                          <!-- <option value="<?php //echo htmlentities($result->categoryId);?>"> <?php //echo htmlentities($catname=$result->CategoryName);?></option> -->
                          <option value="">Select Category</option>
                          <?php 
                          $status=1;
                          $sql1 = "SELECT * from  category where Status=:status";
                          $query1 = $dbh -> prepare($sql1);
                          $query1-> bindParam(':status',$status, PDO::PARAM_STR);
                          $query1->execute();
                          $resultss=$query1->fetchAll(PDO::FETCH_OBJ);
                          if($query1->rowCount() > 0)
                          {
                            foreach($resultss as $row)
                            {           
                              if($catname==$row->CategoryName)
                              {
                                continue;
                              }
                              else
                              {
                                ?> 
                                <option value="<?php echo htmlentities($row->id);?>"><?php echo htmlentities($row->CategoryName);?></option>
                              <?php }}} ?> 
                            </select>
                          </div>

                          <div class='form-group'>
                            <label> Sub Category<span style='color:red;'>* </span></label><span id="msg">(Nothing Selected)</span>
                            <select class='form-control' name='subCategoryId' id='sub-category' required='required'>
                            </select>
                          </div>

                          <div class="form-group">
                           <label> Author</label>
                           <input class="form-control" type="text" name="author" value="<?php echo htmlentities($result->author);?>" placeholder="Enter Author Name" />
                           <p class="help-block">Writter of the Book or Content</p>
                         </div>

                         <div class="form-group">
                          <label>Edition</label>
                          <input class="form-control" type="text" name="edition" value="<?php echo htmlentities($result->edition);?>" placeholder="Enter Book Edition"  />
                        </div>

                        <div class="form-group">
                         <label>Session</label>
                         <input class="form-control" type="text" name="session" value="<?php echo htmlentities($result->session);?>"  placeholder="Enter Session" />
                       </div>
                       <div class="form-group">
                         <label>File</label>
                         <input class="form-control" type="file" name="file" value="" />
                       </div>
                       <div class="form-group">
                         <label>Submitted By</label>
                         <input class="form-control" type="text" name="submittedBy" value="<?php echo htmlentities($result->submittedBy);?>"  placeholder="Enter Your Name"  />
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