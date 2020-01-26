

function DeletePurchase(PurchasedProductsID,TempNumber){
	
	var val = confirm('Are you sure you want to Delete.');
	if(val){
		$.post("index.php?Theme=default&Base=Purchase&Script=AddProducts&Action=Delete&PurchasedProductsID="+PurchasedProductsID+"&TempNumber="+TempNumber+"&NoHeader&NoFooter",function(data){
			$("#AutoRow").html(data);

		});
	}
	
}


function DeletePurchaseFunding(FundID,TempNumber){
	
	var val = confirm('Are you sure you want to Delete this Fund.');
	if(val){
		$.post("index.php?Theme=default&Base=Purchase&Script=AddFund&Action=Delete&FundID="+FundID+"&TempNumber="+TempNumber+"&NoHeader&NoFooter",function(data){
			$("#PaymentHistory").html(data);

		});
	}
	
}



$("#PurchaseID").click(function(){
	
	$.post("index.php?Theme=default&Base=Purchase&Script=AddProducts&NoHeader&NoFooter",$("#PurchaseFormID").serialize(),function(data){
		//alert(data);
		//var val=Number(data);
		$("#AutoRow").html(data);
		//$('#AutoRow').replaceWith(data);

	});
	
	
});	


$("#QuotationID").click(function(){
	
	$.post("index.php?Theme=default&Base=Quotation&Script=AddProducts&NoHeader&NoFooter",$("#QuotationFormID").serialize(),function(data){
		//alert(data);
		//var val=Number(data);
		$("#AutoRow").html(data);
		//$('#AutoRow').replaceWith(data);

	});
	
	
});	



function CalculatePurchase(ID,PID){
		
	var Cost = Number($("#Cost_"+PID).val());	
	$.post("index.php?Theme=default&Base=Purchase&Script=AddProducts&NoHeader&NoFooter&TempNumberFromCost="+ID +"&Cost="+Cost + "&Qty="+$("#Qty_"+PID).val()+"&PID="+PID+"&Serials="+$("#Serials_"+PID).val(),function(data){
		$("#AutoRow").html(data);
	});
	
	
}


$("#PaymentMethod").change(function(){
	//alert('dsf');
	
	if($("#PaymentMethod").val()=='Cash'){
		$("#Cheque").css('display','none')
		
	}else{
		//$("#Cheque").css('display','block')
	}
	
	$("#AddFundForm").reset();
	
});	

$(".FormComboBoxWareHouse").change(function(){
	//alert('dsf');
	
	$.post("index.php?Theme=default&Base=Purchase&Script=AddProducts&NoHeader&NoFooter&Action=WareHouse&WareHouseID=" +$(".FormComboBoxWareHouse").val()+ "&TempNumber="+ $("#TempNumber").val(),function(data){
		

	});
	
});	


$(".FormComboBoxWareHouseSales").change(function(){
	//alert('dsf');
	
	$.post("index.php?Theme=default&Base=Sales&Script=AddProducts&NoHeader&NoFooter&Action=WareHouse&WareHouseID=" +$(".FormComboBoxWareHouseSales").val()+ "&TempNumber="+ $("#TempNumber").val(),function(data){
		

	});
	
});	



$("#ActionButton1").click(function(){
	//alert('dsf');
	$("#GrandTotalPrice").val($("#GrandTotal").val());
	//alert($("#GrandTotalPrice").val());
	$.post("index.php?Theme=default&Base=Purchase&Script=AddFund&NoHeader&NoFooter",$("#AddFundForm").serialize(),function(data){
		$("#Amount").val('');
		$("#Amount").focus();
		$("#PaymentHistory").html(data);
		//$('#AutoRow').replaceWith(data);

	});
	
	
});	

$("#CompletePurchase").click(function(){
	//alert('dsf');
	if($("#AutoRow").html()=='Select Product to Purchase.')
		alert('Please Select Product to Purchase.');
	else {	
		alert('Purchase Completed.');
		$.post("index.php?Theme=default&Base=Purchase&Script=AddFund&CompletePurchase=True&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter",function(data){

			window.open("index.php?Theme=default&Base=Purchase&Script=Voucher&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter");	
			window.location.reload();

		});	
		
	}
	
});


$("#CompleteQuotation").click(function(){
	//alert($("#AutoRow").html());
	if($("#AutoRow").html()=='Select Product for Quotation.')
		alert('Please Select Product for Quotation.');
	else if($(".FormComboBoxCustomer").val()=='')
		alert('Please Select a Customer');
	else {	
		alert('Quotation Completed.');
		$.post("index.php?Theme=default&Base=Quotation&Script=AddFund&CompletePurchase=True&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter",function(data){

			window.open("index.php?Theme=default&Base=Quotation&Script=Voucher&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter");	
			window.location.reload();

		});	
		
	}
	
});



function PurchaseEdit(TempNumber){
		
	$.post("index.php?Theme=default&Base=Purchase&Script=AddProducts&Action=Edit&NoHeader&NoFooter&EditTempNumber="+TempNumber,function(data){
		$("#AutoRow").html(data);
	});
	
	$.post("index.php?Theme=default&Base=Purchase&Script=AddFund&Action=Edit&NoHeader&NoFooter&EditTempNumber="+TempNumber,function(data){
		$("#PaymentHistory").html(data);
	});
	
	
}





/*  Sales order */


function SalesOrderEdit(TempNumber){
	
	$.post("index.php?Theme=default&Base=Sales&Script=AddProducts&Action=Edit&NoHeader&NoFooter&EditTempNumber="+TempNumber,function(data){
		$("#AutoRow").html(data);
	});
	
	$.post("index.php?Theme=default&Base=Sales&Script=AddFund&Action=Edit&NoHeader&NoFooter&EditTempNumber="+TempNumber,function(data){
		$("#PaymentHistory").html(data);
	});
	
	
}


$("#SalesButtonID").click(function(){
	
	$.post("index.php?Theme=default&Base=Sales&Script=AddProducts&NoHeader&NoFooter",$("#SalesFormID").serialize(),function(data){
		//alert(data);
		//var val=Number(data);
		$("#AutoRow").html(data);
		//$('#AutoRow').replaceWith(data);

	});
	
	
});	

function PlaceOrder(ID){
	
	$("#ProductID").val(ID);
	$.post("index.php?Theme=default&Base=POS&Script=AddProducts&NoHeader&NoFooter",$("#SalesFormID").serialize(),function(data){
		//alert(data);
		//var val=Number(data);
		$("#AutoRow").html(data);
		//$('#AutoRow').replaceWith(data);

	});
	
}



