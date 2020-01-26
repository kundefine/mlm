<?php

if($user_login==1 and $user_type_condition==1)
{
		$AfterMainContent.='
			</div>
		<!-- footer content -->
        <footer>
          <div class="pull-right">
            Developed By <a href="https://www.nibizsoft.com/" style="font-weight:bolder;"> N.I Biz Soft</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
		      </div>
    </div>

    <!-- jQuery -->
    <script src="'.$theme_path.'/js/jquery_003.js"></script>
    <!-- Bootstrap -->
    <script src="'.$theme_path.'/js/bootstrap.js"></script>
    <!-- FastClick -->
    <script src="'.$theme_path.'/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="'.$theme_path.'/js/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="'.$theme_path.'/js/bootstrap-progressbar.js"></script>
    <!-- iCheck -->
    <script src="'.$theme_path.'/js/icheck.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="'.$theme_path.'/js/moment.js"></script>
	<!-- starrr -->
    <script src="'.$theme_path.'/js/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="'.$theme_path.'/js/bootstrap-wysiwyg.js"></script>
	<!-- starrr -->
    <script src="'.$theme_path.'/js/jquery_002.js"></script>
	<!-- starrr -->
    <script src="'.$theme_path.'/js/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="'.$theme_path.'/js/jquery_004.js"></script>
    <!-- Switchery -->
    <script src="'.$theme_path.'/js/switchery.js"></script>
    <!-- Select2 -->
    <script src="'.$theme_path.'/js/select2.js"></script>
    <!-- Parsley -->
    <script src="'.$theme_path.'/js/parsley.js"></script>
    <!-- Autosize -->
    <script src="'.$theme_path.'/js/autosize.js"></script>
    <!-- jQuery autocomplete -->
    <script src="'.$theme_path.'/js/jquery.js"></script>
    <!-- starrr -->
    <script src="'.$theme_path.'/js/starrr.js"></script>
	<!-- starrr -->
	<script src="'.$theme_path.'/js/Chart.min.js"></script>
	<!-- starrr -->
	<script src="'.$theme_path.'/js/echarts.min.js"></script>
	<!-- starrr -->
	<script src="'.$theme_path.'/js/world.js"></script>
	<!-- starrr -->
	
    <!-- Custom Theme Scripts -->
    <script src="'.$theme_path.'/js/custom.js"></script>';
	

if(isset($advancetextarea) and 1==$advancetextarea)
{

$AfterMainContent.='

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=xub7886ujsju4acr147yayg15g9haup3oqjvsie7vmws8lts"></script>
		<script>
			tinymce.init({
				selector: "textarea",
				theme: "modern",
				width: 635,
				height: 300,
				plugins: [
					 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
					 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					 "save table contextmenu directionality emoticons template paste textcolor"
			   ],
			   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | codesample code", 
			   style_formats: [
					{title: \'Bold text\', inline: \'b\'},
					{title: \'Red text\', inline: \'span\', styles: {color: \'#ff0000\'}},
					{title: \'Red header\', block: \'h1\', styles: {color: \'#ff0000\'}},
					{title: \'Example 1\', inline: \'span\', classes: \'example1\'},
					{title: \'Example 2\', inline: \'span\', classes: \'example2\'},
					{title: \'Table styles\'},
					{title: \'Table row 1\', selector: \'tr\', classes: \'tablerow1\'}
				]
			}); 
			
		</script>';
	
	}
}
$AfterMainContent.='</body>
</html>';

?>



 


