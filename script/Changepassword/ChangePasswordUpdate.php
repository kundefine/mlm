<?
    $Entity="User";
    $EntityLower=strtolower($Entity);

    CheckRequiredFormVariables(
		$Variable=array(
			array("Name"=>"UserPassword", "Message"=>"Please provide with the password."),
			array("Name"=>"UserPasswordConfirm", "Message"=>"Please verify password.")
			
		)
	);
	
	if($_POST["UserPassword"]!=$_POST["UserPasswordConfirm"]){
	    $ErrorUserInput["_Error"]=true;
	    $ErrorUserInput["_Message"]="The passwords didn't match!";
	}


    if($ErrorUserInput["_Error"]){
        include "./script/System/ChangePassword.php";
	}else{
	    $User=SQL_Select($Entity="User", $Where="UserID = {$_SESSION["UserID"]}", $OrderBy="UserName", $SingleRow=true, $RecordShowFrom=0, $RecordShowUpTo=0, $Debug=false);
	    $_POST["UserPicture"]=ProcessUpload($FieldName="UserPicture", $UploadPath=$Application["UploadPath"]);

	    $Where="UserID = {$_SESSION["UserID"]}";
	    SQL_InsertUpdate(
	        $Entity="User",
			$UserData=array(
			    "UserPassword"=>$obj->string_data_input(md5($_POST["UserPassword"]))
			),
			$Where
		);

		//Email the log in information to the user
		
		//Email the log in information to the user
		SendMail(
			$ToEmail=$_POST["UserEmail"],
			$Subject="Your login detail",
			$Body="
				Dear <b>{$_SESSION["UserName"]}</b>,<br>
				<br>
				Please find your log in detail below:<br>
				<br>
				Username: <b>{$_SESSION["UserName"]}</b><br>
				Password: <b>{$_POST["UserPassword"]}</b><br>
				<br>
				Please click <a href=\"".ApplicationURL("System","login")."\">here</a> to log into your account.<br>
				<br>
				Thanking you,<br>
				<br>
				<b>{$Application["Title"]}</b>
			",
			$FromName=$Application["Title"],
			$FromEmail = $Application["EmailContact"],
			$ReplyToName=$Application["Title"],
			$ReplyToEmail=$Application["EmailContact"],
			$ExtraHeaderParameters=""
		);

		
		$MainContent.='
		<br><br><br><br><h3 style="text-align:center;color:green;">Action applied successfully!</h3>
		    <script language="JavaScript">
		  
		        window.location="'.ApplicationURL("System","ChangePassword").'";
		    
			</script>
		';
	}
	

?> 