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
                                                                                              
		"nib_site_title"=>$obj->string_data_input($_POST["nib_site_title"]),
		"nib_site_description"=>$obj->string_data_input($_POST["nib_site_description"]),
		"nib_keyword"=>$obj->string_data_input($_POST["nib_keyword"]),
		"nib_keyword_description"=>$obj->string_data_input($_POST["nib_keyword_description"]),
		"nib_mail_1"=>$obj->string_data_input($_POST["nib_mail_1"]),
		"nib_mail_2"=>$obj->string_data_input($_POST["nib_mail_2"]),
		"nib_mail_3"=>$obj->string_data_input($_POST["nib_mail_3"]),
		"nib_mail_4"=>$obj->string_data_input($_POST["nib_mail_4"]),
		"nib_phone_1"=>$obj->string_data_input($_POST["nib_phone_1"]),
		"nib_phone_2"=>$obj->string_data_input($_POST["nib_phone_2"]),
		"nib_phone_3"=>$obj->string_data_input($_POST["nib_phone_3"]),
		"nib_phone_4"=>$obj->string_data_input($_POST["nib_phone_4"]),
		"nib_address_1"=>$obj->string_data_input($_POST["nib_address_1"]),
		"nib_address_2"=>$obj->string_data_input($_POST["nib_address_2"]),
		"nib_address_3"=>$obj->string_data_input($_POST["nib_address_3"]),
		"nib_address_4"=>$obj->string_data_input($_POST["nib_address_4"]),
		"nib_footer_1"=>$obj->string_data_input($_POST["nib_footer_1"]),
		"nib_footer_2"=>$obj->string_data_input($_POST["nib_footer_2"]),
		"nib_footer_3"=>$obj->string_data_input($_POST["nib_footer_3"]),
		"nib_footer_4"=>$obj->string_data_input($_POST["nib_footer_4"]),
		"nib_site_copyright"=>$obj->string_data_input($_POST["nib_site_copyright"]),
		"nib_time_zone"=>$obj->string_data_input($_POST["nib_time_zone"]),		
		"{$Entity}IsActive"=>1//$_POST["{$Entity}IsActive"],
			),
			$Where
			);

	    $MainContent.="
	        ".CTL_Window($Title="Application Setting Management", "The operation complete successfully and<br>
			<br>
			The $EntityCaptionLower information has been stored.<br>
			<br>
			Please click <a href=\"".ApplicationURL("{$_REQUEST["Base"]}","Insertupdate_site_setting")."&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}\">here</a> to proceed.",300)."
	        <script language=\"JavaScript\" >
	            window.location='".ApplicationURL("{$_REQUEST["Base"]}","Insertupdate_site_setting")."&SettingsID=0&SettingsUUID={DA82F42D-0032-464E-BA35-FBD02F5C4CEB}';
	        </script>
		";
	}
?>