function CalculateSalesOrder(ID,PID){
	
	
	var Cost = Number($("#Cost_"+PID).val());	
	$.post("index.php?Theme=default&Base=Sales&Script=AddProducts&NoHeader&NoFooter&TempNumberFromCost="+ID +"&Cost="+Cost + "&Qty="+$("#Qty_"+PID).val()+"&PID="+PID+"&Serials="+$("#SerialsNumber_"+PID).val()+"&WarrantyTime="+$("#WarrantyTime_"+PID).val()+"&Warranty="+$("#Warranty_"+PID).val(),function(data){
		$("#AutoRow").html(data);
	});
	
	
}

function CalculateSalesOrderPOS(ID,PID){
	
	
	var Cost = Number($("#Cost_"+PID).val());	
	$.post("index.php?Theme=default&Base=POS&Script=AddProducts&NoHeader&NoFooter&TempNumberFromCost="+ID +"&Cost="+Cost + "&Qty="+$("#Qty_"+PID).val()+"&PID="+PID+"&Serials="+$("#SerialsNumber_"+PID).val()+"&WarrantyTime="+$("#WarrantyTime_"+PID).val()+"&Warranty="+$("#Warranty_"+PID).val(),function(data){
		$("#AutoRow").html(data);
	});
	
	
}


$("#SalesActionButton1").click(function(){
	//alert('dsf');
	$("#GrandTotalPrice").val($("#GrandTotal").val());
	//alert($("#GrandTotalPrice").val());
	if($(".FormComboBoxCustomer").val()=="5" && $("#PaymentMethod").val()=="Advanced Fund"){
		alert('Please Choose Existing Customer for an Advanced Payment Adjustment')
	}else {

        $.post("index.php?Theme=default&Base=Sales&Script=AddFund&NoHeader&NoFooter&Customer_ID=" +$(".FormComboBoxCustomer").val(), $("#SalesAddFundForm").serialize(), function (data) {

        	if(data=='101')
                alert("Customer Have low Amount than Inserted Amount");

        	$("#Amount").val('');
            $("#Amount").focus();
            $("#Discount").val('');
            $("#PaymentHistory").html(data);
            //$('#AutoRow').replaceWith(data);

        });

    }
});	



// Complete Sales Button
$("#CompleteSales").click(function(){
	//alert('dsf');

	if($("#AutoRow").html()=='Select Product to Sale.')
		alert('Please Add Product(s).');
	else if($(".FormComboBoxCustomer").val()=='' && $("#NewCustomer").val()==''){
		alert('Choose Customer');
	//else if (SerialAndQtyIsEqual($("#TempNumber").val())!=1){
		//alert('Quantity and Serial is not Equal');
		//return false;
	}	
	else{	
		//alert('Sales Completed.');
		var val = confirm('Do you want to complete the sale?');
		if(val){		
		
			$.post("index.php?Theme=default&Base=Sales&Script=AddFund&CompleteSales=True&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter&FormComboBoxCustomer="+ $(".FormComboBoxCustomer").val() +"&Phone="+ $("#Phone").val() +"&NewCustomer="+ $("#NewCustomer").val(),$("#SalesFormID").serialize(),function(data){
				
				window.open("index.php?Theme=default&Base=Sales&Script=Invoice&ShowDueInInvoice="+ $("#ShowDueInInvoice").val() +"&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter");	
				window.open("index.php?Theme=default&Base=Sales&Script=Chalan&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter");	
				window.location.reload();
	
			});	
		}		
		//false;
	}
	
});


// Complete Sales n Download PDF
$("#CompleteSalesNDownloadPDF").click(function(){
	//alert('dsf');

	if($("#AutoRow").html()=='Select Product to Sale.')
		alert('Please Add Product(s).');
	else if($(".FormComboBoxCustomer").val()=='' && $("#NewCustomer").val()==''){
		alert('Choose Customer');
	//else if (SerialAndQtyIsEqual($("#TempNumber").val())!=1){
		//alert('Quantity and Serial is not Equal');
		//return false;
	}	
	else{	
		//alert('Sales Completed.');
		var val = confirm('Do you want to complete the sale?');
		if(val){		
			$.post("index.php?Theme=default&Base=Sales&Script=AddFund&CompleteSales=True&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter&FormComboBoxCustomer="+ $(".FormComboBoxCustomer").val() +"&Phone="+ $("#Phone").val() +"&NewCustomer="+ $("#NewCustomer").val(),$("#SalesFormID").serialize(),function(data){
				
				window.open("index.php?Theme=default&Base=Sales&Script=InvoicePDF&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter");	
				window.location.reload();
	
			});	
		}
		//false;
	}
	
});

$("#CompleteSalesOnly").click(function(){
	//alert('dsf');

	if($("#AutoRow").html()=='Select Product to Sale.')
		alert('Please Add Product(s).');
	else if($(".FormComboBoxCustomer").val()=='' && $("#NewCustomer").val()==''){
		alert('Choose Customer');
	//else if (SerialAndQtyIsEqual($("#TempNumber").val())!=1){
		//alert('Quantity and Serial is not Equal');
		//return false;
	}	
	else{	
		//alert('Sales Completed.');
		var val = confirm('Do you want to complete the sale?');
		if(val){		
		
			$.post("index.php?Theme=default&Base=Sales&Script=AddFund&CompleteSales=True&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter&FormComboBoxCustomer="+ $(".FormComboBoxCustomer").val() +"&Phone="+ $("#Phone").val() +"&NewCustomer="+ $("#NewCustomer").val(),$("#SalesFormID").serialize(),function(data){
				
				window.location.reload();
	
			});	
		}		
		//false;
	}
	
});

function GetProductsListPOS(ID){
	
		$.post("index.php?Theme=default&Base=POS&Script=GetProductsList&CID="+ID+"&NoHeader&NoFooter",function(data){
			//$("#ProductDropDownID").html(data);
			$("#TopMenusList").css("display","block");
			$("#MenusList").css("display","block");
			$("#TopMenusListItems").html(data);

		});
	
}


