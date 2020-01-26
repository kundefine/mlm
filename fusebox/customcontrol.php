<?

	function myAutoLoad($class) {
        $class=strtolower($class);
        $classFile= $_SERVER['DOCUMENT_ROOT'].'/mlm/fusebox/allclass/'.$class.'.php';
        if( is_file($classFile) && !class_exists($class) ) include_once($classFile);
    }
    spl_autoload_register('myAutoLoad');


	function CCTL_CountryLookup($Name="CountryName", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="Country"), $ValueColumn="CountryName", $CaptionColumn="CountryName", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBox", $Style="");
	}

	// menu names combo
	function CCTL_MenuName($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="CreateMenu"), $ValueColumn="{$Entity}Name", $CaptionColumn="{$Entity}Name", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBox", $Style="");
	}

	// Member LIst
	function CCTL_UserList($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="User",$Where="UserID!=1 and UserID!=2"), $ValueColumn="UserID", $CaptionColumn="UserName", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBox", $Style="");
	}

	// ProductsCategory
	function CCTL_ProductsCategory($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="Category"), $ValueColumn="CategoryID", $CaptionColumn="Name", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBox", $Style="");
	}
	function CCTL_EventCategory($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="EventCategory"), $ValueColumn="Name", $CaptionColumn="Name", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBox", $Style="");
	}

	// ProductsSubCategory
	function CCTL_ProductsSubCategory($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="ProductsSubCategory"), $ValueColumn="ProductsSubCategoryName", $CaptionColumn="ProductsSubCategoryName", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBox", $Style="");
	}
	
	function CCTL_Products($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="Products"), $ValueColumn="ProductsID", $CaptionColumn="ProductName", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBoxProduct", $Style="");
	}
	
	function CCTL_Customer($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=true){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="Customer","","banglaName"), $ValueColumn="CustomerID", $CaptionColumn="banglaName", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBoxCustomer", $Style="width:200px;");
	}
	
	function CCTL_Employee($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=true){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="Employee"), $ValueColumn="EmployeeID", $CaptionColumn="Name", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBoxCustomer", $Style="width:200px;");
	}
	
	function CCTL_Vendor($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="Vendor"), $ValueColumn="VendorID", $CaptionColumn="VendorName", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBoxVendorID", $Style="");
	}

	function CCTL__Vendor($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=True){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="Vendor"), $ValueColumn="VendorID", $CaptionColumn="VendorName", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBoxVendor", $Style="");
	}

	function CCTL_Warehouse($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="WareHouse"), $ValueColumn="WareHouseID", $CaptionColumn="Name", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBoxWareHouse", $Style="");
	}

	function CCTL_WarehouseSales($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="WareHouse"), $ValueColumn="WareHouseID", $CaptionColumn="Name", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBoxWareHouseSales", $Style="");
	}

function CCTL_BankCash ($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
    SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
    return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="BankCash"), $ValueColumn="BankCashID", $CaptionColumn="AccountTitle", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBoxWareHouseSales", $Style="");
}


function GetPermission($FieldName,$boolean=false){
		$UserPermission=SQL_Select("User","UserID={$_SESSION["UserID"]}","","True");
		
		if($boolean){
			if($UserPermission["{$FieldName}"]!=1)
				return false;
			else
				return true;
		}else{
			if($UserPermission["{$FieldName}"]!=1){
			
				echo '
					<div style="padding:10px; border: 2px solid red;margin:auto;" align="center">
						<img src="./theme/default/images/Warning.png">
						<h1>You Dont Have Permission To Access This Area.</h1> <br>
					</div>	
					<div class="footer" align="center">
						Powered by : N I Biz Soft. cell : 01712643138, email : info@nibizsoft.com, web : www.nibizsoft.com
					</div>				
				';
				
				exit;
			
			}
		}
	}
	
/* 	
function CCTL_ProductsWithCategory($Name="", $ValueSelected=0){
	
	$GetCat=SQL_Select("Category");
	$HTML.='
		<select name="'.$Name.'" style=" width:200px;" id="'.$Name.'">
	';	
	
	foreach($GetCat as $ThisGetCat){
		$GetProducts=SQL_Select("Products","Category='{$ThisGetCat["Name"]}'");
		$HTML.='
			<optgroup label="'.$ThisGetCat["Name"].'">
		';
		foreach($GetProducts as $ThisGetProducts){
			
			$HTML.='
				<option value="'.$ThisGetProducts["ProductsID"].'">'.$ThisGetProducts["ProductName"].'</option>		
			';
				
		}
		
		$HTML.='
			</optgroup>
		';
		
	}// End of get category
	
	$HTML.='
		</select>
	';

	return $HTML;
	
	
} */
	
	
	
function CCTL_ProductsWithCategory($Name="", $ValueSelected=0){
	
	$GetCat=SQL_Select("Category","1=1 order by Name asc");
	
	if($_REQUEST["Base"]=="Report")
		$HTML.='
			<select onchange="GetProductsListWithQTY(this.value)" name="'.$Name.'" style=" width:200px;" id="'.$Name.'">
			<option value="0">Select Category</option>	
		';	
	else
		$HTML.='
			<select onchange="GetProductsList(this.value)" name="'.$Name.'" style=" width:200px;" id="'.$Name.'">
			<option value="0">Select Category</option>	
		';	
	
	
	foreach($GetCat as $ThisGetCat){
		
		$HTML.='
			<option value="'.$ThisGetCat["CategoryID"].'">'.$ThisGetCat["Name"].'</option>		
		';


		
	}// End of get category
	
	$HTML.='
		</select>
	';

	return $HTML;
	
	
}	

	
function CCTL_VendorOnClick($Name="", $ValueSelected=0){
	
	$GetVendor=SQL_Select("Vendor");
	$HTML.='
		<select name="'.$Name.'" id="'.$Name.'" style="width:60px;" onchange="SetAllVend()">
	';	
	
	foreach($GetVendor as $ThisGetVendor){
		$HTML.='
			<option value="'.$ThisGetVendor["VendorID"].'">'.$ThisGetVendor["VendorName"].'</option>		
		';
		
	}// End of get category
	
	$HTML.='
		</select>
	';

	return $HTML;
	
}
	
	
Function Warranty($Name,$Selected,$ID,$MyTempNumber){
	
	$SplitWarranty=explode(" ",$Selected);
	
	$HTML="
		<input style=\"width:80px;\"  onchange=\"CalculateSalesOrder('{$MyTempNumber}','{$ID}')\"  type=\"text\" value=\"{$SplitWarranty[0]}\" name=\"WarrantyTime\"  id=\"WarrantyTime_$ID\" size=\"9\">
	    <select style=\"width:80px;\"  onchange=\"CalculateSalesOrder('{$MyTempNumber}','{$ID}')\"  name=\"Warranty\" id=\"Warranty_$ID\">
	        <option value=\"{$SplitWarranty[1]}\" Selected>{$SplitWarranty[1]}</option>
	        <option value=\"Month(s)\">Month(s)</option>
	        <option value=\"Year(s)\">Year(s)</option>
		</select>
	";
	Return $HTML;
}

	
Function SalesType($Selected){
	
	
	$HTML="
	    <select name=\"SalesType\" id=\"SalesType\">
	        <option value=\"{$Selected}\" Selected>{$Selected}</option>
	        <option value=\"Sales\">Sales</option>
	        <option value=\"Return\">Return</option>
		</select>
	";
	Return $HTML;
}

	


function CheckReturn($Valu){
	if($Valu!=1)
	    $Valu=0;
	else
		$Valu=1;

	return $Valu;
}


