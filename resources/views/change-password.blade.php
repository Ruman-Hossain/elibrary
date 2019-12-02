@extends('layouts.navbar')
@section('content')

        <div class="content-wrapper">
            <div class="container">
                <div class="row pad-botm">
                    <div class="col-md-12">
                        <h4 class="header-line" style="color:white;">Change Admin Password</h4>
                    </div>
                </div>
                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>            
                <!--LOGIN PANEL START-->           
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Change Password
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post" onSubmit="return valid();" name="chngpwd">

                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input class="form-control" type="password" name="password" autocomplete="off" placeholder="Enter Current Password" required  />
                                    </div>

                                    <div class="form-group">
                                        <label>Enter Password</label>
                                        <input class="form-control" type="password" name="newpassword" autocomplete="off" placeholder="Enter New Password" required  />
                                    </div>

                                    <div class="form-group">
                                        <label>Confirm Password </label>
                                        <input class="form-control"  type="password" name="confirmpassword" autocomplete="off" placeholder="Confirm New Password" required  />
                                    </div>

                                    <button type="submit" name="change" class="btn btn-info">Chnage </button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
                <!---LOGIN PABNEL END-->            


            </div>
        </div>
@endsection