function SerialAndQtyIsEqual(TempNumber){
	var Result;	
	$.post("index.php?Theme=default&Base=Sales&Script=SerialAndQtyIsEqual&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter",function(data){
		var Result=Number(data);
		if(Result==1){
			alert('Sales Completed.');
			$.post("index.php?Theme=default&Base=Sales&Script=AddFund&CompleteSales=True&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter&FormComboBoxCustomer="+ $(".FormComboBoxCustomer").val() +"&NewCustomer="+ $("#NewCustomer").val(),function(data){
				window.open("index.php?Theme=default&Base=Sales&Script=Invoice&TempNumber="+ $("#TempNumber").val() +"&NoHeader&NoFooter");	
				window.location.reload();		
			

			});	
			
		
		}		
		else
			alert(data);		
		
	});		
	//alert(TempNumber);

}




function DeleteProducts(SalesOrderID,TempNumber){
	
	var val = confirm('Are you sure you want to Delete.');
	if(val){
		$.post("index.php?Theme=default&Base=Sales&Script=AddProducts&Action=Delete&SalesOrderID="+SalesOrderID+"&TempNumber="+TempNumber+"&NoHeader&NoFooter",function(data){
			$("#AutoRow").html(data);

		});
	}
	
}


function DeleteSalesFunding(FundID,TempNumber){
	
	var val = confirm('Are you sure you want to Delete this Fund.');
	if(val){
		$.post("index.php?Theme=default&Base=Sales&Script=AddFund&Action=Delete&SalesFundID="+FundID+"&TempNumber="+TempNumber+"&NoHeader&NoFooter",function(data){
			$("#PaymentHistory").html(data);

		});
	}
	
}

function SerialsAdd(ID,TempNumber){
	
	//alert(TempNumber);
	//$("#Serials_"+ID).html($("#SerialsNumber_"+ID).val());
	$.post("index.php?Theme=default&Base=Sales&Script=AddProducts&Action=SerialsNumber&ProductID="+ID+"&TempNumber="+TempNumber+"&SerialNumber="+$("#SerialsNumber_"+ID).val()+"&NoHeader&NoFooter",function(data){
		$("#Serials_"+ID).html(data);

	});

	

}


// delete Serial from the list
function DeleteSerial(ID,TempNumber,Serial_Value){
	
	var val = confirm('Are you sure you want to Delete this Serial.');
	if(val){	
		$.post("index.php?Theme=default&Base=Sales&Script=AddProducts&Action=SerialsNumber&ProductID="+ID+"&TempNumber="+TempNumber+"&SerialNumber="+$("#SerialHTML_"+Serial_Value).val()+"&Delete=Yes&NoHeader&NoFooter",function(data){
			$("#Serials_"+ID).html(data);

		});
	}
}


// discount Calculation.
function DiscountCal(){
	//alert('asdf');
	//if($("#Amount").val() > $("#Discount").val())
		$("#Amount").val($("#Amount").val()-$("#Discount").val());
	
}



function GetProductsList(ID){
	
		$.post("index.php?Theme=default&Base=Page&Script=GetProductsList&CID="+ID+"&NoHeader&NoFooter",function(data){
			$("#ProductDropDownID").html(data);

		});
	
}


function ShowSerials(ID,SelectedSeriels,MyTempNumber){

	$.post("index.php?Theme=default&Base=Sales&Script=ShowSerials&ID="+ID+"&SelectedSeriels="+SelectedSeriels+"&MyTempNumber="+MyTempNumber+"&NoHeader&NoFooter",function(data){
		$("#SerialsDropDown_"+ID).html(data);

	});

}



$('#FromDateLossProfit').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});

$('#ToDateLossProfit').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});



$('#FromDateReport').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});

$('#ToDateReport').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});


$('#ChequeDate').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});


$('#StartDate').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});

$('#EndDate').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});

$('#FromDate').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});

$('#ToDate').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});

$('#FromDateReport').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});



$('#FromDateLossProfit').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});



$('.DatePicker').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});


$('#PaidDate').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});

$('#PayDate').datepicker({
		showSecond: false,
		dateFormat: 'yy-mm-dd'
});

$('#Date').datepicker({
    showSecond: false,
    dateFormat: 'yy-mm-dd'
});

$('#Product_ID').keyup(function(e){
    if(e.keyCode == 13)
    {
        //alert(1);
	$.post("index.php?Theme=default&Base=Sales&Script=AddProducts&NoHeader&NoFooter&P_ID=Yes",$("#SalesFormID").serialize(),function(data){
		//alert(data);
		//var val=Number(data);
		$('#Product_ID').val("");
		$('#project-id').val("0");
		
		$("#AutoRow").html(data);
		//$('#AutoRow').replaceWith(data);

	});	
    }
});


$('#Barcode').keyup(function(e){
    if(e.keyCode == 13)
    {
        //alert(1);
	$.post("index.php?Theme=default&Base=Sales&Script=AddProducts&NoHeader&NoFooter",$("#SalesFormID").serialize(),function(data){
		//alert(data);
		//var val=Number(data);
		$('#Barcode').val("");
		$("#AutoRow").html(data);
		//$('#AutoRow').replaceWith(data);

	});	
    }
});

//some function for popup file set

function testmail()
{
var text_value=document.getElementById("testto");
if(text_value.value=="")
{document.getElementById("testmail").disabled=true; text_value.focus(); return false;}
else
{return true;}
}

function textchange()
{
	var textchange=document.getElementById("testto");
	if(textchange.value=="")
	{
		document.getElementById("testmail").disabled=true;
		}
	else
	{document.getElementById("testmail").disabled=false;}
	
	
	}

