function getPurchasePayDue($vendor,$curpurchaseID){

	$qury=mysql_query("select * from `tblpurchase` as ps, `tblpurchasepayment` as pspay where ps.VendorNane='".$vendor."' and  ps.PurchaseID=pspay.PurchaseID and ps.PurchaseID!='".$curpurchaseID."' group by pspay.PurchaseID");

	while($payPsid=mysql_fetch_assoc($qury)){
	        $query=mysql_query("select * from `tblpurchasepayment` where PurchaseID='".$payPsid["PurchaseID"]."'");
			while($asoc=mysql_fetch_assoc($query)){
				$totalpaid+=$asoc['PaidAmount'];
				$totalAmount=$asoc['TotalAmount'];				
			}
			
			if(($totalAmount-$totalpaid)>0){
			   $reftext.='<tr><td>'.$payPsid["PurchaseID"].'</td><td>
				'.($totalAmount-$totalpaid).'Taka</td></tr>';
			}
			
			 
				   
	}
     return $reftext;
}


function convertNumberToWords($numberVal){
		//A function to convert numbers into Indian readable words with Cores, Lakhs and Thousands.
		
	$numberValArr =  explode('.',$numberVal);
	$number = $numberValArr[0];
        $words = array(
        '0'=> '' ,'1'=> 'one' ,'2'=> 'two' ,'3' => 'three','4' => 'four','5' => 'five',
        '6' => 'six','7' => 'seven','8' => 'eight','9' => 'nine','10' => 'ten',
        '11' => 'eleven','12' => 'twelve','13' => 'thirteen','14' => 'fouteen','15' => 'fifteen',
        '16' => 'sixteen','17' => 'seventeen','18' => 'eighteen','19' => 'nineteen','20' => 'twenty',
        '30' => 'thirty','40' => 'fourty','50' => 'fifty','60' => 'sixty','70' => 'seventy',
        '80' => 'eighty','90' => 'ninty');
       //'
        //First find the length of the number
        $number_length = strlen($number);
        //Initialize an empty array
        $number_array = array(0,0,0,0,0,0,0,0,0);       
        $received_number_array = array();
       
        //Store all received numbers into an array
        for($i=0;$i<$number_length;$i++){    $received_number_array[$i] = substr($number,$i,1);    }

        //Populate the empty array with the numbers received - most critical operation
        for($i=9-$number_length,$j=0;$i<9;$i++,$j++){ $number_array[$i] = $received_number_array[$j]; }
        $number_to_words_string = "";       
        //Finding out whether it is teen ? and then multiplying by 10, example 17 is seventeen, so if 1 is preceeded with 7 multiply 1 by 10 and add 7 to it.
        for($i=0,$j=1;$i<9;$i++,$j++){
            if($i==0 || $i==2 || $i==4 || $i==7){
                if($number_array[$i]=="1"){
                    $number_array[$j] = 10+$number_array[$j];
                    $number_array[$i] = 0;
                }       
            }
        }
       
        $value = "";
        for($i=0;$i<9;$i++){
            if($i==0 || $i==2 || $i==4 || $i==7){    $value = $number_array[$i]*10; }
            else{ $value = $number_array[$i];    }           
            if($value!=0){ $number_to_words_string.= $words["$value"]." "; }
            if($i==1 && $value!=0){    $number_to_words_string.= "Crores "; }
            if($i==3 && $value!=0){    $number_to_words_string.= "Lac ";    }
            if($i==5 && $value!=0){    $number_to_words_string.= "Thousand "; }
            if($i==6 && $value!=0){    $number_to_words_string.= "Hundred "; }
        }
        if($number_length>9){ $number_to_words_string = "Sorry This does not support more than 99 Crores"; }
	if($numberValArr[1]>0)
		$AddPoint = " Point ".convertNumberToWords($numberValArr[1]);
		
        return ucwords(strtolower("".$number_to_words_string)."".$AddPoint." Taka");
    }
	



function randomkeys($length)
 {
   $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
   for($i=0;$i<$length;$i++)
   {
     $key .= $pattern{rand(0,35)};
   }
   return $key;
 }


