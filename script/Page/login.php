<?php

$MainContent.='<div class="row">
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="box-shadow:0px 0px 10px 0px #EEE; margin:100px 10px 100px 10px; border-radius:5px; padding-left:50px; padding-right:50px;">
					
					<!-- Login form -->
					<div class="login text-center">
						<form class="form-horizontal form-label-left" action="'.$obj->baseurl.'/login" method="post">
							<h2>User Login</h2>
							<p class="text-center text-danger">'.$status_message.'</p>
							<hr>
							<div class="form-group row ">
                        <label class="control-label col-md-12 col-sm-12">UserName</label>
                        <div class="col-md-12 col-sm-12 ">
                          <input name="username" type="text" class="form-control" placeholder="User Name" value="'.$user_name.'">
                        </div>
                      </div>
					  
					  <div class="form-group row ">
                        <label class="control-label col-md-12 col-sm-12 ">Password</label>
                        <div class="col-md-12 col-sm-12 ">
                          <input name="password" type="Password" class="form-control" placeholder="Password" value="'.$password.'">
                        </div>
                      </div>
					  
					  <hr>
					  <div class="form-group text-center">
                        <div class="col-md-12 col-sm-12 offset-md-3">
                          <button type="submit" class="btn" name="login" value="login">Login</button>
                        </div>
                      </div>
							
						</form>
                </div></div></div>';
                
                ?>