var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host;
var uir=baseUrl+"/api_order_tmp_rate";
var uir_1=baseUrl+"/api_remove_item/?uid=";
var uir_2=baseUrl+"/api_add_favourite/?uid=";
var uir_3=baseUrl+"/api_get_state/?country=";
var uir_4=baseUrl+"/api_get_city/?state=";
var token="";
function my_cart_refresh()
{
	setTimeout(function(){
var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     var my_data=this.responseText;
	 var my_split=my_data.split("|");
	 var my_count=my_split.length;
	 var my_validity=my_split[1];
	 
	 if(my_validity=='1')
	 {
		 var i=0;
		 var my_html_1='';
		// var my_html_2='';
	 var my_item=my_split[5];
	 var my_price=my_split[6];
	 var my_item_data=my_split[7];
	 var my_item_split=my_item_data.split("}");
	 var my_product='';
		var my_split_product='';
		var my_uid='';
			var my_name='';
			var my_quantity='';
			var my_rate='';
			var my_price_1='';
			var my_image_1='';
	 
	 my_html_1='<div class="summary"><div class="cart-total-title"><span class="sub-total-label">Total item</span><span class="amount">'+ my_item+'</span></div><div class="subtotal"><span class="sub-total-label">Cart Subtotal</span><span class="price">'+my_price+'</span></div></div><div class="actions"><div class="checkout card-block"><div class="text-xs-center"><a href="'+baseUrl+'/cart" class="btn btn-primary">Checkout</a></div></div></div><ul class="cart-items">';
	 
	// my_html_2='<ul class="cart-products-list">';
	 
	for(i=0;i<my_item_split.length;i++)
	{
		
			
		my_product=my_item_split[i];
		my_split_product=my_product.split("]");
		my_product_uid=my_split_product[0];
		my_uid=my_split_product[1];
		my_name=my_split_product[2];
		my_quantity=my_split_product[3];
		my_rate=my_split_product[4];
		my_price_1=my_split_product[5];
		my_image_1=my_split_product[6];
			
			
			my_html_1=my_html_1+'<li class="cart-item"><div class="product-line-grid row"><div class="product-line-grid-left col-md-3 col-sm-3 col-xs-3"><span class="product-image media-middle">';
			my_html_1=my_html_1+'<img src="'+my_image_1+'" alt=""></span></div>';
			my_html_1=my_html_1+'<div class="product-line-grid-body col-md-5 col-sm-5 col-xs-5"><div class="product-line-info"><a class="label color_002" href="'+baseUrl+'/view/'+my_product_uid+'" style="cursor:pointer">'+my_name+'</a></div><div class="product-line-info"><span class="value">'+my_rate+'</span></div><div class="product-line-qty"><span class="label">Qty: </span><span class="product-quantity">'+my_quantity+'</span></div></div>';
			my_html_1=my_html_1+'<div class="product-line-grid-right product-line-actions col-md-4 col-sm-4 col-xs-4"><div class="row"><div class="col-md-12 col-xs-12 text-xs-right"><span class="product-price"><strong>'+my_price_1+'</strong></span></div></div></div>';
			my_html_1=my_html_1+'<div class="text-xs-right"><div class="cart-line-product-actions "><i class="fa fa-times-circle pull-xs-left color_002" style="font-size:15px;cursor:pointer" onclick="remove_product(\''+my_uid+'\');"></i></div></div>';
			my_html_1=my_html_1+'<div class="clearfix"></div></div></li>';
			
			/*my_html_2=my_html_2+'<li class="cart-item" data-role="detail-item"><div class="product-line-grid"><div class="product-line-grid-left" data-role="detail-trigger"><span class="product-quantity" style="color:#000;">'+my_quantity+'</span><span class="product-image media-middle"><a class="label" href="'+baseUrl+'/view/'+my_product_uid+'" style="cursor:pointer"><img src="'+my_image_1+'" alt=""></a></span></div><div class="cdz-product-line-detail" data-role="detail-target"><div class="product-line-actions"><div class="row"><div class="col-md-12 col-xs-12 text-xs-right"><div class="row"><div class="col-md-6 col-xs-6 qty"></div></div></div></div></div><div class=""><div class="cart-line-product-actions "><i class="fa fa-times-circle pull-xs-left" style="font-size:15px;color:#EEE;cursor:pointer" onclick="remove_product(\''+my_uid+'\');"></i></div></div></div></div></li>';*/
			
			
			
			
			
		}
		
		my_html_1=my_html_1+'</ul>';
		//my_html_2=my_html_2+'</ul>';
		document.getElementById("small_cart_1").innerHTML=my_html_1;
		//document.getElementById("small_cart_2").innerHTML=my_html_2;
		document.getElementById("cart_item_1").innerHTML=my_item;
		document.getElementById("cart_item_2").innerHTML=my_item;
		//document.getElementById("cart_item_3").innerHTML=my_item;
		//document.getElementById("cart_item_4").innerHTML=my_item+' item(s) in your cart';
		
		document.getElementById("cart_price_1").innerHTML=my_price;
		//document.getElementById("cart_price_2").innerHTML=my_price;

		
	 }
	 else
	 {
		 document.getElementById("small_cart_1").innerHTML="";
		//document.getElementById("small_cart_2").innerHTML=my_html_2;
		document.getElementById("cart_item_1").innerHTML="0";
		document.getElementById("cart_item_2").innerHTML="0";
		//document.getElementById("cart_item_3").innerHTML=my_item;
		//document.getElementById("cart_item_4").innerHTML=my_item+' item(s) in your cart';
		
		document.getElementById("cart_price_1").innerHTML="0.00";
		 
		 }
	
    }
  };
  xhttp.open("GET", uir, true);
  xhttp.send();},4000);
}

my_cart_refresh();



function add_to_cart(myid)
{
	document.getElementById(myid).submit();
	my_cart_refresh();
	setTimeout(function(){
	alert("Adding To The Cart");
	},1000);
	
	}
	


function remove_product(product_uid)
{
	var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	
	var my_data_1=this.responseText;
	var my_delete_split=my_data_1.split("|");
	var my_del_check=my_delete_split[1];
	if(my_del_check=="1")
	{
		alert("Delete Successfully");
		
		}
	else
	{
		alert("Try Again...");
		}
	
	}
  }
		
		 xhttp.open("GET", uir_1+product_uid, true);
  xhttp.send();
	
	my_cart_refresh(uir);
	
	}
	
	
	
function add_favourite(uid)
{
	var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	
	var my_data_2=this.responseText;
	var my_feb_split=my_data_2.split("|");
	var my_feb_check=my_feb_split[1];
	if(my_feb_check=="1")
	{alert("Add Successfully");}
	if(my_feb_check=="2")
	{alert("Already Added");}
	if(my_feb_check=="0")
	{alert("Try Again");}
	if(my_feb_check=="3")
	{alert("Login First To Add Favourite");}
	
	}
  }
xhttp.open("GET", uir_2+uid, true);
 xhttp.send();
	}


