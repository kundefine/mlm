<?
	include "./script/{$_REQUEST['Base']}/Scriptvariables.php";

    $UpdateMode=false;
    $FormTitle="Insert $EntityCaption";
    $ButtonCaption="Insert";
    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction_logo");

	// The default value of the input box will goes here according to how many fields we showing
    $TheEntityName=array(
		"nib_header_image"=>"",
		"nib_header_image_status"=>"",
		"nib_site_logo"=>"",
		"nib_site_logo_status"=>"",
		"nib_site_icon"=>"",
		"nib_site_icon_status"=>"",
       
	);

$Time_zone_array_title;
$Time_zone_array_value;

for($i=0;$i<count($obj->time_zone_array);$i++)
	{
		$key=key($obj->time_zone_array);
		$Time_zone_array_title[]=key($obj->time_zone_array);
		$Time_zone_array_value[]=$obj->time_zone_array[$key];
		next($obj->time_zone_array);
								
	}


	if(isset($_REQUEST[$Entity."ID"])&&isset($_REQUEST[$Entity."UUID"])&&!isset($_REQUEST["DeleteConfirm"])){
	    $UpdateMode=true;
	    $FormTitle="Script Setting";
	    $ButtonCaption="Update";
	    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction_logo", $Entity."ID={$_REQUEST[$Entity."ID"]}&".$Entity."UUID={$_REQUEST[$Entity."UUID"]}");
		if($UpdateMode&&!isset($_POST["".$Entity."ID"]))$TheEntityName=SQL_Select($Entity="{$Entity}", $Where="{$Entity}ID = {$_REQUEST[$Entity."ID"]} AND {$Entity}UUID = '{$_REQUEST[$Entity."UUID"]}'", $OrderBy="{$OrderByValue}", $SingleRow=true);
	}


	
	// Input sytem display goes here
	$Input=array();
            
			$Input[]=array("VariableName"=>"nib_header_image_status", "Caption"=>"Header Image Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="nib_header_image_status", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["nib_header_image_status"]), "Required"=>false);
			$Input[]=array("VariableName"=>"nib_header_image","Caption"=>"Header Image","ControlHTML"=>CTL_ImageUpload($ControlName="nib_header_image",$CurrentImage01=$TheEntityName["nib_header_image"],$AllowDelete=true, $Class="FormTextInput", $ThumbnailHeight=100, $ThumbnailWidth=0 , $Preview=true));
			
			$Input[]=array("VariableName"=>"nib_site_logo_status", "Caption"=>"Site Logo Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="nib_site_logo_status", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["nib_site_logo_status"]), "Required"=>false);
			$Input[]=array("VariableName"=>"nib_site_logo","Caption"=>"Site Logo","ControlHTML"=>CTL_ImageUpload($ControlName="nib_site_logo",$CurrentImage01=$TheEntityName["nib_site_logo"],$AllowDelete=true, $Class="FormTextInput", $ThumbnailHeight=100, $ThumbnailWidth=0 , $Preview=true));
			
			$Input[]=array("VariableName"=>"nib_site_icon_status", "Caption"=>"Icon Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="nib_site_icon_status", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["nib_site_icon_status"]), "Required"=>false);
			$Input[]=array("VariableName"=>"nib_site_icon","Caption"=>"Site Icon","ControlHTML"=>CTL_ImageUpload($ControlName="nib_site_icon",$CurrentImage01=$TheEntityName["nib_site_icon"],$AllowDelete=true, $Class="FormTextInput", $ThumbnailHeight=100, $ThumbnailWidth=0 , $Preview=true));


	$MainContent.=FormInsertUpdate(
		$EntityName=$EntityLower,
		$FormTitle,
		$Input,
		$ButtonCaption,
		$ActionURL
	);
?>