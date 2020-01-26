<?


	SessionUnsetUser();
	$_SESSION['login']='0';
	$_SESSION['Usertype']='';

	$MainContent.="
	
	<br><br><br><br><h3 style=\"text-align:center;\">Logout Successfully!</h3>
				
		<script language=\"JavaScript\">
	
		    window.location.href='".ApplicationURL("Login","login")."';
		
		</script>
	";
?> 