function getallcss() {
    var css = "", //variable to hold all the css that we extract
        styletags = document.getElementsByTagName("style");

    //loop over all the style tags
    for(var i = 0; i < styletags.length; i++)
    {
        css += styletags[i].innerHTML; //extract the css in the current style tag
    }

    var currentsheet = false;//initialise a variable to hold a reference to the stylesheet we are currently extracting from
    //loop over all the external stylesheets
    for(var i = 0; i < document.styleSheets.lenngth; i++)
    {
        currentsheet = document.styleSheets[i];
        //loop over all the styling rules in this external stylesheet
        for(var e = 0; e , currentsheet.cssRules.length; e++)
        {
            css += currentsheet.cssRules[e].cssText; //extract all the styling rules
        }
    }

    return css;
}


function my_print(elem)
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=700');

   mywindow.document.write('<html><head><title></title>');
   mywindow.document.write('<style>');
	mywindow.document.write('.order_list_head{color:#FFF;background-color:#bd1004;text-align:center;font-weight:bolder;font-size:15px;}')	
mywindow.document.write('.order_list_row{color:#999;text-align:center;}');
mywindow.document.write('.color_002{color:#f54337;text-decoration:none;}');
	mywindow.document.write('</style>');
   mywindow.document.write('</head><body >');
   mywindow.document.write(document.getElementById(elem).innerHTML);
   mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
   mywindow.close();

    return true;
}

function my_reload() {
    location.reload();
}


function remove_product_1(product_uid)
{
	var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	
	var my_data_1=this.responseText;
	var my_delete_split=my_data_1.split("|");
	var my_del_check=my_delete_split[1];
	if(my_del_check=="1")
	{
		alert("Delete Successfully");
		my_reload();
		}
	else
	{
		alert("Try Again...");
		}
	
	}
  }
		
		 xhttp.open("GET", uir_1+product_uid, true);
  xhttp.send();
	
}


function my_confirmation(my_text)
{
	var my_conf=confirm(my_text);
	if(my_conf==true)
	{return true;}
	else
	{return false;}
	}
	




//JS From Admin panel Start




var my_interval='';
var my_window='';
var my_window_data='';
var my_select_data='';
var select_system='';
var insert_system='';
var mid='';
var text='';
var my_id='';
var file_limit=50;
var file_start=0;
var file_type='1';
var del_id='';
var file_link_uid='';
var baseurl=baseUrl;



function open_window()
{
	my_window=window.open(baseUrl+"/index.php?Theme=default&Base=Api&Script=file_upload&api=1","file", "toolbar=no,scrollbars=no,resizable=yes,top=500,left=500,width=400,height=400");
	set_interval();
	}

function close_window()
{
	my_window.close();
	
	}

function set_interval()
{
	my_interval=setInterval(function(){ check_data() }, 100);
	}

function stop_interval()
{
	clearInterval(my_interval);
	}

function check_data()
{
	my_window_data=my_window.document.getElementById("check").value;
	if(my_window_data=='ok')
	{
		close_window();
		stop_interval();
		data_refresh();
		
		}
	
	}

function file_close()
{
stop_interval();
document.getElementById("filesystem").style.display="none";
	
	}
	
	function file_show(in_sys,sel_sys)
{
select_system=sel_sys;
insert_system=in_sys;
data_refresh();
document.getElementById("filesystem").style.display="block";
	
	}
	
	
	function file_show_exam(in_sys,sel_sys,id)
{
select_system=sel_sys;
insert_system=in_sys;
data_refresh();
my_id=id;
document.getElementById("filesystem").style.display="block";
	
	}
	
function data_refresh()
{
	file_start=0;
	 var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("fileview").innerHTML =
      this.responseText;
    }
  };
  xmlhttp.open("GET", baseUrl+"/index.php?Theme=default&Base=Api&Script=get_file&api=1&file_start="+file_start+"&file_limit="+file_limit, true);
  xmlhttp.send();
	}
	
	
	
	function more_file_load()
{
	file_start=Number(file_start)+Number(file_limit);
	var html=document.getElementById("fileview").innerHTML;
	 var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("fileview").innerHTML =html+this.responseText;
    }
  };
  xmlhttp.open("GET", baseUrl+"/index.php?Theme=default&Base=Api&Script=get_file&api=1&file_start="+file_start+"&file_limit="+file_limit, true);
  xmlhttp.send();
	
	}
	
	
	
	
function file_select(my_id)
{

	var opct=document.getElementById(my_id).style.opacity;
	var imurl=document.getElementById(my_id).getAttribute("src");
	var my_value=document.getElementById("myurl"+my_id).value;
	var my_name=document.getElementById("myname"+my_id).value;
	del_id=document.getElementById("my_id"+my_id).value;
	var type_f=document.getElementById("type"+my_id).value;
	file_link_uid=document.getElementById("my_uid"+my_id).value;
	if(opct=='1')
	{
		document.getElementById(my_id).style.opacity='0.5';
		}
	else
	{
		document.getElementById(my_id).style.opacity='1.0';
		}
		
	if(insert_system=='1')
	{
		
		document.getElementById("file_content").innerHTML='<img id="view_image" src="'+imurl+'" style="height:100px;max-width:100%;border:1px;border-color: #999;border-style: solid;opacity: 1.0;"><br><br><table width="100%" border="0"><tr><td style="text-align:right;">Name:</td><td><input class="input_custom" type="text" id="file_name" value="'+my_name+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/></td></tr><tr><td style="text-align:right;">URL:</td><td><input class="input_custom" type="text" id="file_url" value="'+baseurl+'/'+my_value+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/></td></tr><tr><td style="text-align:right;">Type:</td><td><input class="input_custom" type="text" id="type_f" value="'+type_f+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/></td></tr></table>';
		}
		//if(select_system=='2')
		//{}
		//if(select_system=='3')
		//{}
		if(insert_system=='4')
		{
//document.getElementById("file_url").value=baseurl+'/'+my_value;
document.getElementById("file_content").innerHTML='<img id="view_image" src="'+imurl+'" style="height:100px;max-width:100%;border:1px;border-color: #999;border-style: solid;opacity: 1.0;"><input type="hidden" id="file_url" value="'+my_value+'"  />';
}
		if(insert_system==5)
		{
		document.getElementById("file_content").innerHTML='<img id="view_image" src="'+imurl+'" style="height:100px;max-width:100%;border:1px;border-color: #999;border-style: solid;opacity: 1.0;"><input type="hidden" id="file_url" value="'+my_value+'"  />';
			}
			
			
			if(insert_system==6)
		{
		   document.getElementById("file_content").innerHTML='<img id="view_image" src="'+imurl+'" style="height:100px;max-width:100%;border:1px;border-color: #999;border-style: solid;opacity: 1.0;"><br><br><table width="100%" border="0"><tr><td style="text-align:right;">Name:</td><td><input class="input_custom" type="text" id="file_name" value="'+my_name+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/></td></tr><tr><td style="text-align:right;">URL:</td><td><input class="input_custom" type="text" id="file_url" value="'+baseurl+'/'+my_value+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/></td></tr><tr><td style="text-align:right;">Type:</td><td><input class="input_custom" type="text" id="type_f" value="'+type_f+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/></td></tr></table>';
		}
			
				if(insert_system==7)
		{
		document.getElementById("file_content").innerHTML='<img id="view_image" src="'+imurl+'" style="height:100px;max-width:200px;border:1px;border-color: #999;border-style: solid;opacity: 1.0;"><input type="hidden" id="file_url" value="'+my_value+'" />';
			}
			
			
			
			if(insert_system==8)
		{
		document.getElementById("file_content").innerHTML='<img id="view_image" src="'+imurl+'" style="height:100px;max-width:100%;border:1px;border-color: #999;border-style: solid;opacity: 1.0;"><br><br><table width="100%" border="0"><tr><td style="text-align:right;">Name:</td><td><input class="input_custom" type="text" id="file_name" value="'+my_name+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/></td></tr><tr><td style="text-align:right;">URL:</td><td><input class="input_custom" type="text" id="file_url" value="'+baseurl+'/'+my_value+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/><input type="text" id="file_url" value="'+baseurl+'/'+my_value+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/></td></tr><tr><td style="text-align:right;">Type:</td><td><input class="input_custom" type="text" id="type_f" value="'+type_f+'" readonly="readonly" style="font-size:12px;height:20px;width:100%;"/></td></tr></table>';
			}
		
		
		
		
	}


