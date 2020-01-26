<?
	include "./script/{$_REQUEST['Base']}/Scriptvariables.php";

    $UpdateMode=false;
    $FormTitle="Insert $EntityCaption";
    $ButtonCaption="Insert";
    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction_site_setting");

	// The default value of the input box will goes here according to how many fields we showing
    $TheEntityName=array(
       
		"nib_site_title"=>"",
		"nib_site_description"=>"",
		"nib_keyword"=>"",
		"nib_keyword_description"=>"",
		"nib_mail_1"=>"",
		"nib_mail_2"=>"",
		"nib_mail_3"=>"",
		"nib_mail_4"=>"",
		"nib_phone_1"=>"",
		"nib_phone_2"=>"",
		"nib_phone_3"=>"",
		"nib_phone_4"=>"",
		"nib_address_1"=>"",
		"nib_address_2"=>"",
		"nib_address_3"=>"",
		"nib_address_4"=>"",
		"nib_footer_1"=>"",
		"nib_footer_2"=>"",
		"nib_footer_3"=>"",
		"nib_footer_4"=>"",
		"nib_site_copyright"=>"",
		"nib_time_zone"=>"",		
       "{$Entity}IsActive"=>1
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
	    $FormTitle="Site Setting";
	    $ButtonCaption="Update";
	    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction_site_setting", $Entity."ID={$_REQUEST[$Entity."ID"]}&".$Entity."UUID={$_REQUEST[$Entity."UUID"]}");
		if($UpdateMode&&!isset($_POST["".$Entity."ID"]))$TheEntityName=SQL_Select($Entity="{$Entity}", $Where="{$Entity}ID = {$_REQUEST[$Entity."ID"]} AND {$Entity}UUID = '{$_REQUEST[$Entity."UUID"]}'", $OrderBy="{$OrderByValue}", $SingleRow=true);
	}


	
	// Input sytem display goes here
	$Input=array();
                   
			$Input[]=array("VariableName"=>"nib_site_title","Caption"=>"Site Title","ControlHTML"=>CTL_InputText("nib_site_title",$obj->edit_data_replace($TheEntityName["nib_site_title"]),"", 30,"not required"));
			$Input[]=array("VariableName"=>"nib_site_description","Caption"=>"Site slogan","ControlHTML"=>CTL_InputTextArea("nib_site_description",$obj->edit_data_replace($TheEntityName["nib_site_description"]),40, 8,"not required"));
			$Input[]=array("VariableName"=>"nib_keyword","Caption"=>"Key word","ControlHTML"=>CTL_InputText("nib_keyword",$obj->edit_data_replace($TheEntityName["nib_keyword"]),"", 30,"not required"));
			$Input[]=array("VariableName"=>"nib_keyword_description","Caption"=>"Key description","ControlHTML"=>CTL_InputTextArea("nib_keyword_description",$obj->edit_data_replace($TheEntityName["nib_keyword_description"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_mail_1","Caption"=>"Contact Mail 1","ControlHTML"=>CTL_InputText("nib_mail_1",$obj->edit_data_replace($TheEntityName["nib_mail_1"]),"", 30,"not required"));
			
			$Input[]=array("VariableName"=>"nib_mail_2","Caption"=>"Contact Mail 2","ControlHTML"=>CTL_InputText("nib_mail_2",$obj->edit_data_replace($TheEntityName["nib_mail_2"]),"", 30,"not required"));
			
			$Input[]=array("VariableName"=>"nib_mail_3","Caption"=>"Contact Mail 3","ControlHTML"=>CTL_InputText("nib_mail_3",$obj->edit_data_replace($TheEntityName["nib_mail_3"]),"", 30,"not required"));
			
			$Input[]=array("VariableName"=>"nib_mail_4","Caption"=>"Contact Mail 4","ControlHTML"=>CTL_InputText("nib_mail_4",$obj->edit_data_replace($TheEntityName["nib_mail_4"]),"", 30,"not required"));
			
			
			$Input[]=array("VariableName"=>"nib_phone_1","Caption"=>"Phone 1","ControlHTML"=>CTL_InputText("nib_phone_1",$obj->edit_data_replace($TheEntityName["nib_phone_1"]),"", 30,"not required"));
			
			$Input[]=array("VariableName"=>"nib_phone_2","Caption"=>"Phone 2","ControlHTML"=>CTL_InputText("nib_phone_2",$obj->edit_data_replace($TheEntityName["nib_phone_2"]),"", 30,"not required"));
			
			$Input[]=array("VariableName"=>"nib_phone_3","Caption"=>"Phone 3","ControlHTML"=>CTL_InputText("nib_phone_3",$obj->edit_data_replace($TheEntityName["nib_phone_3"]),"", 30,"not required"));
			
			$Input[]=array("VariableName"=>"nib_phone_4","Caption"=>"Phone 4","ControlHTML"=>CTL_InputText("nib_phone_4",$obj->edit_data_replace($TheEntityName["nib_phone_4"]),"", 30,"not required"));
			
			$Input[]=array("VariableName"=>"nib_address_1","Caption"=>"Address 1","ControlHTML"=>CTL_InputTextArea("nib_address_1",$obj->edit_data_replace($TheEntityName["nib_address_1"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_address_2","Caption"=>"Address 2","ControlHTML"=>CTL_InputTextArea("nib_address_2",$obj->edit_data_replace($TheEntityName["nib_address_2"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_address_3","Caption"=>"Address 3","ControlHTML"=>CTL_InputTextArea("nib_address_3",$obj->edit_data_replace($TheEntityName["nib_address_3"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_address_4","Caption"=>"Address 4","ControlHTML"=>CTL_InputTextArea("nib_address_4",$obj->edit_data_replace($TheEntityName["nib_address_4"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_footer_1","Caption"=>"Footer 1","ControlHTML"=>CTL_InputTextArea("nib_footer_1",$obj->edit_data_replace($TheEntityName["nib_footer_1"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_footer_2","Caption"=>"Footer 2","ControlHTML"=>CTL_InputTextArea("nib_footer_2",$obj->edit_data_replace($TheEntityName["nib_footer_2"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_footer_3","Caption"=>"Footer 3","ControlHTML"=>CTL_InputTextArea("nib_footer_3",$obj->edit_data_replace($TheEntityName["nib_footer_3"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_footer_4","Caption"=>"Footer 4","ControlHTML"=>CTL_InputTextArea("nib_footer_4",$obj->edit_data_replace($TheEntityName["nib_footer_4"]),40, 8,"not required"));
			
			$Input[]=array("VariableName"=>"nib_site_copyright","Caption"=>"Site Copyright","ControlHTML"=>CTL_InputText("nib_site_copyright",$obj->edit_data_replace($TheEntityName["nib_site_copyright"]),"", 30,"not required"));
			
			$Input[]=array("VariableName"=>"nib_time_zone","Caption"=>"Time Zone","ControlHTML"=>CTL_Combo("nib_time_zone",$Time_zone_array_value,$Time_zone_array_title,false,$obj->edit_data_replace($TheEntityName['nib_time_zone']),"","")
);
			
			
            //$Input[]=array("VariableName"=>"IsActive", "Caption"=>"Active?", "ControlHTML"=>CTL_InputRadioSet($VariableName="{$Entity}IsActive", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["{$Entity}IsActive"]), "Required"=>false);

	$MainContent.=FormInsertUpdate(
		$EntityName=$EntityLower,
		$FormTitle,
		$Input,
		$ButtonCaption,
		$ActionURL
	);
?>