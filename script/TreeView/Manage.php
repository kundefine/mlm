<?php
include "./script/{$_REQUEST["Base"]}/Scriptvariables.php";
$my_username=$_SESSION['UserName'];
$page_title='Tree View User';
$status_message='';
$status_color='alert-danger'; // alert-danger  alert-success
$status_green='alert-success';
$status_red='alert-danger';
//$form_url = ApplicationURL("Activation", "GenerateForm");


$tree = new Tree();


    $build = $tree->makeTree(
        $tree->make(
            array("admin")
        )
    );
    $for = $tree->buidTree($build);

    Helper::pr($tree->formatTree($build));

    Helper::pr("tree<br>", $build);
    Helper::pr($tree->buidTree($build));



$NoneReplaceMainContent.='
<div class="row background-1">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>'.$page_title.'</h2>
            <div class="clearfix">
        </div>
    </div>
<div class="x_content">';

if($status_message!=''){
    $NoneReplaceMainContent.='<div class="alert '.$status_color.' alert-dismissible " role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
     </button>'.$status_message.'</div>';
}

$NoneReplaceMainContent.='
<form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
';

//Write here
$NoneReplaceMainContent.='

';


$NoneReplaceMainContent.='</form></div></div></div></div>';

?>