function remove_inner(id)
{
	document.getElementById(id).innerHTML='';
	document.getElementById('thumb').value='';
	
	}
	
	
function remove_multi(id)
{
	var parent = document.getElementById('multi_im');
	var mul_im_val_rm=document.getElementById("multi").value;
	var mul_im_val_co=document.getElementById("multi_co").value;
	var im_url=document.getElementById(id).getAttribute("src");
var child = document.getElementById(id);
parent.removeChild(child);
var search_ur=mul_im_val_rm.indexOf(im_url);
if(search_ur=="0" && mul_im_val_co=="1")
{
var ap_rep=mul_im_val_rm.replace(im_url,'');
document.getElementById("multi_co").value=0;
document.getElementById("multi").value=ap_rep;
}
else
{
	if(search_ur=="0" && mul_im_val_co>1)
	{
		document.getElementById("multi_co").value=Number(mul_im_val_co)-Number(1);
		var ap_rep=mul_im_val_rm.replace(im_url+',','');
		document.getElementById("multi").value=ap_rep;
		}
	else
	{
		if(search_ur>0)
	{
		document.getElementById("multi_co").value=Number(mul_im_val_co)-Number(1);
		var ap_rep=mul_im_val_rm.replace(','+im_url,'');
		document.getElementById("multi").value=ap_rep;
		}
		}
	
	}

	}	
	
	
	
	
	function remove_multi_im(id,mid)
{
	var parent = document.getElementById("imgset"+mid);
	var mul_im_val_rm=document.getElementById("img"+mid).value;
	var mul_im_val_co=document.getElementById("imgco"+mid).value;
	var im_url=document.getElementById(id).getAttribute("src");
var child = document.getElementById(id);
parent.removeChild(child);
var search_ur=mul_im_val_rm.indexOf(im_url);
if(search_ur=="0" && mul_im_val_co=="1")
{
var ap_rep=mul_im_val_rm.replace(im_url,'');
document.getElementById("imgco"+mid).value=0;
document.getElementById("img"+mid).value=ap_rep;
}
else
{
	if(search_ur=="0" && mul_im_val_co>1)
	{

		document.getElementById("imgco"+mid).value=Number(mul_im_val_co)-Number(1);
		var ap_rep=mul_im_val_rm.replace(im_url+',','');
		document.getElementById("img"+mid).value=ap_rep;
		}
	else
	{
		if(search_ur>0)
	{
		document.getElementById("imgco"+mid).value=Number(mul_im_val_co)-Number(1);
		var ap_rep=mul_im_val_rm.replace(','+im_url,'');
		document.getElementById("img"+mid).value=ap_rep;
		}
		}
	
	}

	}
	
	
	
function set_video()
{
	var person = prompt("Please Youtube EMBED Code", "");
    if (person != null && person !='')
	{
	mid='text';
	text=person;
	my_insertAtCaret(mid,text);
	}
	
	}
	
	
function set_link()
{
	var person = prompt("Link http://", "");
	var person2 = prompt("Text", "");
	var person3 = prompt("Open The Link\nSame Tab=1\nNew Tab=2", "2");
    if (person != null && person !='' && person2 != null && person2 !='')
	{
		var open_link='';
		if(person3=="2")
		{
			open_link=' target="_blank"';
			}
		else
		{
			open_link='';
			}
	mid='text';
	text='<a href="'+person+'"'+open_link+' >'+person2+'</a>';
	my_insertAtCaret(mid,text);
	}
	
	}
		
	
//var select_system='' 1=insert image 2=insert video 3=insert link; 4=thumb image 5=multi image
//var insert_system='' 1=single 2=multi;

