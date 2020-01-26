<?

        $loadCustomerFooter = '';
        $defaultFooter = '
        <script src="./theme/default/bootstrap/bootstrap/js/bootstrap.min.js"></script>
        <script src="./theme/default/bootstrap/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="./theme/default/bootstrap/assets/scripts.js"></script>
        <script src="./theme/default/bootstrap/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="./theme/default/bootstrap/assets/DT_bootstrap.js"></script>
        ';

        if(isset($_GET['ActionNewCustomer']) && $_GET['ActionNewCustomer'] == 1) {
            $loadCustomerFooter = '
            <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
            
            
            <script src="./theme/default/js/main.js"></script>
            <script src="./theme/default/js/validate.js"></script>
            <script src="./theme/default//js/upload.js"></script>
            
            ';

            $defaultFooter = '';
        }


if(isset($advancetextarea) and 1==$advancetextarea)
{

$MainContent.='

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

if($api=0)
{
$MainContent.='
									
				</div>
            </div>
        </div>
        <!--/.fluid-container-->
        
        '. $defaultFooter .'
        
        '. $loadCustomerFooter;
}
     
		
		
		$MainContent.='<script type="text/javascript" src="./theme/default/js/Custom.js"></script>

	</body>
</html>

';



?>