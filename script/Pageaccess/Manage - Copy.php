<?php

	$MainContent.='<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Page Access</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
					<div class="row">
					<div class="col-md-3 col-sm-3 "></div>
					<div class="col-md-6 col-sm-6 ">
					
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="post" action="'.ApplicationURL("Pageaccess","Insertupdateaction").'">

                      
					  <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Type</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control" name="type">';
						  
						  $count=count($user_type_data_array);
						  for($i=0;$i<$count;$i++)
						  {
							  $value=$user_type_data_array[$i]['nib_type'];
							  if($value!='Admin'){
							 $MainContent.='<option value="'.$value.'">'.$value.'</option>'; 
							  }
							  
							  }
							  
                         $MainContent.=' </select>
                        </div>
                      </div>
					  
					  
					  <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Page</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control" name="page">';                            
						
						
						$count=count($login_base_admin_array);
							for($i=0;$i<$count;$i++)
							{
								$key=key($login_base_admin_array);
								$value=$login_base_admin_array[$key];
								next($login_base_admin_array);
								
								$MainContent.='<option value="'.$value.'">'.$key.'</option>';
							
								
							
							}
						
							reset($login_base_admin_array);
                           $MainContent.='</select>
                        </div>
                      </div>
					  
					  
                      
                    <div class="item form-group">
                        <div class="col-md-12 col-sm-12 offset-md-12 text_center">
                     
                          <button type="submit" class="btn btn-success">Add</button>
                        </div>
                      </div>

                    </form>
					
					</div>
					</div>
                  </div>
                </div>
              </div>
            </div>';
			
			$access_type_array=$user_type_data_array;
			
			for($i=0;$i<count($access_type_array);$i++)
			{
			$row_color='even';//even odd
			$user_type_data=$access_type_array[$i]['nib_type'];
			if($user_type_data!="Admin"){
			$MainContent.='<div class="row">
			<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>'.$user_type_data.'</h2>
                   
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">SN.</th>
                            <th class="column-title">Page</th>
                            <th class="column-title">Added By</th>
                            <th class="column-title">Date</th>
                            <th class="column-title">Action</th>
                          </tr>
                        </thead>
                        <tbody>';
						
						
						
						$data_result=$obj->data_get("*","tblpageaccess","nib_type='$user_type_data'","nib_page","ASC","","");
						
						for($j=0;$j<count($data_result);$j++)
						{
						
						$uid=$data_result[$j]['PageaccessUUID'];
						$sn=$j+1;
						$page_name=$data_result[$j]['nib_page'];
						$added_by=$data_result[$j]['nib_add_by'];
						$ins_date=$data_result[$j]['DateInserted'];
						
                          $MainContent.='<tr class="'.$row_color.' pointer">
                           <td class="a-center ">'.$sn.'</td>
                            <td class=" ">'.$page_name.'</td>
                            <td class=" ">'.$added_by.'</td>
                            <td class=" ">'.$ins_date.'</td>
                            <td class="last">
							<a href="'.ApplicationURL("Pageaccess","Insertupdateaction").'&uid='.$uid.'&del=yes">
							<button type="button" class="btn btn-danger">Delete</button></a>
							</td>
                          </tr>';
						  
						  if($row_color=="even")
						  {$row_color="odd";}
						  else{$row_color="even";}
						}
			
                        $MainContent.='</tbody>
                      </table>
                    </div>
				
                  </div>
                </div>
              </div>
			
			</div>';}}
?>