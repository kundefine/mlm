<?
	include "./script/{$_REQUEST["Base"]}/Scriptvariables.php";
	$advancetextarea=1;
    $UpdateMode=false;
    $FormTitle="Insert $EntityCaption";
    $ButtonCaption="Add";
    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction");

	// The default value of the input box will goes here according to how many fields we showing
    $TheEntityName=array(		
       "{$Entity}IsActive"=>1
	);

	if(isset($_REQUEST[$Entity."ID"])&&isset($_REQUEST[$Entity."UUID"])&&!isset($_REQUEST["DeleteConfirm"])){
	    $UpdateMode=true;
	    $FormTitle="Update $EntityCaption";
	    $ButtonCaption="Update";
	    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction", $Entity."ID={$_REQUEST[$Entity."ID"]}&".$Entity."UUID={$_REQUEST[$Entity."UUID"]}");
		if($UpdateMode&&!isset($_POST["".$Entity."ID"]))$TheEntityName=SQL_Select($Entity="{$Entity}", $Where="{$Entity}ID = {$_REQUEST[$Entity."ID"]} AND {$Entity}UUID = '{$_REQUEST[$Entity."UUID"]}'", $OrderBy="{$OrderByValue}", $SingleRow=true);
	}

$user_uid_array;
$user_name_array;

$User=SQL_Select($Entity="User", $Where="Usertype!=''", $OrderBy="");

for($i=0;$i<count($User);$i++)
{
$user_uid_array[]=$User[$i]['UserUUID'];
$user_name_array[]=$User[$i]['UserName'];
}

$user_type_array=array('0'=>'User');

$count=count($user_type_data_array);
	for($i=0;$i<$count;$i++)
	{
		$key=$i+1;
		$value=$user_type_data_array[$i]['nib_type'];
		$user_type_array[]=$value;
		
		}
	reset($user_type_data_array);
//print_r($user_type_data_array);
	// Input sytem display goes here
	$Input=array();
                   
	$Input[]=array("VariableName"=>"UserUUID","Caption"=>"User","ControlHTML"=>CTL_Combo("UserUUID",$user_uid_array,$user_name_array,false,$obj->edit_data_replace($TheEntityName['UserUUID']),"","input_class_replace"));
	$Input[]=array("VariableName"=>"Usertype","Caption"=>"User Type","ControlHTML"=>CTL_Combo("Usertype",$user_type_array,$user_type_array,false,$obj->edit_data_replace($TheEntityName['Usertype']),"","input_class_replace"));
	
	
	$Input[]=array("VariableName"=>"{$Entity}IsActive", "Caption"=>"Active", "ControlHTML"=>CTL_InputRadioSet($VariableName="{$Entity}IsActive", $Captions=array("Yes", "No"), $Values=array(1, 0), $CurrentValue=$TheEntityName["{$Entity}IsActive"]), "Required"=>false);

	$MainContent.=FormInsertUpdate(
		$EntityName=$EntityLower,
		$FormTitle,
		$Input,
		$ButtonCaption,
		$ActionURL
	);
?>