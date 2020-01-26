<?php


	$page_data='';
	$user_type='';
	$uid=uniqid();
	$date=date('Y-m-d H:i:s');
	$username=$_SESSION['UserName'];
	$del_uid='';
	$del='';
	
	if(isset($_REQUEST['type']) and $_REQUEST['type']!='')
	{$user_type=$_REQUEST['type'];}
	
	if(isset($_REQUEST['page']) and $_REQUEST['page']!='')
	{$page_data=$_REQUEST['page'];}
	
	if(isset($_REQUEST['uid']) and $_REQUEST['uid']!='')
	{$del_uid=$_REQUEST['uid'];}
	
	if(isset($_REQUEST['del']) and $_REQUEST['del']!='')
	{$del=$_REQUEST['del'];}
	
	
	if($del_uid!='' and $del=='yes')
	{
		$mytable="tblpageaccess";
		$mywhere="PageaccessUUID='$del_uid'";
		$check_data=$obj->data_get_num($mytable,$mywhere);
		if($check_data==1)
		{
			if($obj->data_delete($mytable,$mywhere)=='true')
			{$status_message='<br><br><br><br><h3 style="text-align:center;color:green;">Delete Successfully!</h3>';}
			else
			{$status_message='<br><br><br><br><h3 style="text-align:center;color:red;">Error Try Again!</h3>';}
			
			
			}
		
		
		}
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$mytable="tblpageaccess";
		$mywhere="nib_page='$page_data' and nib_type='$user_type'";
		$check_permission=$obj->data_get_num($mytable,$mywhere);
		
		if($check_permission==0)
		{
			
			$table="tblpageaccess";
			$colum="PageaccessUUID,nib_type,nib_page,nib_add_by,DateInserted";
			$value="'$uid','$user_type','$page_data','$username','$date'";
			
		if($obj->data_put($table,$colum,$value)=='true')
		{$status_message='<br><br><br><br><h3 style="text-align:center;color:green;">Added Sucessfully!</h3>';}
		else
		{$status_message='<br><br><br><br><h3 style="text-align:center;color:red;">Error Try Again!</h3>';}
			
		}
		else
		{$status_message='<br><br><br><br><h3 style="text-align:center;color:red;">Already Added!</h3>';}
	
		
		
		}


	
	    $MainContent.=$status_message.'
	        <script language="JavaScript" >
	            window.location="'.ApplicationURL("Pageaccess","Manage").'";
	        </script>
		';

?>