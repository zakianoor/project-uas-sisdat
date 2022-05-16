<?php 
    $title = "Payment";

    require "include/header.php";
?>
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- payment -->
		<div class="privacy about">
			<h3>Pay<span>ment</span></h3>
			
	         <div class="checkout-right">
				<!--Horizontal Tab-->
        <div id="parentHorizontalTab">
                <div>
                    <form action="#" method="post" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Name on Card</label>
													<input class="billing-address-name form-control" type="text" name="namarek" placeholder="John Smith"  required="required">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Card Number</label>
															<input class="number credit-card-number form-control" type="text" name="norek"  required="required"
																		  inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Select Bank</label>
															<div class="section_room_pay">
																<select class="year"><option value="">Select Bank</option>
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
											<button class="submit"><span>Pay Now!</span></button>
										</div>
									</section>
								</form>
                </div>
            </div>
        </div>
	
	<!--Plug-in Initialisation-->

	<!-- // Pay -->
	
			 </div>

		</div>
<!-- //payment -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<?php 
    require "include/footer.php";
?>