<?
	/*
		Script:		userpasswordrecover.php
		Author:		
		Purpose:	Allows the user to provide with the email address and recover the log in detail
		Date:		Last updated 01-19-07
		Note:		
	*/
	
    $Entity="UserEmail";
    $EntityLower=strtolower($Entity);

    $User=array(
        "UserEmail"=>""
	);

    $FormTitle="Recover Account Password";
    $ButtonCaption="Recover";
    $ActionURL=ApplicationURL("Forgotpassword","userpasswordrecoveraction");

	$Input=array();
    $Input[]=array("VariableName"=>"UserEmail", "DefaultValue"=>$User["UserEmail"], "Caption"=>"Email", "ControlHTML"=>CTL_InputText("UserEmail", $User["UserEmail"], "", 61), "Required"=>true);

$MainContent.='<div class="row"><div class="col-md-3"></div><div class="col-md-6"><br><br><br>';
	$MainContent.=FormInsertUpdate(
		$EntityName=$EntityLower,
		$FormTitle,
		$Input,
		$ButtonCaption,
		$ActionURL
	);
	
	$MainContent.='</div></div>';
?>
 
