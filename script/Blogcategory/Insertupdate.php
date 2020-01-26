<?
	include "./script/{$_REQUEST["Base"]}/Scriptvariables.php";

    $UpdateMode=false;
    $FormTitle="Insert $EntityCaption";
    $ButtonCaption="Insert";
    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction");

	// The default value of the input box will goes here according to how many fields we showing
    $TheEntityName=array(
       
		"nib_name"=>"",
		
		"nib_description"=>"",
		
       "nib_status"=>1
	);

	if(isset($_REQUEST[$Entity."ID"])&&isset($_REQUEST[$Entity."UUID"])&&!isset($_REQUEST["DeleteConfirm"])){
	    $UpdateMode=true;
	    $FormTitle="Update $EntityCaption";
	    $ButtonCaption="Update";
	    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction", $Entity."ID={$_REQUEST[$Entity."ID"]}&".$Entity."UUID={$_REQUEST[$Entity."UUID"]}");
		if($UpdateMode&&!isset($_POST["".$Entity."ID"]))$TheEntityName=SQL_Select($Entity="{$Entity}", $Where="{$Entity}ID = {$_REQUEST[$Entity."ID"]} AND {$Entity}UUID = '{$_REQUEST[$Entity."UUID"]}'", $OrderBy="{$OrderByValue}", $SingleRow=true);
	}

	// Input sytem display goes here
	$Input=array();
                   
			$Input[]=array("VariableName"=>"nib_name","Caption"=>"Name","ControlHTML"=>CTL_InputText("nib_name",$obj->edit_data_replace($TheEntityName["nib_name"]),"", 30,"required"));
			
			$Input[]=array("VariableName"=>"nib_description","Caption"=>"Description","ControlHTML"=>CTL_InputTextArea("nib_description",$obj->edit_data_replace($TheEntityName["nib_description"]),40, 8,"not required"));
			
            $Input[]=array("VariableName"=>"nib_status", "Caption"=>"Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="nib_status", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["nib_status"]), "Required"=>false);

	$MainContent.=FormInsertUpdate(
		$EntityName=$EntityLower,
		$FormTitle,
		$Input,
		$ButtonCaption,
		$ActionURL
	);
?>