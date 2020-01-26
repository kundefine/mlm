<?php



			if($_SERVER['REQUEST_METHOD']=='POST' and isset($_REQUEST['button']) and $_REQUEST['button']=='update')
			{
				$table="tblpageaccess";
				$where="PageaccessID!=''";
				$obj->data_delete($table,$where);
				$uid=uniqid();
				$date=date('Y-m-d H:i:s');
				
			for($i=0;$i<count($_POST);$i++)
			{
				$key=key($_POST);
				$value=$_POST[$key];
				next($_POST);
				
				for($j=0;$j<count($value);$j++)
				{
					$myvalue=$value[$j];
				$table="tblpageaccess";
				$column="PageaccessUUID,nib_type,nib_page,DateInserted";
				$column_value="'$uid','$myvalue','$key','$date'";
				
				if($key!='button')
				{
					
					$obj->data_put($table,$column,$column_value);
					
					}
				}
				
				}
				
				
				
				}

	
			$access_type_array=$user_type_data_array;
			
			
			$MainContent.='<div class="row">
			<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Page Access</h2>
                   
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
					<form id="update" name="update" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="post" action="'.ApplicationURL("Pageaccess","Manage").'">
						</form>
                      <table class="table table-striped jambo_table">
                        <thead>
						
                          <tr class="headings"><th class="column-title">Page/User</th>';
                            //<th class="column-title">SN.</th>
							
                     for($i=0;$i<count($access_type_array);$i++)
						{
							$user_type_data=$access_type_array[$i]['nib_type'];
							$MainContent.='<th class="column-title">'.$user_type_data.'</th>';
							}
                         $MainContent.=' </tr>
                        </thead>
                        <tbody>';
						$user_count=count($access_type_array);
						reset($access_type_array);
						
						$count=count($login_base_admin_array);
							for($i=0;$i<$count;$i++)
							{
								$key=key($login_base_admin_array);
								$value=$login_base_admin_array[$key];
								next($login_base_admin_array);
								
							$MainContent.='<tr class="'.$row_color.' pointer">
                           <td class="a-center ">'.$key.'</td>';
                            $checked='';
							$disable='';
							$admin_count=0;
							for($j=0;$j<$user_count;$j++)
							{
														
								$user=$access_type_array[$j]['nib_type'];
								
								
								
								if($user=='Admin' and $admin_count==0)
								{
									$checked='checked="checked"';
									$disable='disabled="disabled"';
									$admin_count=1;
									}
									else
									{
										$checked='';
										$disable='';
										}
								
								$check_data=$obj->data_get_num("tblpageaccess","nib_type='$user' and nib_page='$value'");
								if($check_data==1)
								{$checked='checked="checked"';}
								
								

								$MainContent.='<td class=" ">
								<input form="update" type="checkbox" name="'.$value.'[]" id="checkbox" value="'.$user.'" '.$checked.' '.$disable.'/>
								</td>';
								}
							
                         $MainContent.=' </tr>';
							
							 if($row_color=="even")
						  {$row_color="odd";}
						  else{$row_color="even";}
								
							
							}
						
							reset($login_base_admin_array);
							
						
						//$data_result=$obj->data_get("*","tblpageaccess","nib_type='$user_type_data'","nib_page","ASC","","");
						
			
                        $MainContent.='</tbody>
                      </table>
					  <div class="row">
					  <div class="col-md-12 col-sm-12 text-center">
					  <button form="update" type="submit" class="btn btn-success" name="button" value="update" >Save</button>
					  
					  </div></div>
                    </div>
				
                  </div>
                </div>
              </div>
			
			</div>';
			?>