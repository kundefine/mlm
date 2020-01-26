<?php

	$page_title='Add User Type';
	$status_message='';
	$status_color='alert-danger'; // alert-danger  alert-success
	$status_green='alert-success';
	$status_red='alert-danger';
	$action='';
	$del_uid='';
	$type='';
	$button='';
	
	if(isset($_REQUEST['ac']) and $_REQUEST['ac']!='')
	{$action=$obj->string_data_input(trim($_REQUEST['ac']));}
	
	if(isset($_REQUEST['uid']) and $_REQUEST['uid']!='')
	{$del_uid=$obj->string_data_input(trim($_REQUEST['uid']));}
	
	if(isset($_REQUEST['user_type']) and $_REQUEST['user_type']!='')
	{$type=$obj->string_data_input(trim(ucfirst($_REQUEST['user_type'])));}
		
	if(isset($_REQUEST['button']) and $_REQUEST['button']!='')
	{$button=$obj->string_data_input(trim($_REQUEST['button']));}
	
	if($button=='delete' and $del_uid!='')
	{
		$table="tblusertype";
		$where="UsertypeUUID='$del_uid'";
		
		$check_data=$obj->data_get_num($table,$where);
		
		if($check_data==1)
		{
			
			if($obj->data_delete($table,$where)=='true')
			{
				$status_message='Deleted Successfully!';
				$status_color=$status_green;
				
				}
			else
			{$status_message='Error, Try again!';}
			

			
			}
		
		$type='';
		}
		
		
	
	
	if($_SERVER['REQUEST_METHOD']=='POST' and $button=='update')
	{
		if($type=='')
		{$status_message="Your input is empty";}
		else
		{
		$table="tblusertype";
		$where="nib_type='$type'";
		$check=$obj->data_get_num($table,$where);
		if($check==1)
		{$status_message="Sorry, Already Exist!";}
		else
		{
			
			$table="tblusertype";
		$colum="nib_type='$type'";
		$where="UsertypeUUID='$del_uid'";
		if($obj->data_update($table,$colum,$where)=='true')
		{
			$status_message='Updated successfully!';
			$status_color=$status_green;
			
			}
		else
		{$status_message='Error, Try again';}
			
			}
		}
		$type='';
		}
		
	
	
	
	
	if($_SERVER['REQUEST_METHOD']=='POST' and $button=='add')
	{
		if($type=='')
		{$status_message="Your input is empty";}
		else
		{
			if($type=='Admin' or $type=='User')
			{$status_message="You can't add Admin or User. Because it's already added and prefix";}
			else
			{
		$table="tblusertype";
		$where="nib_type='$type'";
		$check=$obj->data_get_num($table,$where);
		if($check==1)
		{$status_message="Sorry, Already added!";}
		else
		{
			$uid=uniqid();
			$date=date('Y-m-d H:i:s');
			$table="tblusertype";
		$colum="UsertypeUUID,nib_type,DateInserted";
		$value="'$uid','$type','$date'";
		if($obj->data_put($table,$colum,$value)=='true')
		{
			$status_message='Added successfully!';
			$status_color=$status_green;
			$type='';
			}
		else
		{$status_message='Error, Try again';}
			
			}
		}}
		}
	
	
	
	
	

	
	$colum="*";
	$table="tblusertype";
	$where_value="";
	$short_by="nib_type";
	$short="ASC";
	$limit='';
	$start='';
	

	
	$result_user_data=$obj->data_get($colum,$table,$where_value,$short_by,$short,$limit,$start);


$NoneReplaceMainContent.='<div class="row background-1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="x_panel"><div class="x_title"><h2>'.$page_title.'</h2><div class="clearfix"></div></div>
<div class="x_content">';
				  
 if($status_message!=''){
	$NoneReplaceMainContent.='<div class="alert '.$status_color.' alert-dismissible " role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
     </button>'.$status_message.'</div>';
	 }
	 
$NoneReplaceMainContent.='<br>
<form class="form-horizontal form-label-left" action="'.$obj->baseurl.'/index.php?Theme=black&Base=Adminlist&Script=usertype" method="post" enctype="multipart/form-data">';

//Write here
$NoneReplaceMainContent.='

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

<div class="form-group row ">
<label class="control-label col-md-3 col-sm-3 ">User Type*</label>
<div class="col-md-3 col-sm-3 text-right">
<input name="user_type" type="text" class="form-control" placeholder="" value="'.$obj->edit_data_replace($type).'" required="required">
</div>

<div class="col-md-2 col-sm-2 offset-md-3 text-left">
<button type="submit" class="btn btn-success" name="button" value="add">Add</button>
</div>
</div>
</div>
</div>
</form>
<br>
<br>
';

$NoneReplaceMainContent.='<table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width:10%;">SN</th>
						  <th style="width:40%;" >User Type</th>
						  <th style="width:20%;">Date</th>
						  <th style="width:30%;">Action</th>
                        </tr>
                      </thead>
                      <tbody>';
					  
					  
		$count=count($result_user_data);	
		for($i=0;$i<$count;$i++)
		{
			$sn=$i+1;
			$uid=$result_user_data[$i]['UsertypeUUID'];
			$user_type=$result_user_data[$i]['nib_type'];
			$date=$result_user_data[$i]['DateInserted'];
			$disable='disabled="disabled"';
			$readonly='readonly="readonly"';
			
			if($user_type!='Admin')
			{
				$NoneReplaceMainContent.='
			<form id="from'.$sn.'" name="from'.$sn.'" class="form-horizontal form-label-left" action="'.$obj->baseurl.'/index.php?Theme=black&Base=Adminlist&Script=usertype" method="post" enctype="multipart/form-data">
			<input form="from'.$sn.'" type="hidden" name="uid" value="'.$uid.'">
			</form>';
			$disable='';
			$readonly='';
			
				}
					  
 			$NoneReplaceMainContent.='
 						<tr>
                          <td>'.$sn.'</td>
						  <td><input form="from'.$sn.'" name="user_type" class="form-control" value="'.$user_type.'" '.$readonly.'></td>
						  <td>'.$date.'</td>
						  <td>
						 
						  
		<button form="from'.$sn.'" type="submit" class="btn btn-success" name="button" value="update" '.$disable.'>Update</button>
					
		<button form="from'.$sn.'" type="submit" class="btn alert-danger" name="button" value="delete" '.$disable.'>Delete</button>
						   </td>
                       </tr>';
		}
                       
$NoneReplaceMainContent.='</tbody></table>
';



$NoneReplaceMainContent.='</div></div></div></div>';

?>