function GetCustomerName($ID){
	$result = mysql_query("SELECT * FROM tblcustomer where CustomerID={$ID} limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["banglaName"];
}


function GetCustomerAdvancedFund($ID){
    $result = mysql_query("SELECT * FROM tblcustomer where CustomerID={$ID} limit 1");
    $row = @mysql_fetch_array($result, MYSQL_ASSOC);
    return $row["BalanceAmount"];
}


function GetBankCashTitle($ID){
    $result = mysql_query("SELECT * FROM tblbankcash where BankCashID={$ID} limit 1");
    $row = @mysql_fetch_array($result, MYSQL_ASSOC);
    return $row["AccountTitle"];
}



function GetUserName($ID){
	$result = mysql_query("SELECT * FROM tbluser where UserID={$ID} limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["UserName"];
}


function GetProductName($ID){
	$result = mysql_query("SELECT * FROM tblproducts where ProductsID={$ID} limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["ProductName"];
}


function GetProductQTY($ID){
	$result = mysql_query("SELECT * FROM tblproducts where ProductsID={$ID} limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["Quantity"];
}



function GetProductPrice($ID){
	$result = mysql_query("SELECT * FROM tblproducts where ProductsID={$ID} limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["SellingPrice"];
}

function GetProductCategoryName($ID){
	$result = mysql_query("SELECT * FROM tblproducts where ProductsID={$ID} limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["Category"];
}

function GetCategoryName($ID){
	$result = mysql_query("SELECT * FROM tblcategory where CategoryID={$ID} limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["Name"];
}



function GetVendorName($ID){
	$result = mysql_query("SELECT * FROM tblvendor where VendorID={$ID} limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["VendorName"];
}


function GetPurchaseID($ID){
	$result = mysql_query("SELECT * FROM tblpurchase where TempNumber='{$ID}' limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["PurchaseID"];
}

function GetWareHouseName($ID){
	$result = mysql_query("SELECT * FROM tblwarehouse where WareHouseID='{$ID}' limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["Name"];
}


function GetVendorIDFromTempNumber($ID){
	$result = mysql_query("SELECT * FROM tblpurchase where TempNumber='{$ID}' limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["VendorID"];
}

function GetSalesID($ID){
	$result = mysql_query("SELECT * FROM tblsales where TempNumber='{$ID}' limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["SalesID"];
}

function GetTotalAmount($MyTempNumber){
	$result = mysql_query("select SUM(CostPerProduct*Qty) as Total from tblpurchasedproducts where TempNumber='{$MyTempNumber}'");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["Total"];
}

function GetSalesOrderTotalAmount($MyTempNumber){
	$result = mysql_query("select SUM(Price*Qty) as Total from tblsalesorder where TempNumber='{$MyTempNumber}'");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["Total"];
}

function GetTotalFund($MyTempNumber){
	$result = mysql_query("select SUM(Amount) as Total from tblfund where TempNumber='{$MyTempNumber}'");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["Total"];
}


function GetTotalSalesFund($MyTempNumber){
	$result = mysql_query("select SUM(Amount) as Total from tblsalesfund where TempNumber='{$MyTempNumber}'");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["Total"];
}

function GetDiscount($MyTempNumber){
	$result = mysql_query("select Discount from tblsalesfund where TempNumber='{$MyTempNumber}' order by SalesFundID DESC Limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["Discount"];
}


function GetProductsLastPurchasePrice($ID){
	
	//$result = mysql_query("select CostPerProduct from tblpurchasedproducts where ProductID='{$ID}' order by PurchasedProductsID DESC limit 1");
	$result = mysql_query("select CostPerProduct from tblpurchasedproducts where ProductID='{$ID}' and IsQuotation IS NULL  order by PurchasedProductsID DESC limit 1");
	
	
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["CostPerProduct"];
}


function GetSellingRange($ID){
	$result = mysql_query("select SellingRange from tblpurchasedproducts where ProductID='{$ID}' order by PurchasedProductsID DESC limit 1");
	$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	return $row["SellingRange"];
}


function UpdateProductQuantity($TempNumber,$PID){

	// $result = mysql_query("select * from tblpurchasedproducts where ProductID='{$PID}' and TempNumber='{$TempNumber}'");
	// $row = @mysql_fetch_array($result, MYSQL_ASSOC);

	//echo $TempNumber."|";
	//echo $PID."|";
	$result = mysql_query("
		select sum(QTY) as QTY from tblpurchasedproducts where  IsQuotation IS NULL and ProductID='{$PID}'
		and TempNumber in ( Select TempNumber from tblpurchase where  IsQuotation IS NULL and  PurchaseIsActive=1 )
	");
	$TotalPurchasedQTY = @mysql_fetch_array($result, MYSQL_ASSOC);
	
	$result = mysql_query("
		select sum(QTY) as QTY from tblsalesorder where ProductID='{$PID}'
		and TempNumber in ( Select TempNumber from tblsales where SalesIsActive=1 )
	");
	$TotalSalesOrderQTY = @mysql_fetch_array($result, MYSQL_ASSOC);
	
	//echo GetProductsLastPurchasePrice($ID);
	//echo $row["Total"]."<br>";
	//$Products_QTY=SQL_Select("Products","ProductsID='{$row["ProductID"]}'","","true");
	//$TotalQTY = $row["Qty"] + $Products_QTY["Quantity"];
	
	$TotalQTY = $TotalPurchasedQTY["QTY"] - $TotalSalesOrderQTY["QTY"];
	/*
	echo "
		<hr>
		{$TotalPurchasedQTY["Serials"]}|{$TotalSalesOrderQTY["Serials"]}
	";
	*/

	// "PurchaseLatestPrice"=>GetProductsLastPurchasePrice($PID), its removed so that auto Price Update Disabled.
	
	SQL_InsertUpdate(
			"Products",
			$The_Entity_NameData=array(
				"Quantity"=>$TotalQTY,
				"PurchaseLatestPrice"=>GetProductsLastPurchasePrice($PID),
			),
			"ProductsID={$PID}"
			
	);			
	//return $row["Total"];
}

// Get Products Serials [ we are not using the software ]
function GetProductsSerial($ID,$SelectedSeriels,$MyTempNumber){
	$HTML1=$HTML='';
	//echo "select Serials from tblpurchasedproducts where ProductID='{$ID}' order by PurchasedProductsID DESC <br>";
	$result = mysql_query("select Serials,TempNumber from tblpurchasedproducts where ProductID='{$ID}' and Serials!='' order by PurchasedProductsID DESC");
	//$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	while ($row = mysql_fetch_assoc($result)) {
		$GetSerial=explode(",",$row["Serials"]);
		foreach($GetSerial as $ThisGetSerial){
			if($SelectedSeriels==$ThisGetSerial and $ThisGetSerial!="")
				$HTML1.='
					<option selected="selected" value="'.$ThisGetSerial.'">'.$ThisGetSerial.'</option>
				';
			else{
			
				//echo FindSoldSerialKey($ID,$ThisGetSerial);
				//echo $ThisGetSerial."<hr>----";
				if(FindSoldSerialKey($ID,$ThisGetSerial,$MyTempNumber)=="No" and $ThisGetSerial!="")
					$HTML1.='
						<option value="'.$ThisGetSerial.'">'.$ThisGetSerial.'</option>
					';
			}
		}
		//$TNumber=$row["TempNumber"];
	}
	if($HTML1!="")
		$HTML.='
			<select id="SerialsNumber_'.$ID.'">
				'.$HTML1.'
			</select>
			<input onclick="SerialsAdd('.$ID.',\''.$MyTempNumber.'\')" type="button" style="" id="SerialAddButtonID" class="Button" value="&nbsp;&nbsp;Add &nbsp;&nbsp;">
		';
	echo $HTML;
	return $HTML;
	
	
}


	
function ShowFunding($MyTempNumber){
	$GrandTotal=0;
	$FundDate=SQL_Select("Fund","TempNumber='{$MyTempNumber}'","");		
	$i=0;
	foreach($FundDate as $ThisFundDate){
		if($i%2==0)
			$BgColor="E7F5F8";
		else
			$BgColor="EBEAD8";
		
		$HTML.='
		
			<TR bgcolor="#'.$BgColor.'">
				<TD width="15" align="center" style="color:red;cursor:pointer;" onclick="DeletePurchaseFunding('.$ThisFundDate["FundID"].',\''.$ThisFundDate["TempNumber"].'\');">D</TD>
				<TD style="color:#000;">
				'.$ThisFundDate["PaymentMethod"].' '.$ThisFundDate["DueDate"].'
		';
		if($ThisFundDate["PaymentMethod"]=="Cheque")
			$HTML.='
					<br>
					'.$ThisFundDate["BankName"].'<br>
					'.$ThisFundDate["ChequeNumber"].'<br>
			';
		$HTML.='
				</TD>
				<TD style="color:#000;" width="80" align="right"> '.$ThisFundDate["Amount"].' /= </TD>
			</TR>				
		
		';
		
		$GrandTotal = $ThisFundDate["Amount"] + $GrandTotal;
		
		$i++;
	}
	
	$Due = GetTotalAmount($MyTempNumber) - $GrandTotal;
	
	$HTML_First='
			<TABLE id="dataTable" width="100%" border="0">
				'.$HTML.'
				<TR>
					<TD colspan="5" align="right">
						<span style="color:green;font-size:18px;">Paid : <u>'.$GrandTotal.' /=</u></span> 
						<br>
						<span style="color:red;font-size:18px;">Due : <u>'.$Due.' /=</u></span> 
					</TD>
				</TR>	
				
			</table>
	';	
		
	return $HTML_First;	
	
}


	
function ShowSalesFunding($MyTempNumber){
	$GrandTotal=0;
	$FundDate=SQL_Select("SalesFund","TempNumber='{$MyTempNumber}'","");		
	$i=0;
	foreach($FundDate as $ThisFundDate){
		if($i%2==0)
			$BgColor="E7F5F8";
		else
			$BgColor="EBEAD8";
		
		$HTML.='
		
			<TR bgcolor="#'.$BgColor.'">
		';
		
		if($_REQUEST["Script"]!="Invoice")	
		$HTML.='	
				<TD width="15" align="center" style="color:red;cursor:pointer;" onclick="DeleteSalesFunding('.$ThisFundDate["SalesFundID"].',\''.$ThisFundDate["TempNumber"].'\')">D</TD>
		';
		$HTML.='	
				<TD style="color:#000;">
				'.$ThisFundDate["PaymentMethod"].' '.$ThisFundDate["DueDate"].'
		';
		if($ThisFundDate["PaymentMethod"]=="Cheque")
			$HTML.='
					<br>
					'.$ThisFundDate["BankName"].'<br>
					'.$ThisFundDate["ChequeNumber"].'<br>
			';
		$HTML.='
				</TD>
				<TD style="color:#000;" width="80" align="right"> '.$ThisFundDate["Amount"].' /= </TD>
			</TR>				
		
		';
		
		$GrandTotal = $ThisFundDate["Amount"] + $GrandTotal;
		
		$i++;
	}
	
	echo $TotalBill = GetSalesOrderTotalAmount($MyTempNumber);
	
	$GrandTotalFinal = $TotalBill - $ThisFundDate["Discount"];
	
	$Due = $TotalBill - $GrandTotal  - $ThisFundDate["Discount"];
	
	$HTML_First='
			<TABLE id="dataTable" width="100%" border="0">
				'.$HTML.'
				<TR>
					<TD colspan="5" align="right">
						<span style="color:green;font-size:18px;">Total Paid : <u>'.$GrandTotal.' /=</u></span> 
						<br>
						<span style="color:#A43636;font-size:18px;">Discount (-) : <u>'.$ThisFundDate["Discount"].' /=</u></span> 
						<br>
						<span style="color:#000;font-size:18px;">Grand Total : <u>'.$GrandTotalFinal.' /=</u></span> 
						<br>
						<span style="color:red;font-size:18px;">Due : <u>'.$Due.' /=</u></span> 
					</TD>
				</TR>	
				
			</table>
	';	
		
	return $HTML_First;	
	
}



	
function ShowSalesFundingPDF($MyTempNumber){
	$GrandTotal=0;
	$FundDate=SQL_Select("SalesFund","TempNumber='{$MyTempNumber}'","");		
	$i=0;
	foreach($FundDate as $ThisFundDate){
		if($i%2==0)
			$BgColor="E7F5F8";
		else
			$BgColor="EBEAD8";
		
		$HTML.='
		
			<TR bgcolor="#'.$BgColor.'">
		';
		
		if($_REQUEST["Script"]!="Invoice")	
		$HTML.='	
				<TD ">
				'.$ThisFundDate["PaymentMethod"].' '.$ThisFundDate["DueDate"].'
		';
		if($ThisFundDate["PaymentMethod"]=="Cheque")
			$HTML.='
					<br>
					'.$ThisFundDate["BankName"].'<br>
					'.$ThisFundDate["ChequeNumber"].'<br>
			';
		$HTML.='
				</TD>
				<TD  width="80" align="right"> '.$ThisFundDate["Amount"].' /= </TD>
			</TR>				
		
		';
		
		$GrandTotal = $ThisFundDate["Amount"] + $GrandTotal;
		
		$i++;
	}
	
	$TotalBill = GetSalesOrderTotalAmount($MyTempNumber);
	
	$GrandTotalFinal = $TotalBill - $ThisFundDate["Discount"];
	
	$Due = $TotalBill - $GrandTotal  - $ThisFundDate["Discount"];
	
	$HTML_First='
			<TABLE width="100%"  border="1">
				'.$HTML.'
				<TR>
					<TD align="right">
						Total Paid : <u>'.$GrandTotal.' /=</u>
						<br>
						Discount (-) : <u>'.$ThisFundDate["Discount"].' /=</u>
						<br>
						Grand Total : <u>'.$GrandTotalFinal.' /=</u>
						<br>
						Due : <u>'.$Due.' /=</u>
					</TD>
				</TR>	
				
			</table>
	';	
		
	return $HTML_First;	
	
}

function LimitWords($Words,$Limit){
	if(strlen($Words)>$Limit)
		$HTML=substr($Words, 0, $Limit)."...";
	else	
		$HTML=$Words;
		
	return $HTML;
}
	
function GetSalesDueAmount($MyTempNumber){
	$GrandTotal=0;
	$FundDate=SQL_Select("SalesFund","TempNumber='{$MyTempNumber}'","");		
	$i=0;
	foreach($FundDate as $ThisFundDate){
		$GrandTotal = $ThisFundDate["Amount"] + $GrandTotal;
	}
	
	$TotalBill = GetSalesOrderTotalAmount($MyTempNumber);
	
	$GrandTotalFinal = $TotalBill - $ThisFundDate["Discount"];
	
	$Due = $TotalBill - $GrandTotal  - $ThisFundDate["Discount"];
	
	$HTML_First='
			<TABLE id="dataTable" width="100%" border="0">
				'.$HTML.'
				<TR>
					<TD colspan="5" align="right">
						<span style="color:green;font-size:18px;">Total Paid : <u>'.$GrandTotal.' /=</u></span> 
						<br>
						<span style="color:#A43636;font-size:18px;">Discount (-) : <u>'.$ThisFundDate["Discount"].' /=</u></span> 
						<br>
						<span style="color:#000;font-size:18px;">Grand Total : <u>'.$GrandTotalFinal.' /=</u></span> 
						<br>
						<span style="color:red;font-size:18px;">Due : <u>'.$Due.' /=</u></span> 
					</TD>
				</TR>	
				
			</table>
	';	
		
	return $Due;	
	
}

	
function PrevioiusDue($VendorID,$MyTempNumber,$Report=false,$OnlyAmount=false){
	
	if($Report==True)
		$PurchaseDate=SQL_Select("Purchase","TempNumber='{$MyTempNumber}' and VendorID='{$VendorID}' and PurchaseIsActive=1","");	
	else
		$PurchaseDate=SQL_Select("Purchase","TempNumber!='{$MyTempNumber}' and VendorID='{$VendorID}' and PurchaseIsActive=1","");	
	
	foreach($PurchaseDate as $ThisPurchaseDate){
	
	//echo $ThisPurchaseDate["TempNumber"];
		$Due =$GrandTotal=0;
		$FundDate=SQL_Select("Fund","TempNumber='{$ThisPurchaseDate["TempNumber"]}'","");		
		$i=0;
		
		foreach($FundDate as $ThisFundDate){
			$GrandTotal = $ThisFundDate["Amount"] + $GrandTotal;
			$i++;
		}
		
		$Due = GetTotalAmount($ThisPurchaseDate["TempNumber"]) - $GrandTotal;
		$HTML_First="";
		if($Due!=0){
			
			if($OnlyAmount)
				$HTML_First= $HTML_First + $Due;
			else
				$HTML_First.='
						<TABLE id="dataTable" width="100%" border="0">
							<TR>
								<TD align="left">
									<a style="text-decoration:none;" href="./index.php?Theme=default&Base=Purchase&Script=Voucher&TempNumber='.$ThisPurchaseDate["TempNumber"].'&NoHeader&NoFooter"><span style="color:black;font-size:18px;">Ref ID : '.$ThisPurchaseDate["PurchaseID"].'</span></a>
								</TD>
								<TD align="left">
									<span style="color:black;font-size:18px;">Due : <u>'.$Due.' /=</u></span> 
								</TD>
							</TR>	
							
						</table>
				';	
		}	
	}	
	
	if($HTML_First==""){
		if($OnlyAmount)
			$HTML_First='0';
		else
			$HTML_First='No Previous Due';
	}
	
	return $HTML_First;	
	
	
	
	
}
	


function QuotationAmount($CustomerID,$MyTempNumber){
	
	$PurchaseDate=SQL_Select("PurchasedProducts","TempNumber='{$MyTempNumber}' and CustomerID='{$CustomerID}'  and IsQuotation=1","");	
	
	foreach($PurchaseDate as $ThisPurchaseDate){
		$Total = $Total + ($ThisPurchaseDate["CostPerProduct"] * $ThisPurchaseDate["Qty"]);
	}
	
	return $Total;	
	
	
	
	
}
	

	
function PrevioiusDueForSalesOrder($CustomerID,$MyTempNumber,$Report=false,$ShowPreviousDue=false){
	
	///echo $VendorID;
	if($Report==True){
	
		$PurchaseDate=SQL_Select("Sales","TempNumber='{$MyTempNumber}' and CustomerID='{$CustomerID}' and SalesIsActive=1","");	
	
	}
	else{
		$PurchaseDate=SQL_Select("Sales","TempNumber!='{$MyTempNumber}' and CustomerID='{$CustomerID}' and SalesIsActive=1","");	
	
	}
	
	foreach($PurchaseDate as $ThisPurchaseDate){
	
	//echo $ThisPurchaseDate["TempNumber"];
		$Due =$GrandTotal=0;
		$FundDate=SQL_Select("SalesFund","TempNumber='{$ThisPurchaseDate["TempNumber"]}'","");		
		$i=0;
		foreach($FundDate as $ThisFundDate){
			$GrandTotal = $ThisFundDate["Amount"] + $GrandTotal;
			$i++;
		}
		
		$Due = GetSalesOrderTotalAmount($ThisPurchaseDate["TempNumber"]) - $GrandTotal - $ThisFundDate["Discount"];
		if($Due!=0 and $ShowPreviousDue == true){
			$HTML_First.='
					<TABLE id="dataTable" width="100%" border="0">
						<TR>
							<TD align="left">
								<a style="text-decoration:none;" href="./index.php?Theme=default&Base=Sales&Script=Invoice&TempNumber='.$ThisPurchaseDate["TempNumber"].'&NoHeader&NoFooter"><span style="color:black;font-size:18px;">Invoice No. : '.$ThisPurchaseDate["SalesID"].'</span></a>
							</TD>
							<TD align="left">
								<span style="color:black;font-size:18px;">Due : <u>'.$Due.' /=</u></span> 
							</TD>
						</TR>	
						
					</table>
			';	
			$TotalDue = $TotalDue + $Due;	
		}
	}	
	
	if($TotalDue>0)
	$HTML_First.='
			<TABLE id="dataTable" width="95%" border="0">
				<TR>
					<TD align="left">
					</TD>
					<TD align="right">
						<span style="font-weight:bold;color:black;font-size:18px;">Total Due : <u>'.$TotalDue.' /=</u></span> 
					</TD>
				</TR>	
				
			</table>
	';	
	
	if($HTML_First=="")
		$HTML_First='No Previous Due';
		
		
	return $HTML_First;	
	
}
	
	
	
// For reporting	
function GetInvoiceNumberAndProductList($CustomerID,$MyTempNumber,$Report=false){
	
	///echo $VendorID;
	if($Report==True){
	
		$PurchaseDate=SQL_Select("Sales","TempNumber='{$MyTempNumber}' and CustomerID='{$CustomerID}' and SalesIsActive=1","");	
	
	}
	else{
		$PurchaseDate=SQL_Select("Sales","TempNumber!='{$MyTempNumber}' and CustomerID='{$CustomerID}' and SalesIsActive=1","");	
	
	}

	$GetProductsList=SQL_Select("SalesOrder","TempNumber='{$MyTempNumber}'","");
	$i=1;
	foreach($GetProductsList as $ThisGetProductsList){
		$HTML.='
			<div style="float:left;">
			'.$i.'. '.GetProductName($ThisGetProductsList["ProductID"]).'
			</div>
			<div style="float:right;">
				'.$ThisGetProductsList["Price"].'
			</div>
			<div style="float:right;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</div>
			<div style="float:right;">
				'.$ThisGetProductsList["Qty"].'
			</div>
			<div style="clear:both;"></div>
		';
		$i++;
	
	}

	
	foreach($PurchaseDate as $ThisPurchaseDate){
	
	//echo $ThisPurchaseDate["TempNumber"];
		$Due =$GrandTotal=0;
		$FundDate=SQL_Select("SalesFund","TempNumber='{$ThisPurchaseDate["TempNumber"]}'","");		
		$i=0;
		foreach($FundDate as $ThisFundDate){
			$GrandTotal = $ThisFundDate["Amount"] + $GrandTotal;
			$i++;
		}
		

		$HTML_First.='
				<TABLE id="dataTable" width="100%" border="0">
					<TR>
						<TD align="left">
							<a style="text-decoration:none;" href="./index.php?Theme=default&Base=Sales&Script=Invoice&TempNumber='.$ThisPurchaseDate["TempNumber"].'&NoHeader&NoFooter"><span style="color:black;font-size:18px;">Invoice No. : '.$ThisPurchaseDate["SalesID"].'</span></a>
						</TD>
						<TD align="left">
							<span style="color:black;font-size:18px;">Due : <u>'.$Due.' /=</u></span> 
						</TD>
					</TR>	
					
				</table>
		';	

		
	}	
	
	return $HTML;	
	
}	
	
// find Sold Serial key
function FindSoldSerialKey($ID,$SelectedSeriels,$TemporaryNumber){

	$Res = "No";


		if($SelectedSeriels!=""){

		//	 echo "select * from tblsalesorder where ProductID='{$ID}' and  Serials like '%{$SelectedSeriels}'";
			
								   // and  
								   // TempNumber in (select TempNumber from tblsales where  TempNumber='{$TemporaryNumber}' and SalesIsActive=1)";

								   
			$result = mysql_query("select * from tblsalesorder where ProductID='{$ID}' and  Serials like '%{$SelectedSeriels}'");
			
								   //and  
								   //TempNumber in (select TempNumber from tblsales where  TempNumber='{$TemporaryNumber}' and SalesIsActive=1)");
			
			//$row = @mysql_fetch_array($result, MYSQL_ASSOC);
			while ($row = mysql_fetch_assoc($result)) {

				$GetSerial=explode(",",$row["Serials"]);
				foreach($GetSerial as $ThisGetSerial){

					//$Innerresult = mysql_query("select * from tblsalesorder where ProductID='{$ID}' and  Serials!=''");
					$Innerresult =  SQL_Select("Sales","TempNumber='{$row["TempNumber"]}' and SalesIsActive=1","","true");
					//echo $Innerresult["SalesIsActive"]."<hr>";
					
					//if($SelectedSeriels==$ThisGetSerial){
					if($Innerresult["SalesIsActive"]==1){
						$Res = "Yes";
						break;
					}
				}
				//$TNumber=$row["TempNumber"];
				
			}

		}
	
	
	return $Res;


}	


function GetPurchaseItem($TempNumber){

	$PurchaseProducts=SQL_Select($Entity="PurchasedProducts", $Where="TempNumber='{$TempNumber}'","","");

	$GrandTotal=0;
	$i=1;
	foreach($PurchaseProducts as $ThisPurchaseProducts){
		// $Serials=explode(",",$ThisPurchaseProducts['Serials']);
		// foreach($Serials as $ThisSerials){
			// $SerialsHTML.='
				// &nbsp;&nbsp;'.$ThisSerials.' <br>
			// ';
		// }
		$HTML.='
			&nbsp;&nbsp;'.$i.'. '.GetProductCategoryName($ThisPurchaseProducts["ProductID"]).' - '.GetProductName($ThisPurchaseProducts['ProductID']).' ('.$ThisPurchaseProducts["Qty"].' x '.$ThisPurchaseProducts["CostPerProduct"].')<br>
		
		';

		$i++;
	}
	
	return $HTML;


}

function DatePicker($Name,$Value="",$Size="",$TodayDate=false){

    if($TodayDate==true)
        $TodayDate=date('m/d/Y');
	else
		$TodayDate="";

	if($Value!="")
		$TodayDate=$Value;


	$HTML.="
        <input style=\"cursor:Pointer\" type=\"text\" id=\"{$Name}\" value=\"{$TodayDate}\" name=\"{$Name}\" size=\"{$Size}\" onclick=\"displayDatePicker('{$Name}');\" >
	";

	return $HTML;
}



	function RefNo($CurlyBrace=false){
			mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
			$CharacterID = strtoupper(md5(uniqid(rand(), true)));
			$Hyphen = chr(45);// "-"
			$GUID = substr($CharacterID, 0, 8);
			return $GUID;
	}


	function ExpenseHead($Name="", $ValueSelected=0, $Where="", $PrependBlankOption=false){
		SetFormVariable($Name, $ValueSelected, $SetErrorFlag=true, $UseRequestVariable=true);
		return CTL_DBCombo($Name, $Rows=SQL_Select($Entity="ExpenseHead",$Where), $ValueColumn="ExpenseHeadName", $CaptionColumn="ExpenseHeadName", $ValueSelected=$_POST[$Name], $PrependBlankOption, $BlankItemCaption="", $Class="FormComboBox", $Style="");
	}

	
Function AccountType($Selected){
	$HTML="
	    <select name=\"AccountType\">
	        <option value=\"$Selected\" Selected>$Selected</option>
	        <option value=\"Bank\">Bank</option>
	        <option value=\"Cash On Hand\">Cash On Hand</option>
		</select>
	";
	Return $HTML;
}


// Number to word Converter function

function NumberToWord($MyAmount=""){
	$num = new NumberToWord("{$MyAmount}");
	return $num->word;
}

class NumberToWord{

	var $word;

function CalculateTenth($twoDigitData)
{
	$firstDigit = floor($twoDigitData/10);
	$secondDigit = $twoDigitData % 10;

	switch($firstDigit)
	{
		case 0:
		$firstString = "";
		break;

		case 1:
		switch($secondDigit)
		{
			case 0:
			return "Ten";
			break;

			case 1:
			return "Eleven";
			break;

			case 2:
			return "Twelve";
			break;

			case 3:
			return "Thirteen";
			break;

			case 4:
			return "Fourteen";
			break;

			case 5:
			return "Fiveteen";
			break;

			case 6:
			return "Sixteen";
			break;

			case 7:
			return  "Seventeen";
			break;

			case 8:
			return "Eighteen";
			break;

			case 9:
			return "Nineteen";
			break;

			default:
			return "Error";

		}
		break;

		case 2:
		$firstString = "Twenty";
		break;

		case 3:
		$firstString = "Thirty";
		break;

		case 4:
		$firstString = "Forty";
		break;

		case 5:
		$firstString = "Fifty";
		break;

		case 6:
		$firstString = "Sixty";
		break;

		case 7:
		$firstString = "Seventy";
		break;

		case 8:
		$firstString = "Eighty";
		break;

		case 9:
		$firstString = "Ninety";
		break;

		default:
		return "Error";
	}

	switch($secondDigit)
	{
		case 0:
		$secondString = "";
		break;

		case 1:
		$secondString = "One";
		break;
		case 2:
		$secondString = "Two";
		break;

		case 3:
		$secondString = "Three";
		break;

		case 4:
		$secondString = "Four";
		break;

		case 5:
		$secondString = "Five";
		break;

		case 6:
		$secondString = "Six";
		break;

		case 7:
		$secondString = "Seven";
		break;

		case 8:
		$secondString = "Eigh";
		break;

		case 9:
		$secondString = "Nine";
		break;

		default:
		return "Error";
	}

	return $firstString." ".$secondString;

}

function CalculateLastSeven($num)
{
	$length = strlen($num);
	if($length > 5)
	{
		$tenth = substr($num,-2,2);
		$hundred = substr($num,-3,1);

		if($hundred == 0)
			$hundredString = "";
		else
			$hundredString = " Hundred ";

		$thousand = substr($num,-5,2);

		if($thousand == 0)
			$thousandString = "";
		else
			$thousandString = " Thousand ";

		if($length == 6)
			$lakh = substr($num,-6,1);
		else
			$lakh = substr($num,-7,2);

		if($lakh == 0)
			$lakhString = "";
		else
			$lakhString = " Lakh ";

		return $this->CalculateTenth($lakh).$lakhString.$this->CalculateTenth($thousand).$thousandString.$this->CalculateTenth($hundred).$hundredString.$this->CalculateTenth($tenth);
	}
	else if($length < 6 &&  $length > 3)
	{
		$tenth = substr($num,-2,2);
		$hundred = substr($num,-3,1);

		if($hundred == 0)
			$hundredString = "";
		else
			$hundredString = " Hundred ";

		$thousand = substr($num,-5,2);

		if($length == 4)
			$thousand = substr($num,-4,1);
		else
			$thousand = substr($num,-5,2);

		if($thousand == 0)
			$thousandString = "";
		else
			$thousandString = " Thousand ";

		return $this->CalculateTenth($thousand).$thousandString.$this->CalculateTenth($hundred).$hundredString.$this->CalculateTenth($tenth);
	}
	else if($length < 4 &&  $length > 2)
	{
		$tenth = substr($num,-2,2);
		$hundred = substr($num,-3,1);

		if($hundred == 0)
			$hundredString = "";
		else
			$hundredString = " Hundred ";

		return $this->CalculateTenth($hundred).$hundredString.$this->CalculateTenth($tenth);
	}
	else if($length < 3)
	{
		return $this->CalculateTenth($num);
	}

	else
	{
		return "morethan7";
	}
}

function Convert($string)
{
	$totalLength = strlen($string);
	$startString = substr($string,0,$totalLength % 7);
	$converted = $this->CalculateLastSeven($startString);

	$start = $totalLength % 7;
//	$i = 0;

	while($part = substr($string,$start,7))
	{
		if($startString != 0)
			$croreString = " crore ";
		$converted .= $croreString.$this->CalculateLastSeven($part);
		$start += 7;
	}

	return $converted;
}

function NumberToWord($string)
{
	$this->word = $this->Convert($string);
}
}
	


function GetAvailableSerial($ID){


	//$ID = $_REQUEST["ID"];
	//$SelectedSeriels = $_REQUEST["SelectedSeriels"] ;
	$MyTempNumber = "";
	
	$HTML1=$HTML='';
			  
	//echo "select Serials from tblpurchasedproducts where ProductID='{$ID}' order by PurchasedProductsID DESC <br>";
	$result = mysql_query("select Serials,TempNumber from tblpurchasedproducts 
			  where ProductID='{$ID}' and Serials!='' 
			  
			  order by PurchasedProductsID DESC
			  
			  ");
			  
			  
	//$row = @mysql_fetch_array($result, MYSQL_ASSOC);
	while ($row = mysql_fetch_assoc($result)) {
		$GetSerial=explode(",",$row["Serials"]);
		foreach($GetSerial as $ThisGetSerial){
			if(FindSoldSerialKey($ID,$ThisGetSerial,$MyTempNumber)=="No" and $ThisGetSerial!="")
				$HTML1.=''.$ThisGetSerial.', ';
		}
		//$TNumber=$row["TempNumber"];
	}


	return $HTML1;

}

function dump($var) {
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function pr($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}




// Property selector
function PropertyCategory($Value)
{

    $query = mysql_query("SELECT * from tblcategory ");
    while ($cat = mysql_fetch_assoc($query)) {
		
		$selected='';
		
		if($Value==$cat["Name"])
		{$selected='selected="selected"';}
		
$category .= '			
<option value="'.$cat["Name"].'" '.$selected.'> ' . $cat["Name"] . ' </option>
';
    }
    $HTML .= '
		<select name="PropertyCategory" class="required" id="PropertyCategory">
<option value=""> Select... </option>
' . $category . '
		</select>
	';

    return $HTML;
}




function ProductCategory($Value)
{

    $query = mysql_query("SELECT * from tblbrochurecategory ");
    while ($cat = mysql_fetch_assoc($query)) {
        $category .= '			
<option value="' . $cat["BrochurecategoryID"] . '" ' . ValueSelected($Value, $cat["BrochurecategoryID"]) . '> ' . $cat["Name"] . ' </option>
';
    }
    $HTML .= '
		<select name="PropertyCategory" class="required" id="PropertyCategory">
			<option value="" > Select </option>
			' . $category . '
		</select>
	';

    return $HTML;
}

function ProductName($Value)
{

    $query = mysql_query("SELECT * from tblproperty ");
    while ($cat = mysql_fetch_assoc($query)) {
        $category .= '			
<option value="' . $cat["PropertyID"] . '" ' . ValueSelected($Value, $cat["PropertyID"]) . '> ' . $cat["Title"] . ' </option>
';
    }
    $HTML .= '
		<select name="ProductName" class="required" id="ProductName">
			<option value="" > Select </option>
			' . $category . '
		</select>
	';

    return $HTML;
}

function getlocations()
{
    $query = mysql_query("SELECT distinct City from tblproperty order by City");
    while ($cat = mysql_fetch_assoc($query)) {
        $location .= '			
			<option value="' . $cat["City"] . '" > ' . $cat["City"] . ' </option>
		';
    }

    return $location;

}

function getbeds()
{
    $query = mysql_query("SELECT distinct Bedrooms from tblproperty order by Bedrooms");
    while ($cat = mysql_fetch_assoc($query)) {
        $location .= '			
			<option value="' . $cat["Bedrooms"] . '" > ' . $cat["Bedrooms"] . ' </option>
		';
    }

    return $location;

}

function getbaths()
{
    $query = mysql_query("SELECT distinct Bathrooms from tblproperty order by Bathrooms");
    while ($cat = mysql_fetch_assoc($query)) {
        $location .= '			
			<option value="' . $cat["Bathrooms"] . '" > ' . $cat["Bathrooms"] . ' </option>
		';
    }

    return $location;

}

function selectgallery($Value)
{

    $query = mysql_query("SELECT * from tblgallery ");
    while ($cat = mysql_fetch_assoc($query)) {
        $category .= '			
<option value="' . $cat["GalleryID"] . '" ' . ValueSelected($Value, $cat["GalleryID"]) . '> ' . $cat["Name"] . ' </option>
';
    }
    $HTML .= '
		<select name="GalleryName">
<option value="" ' . ValueSelected($Value, "") . '> Select </option>
' . $category . '
		</select>
	';

    return $HTML;
}

function color1($color)
{
    $html = '
<script>
 function colorchange(color,box)
 {
 $(".cl1").css({"border":"1px solid rgba(0, 0, 0, 0)"});
 $("#"+box).css({"border":"1px solid #111"});
 $("#Color1").val (color);

 }
 </script>
  
<input type="hidden" name="Color1" id="Color1" value="' . $color . '">
<span class="simplecolorpicker inline ">
<span tabindex="0" role="button" data-color="#ac725e" id="c1" style="background-color: #ac725e;' . ColorSelected($color, "#ac725e") . '" title="#ac725e" class="color cl1" onclick="colorchange(\'#ac725e\',\'c1\')"></span>
<span tabindex="0" role="button" data-color="#d06b64" id="c2" style="background-color: #d06b64;' . ColorSelected($color, "#d06b64") . '" title="#d06b64" class="color cl1" onclick="colorchange(\'#d06b64\',\'c2\')"></span>
<span tabindex="0" role="button" data-color="#f83a22" id="c3" style="background-color: #f83a22;' . ColorSelected($color, "#f83a22") . '" title="#f83a22" class="color cl1" onclick="colorchange(\'#f83a22\',\'c3\')"></span>
<span tabindex="0" role="button" data-color="#fa573c" id="c4" style="background-color: #fa573c;' . ColorSelected($color, "#fa573c") . '" title="#fa573c" class="color cl1" onclick="colorchange(\'#fa573c\',\'c4\')"></span>
<span tabindex="0" role="button" data-color="#ff7537" id="c5" style="background-color: #ff7537;' . ColorSelected($color, "#ff7537") . '" title="#ff7537" class="color cl1" onclick="colorchange(\'#ff7537\',\'c5\')"></span>
<span tabindex="0" role="button" data-color="#ffad46" id="c6" style="background-color: #ffad46;' . ColorSelected($color, "#ffad46") . '" title="#ffad46" class="color cl1" onclick="colorchange(\'#ffad46\',\'c6\')"></span>
<span tabindex="0" role="button" data-color="#42d692" id="c7" style="background-color: #42d692;' . ColorSelected($color, "#42d692") . '" title="#42d692" class="color cl1" onclick="colorchange(\'#42d692\',\'c7\')"></span>
<span tabindex="0" role="button" data-color="#16a765" id="c8" style="background-color: #519B26;' . ColorSelected($color, "#519B26") . '" title="#519B26" class="color cl1" onclick="colorchange(\'#519B26\',\'c8\')"></span>
<span tabindex="0" role="button" data-color="#7bd148" id="c9" style="background-color: #7bd148;' . ColorSelected($color, "#7bd148") . '" title="#7bd148" class="color cl1" onclick="colorchange(\'#7bd148\',\'c9\')"></span>
<span tabindex="0" role="button" data-color="#b3dc6c" id="c10" style="background-color: #b3dc6c;' . ColorSelected($color, "#b3dc6c") . '" title="#b3dc6c" class="color cl1" onclick="colorchange(\'#b3dc6c\',\'c10\')"></span>
<span tabindex="0" role="button" data-color="#fbe983" id="c11" style="background-color: #fbe983;' . ColorSelected($color, "#fbe983") . '" title="#fbe983" class="color cl1" onclick="colorchange(\'#fbe983\',\'c11\')"></span>
<span tabindex="0" role="button" data-color="#fad165" id="c12" style="background-color: #fad165;' . ColorSelected($color, "#fad165") . '" title="#fad165" class="color cl1" onclick="colorchange(\'#fad165\',\'c12\')"></span>
<span tabindex="0" role="button" data-color="#92e1c0" id="c13" style="background-color: #92e1c0;' . ColorSelected($color, "#92e1c0") . '" title="#92e1c0" class="color cl1" onclick="colorchange(\'#92e1c0\',\'c13\')"></span>
<span tabindex="0" role="button" data-color="#9fe1e7" id="c14" style="background-color: #9fe1e7;' . ColorSelected($color, "#9fe1e7") . '" title="#9fe1e7" class="color cl1" onclick="colorchange(\'#9fe1e7\',\'c14\')"></span>
<span tabindex="0" role="button" data-color="#9fc6e7" id="c15" style="background-color: #9fc6e7;' . ColorSelected($color, "#9fc6e7") . '" title="#9fc6e7" class="color cl1" onclick="colorchange(\'#9fc6e7\',\'c15\')"></span>
<span tabindex="0" role="button" data-color="#4986e7" id="c16" style="background-color: #4986e7;' . ColorSelected($color, "#4986e7") . '" title="#4986e7" class="color cl1" onclick="colorchange(\'#4986e7\',\'c16\')"></span>
<span tabindex="0" role="button" data-color="#9a9cff" id="c17" style="background-color: #9a9cff;' . ColorSelected($color, "#9a9cff") . '" title="#9a9cff" class="color cl1" onclick="colorchange(\'#9a9cff\',\'c17\')"></span>
<span tabindex="0" role="button" data-color="#b99aff" id="c18" style="background-color: #b99aff;' . ColorSelected($color, "#b99aff") . '" title="#b99aff" class="color cl1" onclick="colorchange(\'#b99aff\',\'c18\')"></span>
<span tabindex="0" role="button" data-color="#c2c2c2" id="c19" style="background-color: #c2c2c2;' . ColorSelected($color, "#c2c2c2") . '" title="#c2c2c2" class="color cl1" onclick="colorchange(\'#c2c2c2\',\'c19\')"></span>
<span tabindex="0" role="button" data-color="#cabdbf" id="c20" style="background-color: #cabdbf;' . ColorSelected($color, "#cabdbf") . '" title="#cabdbf" class="color cl1" onclick="colorchange(\'#cabdbf\',\'c20\')"></span>
<span tabindex="0" role="button" data-color="#cca6ac" id="c21" style="background-color: #cca6ac;' . ColorSelected($color, "#cca6ac") . '" title="#cca6ac" class="color cl1" onclick="colorchange(\'#cca6ac\',\'c21\')"></span>
<span tabindex="0" role="button" data-color="#f691b2" id="c22" style="background-color: #f691b2;' . ColorSelected($color, "#f691b2") . '" title="#f691b2" class="color cl1" onclick="colorchange(\'#f691b2\',\'c22\')"></span>
<span tabindex="0" role="button" data-color="#cd74e6" id="c23" style="background-color: #cd74e6;' . ColorSelected($color, "#cd74e6") . '" title="#cd74e6" class="color cl1" onclick="colorchange(\'#cd74e6\',\'c23\')"></span>
<span tabindex="0" role="button" data-color="#a47ae2" id="c24" style="background-color: #a47ae2;' . ColorSelected($color, "#a47ae2") . '" title="#a47ae2" class="color cl1" onclick="colorchange(\'#a47ae2\',\'c24\')"></span></span>
<div style="clear:both;">
';

    return $html;
}

function color2($color)
{
    $html = '
<script>
 function colorchange2(color,box)
 {
	$(".cl2").css({"border":"1px solid rgba(0, 0, 0, 0)"});
	$("#"+box).css({"border":"1px solid #111"});
	$("#Color2").val (color);

 }
 </script>
  
<input type="hidden" name="Color2" id="Color2" value="' . $color . '">
<span class="simplecolorpicker inline ">
<span tabindex="0" role="button" data-color="#ac725e" id="c25" style="background-color: #ac725e;' . ColorSelected($color, "#ac725e") . '" title="#ac725e" class="color cl2" onclick="colorchange2(\'#ac725e\',\'c25\')"></span>
<span tabindex="0" role="button" data-color="#d06b64" id="c26" style="background-color: #d06b64;' . ColorSelected($color, "#d06b64") . '" title="#d06b64" class="color cl2" onclick="colorchange2(\'#d06b64\',\'c26\')"></span>
<span tabindex="0" role="button" data-color="#f83a22" id="c27" style="background-color: #f83a22;' . ColorSelected($color, "#f83a22") . '" title="#f83a22" class="color cl2" onclick="colorchange2(\'#f83a22\',\'c27\')"></span>
<span tabindex="0" role="button" data-color="#fa573c" id="c28" style="background-color: #fa573c;' . ColorSelected($color, "#fa573c") . '" title="#fa573c" class="color cl2" onclick="colorchange2(\'#fa573c\',\'c28\')"></span>
<span tabindex="0" role="button" data-color="#ff7537" id="c29" style="background-color: #ff7537;' . ColorSelected($color, "#ff7537") . '" title="#ff7537" class="color cl2" onclick="colorchange2(\'#ff7537\',\'c29\')"></span>
<span tabindex="0" role="button" data-color="#ffad46" id="c30" style="background-color: #ffad46;' . ColorSelected($color, "#ffad46") . '" title="#ffad46" class="color cl2" onclick="colorchange2(\'#ffad46\',\'c30\')"></span>
<span tabindex="0" role="button" data-color="#42d692" id="c31" style="background-color: #42d692;' . ColorSelected($color, "#42d692") . '" title="#42d692" class="color cl2" onclick="colorchange2(\'#42d692\',\'c31\')"></span>
<span tabindex="0" role="button" data-color="#519B26" id="c32" style="background-color: #519B26;' . ColorSelected($color, "#519B26") . '" title="#519B26" class="color cl2" onclick="colorchange2(\'#519B26\',\'c32\')"></span>
<span tabindex="0" role="button" data-color="#7bd148" id="c33" style="background-color: #7bd148;' . ColorSelected($color, "#7bd148") . '" title="#7bd148" class="color cl2" onclick="colorchange2(\'#7bd148\',\'c33\')"></span>
<span tabindex="0" role="button" data-color="#b3dc6c" id="c34" style="background-color: #b3dc6c;' . ColorSelected($color, "#b3dc6c") . '" title="#b3dc6c" class="color cl2" onclick="colorchange2(\'#b3dc6c\',\'c34\')"></span>
<span tabindex="0" role="button" data-color="#fbe983" id="c35" style="background-color: #fbe983;' . ColorSelected($color, "#fbe983") . '" title="#fbe983" class="color cl2" onclick="colorchange2(\'#fbe983\',\'c35\')"></span>
<span tabindex="0" role="button" data-color="#fad165" id="c36" style="background-color: #fad165;' . ColorSelected($color, "#fad165") . '" title="#fad165" class="color cl2" onclick="colorchange2(\'#fad165\',\'c36\')"></span>
<span tabindex="0" role="button" data-color="#92e1c0" id="c37" style="background-color: #92e1c0;' . ColorSelected($color, "#92e1c0") . '" title="#92e1c0" class="color cl2" onclick="colorchange2(\'#92e1c0\',\'c37\')"></span>
<span tabindex="0" role="button" data-color="#9fe1e7" id="c38" style="background-color: #9fe1e7;' . ColorSelected($color, "#9fe1e7") . '" title="#9fe1e7" class="color cl2" onclick="colorchange2(\'#9fe1e7\',\'c38\')"></span>
<span tabindex="0" role="button" data-color="#9fc6e7" id="c39" style="background-color: #9fc6e7;' . ColorSelected($color, "#9fc6e7") . '" title="#9fc6e7" class="color cl2" onclick="colorchange2(\'#9fc6e7\',\'c39\')"></span>
<span tabindex="0" role="button" data-color="#4986e7" id="c40" style="background-color: #4986e7;' . ColorSelected($color, "#4986e7") . '" title="#4986e7" class="color cl2" onclick="colorchange2(\'#4986e7\',\'c40\')"></span>
<span tabindex="0" role="button" data-color="#9a9cff" id="c41" style="background-color: #9a9cff;' . ColorSelected($color, "#9a9cff") . '" title="#9a9cff" class="color cl2" onclick="colorchange2(\'#9a9cff\',\'c41\')"></span>
<span tabindex="0" role="button" data-color="#b99aff" id="c42" style="background-color: #b99aff;' . ColorSelected($color, "#b99aff") . '" title="#b99aff" class="color cl2" onclick="colorchange2(\'#b99aff\',\'c42\')"></span>
<span tabindex="0" role="button" data-color="#c2c2c2" id="c43" style="background-color: #c2c2c2;' . ColorSelected($color, "#c2c2c2") . '" title="#c2c2c2" class="color cl2" onclick="colorchange2(\'#c2c2c2\',\'c43\')"></span>
<span tabindex="0" role="button" data-color="#cabdbf" id="c44" style="background-color: #cabdbf;' . ColorSelected($color, "#cabdbf") . '" title="#cabdbf" class="color cl2" onclick="colorchange2(\'#cabdbf\',\'c44\')"></span>
<span tabindex="0" role="button" data-color="#cca6ac" id="c45" style="background-color: #cca6ac;' . ColorSelected($color, "#cca6ac") . '" title="#cca6ac" class="color cl2" onclick="colorchange2(\'#cca6ac\',\'c45\')"></span>
<span tabindex="0" role="button" data-color="#f691b2" id="c46" style="background-color: #f691b2;' . ColorSelected($color, "#f691b2") . '" title="#f691b2" class="color cl2" onclick="colorchange2(\'#f691b2\',\'c46\')"></span>
<span tabindex="0" role="button" data-color="#cd74e6" id="c47" style="background-color: #cd74e6;' . ColorSelected($color, "#cd74e6") . '" title="#cd74e6" class="color cl2" onclick="colorchange2(\'#cd74e6\',\'c47\')"></span>
<span tabindex="0" role="button" data-color="#a47ae2" id="c48" style="background-color: #a47ae2;' . ColorSelected($color, "#a47ae2") . '" title="#a47ae2" class="color cl2" onclick="colorchange2(\'#a47ae2\',\'c48\')"></span></span>
<div style="clear:both;">
';

    return $html;
}



// value selected
function ValueSelected($Value, $SelectedValue)
{
    if ($Value == $SelectedValue) {
        return 'selected';
    }
}


function ColorSelected($Value, $SelectedValue)
{
    if ($Value == $SelectedValue) {
        return 'border: 1px solid #111111;';
    }
}

function updateHand($UserName) {

    if($user = SQL_Select("User", "UserName = '{$UserName}'", "", true)) {
        if((int) $user['UserLeftHand'] == 0) {
            SQL_InsertUpdate(
                "user",
                array(
                    "UserLeftHand" => 1,
                ),
                "UserName = '{$UserName}'"
            );
        } else if ((int) $user['UserRightHand'] == 0) {
            SQL_InsertUpdate(
                "user",
                array(
                    "UserRightHand" => 1,
                ),
                "UserName = '{$UserName}'"
            );
        } else {
            echo "<pre>";
            throw new Exception("UserHandException Found");
        }
    }
}


	
	
	
?>