function insert_data()
{
	
	var n=Math.floor(Math.random()*11);
var k = Math.floor(Math.random()* 1000000);
var mk =String.fromCharCode(n)+k;
var m=mk.trim();
	var value_in=document.getElementById("file_url").value;
	var value_src=document.getElementById('view_image').getAttribute("src");
	if(insert_system==1)
	{
		mid='text';
	text='<img src="'+value_in+'" height="200" align="center">';
	my_insertAtCaret(mid,text);
		}
		
		if(insert_system==4)
	{
	
	text='<img src="'+value_src+'" style="height:70px; border:1px; border-style:solid; border-color:#333;cursor:crosshair;" onclick="remove_inner(\'thumb_im\')" />';
	document.getElementById("thumb_im").innerHTML=text;
	document.getElementById("thumb").value=value_in;
	
		}
		
			if(insert_system==5)
	{
	var mul_im_val=document.getElementById("multi").value;
	var mul_im_co=document.getElementById("multi_co").value;
	var mul_im_inn=document.getElementById("multi_im").innerHTML;
	text='<img id="'+m+'" src="'+value_src+'" style="height:70px; border:1px; border-style:solid; border-color:#333;cursor:crosshair;" onclick="remove_multi(\''+m+'\');"/>';
	document.getElementById("multi_im").innerHTML=mul_im_inn+text;
	document.getElementById("multi_co").value=Number(mul_im_co)+Number(1);
	if(mul_im_val=='')
	{
		document.getElementById("multi").value=value_in;
		}
	else
	{
		document.getElementById("multi").value=mul_im_val+','+value_in;
		}
	
		}
		
		
		if(insert_system==6)
	{
	var mul_im_val=document.getElementById("img"+my_id).value;
	var mul_im_co=document.getElementById("imgco"+my_id).value;
	var mul_im_inn=document.getElementById("imgset"+my_id).innerHTML;
	var my_ln=Number(value_in.length)-Number(3);
	var my_ext=value_in.substr(my_ln,3);
	if(my_ext=="swf")
	{
	  text=' <embed id="'+m+'" src="../'+value_src+'" width="100" height="100"  style="height:50px; border:5px; border-style:solid; border-color:#333;cursor:crosshair;" onclick="remove_multi_im(\''+m+'\',\''+my_id+'\');">';
	}
	else
	{
	     text=' <img id="'+m+'" src="'+value_src+'" style="height:50px; border:1px; border-style:solid; border-color:#333;cursor:crosshair;" onclick="remove_multi_im(\''+m+'\',\''+my_id+'\');"/>';
	}
	if(mul_im_co<14)
	{
	document.getElementById("imgset"+my_id).innerHTML=mul_im_inn+text;
	document.getElementById("imgco"+my_id).value=Number(mul_im_co)+Number(1);
	if(mul_im_val=='')
	{
		document.getElementById("img"+my_id).value=value_in;
		}
	else
	{
		document.getElementById("img"+my_id).value=mul_im_val+','+value_in;
		}
	}
	else
	{
		alert("You can not set more than image");
		
		}
	
		}
		
		
			if(insert_system==7)
	{
	var person2 = prompt("Text", "");
	mid='text';
	text='<a href="'+value_in+'">'+person2+'</a>';
	my_insertAtCaret(mid,text);
	
		}
		
		if(insert_system==8)
	{
	
	document.getElementById("download_link").value=value_in;
	document.getElementById("link_code").value=file_link_uid;
	
		}
		
		
		
		
		
	
	file_close();
	}



function my_menu_cat(menu,pre,rep_id,id)
{
	var my_mnue='';
	var val_id='';
	if(menu=='1')
	{my_mnue='menu';}
	else
	{
		if(menu=='2')
	{
		val_id='menu_sub';
		my_mnue='submenu';}
	else
	{
		if(menu=='3')
	{my_mnue='catagory';}
	else
	{
		if(menu=='4')
	{
		val_id='catagory_sub';
		my_mnue='subcatagory';
		}
		}}}
		
		
	  var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(pre+rep_id).innerHTML =
      this.responseText;
    }
  };
  xmlhttp.open("GET", baseUrl+"/api_catagory/?ty="+my_mnue+"&pre="+pre+"&fr="+id, true);
  xmlhttp.send();

	}
	
	
function my_insertAtCaret(areaId,text)
{
	
		var txtarea = document.getElementById(areaId);
		if (!txtarea) { return; }

		var scrollPos = txtarea.scrollTop;
		var strPos = 0;
		var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ?
			"ff" : (document.selection ? "ie" : false ) );
		if (br == "ie") {
			txtarea.focus();
			var range = document.selection.createRange();
			range.moveStart ('character', -txtarea.value.length);
			strPos = range.text.length;
		} else if (br == "ff") {
			strPos = txtarea.selectionStart;
		}

		var front = (txtarea.value).substring(0, strPos);
		var back = (txtarea.value).substring(strPos, txtarea.value.length);
		txtarea.value = front + text + back;
		strPos = strPos + text.length;
		if (br == "ie") {
			txtarea.focus();
			var ieRange = document.selection.createRange();
			ieRange.moveStart ('character', -txtarea.value.length);
			ieRange.moveStart ('character', strPos);
			ieRange.moveEnd ('character', 0);
			ieRange.select();
		} else if (br == "ff") {
			txtarea.selectionStart = strPos;
			txtarea.selectionEnd = strPos;
			txtarea.focus();
		}

		txtarea.scrollTop = scrollPos;
	}
	
	
	
	function set_tag(id,st,en) // javascript
{
console.log("test");

    // obtain the object reference for the textarea>
    var txtarea = document.getElementById(id);
    // obtain the index of the first selected character
    var start = txtarea.selectionStart;
    // obtain the index of the last selected character
    var finish = txtarea.selectionEnd;
    //obtain all Text
    var allText = txtarea.value;

    // obtain the selected text
    var sel = allText.substring(start, finish);
    //append te text;
    var newText=allText.substring(0, start)+st+sel+en+allText.substring(finish, allText.length);

    console.log(newText);
if(sel!='')
{
    txtarea.value=newText;
}
    
}
	


function selectAll(source) {
    checkboxes = document.getElementsByName('id[]');
    for(var i in checkboxes)
        checkboxes[i].checked = source.checked;
}




function togl_disp(id)
{
	var my_data=document.getElementById(id).style.display;
	if(my_data=='none')
	{
		document.getElementById(id).style.display='block';
		}
	else
	{
		document.getElementById(id).style.display='none';
		}
	
	}
	
	
	function cont_disp(id)
{
	document.getElementById(id).style.display='block';
		
	}
	
	function cont_hide(id)
{
	document.getElementById(id).style.display='none';
		
	}
	
	
	function del_file()
	{
		var conf_f=confirm("Are you sure?");
	if(conf_f==true)
	{	 var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      data_refresh();
    }
  };
  xmlhttp.open("GET", baseUrl+"/index.php?Theme=default&Base=Api&Script=del_file&api=1&id="+del_id, true);
  xmlhttp.send();
	}
		
		}
		
		
		
		
		
function option_value(id,set,def_id)
	{
		if(id!='')
		{
			
		 var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(set).innerHTML =this.responseText;
    }
  };
  xmlhttp.open("GET", baseUrl+"/api_option_price/?uid="+id+"&def_id="+def_id, true);
  xmlhttp.send();
		}
		else
		{
			document.getElementById(set).innerHTML ="";
			}
	
		
		}

