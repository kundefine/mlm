<?
	include "./script/{$_REQUEST["Base"]}/Scriptvariables.php";

   
	$UpdateMode=true;

    $ErrorUserInput["_Error"]=false;


    if($ErrorUserInput["_Error"]){
        include "./script/{$_REQUEST["Base"]}/Insertupdate.php";
	}else{
	    $Where="";
	    if($UpdateMode)$Where="{$Entity}UUID = '{$_REQUEST[$Entity."UUID"]}' and UserName!= '{$_SESSION[UserName]}'";

        

		// give the data dase fields name and the post value name
	    $TheEntityName=SQL_InsertUpdate(
	        $Entity="{$Entity}",
			$TheEntityNameData=array(
		"Usertype"=>$obj->string_data_input($_POST["Usertype"]),
		 "UserIsActive"=>$obj->string_data_input($_POST["UserIsActive"]),
			),
			$Where
			);

	    $MainContent.='
		<br><br><br><br><h3 style="text-align:center;color:green;">Update Successfully!</h3>
	        <script language="JavaScript" >
	            window.location="'.ApplicationURL("{$_REQUEST["Base"]}","Manage").'";
	        </script>
		';
	}
?>