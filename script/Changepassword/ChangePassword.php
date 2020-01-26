<?
	// sunjove@gmail.com


    $Entity="ChangePassword";
    $EntityLower=strtolower($Entity);

    $User=SQL_Select($Entity="User", $Where="UserID = {$_SESSION["UserID"]}", $OrderBy="", $SignleRow=true, $Debug=false);
    $User["UserPassword"]=$User["UserPasswordConfirm"]=$User["UserPassword"];

    $FormTitle="Change Password";
    $ButtonCaption="Change";
    $ActionURL=ApplicationURL("System",$Script="ChangePasswordUpdate");

	$Input=array();
    $Input[]=array("VariableName"=>"UserPassword", "DefaultValue"=>$User["UserPassword"], "Caption"=>"Password", "ControlHTML"=>CTL_InputPassword("UserPassword", "", "", 30), "Required"=>true);
    $Input[]=array("VariableName"=>"UserPasswordConfirm", "DefaultValue"=>$User["UserPasswordConfirm"], "Caption"=>"Repassword", "ControlHTML"=>CTL_InputPassword("UserPasswordConfirm", "", "", 30), "Required"=>true);
    

	$MainContent.=FormInsertUpdate(
		$EntityName=$EntityLower,
		$FormTitle,
		$Input,
		$ButtonCaption,
		$ActionURL
	);
?> 