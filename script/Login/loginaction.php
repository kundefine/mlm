<?
	/*
		Script:		
		Author:		SunJove@gmail.com
		Date:		
		Purpose:	
		Note:		
	*/
	
	$RequiredInputMissing=false;

	$password=$obj->string_data_input(md5($_POST["LogInUserPassword"]));
	$username=$obj->string_data_input($_POST["LogInUserName"]);

	$User=SQL_Select($Entity="User", $Where="UserName = '$username' AND UserPassword = '$password' AND UserIsActive = 1 AND UserIsRegistered = 1", $OrderBy="UserName", $SingleRow=false, $Debug=false);
	if(count($User)<1){$ErrorUserInput["_Error"]=true; $ErrorUserInput["_Message"]="Sorry, the username and password didn't match!";}

	if(trim($_POST["LogInUserPassword"])==""){$ErrorUserInput["_Error"]=true; $ErrorUserInput["_Message"]="Please provide with the password";}
	if(trim($_POST["LogInUserName"])==""){$ErrorUserInput["_Error"]=true; $ErrorUserInput["_Message"]="Please provide with the username";}
	
	if($ErrorUserInput["_Error"]){
		$MainContent.='<br><br><br><br><h3 style="text-align:center;">'.$Content=$ErrorUserInput["_Message"].'</h3>

			<script language="JavaScript">
			
			    window.location.href="'.ApplicationURL("Login","login").'";
		
			</script>
		';
		
		
	}else{
	    SessionSetUser($UserRow=$User[0]);
		$_SESSION['login']='1';
		$_SESSION['Usertype']=$User[0]['Usertype'];
		$_SESSION['UserPicture']=$User[0]['UserPicture'];
		$_SESSION['NameFirst']=$User[0]['NameFirst'];
		$_SESSION['NameLast']=$User[0]['NameLast'];
		
	    
		$MainContent.="
		
		<br><br><br><br><h3 style=\"text-align:center;\">Login Success!</h3>

			<script language=\"JavaScript\">
			
			    window.location.href='".ApplicationURL("Dashboard","Manage")."';
		
			</script>
		";
	}
?> 