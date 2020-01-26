
/*
** written by Md. Ibrahim Khalil
** Date: 2019-12-29

*/

var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host;
var theme_path=baseUrl+"/theme/rupayan";
var intvl;
var sound_play=1;

function open_chat_reg()
{

document.getElementById("chat_window_icon").style.display="none";
document.getElementById("chat_data").value="1";
document.getElementById("chat_reg").style.display="block";
document.getElementById("chat_window_main").classList.remove("chat_animation_window_pop_down");
document.getElementById("chat_window_main").classList.add("chat_animation_window_pop");
document.getElementById("chat_window_main").style.display="block";
}

function chat_window_close()
{
	var chat_data=document.getElementById("chat_data").value;
	
	

	if(chat_data==1)
	{
		document.getElementById("chat_window_main").classList.remove("chat_animation_window_pop");
		document.getElementById("chat_window_main").classList.add("chat_animation_window_pop_down");
	
		document.getElementById("chat_data").value="0";
		document.getElementById("chat_reg").style.display="none";
		document.getElementById("chat_window_icon").style.display="block";
		setTimeout(function(){
		document.getElementById("chat_window_main").style.display="none";
		},999);
		
		}
		else
		{
			if(chat_data==2)
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
	{
		var jeson_data=JSON.parse(this.responseText);
		var status=jeson_data.Data[0].Status;
		var status_message=jeson_data.Data[0].Message;
	
		if(status==1)
		{
			
		clearInterval(intvl);	
			
		document.getElementById("chat_data").value="1";
		document.getElementById("chat_reg").style.display="block";
		document.getElementById("chat_header_title").innerHTML="Chat With Rupayan Group";
		document.getElementById("chat_header_image").style.display="none";
		document.getElementById("chat_conv_data").style.display="none";
		document.getElementById("chat_input_message").style.display="none";
		document.getElementById("chat_message_send_button").style.display="none";
		document.getElementById("chat_data_receive").value="0";
		document.getElementById("chat_data_update").value="0";
		document.getElementById("chat_header_image").src = theme_path+"/images/loading.gif";
			
			}
		
	
	}
    }};
	
  xmlhttp.open("POST",baseUrl+"/api_chat_close", true);
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("ac=1");
  }}
	}

function chat_reg()
{
	var chat_user_name=document.getElementById("chat_name").value;
	var chat_user_mail=document.getElementById("chat_mail").value;
	var chat_user_phone=document.getElementById("chat_phone").value;
	
	if(chat_user_name=="")
	{
		alert("Please set your name");
		document.getElementById("chat_name").focus();}
	else if(chat_user_phone=="")
	{
		alert("Please set your phone");
		document.getElementById("chat_phone").focus();
		
		}
	else
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
	{
		var jeson_data=JSON.parse(this.responseText);
		var status=jeson_data.Data[0].Status;
		var status_message=jeson_data.Data[0].Message;
	
		if(status==1)
		{
		document.getElementById("chat_reg").style.display="none";
		document.getElementById("chat_header_title").innerHTML="Waiting For Response";
		document.getElementById("chat_header_image").style.display="block";
		document.getElementById("chat_conv_data").style.display="block";
		document.getElementById("chat_data").value="2";
		document.getElementById("chat_header_image").src = theme_path+"/images/loading.gif";
		intvl=setInterval(recive_message_data,2000);
		}
		else
		{alert(status_message);}
		
	
	}
    }};
	
  xmlhttp.open("POST",baseUrl+"/api_chat_reg", true);
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("name="+chat_user_name+"&phone="+chat_user_phone+"&mail="+chat_user_mail+"&ac=1");
  	
}
}


