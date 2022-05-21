<?php 
    $title = "Checkout";
   
   require "include/header.php";
   
?>
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- about -->
		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>
			
			<div class="checkout-right">
					<h4>Your shopping cart contains: 
                        <span>
                        <?php echo $row_count; ?> products
                    </h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>No.</th>	
							<th>Product</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total Price</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                            $select_cart = mysqli_query($connect, "SELECT * FROM cart where status ='1'");
                            $grand_total = 0;
                            
                            $fetch_cart = mysqli_fetch_assoc($select_cart);
                            if(mysqli_num_rows($select_cart) > 0)
                            {
                                $no = 1;
                                do
                                {
                        ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><img src="<?=BASE_URL;?>assets/img_brg/<?=$fetch_cart['img_brg'];?>"></td>
                                        <td><?=$fetch_cart['nama_brg'];?></td>
                                        <td>Rp<?=number_format($fetch_cart['harga_brg']);?>,-</td>
                                        <td><?=$fetch_cart['qyt_brg'];?></td>
                                        <?php  $sub_total = $fetch_cart['harga_brg'] * $fetch_cart['qyt_brg']; ?>
                                        <td>Rp<?php echo number_format($sub_total); ?>,-</td>     
                                    </tr>
                                <?php
                                    $grand_total += $sub_total;  
                                }
                                while($fetch_cart = mysqli_fetch_assoc($select_cart));
                            }
                            else
                            {
                                echo "<tr><td colspan='7'><center>Your cart is still empty!</center></td></tr>";
                            }

							$id_buyer = $_SESSION['id_buyer'];
    if(isset($_POST['order_btn']))
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];
		$namarek = $_POST['namarek'];
		$norek = $_POST['norek'];
		$bank = $_POST['bank'];
        $tgl = date("Y-m-d H:i:s");
		$detail_query = mysqli_query($connect, "INSERT INTO transaksi (nama_buyer, alamat_buyer, telp_buyer, tgl_transaksi, 
												norek_buyer, namarek_buyer, bank_buyer, total_transaksi,id_buyer) 
												VALUES ('$nama','$alamat','$nohp', '$tgl','$norek','$namarek','$bank','$grand_total','$id_buyer')");
		$last = mysqli_query($connect, "SELECT * FROM transaksi	WHERE id_transaksi IN (SELECT MAX(id_transaksi) FROM transaksi)");
		$last_id = mysqli_fetch_assoc($last);
		$id = $last_id['id_transaksi'];
		$cart_trans = mysqli_query($connect, "UPDATE cart SET id_transaksi = '$id' WHERE id_buyer = '$id_buyer' AND status = '1'");
        if($detail_query)
        {
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."products.php'>";
        }

		$change_status = mysqli_query($connect, "UPDATE cart SET status = '2' WHERE id_buyer = '$id_buyer'");
        $cart_query = mysqli_query($connect, "SELECT * FROM cart");
        $price_total = 0;
        if(mysqli_num_rows($select_cart) > 0)
        {
            do
            {
                $product_name[] = $product_item['nama_brg'] .' ('. $product_item['qyt_brg'] .') ';
                $product_price = number_format($product_item['harga_brg'] * $product_item['qyt_brg']);
                $price_total += $product_price;
            }while($product_item = mysqli_fetch_assoc($cart_query));
        };
        $total_product = implode(', ',$product_name);
		
		if(mysqli_num_rows($select_cart) == 0)
        {
            $error = "Failed Checkout. Your cart is still empty!";
        }
		else
		{
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."products.php'>"; // ada page ttg order success gitu deh
		}
    };
                                ?>
				    </tbody>
                </table>
			</div>
			<div class="checkout-left">	
				<div class="col-md-4 checkout-left-basket">
					<h4>Your Invoice</h4>
					<ul>
						<li>Grand Total <i></i> <span>Rp<?php echo number_format($grand_total); ?>,-</span></li>
						<input type="hidden" name="grand_total" value="<?php echo $grand_total['grand_total'];?>"/>
					</ul>
				</div>
				<div class="col-md-8 address_form_agile">
					  <h4>Complete Your Shiping Address</h4>
				<form action="#" method="post" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Full name: </label>
													<input class="billing-address-name form-control" type="text" name="nama" placeholder="Full name" required="required">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Address: </label>
														     <input class="form-control" type="text" name="alamat" placeholder="Address" required="required">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Mobile number:</label>
														    <input class="form-control" type="text" name="nohp" placeholder="Mobile number" required=" ">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
											</div>
										</div>
									</section>
					  <h4>Complete Your Payment</h4>
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Name on Card: </label>
													<input class="billing-address-name form-control" type="text" name="namarek" placeholder="Full name" required="required">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Card Number: </label>
														     <input class="form-control" type="text" name="norek" placeholder="Address" required="required">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Select Bank:</label>
															<div class="section_room_pay">
																<select name="bank" class="year" required="required"><option value="">Select Bank</option>
																	<option value="MDR-BA">Mandiri</option>
																	<option value="BCA-BA">BCA</option>
																	<option value="CMB-BA">CIMB</option>
																	<option value="BNI-BA">BNI</option>
																	<option value="JBR-BA">Bank Jabar</option>
																	<option value="DNM-BA">Danamon</option>
																	<option value="BRI-BA">BRI</option>
																	<option value="PMT-BA">Permata</option>
																</select>
															</div>
														</div>
													</div>
													<div class="clear"> </div>
												</div>
											</div>
										</div>
									</section>
									<input type="submit" name="order_btn" value="Order Now!" class="button"/>

								</form>
								
									
					</div>
			
				<div class="clearfix"> </div>
				
			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<?php 
    require "include/footer.php";
?>