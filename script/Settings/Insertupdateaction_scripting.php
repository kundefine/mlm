<?
	include "./script/{$_REQUEST["Base"]}/Scriptvariables.php";

    $UpdateMode=false;
	if(isset($_REQUEST[$Entity."ID"])&&isset($_REQUEST[$Entity."UUID"]))$UpdateMode=true;

    $ErrorUserInput["_Error"]=false;

	if(!$UpdateMode)$_REQUEST["{$Entity}ID"]=0;
	//some change goes here
	$TheEntityName=SQL_Select($Entity="{$Entity}", $Where="{$UniqueField} = '{$_POST["{$UniqueField}"]}' AND {$Entity}ID <> {$_REQUEST[$Entity."ID"]}");
    if(count($TheEntityName)>0){
	    $ErrorUserInput["_Error"]=true;
	    $ErrorUserInput["_Message"]="This Value Already Taken.";
	}

    if($ErrorUserInput["_Error"]){
        include "./script/{$_REQUEST["Base"]}/Insertupdate.php";
	}else{
	    $Where="";
	    if($UpdateMode)$Where="{$Entity}ID = {$_REQUEST[$Entity."ID"]} AND {$Entity}UUID = '{$_REQUEST[$Entity."UUID"]}'";

        

		// give the data dase fields name and the post value name
	    $TheEntityName=SQL_InsertUpdate(
	        $Entity="{$Entity}",
			$TheEntityNameData=array(
		"nib_header_script"=>$obj->string_data_input($_POST["nib_header_script"]),
		"nib_header_script_status"=>$obj->string_data_input($_POST["nib_header_script_status"]),
		"nib_body_script"=>$obj->string_data_input($_POST["nib_body_script"]),
		"nib_body_script_status"=>$obj->string_data_input($_POST["nib_body_script_status"]),
		"nib_share_script"=>$obj->string_data_input($_POST["nib_share_script"]),
		"nib_share_script_status"=>$obj->string_data_input($_POST["nib_share_script_status"]),
		"nib_fanpage_status"=>$obj->string_data_input($_POST["nib_fanpage_status"]),
		"nib_fanpage_facebook"=>$obj->string_data_input($_POST["nib_fanpage_facebook"]),
		"nib_fanpage_google"=>$obj->string_data_input($_POST["nib_fanpage_google"]),
		"nib_fanpage_linkedin"=>$obj->string_data_input($_POST["nib_fanpage_linkedin"]),
		"nib_fanpage_twitter"=>$obj->string_data_input($_POST["nib_fanpage_twitter"]),
		"nib_fanpage_youtube"=>$obj->string_data_input($_POST["nib_fanpage_youtube"]),
		"nib_google_map_script"=>$obj->string_data_input($_POST["nib_google_map_script"]),
		"nib_google_map_script_status"=>$obj->string_data_input($_POST["nib_google_map_script_status"])
		),
			$Where
			);

	    $MainContent.="<script> window.location='".ApplicationURL("{$_REQUEST["Base"]}","Insertupdate_scripting")."&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}';
	        </script>
		";
	}
?>