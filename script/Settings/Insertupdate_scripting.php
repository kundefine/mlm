<?
	include "./script/{$_REQUEST['Base']}/Scriptvariables.php";

    $UpdateMode=false;
    $FormTitle="Insert $EntityCaption";
    $ButtonCaption="Insert";
    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction_site_setting");

	// The default value of the input box will goes here according to how many fields we showing
    $TheEntityName=array(
       
		"nib_header_script"=>"",
		"nib_header_script_status"=>"",
		"nib_body_script"=>"",
		"nib_body_script_status"=>"",
		"nib_share_script"=>"",
		"nib_share_script_status"=>"",
		"nib_fanpage_status"=>"",
		"nib_fanpage_facebook"=>"",
		"nib_fanpage_google"=>"",
		"nib_fanpage_linkedin"=>"",
		"nib_fanpage_twitter"=>"",
		"nib_fanpage_youtube"=>"",
		"nib_google_map_script"=>"",
		"nib_google_map_script_status"=>""	
       
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
	    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction_scripting", $Entity."ID={$_REQUEST[$Entity."ID"]}&".$Entity."UUID={$_REQUEST[$Entity."UUID"]}");
		if($UpdateMode&&!isset($_POST["".$Entity."ID"]))$TheEntityName=SQL_Select($Entity="{$Entity}", $Where="{$Entity}ID = {$_REQUEST[$Entity."ID"]} AND {$Entity}UUID = '{$_REQUEST[$Entity."UUID"]}'", $OrderBy="{$OrderByValue}", $SingleRow=true);
	}


	
	// Input sytem display goes here
	$Input=array();
            
			$Input[]=array("VariableName"=>"nib_header_script_status", "Caption"=>"Header Script Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="nib_header_script_status", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["nib_header_script_status"]), "Required"=>false);
			$Input[]=array("VariableName"=>"nib_header_script","Caption"=>"Header Script","ControlHTML"=>CTL_InputTextArea("nib_header_script",$obj->edit_data_replace($TheEntityName["nib_header_script"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_body_script_status", "Caption"=>"Body Script Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="nib_body_script_status", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["nib_body_script_status"]), "Required"=>false);
			$Input[]=array("VariableName"=>"nib_body_script","Caption"=>"Body Script","ControlHTML"=>CTL_InputTextArea("nib_body_script",$obj->edit_data_replace($TheEntityName["nib_body_script"]),40, 8,"not required"));
			
			
			
			$Input[]=array("VariableName"=>"nib_google_map_script_status", "Caption"=>"Google Map Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="nib_google_map_script_status", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["nib_google_map_script_status"]), "Required"=>false);
			$Input[]=array("VariableName"=>"nib_google_map_script","Caption"=>"Google Map Script","ControlHTML"=>CTL_InputTextArea("nib_google_map_script",$obj->edit_data_replace($TheEntityName["nib_google_map_script"]),40, 8,"not required"));
			
			
			$Input[]=array("VariableName"=>"nib_share_script_status", "Caption"=>"Share Script Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="nib_share_script_status", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["nib_share_script_status"]), "Required"=>false);
			$Input[]=array("VariableName"=>"nib_share_script","Caption"=>"Share Script","ControlHTML"=>CTL_InputTextArea("nib_share_script",$obj->edit_data_replace($TheEntityName["nib_share_script"]),40, 8,"not required"));
			$Input[]=array("VariableName"=>"nib_fanpage_status", "Caption"=>"Fan Page Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="nib_fanpage_status", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["nib_fanpage_status"]), "Required"=>false);
			$Input[]=array("VariableName"=>"nib_fanpage_facebook","Caption"=>"Facebook Link","ControlHTML"=>CTL_InputText("nib_fanpage_facebook",$obj->edit_data_replace($TheEntityName["nib_fanpage_facebook"]),"", 30,"not required"));
			$Input[]=array("VariableName"=>"nib_fanpage_google","Caption"=>"Google Link","ControlHTML"=>CTL_InputText("nib_fanpage_google",$obj->edit_data_replace($TheEntityName["nib_fanpage_google"]),"", 30,"not required"));
			$Input[]=array("VariableName"=>"nib_fanpage_linkedin","Caption"=>"Linkedin Link","ControlHTML"=>CTL_InputText("nib_fanpage_linkedin",$obj->edit_data_replace($TheEntityName["nib_fanpage_linkedin"]),"", 30,"not required"));
			$Input[]=array("VariableName"=>"nib_fanpage_twitter","Caption"=>"Twitter Link","ControlHTML"=>CTL_InputText("nib_fanpage_twitter",$obj->edit_data_replace($TheEntityName["nib_fanpage_twitter"]),"", 30,"not required"));
			$Input[]=array("VariableName"=>"nib_fanpage_youtube","Caption"=>"Youtube Link","ControlHTML"=>CTL_InputText("nib_fanpage_youtube",$obj->edit_data_replace($TheEntityName["nib_fanpage_youtube"]),"", 30,"not required"));
			
			
			
            //$Input[]=array("VariableName"=>"IsActive", "Caption"=>"Active?", "ControlHTML"=>CTL_InputRadioSet($VariableName="{$Entity}IsActive", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["{$Entity}IsActive"]), "Required"=>false);

	$MainContent.=FormInsertUpdate(
		$EntityName=$EntityLower,
		$FormTitle,
		$Input,
		$ButtonCaption,
		$ActionURL
	);
?>