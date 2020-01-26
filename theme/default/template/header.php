<?
$api=0;
if(isset($_REQUEST['api']) and $_REQUEST['api']==1)
{$api='1';}

ob_start();
$BeforeMainContent.="


	<!DOCTYPE html>
	<html>

	<head>
	
	<title>Rupayan Group</title>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

	<link rel=\"stylesheet\" type=\"text/css\" href=\"./theme/{$_REQUEST["Theme"]}/style/style.css\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"./theme/{$_REQUEST["Theme"]}/style/DataGridDefault.css\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"./theme/{$_REQUEST["Theme"]}/style/layout.css\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"./theme/{$_REQUEST["Theme"]}/style/castom.css\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"./theme/{$_REQUEST["Theme"]}/style/jquery-ui-1.8.17.custom.css\">

	<script type=\"text/javascript\" src=\"./theme/default/js/jquery-1.6.1.min.js\"></script>
	<script type=\"text/javascript\" src=\"./theme/default/js/jquery-ui-1.8.16.custom.min.js\"></script>
	<script type=\"text/javascript\" src=\"./theme/default/js/jquery-ui-timepicker-addon.js\"></script>

	<link href=\"./theme/default/bootstrap/bootstrap/css/bootstrapmodified.css\" rel=\"stylesheet\" media=\"screen\">
	<link href=\"./theme/default/bootstrap/bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\" media=\"screen\">
	<link href=\"./theme/default/bootstrap/vendors/easypiechart/jquery.easy-pie-chart.css\" rel=\"stylesheet\" media=\"screen\">
	<link href=\"./theme/default/bootstrap/assets/styles.css\" rel=\"stylesheet\" media=\"screen\">


	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
	<![endif]-->
	<script src=\"./theme/default/bootstrap/vendors/modernizr-2.6.2-respond-1.1.0.min.js\"></script>

        <link href=\"./theme/default/bootstrap/assets/DT_bootstrap.css\" rel=\"stylesheet\" media=\"screen\">

	
	</head>
";

if($_REQUEST["Script"]!="Home")
    $MainContent.="
    
    	<link href=\"./theme/default/style/unicorn.main.css\" rel=\"stylesheet\" media=\"screen\">

    
    ";
$LoginLogout="";
if($_SESSION["UserID"]==$Application["UserIDGuest"])$LoginLogout.='
		<a href="'.ApplicationURL("System","login").'" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-off"></i> Login</a>
	';
if($_SESSION["UserID"]!=$Application["UserIDGuest"])$LoginLogout.='
		<a href="'.ApplicationURL("System","logout").'" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-off"></i> Logout</a>
	';

        
$Settings = SQL_Select("Settings","SettingsID=0","",true);        


