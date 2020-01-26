<?
    $Entity="User";
    $EntityLower=strtolower($Entity);

    CheckRequiredFormVariables(
		$Variable=array(
			array("Name"=>"UserEmail", "Message"=>"Please provide with the email."),
			array("Name"=>"NameFirst", "Message"=>"Please provide with the first name."),
			array("Name"=>"NameLast", "Message"=>"Please provide with the last name.")
		)
	);
	
	

    if($ErrorUserInput["_Error"]){
        include "./script/Profile/UserProfile.php";
	}else{
	    $User=SQL_Select($Entity="User", $Where="UserID = {$_SESSION["UserID"]}", $OrderBy="UserName", $SingleRow=true, $RecordShowFrom=0, $RecordShowUpTo=0, $Debug=false);
	    $_POST["UserPicture"]=ProcessUpload($FieldName="UserPicture", $UploadPath=$Application["UploadPath"]);

	    $Where="UserID = {$_SESSION["UserID"]}";
	    SQL_InsertUpdate(
	        $Entity="User",
			$UserData=array(
			    "UserName"=>							$obj->string_data_input($User["UserName"]),
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
			    "UserIsActive"=>						$User["UserIsActive"],
			    "UserIsRegistered"=>					$User["UserIsRegistered"],
			    "UserRegistrationCode"=>				$User["UserRegistrationCode"],
				"UserRegistrationPendingApprovals"=>	0,
				"UserIsApproved"=>						1,
			),
			$Where
		);

		//Email the log in information to the user
		
		$MainContent.='
		
		<br><br><br><br><h3 style="text-align:center;color:green;">Action applied successfully!</h3>
		    <script language="JavaScript">
		  
		        window.location="'.ApplicationURL("Profile","UserProfile").'";
		    
			</script>
		';
	}
	

?> 