function search_sel(value)
{
	if(value=='1' || value=='2' || value=='3' || value=='6')
	{
		document.getElementById("sc_value_span").style.display='inline';
		document.getElementById("sel_cat_span").style.display='none';
		}
	else
	{
		if(value=='4')
	{
		document.getElementById("sc_value_span").style.display='none';
		document.getElementById("sel_cat_span").style.display='none';
		}
		else
		{
			if(value=='5')
	{
		document.getElementById("sc_value_span").style.display='none';
		document.getElementById("sel_cat_span").style.display='inline';
		}
		else
		{
			document.getElementById("sc_value_span").style.display='none';
		document.getElementById("sel_cat_span").style.display='none';
			}
			}
		}
	
	}
	
	function show_rows(value)
	{
		if(value==3)
		{
			document.getElementById("div3").style.display='none';
			document.getElementById("div4").style.display='none';
			document.getElementById("div5").style.display='';
			}
			else
			{
				document.getElementById("div3").style.display='';
			document.getElementById("div4").style.display='';
			document.getElementById("div5").style.display='none';
				}
		
		}
		
		
function cont_disp_hide(id)
{
	var opt_val1=document.getElementById("option1").value;
	var opt_val2=document.getElementById("option2").value;
	var opt_val3=document.getElementById("option3").value;
	var opt_val4=document.getElementById("option4").value;
	if(opt_val1!='' || opt_val2!='' || opt_val3!='' || opt_val4!='')
	{
		document.getElementById(id).style.display="block";
		}
	else
	{
		document.getElementById(id).style.display="none";
		
		}
	
	
	}
		
function my_confirmation(my_text)
{
	var my_conf=confirm(my_text);
	if(my_conf==true)
	{return true;}
	else
	{return false;}
	}


function my_print(elem)
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=700');

	mywindow.document.write('<html><head><title></title>');
	mywindow.document.write('<link href="<?php echo $obj->baseurl;?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">');
	mywindow.document.write('<link href="<?php echo $obj->baseurl;?>/css/style.css" rel="stylesheet" type="text/css" media="all"/>');
	mywindow.document.write('<link href="<?php echo $obj->baseurl;?>/css/font-awesome.css" rel="stylesheet">');
	mywindow.document.write('</head><body >');
	mywindow.document.write(document.getElementById(elem).innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
   mywindow.close();

    return true;
}


function sel_calc_search(value)
{
	if(value=="")
	{
		document.getElementById("s_day").style.display="none";
		document.getElementById("s_month").style.display="none";
		document.getElementById("s_year").style.display="none";
		document.getElementById("view").style.display="none";
		}
	if(value=="1")
	{
		document.getElementById("s_day").style.display="";
		document.getElementById("s_month").style.display="";
		document.getElementById("s_year").style.display="";
		document.getElementById("view").style.display="";
		}
		if(value=="2")
	{
		document.getElementById("s_day").style.display="none";
		document.getElementById("s_month").style.display="";
		document.getElementById("s_year").style.display="";
		document.getElementById("view").style.display="";
		}
		if(value=="3")
	{
		document.getElementById("s_day").style.display="none";
		document.getElementById("s_month").style.display="none";
		document.getElementById("s_year").style.display="";
		document.getElementById("view").style.display="";
		}
	}

/*Demo Product start*/

function demo_product_show()
{
	document.getElementById("pop_back").style.display="block";
	document.getElementById("pop_sub_cont").style.display="block";
	}

function demo_get_product(category_id)
{
if(category_id!='')
		{
			
		 var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		if(this.responseText=="")
		{document.getElementById("pop_product").innerHTML ='<p style="text-align:center; font-size:18px;">There are no product to view</p>';}
		else
		{document.getElementById("pop_product").innerHTML =this.responseText;}
      
    }
  };
  xmlhttp.open("GET", baseUrl+"/api_get_demo_product/?uid="+category_id, true);
  xmlhttp.send();
		}
		else
		{
			document.getElementById("pop_product").innerHTML ='';
			}	
	
}

function demo_get_product_select(product_id,select_id)
{

var demo_image=document.getElementById("demo_image"+select_id).src;
var demo_name=document.getElementById("demo_name"+select_id).innerHTML;

document.getElementById("pop_product_view").innerHTML='<div class="demo_product_frem_view"><div class="demo_image_view"><img src="'+demo_image+'" width="90%" /></div><div class="demo_name_view">'+demo_name+'</div></div><input id="demo_product_uid" type="hidden" value="'+product_id+'">';
	
	}

function demo_product_insert()
{
	var product_uid=document.getElementById("demo_product_uid").value;
	if(product_uid!='')
		{
			
		 var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		if(this.responseText!="")
		{document.getElementById("set_product").innerHTML =this.responseText;}
      
    }
  };
  xmlhttp.open("GET", baseUrl+"/api_add_demo_product/?uid="+product_uid, true);
  xmlhttp.send();
		}
		
	document.getElementById("pop_back").style.display="none";
	document.getElementById("pop_sub_cont").style.display="none";
	}

function demo_product_hide()
{
	document.getElementById("pop_back").style.display="none";
	document.getElementById("pop_sub_cont").style.display="none";
	}

function price_result(price_id,rate_id,show_id)
{
	var show_to=document.getElementById(show_id);
	var rate=document.getElementById(rate_id).value;
	var price=document.getElementById(price_id).value;
	
	if(price=="")
	{price=0;}
	
	if(rate=="")
	{rate=0;}
	
	price=parseFloat(price);
	rate=parseFloat(rate);
	

	 var discount_rate=(price+(price*(rate/100)));
	 show_to.value=discount_rate;
	
	
}


function get_state()
{
	var loc_country=document.getElementById("loc_country").value;
	if(loc_country!='')
		{
			
		 var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		if(this.responseText!="")
		{document.getElementById("loc_state_val").innerHTML =this.responseText;}
      
    }
  };
  xmlhttp.open("GET", uir_3+loc_country, true);
  xmlhttp.send();
		}

	}
	
	function get_city()
{
	var loc_state=document.getElementById("loc_state").value;
	if(loc_country!='')
		{
			
		 var xmlhttp;
  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for older browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		if(this.responseText!="")
		{document.getElementById("loc_city_val").innerHTML =this.responseText;}
      
    }
  };
  xmlhttp.open("GET", uir_4+loc_state, true);
  xmlhttp.send();
		}

	}
/*Demo Product end*/


//JS Fron Admin Panel End