function recive_message_data()
{
	
	var chat_status_data=document.getElementById("chat_data").value;
	var chat_receive_status_data=document.getElementById("chat_data_receive").value;
	var chat_receive_status_data_update=document.getElementById("chat_data_update").value;
	
	if(chat_status_data==2)
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
	{
		var jeson_data=JSON.parse(this.responseText);
		var status=jeson_data.Status[0].Status;
		var status_message=jeson_data.Status[0].Message;
		
		if(status==0)
		{
		clearInterval(intvl);
		document.getElementById("chat_data_receive").value="0";
		document.getElementById("chat_data_update").value="0";
		document.getElementById("chat_data").value="1";
		document.getElementById("chat_reg").style.display="block";
		document.getElementById("chat_header_title").innerHTML="Chat With Rupayan Group";
		document.getElementById("chat_header_image").style.display="none";
		document.getElementById("chat_conv_data").style.display="none";
		document.getElementById("chat_input_message").style.display="none";
		document.getElementById("chat_message_send_button").style.display="none";
		document.getElementById("chat_header_image").src = theme_path+"/images/loading.gif";
		}
		else if(status==1)
		{
			
			document.getElementById("chat_header_title").innerHTML="Waiting For Response";
			document.getElementById("chat_data_receive").value="1";
			document.getElementById("chat_data_update").value="0";
			document.getElementById("chat_input_message").style.display="none";
			document.getElementById("chat_conv_data").style.display="block";
			document.getElementById("chat_header_image").src = theme_path+"/images/loading.gif";	
			document.getElementById("chat_message_send_button").style.display="none";
			}
		else if(status==2)
		{
			
			if(chat_receive_status_data_update==0)
			{
			var chat_receive_by_name=jeson_data.Receive[0].Name;
			var chat_receive_by_image=jeson_data.Receive[0].Image;
			document.getElementById("chat_data_receive").value="1";
			document.getElementById("chat_data_update").value="1";
			document.getElementById("chat_header_image").src = "upload/"+chat_receive_by_image;
			document.getElementById("chat_header_title").innerHTML=chat_receive_by_name;
			document.getElementById("chat_input_message").style.display="block";
			document.getElementById("chat_conv_data").style.display="block";
			document.getElementById("chat_message_send_button").style.display="block";
			var audio = new Audio("upload/sound/when.ogg");
						audio.play();
			
			
			
			}
				
				if(chat_receive_status_data_update==1)
				{
				var message_data=jeson_data.Message;
				var i;
				
				for(i=0;i<message_data.length;i++)
				{
					
					
					
		var img_url="upload/"+jeson_data.Receive[0].Image;
		var text_message=message_data[i].Message;
		var text_node=document.createTextNode(text_message);
		
		var node=document.createElement("DIV");
		var node1=document.createElement("IMG");
		var node2=document.createElement("SPAN");
		
		node.setAttribute("class","chat_user_text_receive_content");
		node1.setAttribute("src", img_url);
		node1.setAttribute("class","chat_user_image_receive");
		node2.setAttribute("class","chat_user_text_receive");
		node2.appendChild(text_node);
		node.appendChild(node1);
		node.appendChild(node2);
		document.getElementById("chat_conv_data").appendChild(node);
		document.getElementById("chat_conv_data").scrollTop =  document.getElementById("chat_conv_data").scrollHeight;
				}
				if(message_data.length>0 && sound_play==1)
				{
					var audio = new Audio("upload/sound/when.ogg");
						audio.play();
					}
				
				}


			
			}


}
    }};
	
  xmlhttp.open("POST",baseUrl+"/api_chat_receive", true);
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("ac=1");
		
		
		
		}
		
		

	
	}




function chat_send_message()
{
var send_message=document.getElementById("chat_input_message").value;

if(send_message!="")
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
	{
		var jeson_data=JSON.parse(this.responseText);
		var status=jeson_data.Status[0].Status;
		
		if(status==1)
		{
			
		var img_url=theme_path+"/images/chat_user.png";
		var text_message=jeson_data.Data[0].Message;
		var text_node=document.createTextNode(text_message);
		
		var node=document.createElement("DIV");
		var node1=document.createElement("IMG");
		var node2=document.createElement("SPAN");
		
		node.setAttribute("class","chat_user_text_send_content");
		node1.setAttribute("src", img_url);
		node1.setAttribute("class","chat_user_image_send");
		node2.setAttribute("class","chat_user_text_send");
		node2.appendChild(text_node);
		node.appendChild(node1);
		node.appendChild(node2);
		document.getElementById("chat_conv_data").appendChild(node);
		document.getElementById("chat_input_message").value="";
		document.getElementById("chat_conv_data").scrollTop =  document.getElementById("chat_conv_data").scrollHeight;
			
			}
		
	}
	
	
	}};
  
  
  	
