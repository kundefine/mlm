<?php
include "./script/{$_REQUEST["Base"]}/Scriptvariables.php";
$my_username=$_SESSION['UserName'];
$page_title='Generate Code';
$status_message='';
$status_color='alert-danger'; // alert-danger  alert-success
$status_green='alert-success';
$status_red='alert-danger';
//$form_url = ApplicationURL("Activation", "GenerateForm");



// handle form request
if(isset($_POST["activation-code-generate-form"])) {
    // get post data into variable
    $code_generate_number = (int) $_POST["code_generate_number"];
    $user_name = $_POST["user_name"];
    // validate your data
    if(is_numeric($code_generate_number) && $code_generate_number > 200) {
        $status_message = "Can not generate more than 200 code at once";
    }
    // if error found
    if(empty($status_message)) {
        for ($loop = 0; $loop < $code_generate_number; $loop++) {
            SQL_InsertUpdate(
                "$Entity",
                array(
                    "ActivationcodeNumber"      => uniqid(),
                    "ActivationcodeOwner"       => $user_name
                ));
        }
        $status_message = "Data inserted successful";
        $status_color = "alert-success";
    }

    Helper::pr($_POST);
}

$UserList = '';
foreach (SQL_Select("User", "", "UserID ASC") as $user) {
    $UserList .= '<option>' . $user["UserName"] . '</option>';

}

$activation_code_generator_form = '';

if($_SESSION["Usertype"] == "admin") {
    $activation_code_generator_form = '<div class="container">
            <div class="row">
                <div>
                    <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="">Code Generate Number</label>
                                        <input type="text" placeholder="How much you want to generate code?" class="form-control" name="code_generate_number">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="">Select User</label>
                                        <select name="user_name" id="" class="form-control">
                                            ' . $UserList . '
                                        </select>  
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" value="Submitted" name="activation-code-generate-form">Generate Code</button>  
                                    </div>
                                </div>
                            </div>
                            
                    
                    </div>
                </div>
            </div>
        </div>
        ';
}

    $NoneReplaceMainContent .= '
<div class="row background-1">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>' . $page_title . '</h2>
            <div class="clearfix">
        </div>
    </div>
<div class="x_content">';

    if ($status_message != '') {
        $NoneReplaceMainContent .= '<div class="alert ' . $status_color . ' alert-dismissible " role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
     </button>' . $status_message . '</div>';
    }

    $NoneReplaceMainContent .= '
<form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
';

//Write here
    $NoneReplaceMainContent .= '
        
        '. $activation_code_generator_form .'


        <div class="container">
            <div class="row">
            <div class="col-md-12">
            ' . CTL_Datagrid(
            $Entity,
            $ColumnName = array("ActivationcodeNumber", "ActivationcodeOwner", 'ActivationcodeInUse'),
            $ColumnTitle = array("Activation Code", "Activation Code Owner", 'Activation Code in User'),
            $ColumnAlign = array("left", "left", "left", "left"),
            $ColumnType = array("text", "text", "text", "yes/no"),
            $Rows = SQL_Select($Entity = "{$Entity}", $Where, $OrderBy = "$OrderByValue", $SingleRow = false, $RecordShowFrom = $_REQUEST["RecordShowFrom"], $RecordShowUpTo = $Application["DatagridRowsDefault"], $Debug = false),
            $SearchHTML = "" . CTL_InputText($Name = "FreeText", "", "", 26, $Class = "DataGridSearchBox") . " ",
            $ActionLinks = false,
            $SearchPanel = true,
            $ControlPanel = true,
            $EntityAlias = "" . $EntityCaption . "",
            $AddButton = true
        ) . '
</div>
            </div>
</div>
';


    $NoneReplaceMainContent .= '</form></div></div></div></div>';


?>