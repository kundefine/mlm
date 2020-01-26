<?
	include "./script/{$_REQUEST["Base"]}/Scriptvariables.php";
	$user_id=$_REQUEST['UserID'];
    $UpdateMode=false;
	if(isset($_REQUEST[$Entity."ID"])&&isset($_REQUEST[$Entity."UUID"]))$UpdateMode=true;

    $ErrorUserInput["_Error"]=false;

	if(!$UpdateMode)$_REQUEST["{$Entity}ID"]=0;
	//some change goes here
	$TheEntityName=SQL_Select($Entity="{$Entity}", $Where="UserName='$_POST[UserName]'");
    if(count($TheEntityName)>0){
	    $ErrorUserInput["_Error"]=true;
	    $ErrorUserInput["_Message"]="This Value Already Taken.";
	}
//Theme=black&Base=User&Script=Manage&ActionNewUser=1
    if($ErrorUserInput["_Error"]){
        //include "./script/{$_REQUEST["Base"]}/Manage.php";
		
		$MainContent.='
		<br><br><br><br><h3 style="text-align:center;color:red;">User Name Already Exists</h3>
		 <script language="JavaScript" >
	            window.location="'.ApplicationURL("{$_REQUEST["Base"]}","Manage").'&ActionNewUser=1";
	        </script>
		';
		
	}else{
	    $Where="";
	    if($UpdateMode)$Where="{$Entity}ID = {$_REQUEST[$Entity."ID"]} AND {$Entity}UUID = '{$_REQUEST[$Entity."UUID"]}'";
		
	if(isset($_POST["UserName"]))
	{$username=$_POST["UserName"];}
	else
	{$username=$User["UserName"];}
        

		// give the data dase fields name and the post value name
	    $TheEntityName=SQL_InsertUpdate(
	        $Entity="{$Entity}",
			$TheEntityNameData=array(
				"UserName"=>							$obj->string_data_input($username),
			    "UserPassword"=>						$obj->string_data_input(md5($_POST["UserPassword"])),
			    "UserEmail"=>							$obj->string_data_input($_POST["UserEmail"]),

			    "NameFirst"=>							$obj->string_data_input($_POST["NameFirst"]),
			    "NameLast"=>							$obj->string_data_input($_POST["NameLast"]),
			    "Street"=>								$obj->string_data_input($_POST["Street"]),
			    "City"=>								$obj->string_data_input($_POST["City"]),
			    "ZIP"=>									$obj->string_data_input($_POST["ZIP"]),
			    "State"=>								$obj->string_data_input($_POST["State"]),
			    "CountryID"=>							$obj->string_data_input($_POST["CountryID"]),
			    "PhoneHome"=>							$obj->string_data_input($_POST["PhoneHome"]),
			    "PhoneOffice"=>							$obj->string_data_input($_POST["PhoneOffice"]),
			    "PhoneMobile"=>							$obj->string_data_input($_POST["PhoneMobile"]),
			    "PhoneDay"=>							$obj->string_data_input($_POST["PhoneDay"]),
			    "FAX"=>									$obj->string_data_input($_POST["FAX"]),
			    "Website"=>								$obj->string_data_input($_POST["Website"]),
			    "DateBorn"=>							"{$_POST["DateBornYear"]}-{$_POST["DateBornMonth"]}-{$_POST["DateBornDay"]}",
			    "UserPicture"=>							$_POST["UserPicture"],

			    "UserIDParent"=>						0,
			    "UserIsActive"=>						1,
			    "UserIsRegistered"=>					1,
			    "UserRegistrationCode"=>				$User["UserRegistrationCode"],
				"UserRegistrationPendingApprovals"=>	0,
				"{$Entity}IsActive"=>$_POST["{$Entity}IsActive"]
			),
			$Where
			);

	    $MainContent.='
		<br><br><br><br><h3 style="text-align:center;color:green;">Action applied successfully!</h3>
		 <script language="JavaScript" >
	            window.location="'.ApplicationURL("{$_REQUEST["Base"]}","Manage").'";
	        </script>
		';
	}
?>