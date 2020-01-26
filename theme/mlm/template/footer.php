<?php
$AfterMainContent.='<footer>

			<div class="main_footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="about_estate">
								<a href="index-1.html"><img src="'.$theme_path.'/images/skin/logo.png" alt="logo" id="fLogo"></a>
								<p>Rupayan Group has been dedicated <br>
								to doing business differently and innovatively.<br>
								Our diverse businesses span from real estate<br>
								development, hotels, garments, shippping and much more.<span></span>
								</p>


							</div> <!-- End .about_estate -->
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="contact_info">
								<div class="footer_title">
									<h4>Contact Info</h4>
								</div>

								<ul>
									<li> Address: RUPAYAN CENTER, 72, Mohakhali, C/A, Dhaka-1212.</li>
									<li><a href="#" class="tran3s">Phone: (88) 02 9842526</a></li>
									<li><a href="#" class="tran3s">Email: info@rupayangroup.com</a></li>
									<li><a href="#" class="tran3s">Web: rupayangroup.com</a></li>
									
								</ul>

							</div> <!-- End .contact_info -->
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="contact_info">
								<div class="footer_title">
									<h4>Social Info</h4>
								</div>
							</div> <!-- End .contact_info -->
							<div class="about_estate">
								<ul class="icon_footer">
									<li class="border_round tran3s tooltip" title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="border_round tran3s tooltip" title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="border_round tran3s tooltip" title="Google Plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="border_round tran3s tooltip" title="Linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li class="border_round tran3s tooltip" title="Vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
								</ul> <!-- End .icon_header -->

							</div> <!-- End .about_estate -->
						</div>

					

					</div> <!-- End .row -->
				</div> <!-- End .container -->
			</div> <!-- End .main_footer -->

		</footer>




		<!-- End Footer ______________________________________ -->
		
		
		
		
		<!-- Start Chat ______________________________________ -->
		
		
		
		
<div id="chat_window_icon" class="chat_window_icon" style="display:block" onclick="open_chat_reg()"><i class="fa fa-comments"></i></div>




<div id="chat_window_main" class="chat_window_main chat_animation_window_pop" style="display:none;">
<div id="chat_window_header" class="chat_window_header"><img id="chat_header_image"src="" class="chat_head_image" style="display:none;"><span id="chat_header_title" class="chat_head_title" style="display:block;">Chat With Rupayan Group</span><i class="chat_close fa fa-times-circle" onclick="chat_window_close();"></i><i id="chat_sound" class="chat_sound fa fa-volume-up" onclick="chat_sound();"></i></div>
<div id="chat_window_body" class="chat_window_body">


<div id="chat_reg" class="chat_reg" style="display:none">
<div class="chat_reg_head">Please input your information<br>and start chat</div>
<br />
  <p class="chat_reg_name_fild"><input class="chat_input_info" id="chat_name" type="text" placeholder="Name"></p>
 
 <p class="chat_reg_name_fild"><input class="chat_input_info" id="chat_phone" type="text" placeholder="Phone"></p>
<p class="chat_reg_name_fild"><input class="chat_input_info" id="chat_mail" type="text" placeholder="Mail"></p>
<p class="chat_reg_button"><button class="chat_info_button" type="button" onclick="chat_reg();" >Start Chat</button></p>
</div>

<div id="chat_conv_data" class="chat_conv_data" style="display:none">
<div class="chat_reg_head">

Please wite untile our customer service resposce you.<br>
You can contact with us by contact<br> form from here<a href="#"> Contact Page</a>
</div>
<br /><br>
</div>





</div>

<div id="chat_window_footer" class="chat_window_footer">
<input class="chat_input_message" id="chat_input_message" type="text" style="display:none;" onkeypress="if(event.key === \'Enter\'){chat_send_message();}"/> <button id="chat_message_send_button" type="button" class="chat_send_button" style="display:none;" onClick="chat_send_message();"><i class="fa fa-paper-plane"></i></button>
<input id="chat_data" type="hidden" value="0"  />
<input id="chat_data_receive" type="hidden" value="0"  />
<input id="chat_data_update" type="hidden" value="0"  />
</div>
</div>
		
		
		
		<!-- End Chat ______________________________________ -->



		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="'.$theme_path.'/js/jquery-2.1.4.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="'.$theme_path.'/js/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->

		<!-- Style-switcher  -->
		<script type="text/javascript" src="'.$theme_path.'/js/jQuery.style.switcher.min.js"></script>

		<!-- Google map js -->
		<script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
		<script src="'.$theme_path.'/js/gmap.js"></script>


		<!-- Tooltip -->
		<script type="text/javascript" src="'.$theme_path.'/js/jquery.tooltipster.min.js"></script>

		<!-- ui js -->
		<script type="text/javascript" src="'.$theme_path.'/js/jquery-ui.min.js"></script>

		<!-- Fancybox js -->
		<script type="text/javascript" src="'.$theme_path.'/js/jquery.fancybox.pack.js"></script>

		<!-- owl.carousel -->
		<script type="text/javascript" src="'.$theme_path.'/js/owl.carousel.min.js"></script>		

		<!-- Language Switcher -->
		<script type="text/javascript" src="'.$theme_path.'/js/jquery.polyglot.language.switcher.js"></script>

		

		<!-- revolution -->
		<script src="'.$theme_path.'/js/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="'.$theme_path.'/js/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="'.$theme_path.'/js/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="'.$theme_path.'/js/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="'.$theme_path.'/js/revolution/revolution.extension.navigation.min.js"></script>



		<!-- Main js -->
		<script src="'.$theme_path.'/js/map-script.js"></script>
		<script type="text/javascript" src="'.$theme_path.'/js/main.js"></script>
		<script type="text/javascript" src="'.$theme_path.'/js/ik_chat_front.js"></script>

	</div> <!-- End .boxed_wrapper -->

	</body>
</html>';


?>