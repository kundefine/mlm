<?
	include "./script/{$_REQUEST["Base"]}/Scriptvariables.php";
	
	$advancetextarea=1;
    $UpdateMode=false;
    $FormTitle="Insert $EntityCaption";
    $ButtonCaption="Insert";
    $ActionURL=ApplicationURL("{$_REQUEST["Base"]}","Insertupdateaction");
	
	
		$category_array_title;
		$category_array_value;

		$status_message='';
		$advancetextarea=1;
		$Category_Entity="Blogcategory";
		$Where="nib_status=1";
		$OrderBy="nib_name";
		$SingleRow=false;
		$RecordShowFrom=0;
		$RecordShowUpTo=0;
		$Debug=false;
		$GroupBy="";
		
	$category_data=SQL_Select($Category_Entity, $Where, $OrderBy, $SingleRow, $RecordShowFrom, $RecordShowUpTo, $Debug, $GroupBy);
	for($i=0;$i<count($category_data);$i++)
		{
			$category_array_title[]=$category_data[$i]['nib_name'];
			$category_array_value[]=$category_data[$i]['BlogcategoryUUID'];
		}
	

	// The default value of the input box will goes here according to how many fields we showing
    $TheEntityName=array(
       
		"nib_title"=>"",
		"nib_category_id"=>"",
		"nib_description"=>"",
		"nib_image_1"=>"",
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
                   
			$Input[]=array("VariableName"=>"nib_title","Caption"=>"Title","ControlHTML"=>CTL_InputText("nib_title",$obj->edit_data_replace($TheEntityName["nib_title"]),"", 30,"input_class_replace"));
			
			$Input[]=array("VariableName"=>"nib_category","Caption"=>"Category","ControlHTML"=>CTL_Combo("nib_category",$category_array_title,$category_array_title,false,$obj->edit_data_replace($TheEntityName['nib_category']),"","input_class_replace")
);
			$Input[]=array("VariableName"=>"nib_description","Caption"=>"","ControlHTML"=>CTL_InputTextArea("nib_description",$obj->edit_data_replace($TheEntityName["nib_description"]),40, 8,"input_class_replace"));
			$Input[]=array("VariableName"=>"nib_image_1","Caption"=>"Image","ControlHTML"=>CTL_ImageUpload($ControlName="nib_image_1",$CurrentImage01=$TheEntityName["nib_image_1"],$AllowDelete=true, $Class="input_class_replace", $ThumbnailHeight=100, $ThumbnailWidth=0 , $Preview=true));
			








	$MainContent.=FormInsertUpdate(
		$EntityName=$EntityLower,
		$FormTitle,
		$Input,
		$ButtonCaption,
		$ActionURL
	);
	


?>