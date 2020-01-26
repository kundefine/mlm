 <?php 

 
 $BeforeMainContent.='
<!DOCTYPE html>
<html class=" " lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Admin Panel</title>
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="'.$theme_path.'/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="'.$theme_path.'/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="'.$theme_path.'/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="'.$theme_path.'/css/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="'.$theme_path.'/css/prettify.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="'.$theme_path.'/css/select2.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="'.$theme_path.'/css/switchery.css" rel="stylesheet">
    <!-- starrr -->
    <link href="'.$theme_path.'/css/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="'.$theme_path.'/css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="'.$theme_path.'/css/custom.css" rel="stylesheet">
    <link href="'.$theme_path.'/css/ik_chat.css" rel="stylesheet">
	

	
	  </head>

  <body class="nav-md">';
  
if($user_login==1 and $user_type_condition==1)
{
  $BeforeMainContent.='
  
   <!--Popup window start-->
    
       
<div id="filesystem" style=" position:absolute;display:none; z-index:9999;">

<div id="fileback" class="file_back"></div>


<div id="filecontent" class="file_content">

<div id="filehead" class="file_head">
<span class="left" onclick="open_window();"> Upload File</span> 

<span style="float:left;">&nbsp;</span> 
<span class="left" onclick="file_show(\'1\',\'1\');">Refresh</span> 
<span class="right" onclick="file_close();"> Close</span>
</div>
<div id="filebody" class="file_body">

<div id="fileview" class="file_view"></div>
<div id="fileside" class="file_side">
<p id="file_content" style="text-align:center;">


</p>
	
	
</div>
</div>
<div id="filefoot" class="file_foot">

<span class="right" onClick="del_file()">Delete</span> 

<span style="float:right;">&nbsp;</span> 
<span class="right" onclick="file_close();">Cancel</span> 

<span style="float:right;">&nbsp;</span> 
<span class="right" onclick="insert_data();">Insert</span> 
<span style="float:right;">&nbsp;</span> 
<span class="right" onClick="more_file_load();" style="">More file</span> 
</div>

</div></div>
    
    
    <!--Popup window End-->
  
  
    <div class="container body">
	
      <div class="main_container">';


$BeforeMainContent.='
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="'.ApplicationURL("Dashboard","Manage").'" class="site_title"><i class="fa fa-paw"></i> <span>Admin Panel</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            
            <div class="menu_section">
               
                <hr>
                <ul class="nav side-menu" style="">
                  <li><a href="'.ApplicationURL("Dashboard","Manage").'"><i class="fa fa-dashboard"></i> Dashboard <span class=""></span></a></li>';


				  


					
					
					if($obj->Check_page_permission("User")==true){
					 $BeforeMainContent.='<li class=""><a><i class="fa fa-user"></i>User<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li class=""><a href="'.ApplicationURL("User","Manage").'">All User</a></li>
                      <li class=""><a href="'.ApplicationURL("Blockuser","Manage").'">Blocked User</a></li>
					  </ul></li>';}


					if($obj->Check_page_permission("Activation")==true){
						$BeforeMainContent.='<li class=""><a><i class="fa fa-gear"></i>Activation<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display:none;">
						  <li class=""><a href="'.ApplicationURL("Activation","Manage").'">Generate Activation</a></li>
						   <li class=""><a href="'.ApplicationURL("Adminlist","usertype").'">Create User Type</a></li>
						  <li class=""><a href="'.ApplicationURL("Pageaccess","Manage").'">Page Access</a></li>
						</ul></li>';
					}

					if($obj->Check_page_permission("TreeView")==true){
							$BeforeMainContent.='<li class=""><a><i class="fa fa-gear"></i>Tree View<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display:none;">
						  <li class=""><a href="'.ApplicationURL("TreeView","Manage").'">User Tree</a></li>
						</ul></li>';
	}
										
					if($obj->Check_page_permission("Admonlist")==true){
					$BeforeMainContent.='<li class=""><a><i class="fa fa-gear"></i>Admin<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li class=""><a href="'.ApplicationURL("Adminlist","Manage").'">Admin List</a></li>
					   <li class=""><a href="'.ApplicationURL("Adminlist","usertype").'">Create User Type</a></li>
                      <li class=""><a href="'.ApplicationURL("Pageaccess","Manage").'">Page Access</a></li>
                    </ul></li>';}
					

					
					if($obj->Check_page_permission("Settings")==true){
					 $BeforeMainContent.='<li class=""><a><i class="fa fa-cogs"></i>Site Configuration<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li class=""><a href="index.php?Theme=black&Base=Settings&Script=Insertupdate_site_setting&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}">Site Settings</a></li>
                      <li class=""><a href="index.php?Theme=black&Base=Settings&Script=Insertupdate_scripting&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}">Scripting</a></li>
					  <li class=""><a href="index.php?Theme=black&Base=Settings&Script=Insertupdate_logo&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}">Logo and Icon</a></li>
                      
                    </ul></li>';}
					




					
					$BeforeMainContent.='<li><a href="'.ApplicationURL("Profile","UserProfile").'"><i class="fa fa-address-card"></i>My Profile<span class=""></span></a></li>
					<li><a href="'.ApplicationURL("Changepassword","ChangePassword").'"><i class="fa fa-key"></i>Change Password<span class=""></span></a></li>
	<li><a href="'.ApplicationURL("Logout","logout").'"><i class="fa fa-sign-out"></i>Logout<span class=""></span></a></li>
                </ul>
                
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>';
		
		
		
		$BeforeMainContent.='<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="'.$theme_path.'/images/profile.png" alt="">'.$_SESSION["UserName"].'
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="'.ApplicationURL("Profile","UserProfile").'"> Profile</a></li>
                     
                    <li><a href="'.ApplicationURL("Logout","logout").'"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                
                 <li role="" class="dropdown" title="Total online user">
                  <a href="#" class="dropdown-toggle info-number"  aria-expanded="false">
                    <i class="fa fa-user"></i>
                    <span id="notification_aleart_1" class="badge bg-green">0</span>
                  </a>
                  
                </li>
                
                 <li role="" class="dropdown" title="Total unread message">
                  <a href="#" class="dropdown-toggle info-number"  aria-expanded="false">
                    <i class="fa fa-comments"></i>
                    <span id="notification_aleart_2" class="badge bg-red">0</span>
                  </a>
                  
                </li>
                

              </ul>
            </nav>
          </div>
        </div>
        
		<div class="right_col" role="main" style="min-height: 3627px;">
		
		';}
		
		
		?>
