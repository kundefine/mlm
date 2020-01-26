<?
	include "./script/{$_REQUEST["Base"]}/Scriptvariables.php";
	$user_mail=$_SESSION['UserEmail'];
	SetFormvariable("RecordShowFrom", 1);
    SetFormvariable("RecordShowUpTo", $Application["DatagridRowsDefault"]);
    SetFormvariable("SortBy", "{$OrderByValue}");
    SetFormvariable("SortType", "ASC");

	if(isset($_REQUEST["ActionNew{$Entity}"]))include "./script/{$_REQUEST["Base"]}/Insertupdate.php";
	// Delete a data
	if(isset($_GET["DeleteConfirm"]))SQL_InsertUpdate($Entity="{$Entity}",$TheEntityNameData=array("Usertype"=>"User"), $Where="{$Entity}ID = {$_REQUEST[$Entity."ID"]} AND UserName!= '{$_SESSION[UserName]}' AND {$Entity}UUID = '{$_REQUEST[$Entity."UUID"]}'");

    $Where="1 = 1 and Usertype!='Basic' and UserName!= '{$_SESSION[UserName]}'";
	if($_POST["FreeText"]!="")
		$Where.=" and {$_REQUEST["SearchCombo"]} LIKE '%{$_POST["FreeText"]}%'";

	// DataGrid
	$MainContent.= CTL_Datagrid(
		$Entity,
		$ColumnName=array( "UserName" , "UserEmail",'Usertype',"{$Entity}IsActive" ),
		$ColumnTitle=array( "Username", "Mail",'Type',"Active" ),
		$ColumnAlign=array( "left", "left" , "left","left"),
		$ColumnType=array( "text", "text","text","yes/no"),
		$Rows=SQL_Select($Entity="{$Entity}", $Where ,  $OrderBy="{$_REQUEST["SortBy"]} {$_REQUEST["SortType"]}", $SingleRow=false, $RecordShowFrom=$_REQUEST["RecordShowFrom"], $RecordShowUpTo=$Application["DatagridRowsDefault"], $Debug=false),
		$SearchHTML="".CTL_InputText($Name="FreeText","","",26, $Class="DataGridSearchBox")." ",
		$ActionLinks=true,
		$SearchPanel=true,
		$ControlPanel=true,
		$EntityAlias="".$EntityCaption."",
		$AddButton=true
	);
?>