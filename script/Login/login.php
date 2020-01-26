<? 
		$MainContent.=' 
        <div class="" role="main" style="min-height: 700px;">
          <div class="">
		  <!-- page content Start -->
		<div class="row">
          
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="min-height: 700px;">
                  
                  <div class="x_content">
                    
                    <div class="clearfix"></div>
                    
                    <br>
                    <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content" style="background-color:#EEE;padding:20px 20px 20px 20px; border-radius: 20px 20px;">
            <form id="login" name="login" method="post" action="'.ApplicationURL("Login","loginaction").'">
            <input type="hidden" name="redirect_url" value="">
              <h1>Admin Login</h1>
              <p style="color:red;">'.$status_message.'</p>
              <div>
                <input type="text" id="LogInUserName" name="LogInUserName" class="form-control" placeholder="User ID" required="" value="">
              </div>
              <div>
                <input type="password" name="LogInUserPassword" class="form-control" placeholder="Password" required="" value="">
              </div>
              <div>
                <input id="login" id="password" type="submit" class="btn btn-default submit" name="login" value="Log in">
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
               
			   <a href="'.ApplicationURL("Forgotpassword","userpasswordrecover").'">Forgot Password?</a>
			                   <div class="clearfix"></div>
               

                <div>
                  
                  
                </div>
              </div>
            </form>
          </section>
        </div>

        
        </div>
      </div>
      
       </div>
                </div>
              </div>
            </div>

		  
		  <!-- page content End-->
		  </div>
		  </div>';
?> 