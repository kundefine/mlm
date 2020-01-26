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

        $_POST["nib_header_image"]	=ProcessUpload("nib_header_image", $Application["UploadPath"]);
		$_POST["nib_site_logo"]	=ProcessUpload("nib_site_logo", $Application["UploadPath"]);
		$_POST["nib_site_icon"]	=ProcessUpload("nib_site_icon", $Application["UploadPath"]);
		
		
		// give the data dase fields name and the post value name
	    $TheEntityName=SQL_InsertUpdate(
	        $Entity="{$Entity}",
			$TheEntityNameData=array(
        
		"nib_header_image"=>$obj->string_data_input($_POST["nib_header_image"]),
		"nib_header_image_status"=>$obj->string_data_input($_POST["nib_header_image_status"]),
		"nib_site_logo"=>$obj->string_data_input($_POST["nib_site_logo"]),
		"nib_site_logo_status"=>$obj->string_data_input($_POST["nib_site_logo_status"]),
		"nib_site_icon"=>$obj->string_data_input($_POST["nib_site_icon"]),
		"nib_site_icon_status"=>$obj->string_data_input($_POST["nib_site_icon_status"]),
					),
			$Where
			);

	    $MainContent.="
	        <script language=\"JavaScript\" >
	            window.location='".ApplicationURL("{$_REQUEST["Base"]}","Insertupdate_logo")."&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}';
	        </script>
		";
	}
?>