<?
	// sunjove@gmail.com


    $Entity="User";
    $EntityLower=strtolower($Entity);

    $User=SQL_Select($Entity="User", $Where="UserID = {$_SESSION["UserID"]}", $OrderBy="", $SignleRow=true, $Debug=false);
    $User["UserPassword"]=$User["UserPasswordConfirm"]=$User["UserPassword"];

    $FormTitle="User Profile";
    $ButtonCaption="Update";
    $ActionURL=ApplicationURL("Profile",$Script="UserProfileUpdate");

	$Input=array();
    $Input[]=array("VariableName"=>"UserEmail", "DefaultValue"=>$User["UserEmail"], "Caption"=>"Email", "ControlHTML"=>CTL_InputText("UserEmail", $obj->edit_data_replace($User["UserEmail"]), "", 51), "Required"=>true);
	$Input[]=array("VariableName"=>"NameFirst", "DefaultValue"=>$User["NameFirst"], "Caption"=>"First name", "ControlHTML"=>CTL_InputText("NameFirst", $obj->edit_data_replace($User["NameFirst"]), "", 51), "Required"=>true);
    $Input[]=array("VariableName"=>"NameLast", "DefaultValue"=>$User["NameLast"], "Caption"=>"Last name", "ControlHTML"=>CTL_InputText("NameLast", $obj->edit_data_replace($User["NameLast"]), "", 51), "Required"=>true);
	//$Input[]=array("VariableName"=>"DateBorn", "DefaultValue"=>$User["DateBorn"], "Caption"=>"Date of birth", "ControlHTML"=>CTL_DateSelector($DateSelectorName="DateBorn", $SelectedDate=$User["DateBorn"], $YearHalfSpan=50, $Class="", $Years=true, $Months=true, $Days=true), "Required"=>false);

	$Input[]=array("VariableName"=>"UserPicture", "DefaultValue"=>$User["UserPicture"], "Caption"=>"Avatar", "ControlHTML"=>CTL_ImageUpload($ControlName="UserPicture", $CurrentImage=$User["UserPicture"], $AllowDelete=true, $Class="FormTextInput", $ThumbnailHeight=100, $ThumbnailWidth=0, $Preview=true, $Size=40)."<br><br>", "Required"=>false);

	$Input[]=array("VariableName"=>"Street", "DefaultValue"=>$User["Street"], "Caption"=>"Street", "ControlHTML"=>CTL_InputText("Street", $obj->edit_data_replace($User["Street"]), "", 51), "Required"=>false);
    $Input[]=array("VariableName"=>"City", "DefaultValue"=>$User["City"], "Caption"=>"City", "ControlHTML"=>CTL_InputText("City", $obj->edit_data_replace($User["City"]), "", 51), "Required"=>false);
    $Input[]=array("VariableName"=>"ZIP", "DefaultValue"=>$User["ZIP"], "Caption"=>"ZIP", "ControlHTML"=>CTL_InputText("ZIP", $obj->edit_data_replace($User["ZIP"]), "", 51), "Required"=>false);
    $Input[]=array("VariableName"=>"State", "DefaultValue"=>$User["State"], "Caption"=>"State", "ControlHTML"=>CTL_InputText("State", $obj->edit_data_replace($User["State"]), "", 51), "Required"=>false);
    //$Input[]=array("VariableName"=>"CountryID", "DefaultValue"=>$User["CountryID"], "Caption"=>"Country", "ControlHTML"=>CCTL_CountryLookup($Name="CountryID", $ValueSelected=$User["CountryID"]), "Required"=>false);
    $Input[]=array("VariableName"=>"PhoneHome", "DefaultValue"=>$User["PhoneHome"], "Caption"=>"Home phone", "ControlHTML"=>CTL_InputText("PhoneHome", $obj->edit_data_replace($User["PhoneHome"]), "", 51), "Required"=>false);
    $Input[]=array("VariableName"=>"PhoneOffice", "DefaultValue"=>$User["PhoneOffice"], "Caption"=>"Office phone", "ControlHTML"=>CTL_InputText("PhoneOffice", $obj->edit_data_replace($User["PhoneOffice"]), "", 51), "Required"=>false);
    $Input[]=array("VariableName"=>"PhoneMobile", "DefaultValue"=>$User["PhoneMobile"], "Caption"=>"Mobile phone", "ControlHTML"=>CTL_InputText("PhoneMobile", $obj->edit_data_replace($User["PhoneMobile"]), "", 51), "Required"=>false);
    $Input[]=array("VariableName"=>"PhoneDay", "DefaultValue"=>$User["PhoneDay"], "Caption"=>"Day phone", "ControlHTML"=>CTL_InputText("PhoneDay", $obj->edit_data_replace($User["PhoneDay"]), "", 51), "Required"=>false);
    $Input[]=array("VariableName"=>"FAX", "DefaultValue"=>$User["FAX"], "Caption"=>"FAX", "ControlHTML"=>CTL_InputText("FAX", $obj->edit_data_replace($User["FAX"]), "", 51), "Required"=>false);
    $Input[]=array("VariableName"=>"Website", "DefaultValue"=>$User["Website"], "Caption"=>"Website", "ControlHTML"=>CTL_InputText("Website", $obj->edit_data_replace($User["Website"]), "", 51)."", "Required"=>false);

	$MainContent.=FormInsertUpdate(
		$EntityName=$EntityLower,
		$FormTitle,
		$Input,
		$ButtonCaption,
		$ActionURL
	);
?> 