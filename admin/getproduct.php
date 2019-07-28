<?php
include 'include/db.php';													$id=$_GET["cid"];
														$sql="select *from product_detail_table p,pro_category_table c where p.Category_id=c.Category_id and p.Category_id='$id'";
														$result=mysqli_query($con,$sql);
														$run=mysqli_num_rows($result);
																		
														?>
												<table class="table">
														<thead>
																<tr>
																
																<th>Product_Id</th>
																<th>Product_Name</th>
																<th>Product_price</th>
																
																		
																</tr>
														</thead>
												<?php
														while($row=mysqli_fetch_array($result))
															{
												
												?>
														<tbody>
																	<tr>
																		<td><?php echo $row['Product_id']; ?></td>
																		<td><?php echo $row['Product_name']; ?></td>
																		<td><?php  echo $row['Product_price'];?></td>
																	
																	</tr>
														</tbody>
												<?php
												
													}
												?>
												</table>