<?php 
    $title = "Cart";

    require "include/header.php";
    $id_buyer = $_SESSION['id_buyer'];
    if(isset($_POST['update_update_btn']))
    {
        $update_value = $_POST['update_quantity'];
        $update_id = $_POST['update_quantity_id'];
        $update_quantity_query = mysqli_query($connect, "UPDATE cart SET qyt_brg = '$update_value' WHERE id_cart = '$update_id'");
        if($update_quantity_query)
        {
            'location:cart.php';
        };
    };

    if(isset($_GET['remove']))
    {
       $remove_id = $_GET['remove'];
       mysqli_query($connect, "DELETE FROM cart WHERE id_cart = '$remove_id'");
       'location:cart.php';
    };
?>
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- about -->
		<div class="privacy about">
			<h3>Cart</h3>
			
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
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                            $select_cart = mysqli_query($connect, "SELECT * FROM cart where status = '1' AND id_buyer = '$id_buyer'");
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
                                        <!--<td>
                                        <form action="" method="post">
                                            <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id_cart']; ?>" >
                                            <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['qyt_brg']; ?>" >
                                            <input type="submit" value="update" name="update_update_btn">
                                        </form>   
                                        </td>-->
                                        
                                        <td><?=$fetch_cart['qyt_brg'];?></td>
                                        <?php  $sub_total = $fetch_cart['harga_brg'] * $fetch_cart['qyt_brg']; ?>
                                        <td>Rp<?php echo number_format($sub_total); ?>,-</td>
                                        <td>
                                            <a href="cart.php?remove=<?php echo $fetch_cart['id_cart'];?>" onclick="return confirm('Remove item from cart?')" class="btn btn-sm btn-danger">Remove</a>
                                        </td>       
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
                                ?>
				    </tbody>
                </table>
			</div>
            
			<div class="checkout-left">	
				<div class="col-md-4 checkout-left-basket">
					<h4><a href="products.php">Continue Shopping</a></h4>
					<ul>
						<li>Grand Total <i></i> <span>Rp<?php echo number_format($grand_total); ?>,-</span></li>
					</ul>
				</div>
									<div class="checkout-right-basket">
                        
                        <?php
                        $query = mysqli_query($connect, "SELECT * FROM buyer where id_buyer = '$id_buyer'");
                        $data = mysqli_fetch_assoc($query);
                        if(mysqli_num_rows($query) > 0)
                        {
                            $no = 1;
                            do
                            {
                            ?>
				        	    <a href="checkout.php?id=<?=$data['id_buyer'];?>">Procced to checkout<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			      	
                            <?php
                            }
                            while($data = mysqli_fetch_assoc($query));
                        }
                            ?>
                    </div>
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