<?
    include "./library/session.php";
	include "./library/html.php";
	include "./fusebox/application.php";
	include "./fusebox/class.php";

	$Check_base='';
	$Base_data='';
	$Script_data='';
	$Theme_data='';
	$page_title='';
	
	//Set Base Theme and Script Data to the veriable
	if(isset($_REQUEST['Base']) and $_REQUEST['Base']!='')
	{$Base_data=$_REQUEST['Base'];}
	
	if(isset($_REQUEST['Script']) and $_REQUEST['Script']!='')
	{$Script_data=$_REQUEST['Script'];}
	
	if(isset($_REQUEST['Script']) and $_REQUEST['Script']!='')
	{$Script_data=$_REQUEST['Script'];}
	
	if(isset($_REQUEST['Theme']) and $_REQUEST['Theme']!='')
	{$Theme_data=$_REQUEST['Theme'];}



	//Set the security key
	$key='14cdfet785ghjur78ghwtg7ryr6409g87fgbas3148v4e';
	
	//Cheackinh the Scheme http or https
	if (isset($_SERVER['REQUEST_SCHEME']) and $_SERVER['REQUEST_SCHEME']=='https')
	{$uri = 'https://';}
	else
	{$uri = 'http://';}
	
	//Set the Base URL
	$baseurl=$uri.$_SERVER['HTTP_HOST'].'/mlm';
	
	// Createing an Object from Class
	$obj=new myclass();
	
	//Set the data to the class
	$obj->dataset($Application["DatabaseServer"],$Application["DatabaseName"],$Application["DatabaseUsername"],$Application["DatabasePassword"],$baseurl,$key);
	
	// Connect to the MySql database
	$obj->db_connect();


	//Set User type
	$user_type_condition_1=0;
	$user_type_condition=0;
	$colum="*";
	$table="tblusertype";
	$where_value="";
	$short_by="nib_type";
	$short="ASC";
	$limit='';
	$start='';
	
	$user_type_data_array=$obj->data_get($colum,$table,$where_value,$short_by,$short,$limit,$start);
	
		
	
	//All Base Dir array for security
	$base_array=array(
	    "Admin List"=>"Adminlist",
        "API"=>"Api",
        "Block User"=>"Blockuser",
        "Blog"=>"Blog",
        "Blog Category"=>"Blogcategory",
        "Change Password"=>"Changepassword",
        "Dashboard"=>"Dashboard",
        "Forgot Password"=>"Forgotpassword",
        "Login"=>"Login",
        "Logout"=>"Logout",
        "Page"=>"Page",
        "Page Access"=>"Pageaccess",
        "Profile"=>"Profile",
        "Setting"=>"Setting",
        "User"=>"User",
        "Activation" => "Activation",
        "TreeView" => "TreeView"
    );
	
	//All Admin panel Base array
	$login_base_admin_array=array(
	    "Admin List"=>"Adminlist",
        "API"=>"Api",
        "Block User"=>"Blockuser",
        "Blog"=>"Blog",
        "Blog Category"=>"Blogcategory",
        "Change Password"=>"Changepassword",
        "Dashboard"=>"Dashboard",
        "Page Access"=>"Pageaccess",
        "Profile"=>"Profile",
        "Setting"=>"Setting",
        "User"=>"User",
        "User"=>"User",
        "Activation" => "Activation",
        "TreeView" => "TreeView"
    );
	
	//All user panel Base array
	$login_base_user_array=array('Page');
	
	//Set user Script array
	$all_user_script=array("Api close"=>"api_chat_close","Api Chat Receive"=>"api_chat_receive","Api chat Reconnect"=>"api_chat_reconnect","Api Chat Reg"=>"api_chat_reg","Api Chat Send"=>"api_chat_send","Dashboard"=>"dashboard","Query/Feedback"=>"feedback","Home"=>"home","Login"=>"login","logout"=>"logout","Membership"=>"membership","Change Password"=>"password","Payment/Installment"=>"payment","Payment/Installment Details"=>"payment_view","Profile"=>"profile","My Property"=>"property","Property Details"=>"property_view");
	
	//All login Script/page array
	$login_script_user_array=array("Dashboard"=>"dashboard","Query/Feedback"=>"feedback","Membership"=>"membership","Change Password"=>"password","Payment/Installment"=>"payment","Payment/Installment Details"=>"payment_view","Profile"=>"profile","My Property"=>"property","Property Details"=>"property_view");
	
	//Set the blank templete for admin
	$blank_template_base_array=array('Api');
	
	//Set the blank templete for user
	$blank_template_script_array=array('api_chat_close','api_chat_receive','api_chat_reconnect','api_chat_reg','api_chat_send');


	//Conenct to the databae if the application is suppose to use a database and make the database connection available to the
	//entire application anytime.
	if($Application["UseDatabase"]){
		$Application["DatabaseLink"] = mysql_connect($Application["DatabaseServer"], $Application["DatabaseUsername"], $Application["DatabasePassword"]) or die("Couldn't connect to database due to: ".mysql_error()."<hr><Br>SunJove@gmail.com");
		mysql_select_db($Application["DatabaseName"], $Application["DatabaseLink"]) or die("Couldn't select database due to: ".mysql_error()."<hr><Br>SunJove@gmail.com");
		
		
	}
	