$MainContent.='
    <body>';
	
	
	
	
	if($api==0)
	{
	
	$BeforeMainContent.=' <!--Popup window start-->
    
       
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

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
					<a class="brand" href="./index.php"><img style="height:45px;vertical-align: middle;" src="./upload/'.$Settings["nib_site_logo"].'"></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
	';
	
	if($_SESSION["UserID"]>1)
	$MainContent.='					
                            <li class="dropdown">
                                <a href="'.ApplicationURL("System","UserProfile").'" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> '.$_SESSION["UserName"].' <i class="caret"></i></a>
                            </li>
	';
							
	$MainContent.='
                            <li class="dropdown">
                                '.$LoginLogout.'
                            </li>
                        </ul>
                        <ul class="nav">

                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">

';

if($_SESSION["UserID"]==2 and $_REQUEST["Base"]!="POS"){
	$MainContent.='	
					<div class="span3" id="sidebar" style="width:240px;">
						<div style="width:240px;">
							<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                                                        ';
                                                        
                                                        //if(GetPermission("OptionCustomer",true))
                                                            $MainContent.='	
								<li >
									<a href="'.ApplicationURL("Page","Home").'"> Dashboard</a>
								</li>';
								
								
								if(GetPermission("OptionSettings",true))

								{
									$MainContent.='			
								<li>
									<a href="'.ApplicationURL("Property","Manage").'">Property</a>
								</li>';
								}
								
								
									if(GetPermission("OptionSettings",true))

								{
									$MainContent.='			
								<li>
									<a href="'.ApplicationURL("Others","file_manager").'">File Manager</a>
								</li>';
								}
								
								
								if(GetPermission("OptionSettings",true))

								{
									$MainContent.='			
								<li>
									<a href="'.ApplicationURL("Blog","Manage").'">Blog</a>
								</li>';
								}						

								if(GetPermission("OptionSettings",true))
								{
								$MainContent.='	<li class="sub_main">
							<a href="#" onclick="return false;"><i class="icon-chevron-right"></i>Catagory</a>
							<ul class="sub_menu nav nav-list" >
							
							<li>
							<a class="normal_text" href="'.ApplicationURL("blogcategory","Manage").'">&nbsp;&nbsp;&nbsp;Blog Category</a>
							</li>
							
							<li>
							<a class="normal_text" href="'.ApplicationURL("Category","Manage").'">&nbsp;&nbsp;&nbsp;Property Category</a>
							</li>							
								


							</ul>
								</li>';}
								
								if(GetPermission("OptionSettings",true))

								{
									$MainContent.='			
								<li>
									<a href="'.ApplicationURL("Image","Manage").'">Image Gallery</a>
								</li>';
								}						

								
								if(GetPermission("OptionSettings",true))
								{
                                                            $MainContent.='	
								
								<li>
									<a href="'.ApplicationURL("Videos","Manage").'">Video Gallery</a>
								</li>
                                                        ';
								}	
								
								
							
								if(GetPermission("OptionSettings",true))
		{
		$MainContent.='	<li class="sub_main">
							<a href="#" onclick="return false;"><i class="icon-chevron-right"></i>Newsletter</a>
							<ul class="sub_menu nav nav-list" >
							<li>
								<a class="normal_text" href="'.ApplicationURL("Newsletter","Manage").'"></i>&nbsp;&nbsp;&nbsp;Newsletter Subscriber</a>
								</li>
								<li>
								<a class="normal_text" href="'.ApplicationURL("Newsletter","Send").'"></i>&nbsp;&nbsp;&nbsp;Send Newsletter</a>
								</li>
								
								


							</ul>
								</li>';
		}
								
								
								
								
								

								if(GetPermission("OptionSettings",true))

								{
									$MainContent.='			
								<li>
									<a href="'.ApplicationURL("Feedback","Manage").'">Feedback</a>
								</li>';
								}
																
													
														
								
								if(GetPermission("OptionSettings",true))
								{
                                                            $MainContent.='	
								
								<li>
									<a href="'.ApplicationURL("Faq","Manage").'"> FAQ</a>
								</li>
                                                        ';
								}

                                                        
        if(GetPermission("OptionSettings",true))
		{
		$MainContent.='	<li class="sub_main">
							<a href="#" onclick="return false;"><i class="icon-chevron-right"></i>Site Configuration</a>
							<ul class="sub_menu nav nav-list" >
							<li>
								<a class="normal_text" href="index.php?Theme=default&Base=Settings&Script=Insertupdate_site_setting&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}"></i>&nbsp;&nbsp;&nbsp;Site Settings</a>
								</li>
								<li>
								<a class="normal_text" href="index.php?Theme=default&Base=Settings&Script=Insertupdate_scripting&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}"></i>&nbsp;&nbsp;&nbsp;Scripting</a>
								</li>
								<li>
								<a class="normal_text" href="index.php?Theme=default&Base=Settings&Script=Insertupdate_logo&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}"></i>&nbsp;&nbsp;&nbsp;Logo and Icon</a>
								</li>
								


							</ul>
								</li>';
		}
                                                            
                                                        $MainContent.='	
							</ul>
                                                        
                                                        
                                                        <br>
                                                        <div sytle="clear:both;"></div>
                                                        <div class="" align="left" style="font-size:12px;">
                                                                <hr>
                                                                Powered by :  <img src="./upload/3e3ee836fa32085b27e124165e159d17_logo-nbiz-e1455560405931.png" width="80">
                                                                <br>
                                                                <a href="https://www.nibizsoft.com" target="_blank">www.nibizsoft.com </a><br>
                                                                Version : 6
                                                        </div>
						</div>
                                                
					</div>
                                        
                                        
                                        
	';
}   
else
	$MainContent.='
		<div class="span3" id="sidebar" style="width:185px;">
		
		</div>
	
	';

				
  $MainContent.='              
                <!--/span-->
                <div class="span9" id="content" style="width:78%;">
				
					<div style="height:15px;"></div>


';

}?>