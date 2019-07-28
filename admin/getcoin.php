<?php
												
														$id=$_GET["coid"];
														$sql="select *from coin_detail_table p,category_table c where p.Category_id=c.Category_id and p.Category_id='$id'";
													
														$result=mysqli_query($con,$sql);
														$run=mysqli_num_rows($result);
														echo "total number of customers is".$run;				
												
												?>
												<div id="productdiv2">
												<table class="table">
														<thead>
																<tr>
																
																<th>Coin_id</th>
																<th>Coin_name</th>
																<th>Coin_price</th>
																
																		
																</tr>
														</thead>
												<?php
														while($row=mysqli_fetch_array($result))
															{
												
												?>
														<tbody>
																	<tr>
																		<td><?php echo $row['Coin_id']; ?></td>
																		<td><?php echo $row['Coin_name']; ?></td>
																		<td><?php  echo $row['Coin_price'];?></td>
																		
																	</tr>
														</tbody>
												<?php
												
													}
												?>
												</table></div>
				