xmlhttp.open("POST",baseUrl+"/api_chat_send", true);
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("message="+send_message+"&ac=1");	
	
}

}
function chat_sound()
{
	if(sound_play==1)
	{sound_play=0;
	document.getElementById("chat_sound").classList.remove("fa-volume-up");
	document.getElementById("chat_sound").classList.add("fa-volume-off");
	
	}
	else
	{sound_play=1;
	
	document.getElementById("chat_sound").classList.remove("fa-volume-off");
	document.getElementById("chat_sound").classList.add("fa-volume-up");
	}
	
	}
	
	
	
function reconnect_chat()
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
	{
		var jeson_data=JSON.parse(this.responseText);
		var status=jeson_data.Status[0].Status;
		var status_message=jeson_data.Status[0].Message;
		
		
		if(status==2)
		{
			
			
			
			
			var chat_receive_by_name=jeson_data.Receive[0].Name;
			var chat_receive_by_image=jeson_data.Receive[0].Image;
			document.getElementById("chat_data_receive").value="1";
			document.getElementById("chat_data_update").value="1";
			
			document.getElementById("chat_window_icon").style.display="none";
			document.getElementById("chat_reg").style.display="none";
			document.getElementById("chat_conv_data").style.display="block";
			document.getElementById("chat_data").value="2";
			
			document.getElementById("chat_header_image").src = "upload/"+chat_receive_by_image;
			document.getElementById("chat_header_image").style.display="block";
			document.getElementById("chat_header_title").innerHTML=chat_receive_by_name;
			document.getElementById("chat_input_message").style.display="block";
			document.getElementById("chat_conv_data").style.display="block";
			document.getElementById("chat_message_send_button").style.display="block";
			document.getElementById("chat_window_main").style.display="block";
			
			
			
			var message_data=jeson_data.Message;
				var i;
				
				for(i=0;i<message_data.length;i++)
				{
					
					var mas_type=message_data[i].Type;
		
		if(mas_type=="to")
		{			
		var img_url="upload/"+jeson_data.Receive[0].Image;
		var text_message=message_data[i].Message;
		var text_node=document.createTextNode(text_message);
		
		var node=document.createElement("DIV");
		var node1=document.createElement("IMG");
		var node2=document.createElement("SPAN");
		
		node.setAttribute("class","chat_user_text_receive_content");
		node1.setAttribute("src", img_url);
		node1.setAttribute("class","chat_user_image_receive");
		node2.setAttribute("class","chat_user_text_receive");
		node2.appendChild(text_node);
		node.appendChild(node1);
		node.appendChild(node2);
		document.getElementById("chat_conv_data").appendChild(node);
		}
		else
		{
			
		
		var img_url=theme_path+"/images/chat_user.png";
		var text_message=message_data[i].Message;
		var text_node=document.createTextNode(text_message);
		
		var node=document.createElement("DIV");
		var node1=document.createElement("IMG");
		var node2=document.createElement("SPAN");
		
		node.setAttribute("class","chat_user_text_send_content");
		node1.setAttribute("src", img_url);
		node1.setAttribute("class","chat_user_image_send");
		node2.setAttribute("class","chat_user_text_send");
		node2.appendChild(text_node);
		node.appendChild(node1);
		node.appendChild(node2);
		document.getElementById("chat_conv_data").appendChild(node);	
		
		
		}
		
		
		
		
		document.getElementById("chat_conv_data").scrollTop =  document.getElementById("chat_conv_data").scrollHeight;
		
		
				}


			
			intvl=setInterval(recive_message_data,2000);
			}

		
	}}};
    
  
  xmlhttp.open("POST",baseUrl+"/api_chat_reconnect", true);
   xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send("ac=1");
	
	}

	reconnect_chat();