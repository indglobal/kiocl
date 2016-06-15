<table class="table table-bordered" id="dataTables-example">
					<tr>
						<td class="form-inline"> 
							<label> Unit : </label>
                                                        	<select  name="course_id" id="course_id" class="form-control input-sm" value="<?php echo set_value('course_id'); ?>">												<option value="Select unit_id">Select Unit</option>
												<?php
															foreach($query3 as $unit){
																echo '<option value="'.$unit->units_id.'">'.$unit->units_name.'</option>';
															}?>	
											</select>
							
						</td> 
						
						<td class="form-inline"> 
							<label> From Due Date : </label>
							<input type="text" id="datepicker" />
						</td>
						<td class="form-inline"> 
							<label> To Due Date : </label>
							<input type="text" id="datepicker1" />
						</td>
					</tr>
				</table>
				</div>
			<div class="tableEven">
				<table class="table table-bordered" id="dataTables-example">
 					<thead class="tableBackground">
 						<th>SL NO</th>
 						<th>Tender / EOI / Corrigendum </th>
 						<th>Date</th>
 						<th>Title</th>
 						<th>Due Date</th>
                                                 <th>Due Time</th>
 						<th>Location</th>
 						<th>Download</th>
 					</thead>
 					
 					<?php 
                                    foreach ($query1  as $tender)
				{
						
			         ?>
                                 <tr>
 					<tr id="hideTabelRowButton" style="text-align: left;">
 						<td><?php echo $tender->tender_id;?></td>
 						<td><?php echo $tender->tendor_code;?></td>
 						<td><?php echo $tender->tender_date; ?></td>
 						<td><?php echo $tender->tender_name ?></td>
 						<td><?php echo $tender->tender_due_date ?></td>
                                                 <td><?php echo $tender->tender_due_time ?></td>
 						<td><?php echo $tender->units_name;?></td>
 						<td><a href="<?php echo base_url().$tender->tender_path; ?>">Download</a></td>
 					</tr>
 					
 					
 					
 					<?php 
 					
 					if($tender->corrigendum_added=='1')
 					{
 					
                                    foreach ($query2  as $cor)
				{
						
			         ?>
 					<tr id="hideTabelRow">
 						<td>cor<?php echo $cor->corrigendum_id;?></td>
 						<td><?php echo $cor->corrigendum_code;?></td>
 						<td><?php echo $cor->corrigendum_date;?></td>
 						<td><?php echo $cor->tender_name ?></td>
 						<td></td>
                                                <td></td>

 						<td><?php echo $cor->units_name;?></td>
 						<td><a href="<?php echo base_url().$cor->tender_path; ?>">Download</a></td>
 					</tr>
 					<?php
 					 
 					}
 					}
 					?>
 					<?php } ?>
				</table>