$Settings = SQL_Select("Settings","SettingsID=0","",true);

	//Set HTML content variables
	$MainContent=$BeforeMainContent=$AfterMainContent="";
	//Set the global User input error flags
	$ErrorUserInput=array("_Error"=>false, "_Message"=>"");
	//Start managing session
	SessionSet();
	//Proceed to load rest of the application
	include "./fusebox/customcontrol.php";

	//Set the login and user type data to the variable
	if(!isset($_SESSION['login']))
	{$_SESSION['login']=0;}
	
	if(!isset($_SESSION['Usertype']))
	{$_SESSION['Usertype']='Guest';}
	
	$user_login=$_SESSION['login'];
	$user_type=$_SESSION['Usertype'];
	
	
	
	//set user type condition
	
	$count=count($user_type_data_array);
	for($i=0;$i<$count;$i++)
	{
		$value=$user_type_data_array[$i]['nib_type'];
		
		if($value==$user_type)
		{$user_type_condition=1;$i=$count;}
		
		}
	reset($user_type_data_array);
		
		
		$count=count($user_type_data_array);
	for($i=0;$i<$count;$i++)
	{
		$value=$user_type_data_array[$i]['nib_type'];
		
		if($value!='Admin'){
		if($value==$user_type)
		{$user_type_condition_1=1;$i=$count;}
		}
		
		}
	reset($user_type_data_array);
	
	//Set data submit session
	
	if(!isset($_SESSION['Data_submit_id']))
	{$_SESSION['Data_submit_id']=uniqid();}
	else if($_SESSION['Data_submit_id']=='')
	{$_SESSION['Data_submit_id']=uniqid();}
	
	$submit_id=$_SESSION['Data_submit_id'];
	
	
	// Set the Default value for Base Theme and Script
	if($Theme_data=="")
	{$_REQUEST["Theme"]="mlm";}
	else{$_REQUEST["Theme"]=$Theme_data;}
	
	if($Base_data=="")
	{$_REQUEST["Base"]="Page";}
	
	if($Script_data=="")
	{$_REQUEST["Script"]="home";}
	else{$_REQUEST["Script"]=$Script_data;}
	
	if($_REQUEST["Base"]=="Page")
	{$_REQUEST["Theme"]="mlm";}
	
	
	 //Set the Theme Base and Script value to the variable
   
	$Theme_data=$_REQUEST['Theme'];
	$Base_data=$_REQUEST['Base'];
	$Script_data=$_REQUEST['Script'];

	// Checking the base for access
	$count=count($base_array);
	for($i=0;$i<count($base_array);$i++)
	{
		$key=key($base_array);
		$value=$base_array[$key];
		next($base_array);
		
		if($value==$Base_data)
		{$Check_base=$value;$i=$count;}

		}
		
	// Protact the Base if the user is illegal
	if($Check_base!='' and $Check_base==$Base_data)
	{$_REQUEST["Base"]=$Check_base;}
	else{$_REQUEST["Base"]="Page";$_REQUEST["Script"]="home";}
	
	$Script_data=$_REQUEST['Script'];
	
   //Set the custom url
   if($_REQUEST["Base"]=="Page")
   {
   $request_uri=$_SERVER['REQUEST_URI'];
   $url_parts = explode( "/",$request_uri);
   if(isset($url_parts[1]) and $url_parts[1]!=''){
   $_REQUEST["Script"]=$url_parts[1];}
   
   $Script_data=$_REQUEST['Script'];
   
   $user_script='';
   
   $user_script_count=count($all_user_script);
   
   for($i=0;$i<$user_script_count;$i++)
   {
	   $key=key($all_user_script);
	   $value=$all_user_script[$key];
	   next($all_user_script);
	   if($value==$Script_data){
		   $i=$user_script_count;
		   $user_script=$value;
		   $page_title=$key;
		   }
	   }
	   
	   reset($all_user_script);
	   
	   if($user_script!='')
	   {$_REQUEST['Script']=$user_script;}
	   else
	   {$_REQUEST['Script']="home";}
   }
   
   $Script_data=$_REQUEST['Script'];
   
	//set the blank template for admin api
	$show_all=1;
	$count=count($blank_template_base_array);
	for($i=0;$i<$count;$i++)
	{
	$value=$blank_template_base_array[$i];
	if($value==$Base_data)
	{$show_all=0; $i=$count;}
	
	}
	
	
	//set the blank template for user api
	$show_all=1;
	$count=count($blank_template_script_array);
	for($i=0;$i<$count;$i++)
	{
	$value=$blank_template_script_array[$i];
	if($value==$Script_data)
	{$show_all=0; $i=$count;}
	
	}
	
	
	//Set the theme path
	$theme_path=$obj->baseurl.'/theme/'.$_REQUEST["Theme"];

	//Redirect to the Dashboard if the user already Login
	if($Base_data=="Login" and $user_login==1 and $user_type_condition==1)
	{
		$redirect_url=$baseurl.'/index.php?Theme=black&Base=Dashboard&Script=Manage';
		header("location:$redirect_url");
		}
	
		//Check the login system for admin
		if($Base_data!="Page")
		{
		$count=count($login_base_admin_array);
		for($i=0;$i<$count;$i++)
		{
			$key=key($login_base_admin_array);
			$value=$login_base_admin_array[$key];
			next($login_base_admin_array);
			
			if($value==$Base_data)
			{
			$i=$count;
			if($user_login==1 and $user_type_condition==1)
			{}
			else
			{
				$redirect_url=$baseurl.'/index.php?Theme=black&Base=Login&Script=login';
				header("location:$redirect_url");}
			
			}
		}
		reset($login_base_admin_array);
		}

	
	//Check the login system for User
	if($Base_data=="Page")
		{
		$count=count($login_script_user_array);
		for($i=0;$i<$count;$i++)
		{
			$key=key($login_script_user_array);
			$value=$login_script_user_array[$key];
			next($login_script_user_array);
			
			if($value==$Script_data)
			{
			$i=$count;
			if($user_login==1 and $user_type=='User' and $Base_data=="Page")
			{}
			else
			{
				$redirect_url=$baseurl.'/login';
				header("location:$redirect_url");
				}
			
			}
		}

		reset($login_script_user_array);
		}
	
	
	//Check page access permission
	
	if($user_login==1 and $user_type_condition_1==1)
	{
		$mytable="tblpageaccess";
		$mywhere="nib_page='$Base_data' and nib_type='$user_type'";
		$check_permission=$obj->data_get_num($mytable,$mywhere);
		
		if($check_permission==0)
		{
			
			if($Base_data!="Dashboard" and $Base_data!="Changepassword" and $Base_data!="Profile")
			{
			$redirect_url=$baseurl.'/index.php?Theme=black&Base=Dashboard&Script=Manage';
			header("location:$redirect_url");}
			
			}
		
		
	}
	else if($user_login==1 and $user_type=='User')
	{}




	



	if(isset($_REQUEST["MainContentOnly"]))$BeforeMainContent="";
	//Print optioanl header
	if(!isset($_REQUEST["MainContentOnly"]) and !isset($_REQUEST["NoHeader"]))include "./theme/{$_REQUEST["Theme"]}/template/header.php";
	//Process the main page
	$Script="./script/System/error_404.php";
	if(file_exists("./script/{$_REQUEST["Base"]}/{$_REQUEST["Script"]}.php"))$Script="./script/{$_REQUEST["Base"]}/{$_REQUEST["Script"]}.php";
		include $Script;
	//Print the optional footer
	if(!isset($_REQUEST["MainContentOnly"]) and !isset($_REQUEST["NoFooter"]))include "./theme/{$_REQUEST["Theme"]}/template/footer.php";
    //Print debugging information

	//StaticContentEditor PopUp
    if($_SESSION["UserID"]>1){
        $MainContent12.="
			<script language=\"JavaScript\">
			<!--
			    var StaticContentEditorWindow;

			    function PopUpStaticContentEditor(StaticContentName){
			        StaticContentEditorWindow=window.open('".ApplicationURL("System",$Script="staticcontentedit", $OtherParameter="NoHeader&NoFooter")."&StaticContentName='+StaticContentName, 'StaticContentEditor', 'toolbar=0, status=1, location=0, menubar=0, resizable=0, scrollbars=0, height=600, width=800');
					setTimeout('CheckStaticContentEditorWindow()',1000)
				}

				function CheckStaticContentEditorWindow(){
				    if(StaticContentEditorWindow.closed){
					    window.location.reload();
					}else{
					    //StaticContentEditorWindow.setFocus();
						setTimeout('CheckStaticContentEditorWindow()',1000);
					}
				}
				
				
				
			//-->
			</script>
		";
	}

	if(isset($_REQUEST["SDebug"]))$MainContent.=DebugOutput();

	if(isset($_REQUEST["MainContentOnly"]))$AfterMainContent="";
	//Output the page
	
	
	
	
	
	//Replace the templete class start
	$templeate_class_replace_arrey=array('container-fluid','row-fluid','span12','widget-box','widget-title','widget-content nopadding','control-group','control-label','controls','form-horizontal','form-actions','input_class_replace','ThemeInput','ThemeButton','no required','required','FormTextInput');
	$templeate_class_replaceby_arrey=array('','row','col-md-12 col-sm-12 col-xs-12','x_panel','x_title','x_content','item form-group','col-form-label col-md-3 col-sm-3 label-align text_right','col-md-6 col-sm-6','form-horizontal form-label-left','col-md-12 col-sm-6 offset-md-3 text_center','form-control','form-control','form-control','form-control','form-control','form-control');
	
	$MainContent=str_replace($templeate_class_replace_arrey,$templeate_class_replaceby_arrey,$MainContent);
	
	
	
	
	//Replace the templete class End
	
	//Delete the data for blank template
	
	if($show_all==0)
	{$BeforeMainContent=''; $AfterMainContent='';}
	
	//Print the main content
	print $BeforeMainContent.$MainContent.$NoneReplaceMainContent.$AfterMainContent;
	
	//Close the MySql Connection
	$obj->db_close();
?>