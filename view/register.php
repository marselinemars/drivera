<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Drivera | register </title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="view/resources/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="view/resources/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="view/resources/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="view/resources/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="view/resources/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="view/resources/src/plugins/jquery-steps/jquery.steps.css"
		/>
		<link rel="stylesheet" type="text/css" href="view/resources/vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
		<style>

/* CSS style for the card */
.card {
  width: 250px;
  height: 200px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  margin: 30px;
  display: inline-block;
  box-shadow: 0px 0px 5px #ccc;
}

/* CSS style for the card title */
.card-title {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 10px;
}


/* CSS style for the select button */
.card-select-btn {
  font-size: 14px;
  padding-top: 12px;
  margin-top: 39px;
}
</style>

	</head>

	<body class="login-page">
		<div class="login-header box-shadow">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="brand-logo">
					<a href="login.html">
						<img src="view/resources/logo.png" width="110" height ="290" alt=""  />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="login.html">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div
			class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div style="width:100%;">
						<img src="view/resources/vendors/images/coworking-space-3_2 (1).png" alt="" />
					</div>
					
					<div style="width:100%;" >
						<div style="width:100%;" class=" bg-white box-shadow border-radius-10">
							<div style="padding:20px;" >
								<form action="index.php?action=do_register" id=owner_credentials method="post">
									<h5>Basic Account Credentials</h5>
									<br>
									<section >
										<div class="form-wrap max-width-600 " >
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Email Address*</label
												>
												<div class="col-sm-8">
													<input type="email" name ="email" class="form-control" />
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Password*</label>
												<div class="col-sm-8">
													<input type="password" name="password" class="form-control" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Confirm Password*</label
												>
												<div class="col-sm-8">
													<input type="password" class="form-control" />
												</div>
											</div>
										</div>
									</section>
									<!-- Step 2 -->
									<h5>Owner Personal Information</h5>
									<br>
									<section>
										<div class="form-wrap max-width-600 ">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>First Name*</label
												>
												<div class="col-sm-8">
													<input type="text" name="fname" class="form-control" />
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Last Name*</label
												>
												<div class="col-sm-8">
													<input type="text" name="lname" class="form-control" />
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>ID Number*</label
												>
												<div class="col-sm-8">
													<input type="number" name="id" nameclass="form-control" />
												</div>
											</div>
											<div class="form-group row align-items-center">
												<label class="col-sm-4 col-form-label">Gender*</label>
												<div class="col-sm-8">
													<div
														class="custom-control custom-radio custom-control-inline pb-0"
													>
														<input
															type="radio"
															id="male"
															name="gender"
															class="custom-control-input"
															value="male"
														/>
														<label class="custom-control-label" for="male"
															>Male</label
														>
													</div>
													<div
														class="custom-control custom-radio custom-control-inline pb-0"
													>
														<input
															type="radio"
															id="female"
															name="gender"
															class="custom-control-input"
															value="female"
														/>
														<label class="custom-control-label" for="female"
															>Female</label
														>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label>State </label>
												<br> <br> 
												<select
													class="selectpicker form-control form-control-lg"
													data-style="btn-outline-secondary btn-lg"
													title="Not Chosen"
													name="state"
												>
												<option value="1">1- Adrar </option>
												<option value="1">2- Chlef </option>
												<option value="1" >3- Laghouat</option>
												<option value="1">4- Oum-El-Bouaghi</option>
												<option value="1">5- Batna </option>
												<option value="1">6- Béjaïa</option>
												<option value="1">7- Biskra</option>
												<option value="1">8- Béchar </option>
												<option value="1">9- Blida</option>
												<option value="1">10- Bouira</option>
												<option value="1">11- Tamanrasset </option>
												<option value="1">12- Tébessa	</option>
												<option value="1">13- Tlemcen </option>
												<option value="1">14- Tiaret</option>
												<option value="1">15- Tizi-Ouzou </option>
												<option value="1">16- Alger </option>
												<option value="1">17- Djelfa</option>
												<option value="1">18- Jijel</option>
												<option value="1">19- Sétif</option>
												<option value="1">20- Saïda</option>
												<option value="1">21- Skikda</option>
												<option value="1">22- Sidi Bel Abbès</option>
												<option value="1">23- Annaba</option>
												<option value="1">24- Guelma</option>
												<option value="1">25- Constantine</option>
												<option value="1">26- Médéa </option>
												<option value="1">27- Mostaganem</option>
												<option value="1">28- M’sila </option>
												<option value="1">29- Mascara</option>
												<option value="1">30- Ouargla</option>
												<option value="1">31- Oran</option>
												<option value="1">32- El Bayadh</option>
												<option value="1">33- Illizi</option>
												<option value="1">34- Bordj Bou Arreridj</option>
												<option value="1">35- Boumerdès</option>
												<option value="1">36- El-Tarf</option>
												<option value="1">37- Tindouf </option>
												<option value="1">38- Tissemsilt </option>
												<option value="1" >39- El-Oued</option>
												<option value="1">40- Khenchela</option>
												<option value="1">41- Souk-Ahras</option>
												<option value="1">42- Tipaza</option>
												<option value="1">43- Mila</option>
												<option value="1">44- Aïn-Defla</option>
												<option value="1">45- Naâma</option>
												<option value="1">46- Aïn-Témouchent</option>
												<option value="1">47- Ghardaïa</option>
												<option value="1">48- Relizane</option>
												<option value="1">49- El M'Ghair</option>
												<option value="1">50- El Meniaa</option>
												<option value="1">51- Ouled Djellal</option>
												<option value="1">52- Bordj Badji Mokhtar</option>
												<option value="1">53- Béni Abbès</option>
												<option value="1">54- Timimoun</option>
												<option value="1">55- Touggourt</option>
												<option value="1">56- Djanet</option>
												<option value="1">57- In Salah</option>
												<option value="1">58- In Guezzam</option>
												</select>
											</div>

											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Profile image</label>
												<div class="col-sm-8">
													<div class="custom-file">
														<input type="file" class="custom-file-input" name="profileimage" id="business-license-input" accept="image/*">
														<label class="custom-file-label" for="business-license-input">Choose file</label>
													</div>
												</div>
											</div>
											
										</div>
									</section>
									<!-- Step 3 -->
								    <h5>Driving School Information</h5>
									<br>
									<section>
										<div class="form-wrap max-width-600 ">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>School's Name*</label
												>
												<div class="col-sm-8">
													<input type="text" name="dname" class="form-control" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Fiscal Identification Number*</label
												>
												<div class="col-sm-8">
													<input type="number" name="fid" class="form-control" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Owner's Name*</label
												>
												<div class="col-sm-8">
													<input type="text" name="oname" class="form-control" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Number of monitors</label
												>
												<div class="col-sm-8">
													<input type="number" name="nm" class="form-control" />
												</div>
											</div>

											<div class="form-group row">
												<label class="col-sm-4 col-form-label"
													>Number of vehicles</label
												>
												<div class="col-sm-8">
													<input type="number" name="nv" class="form-control" />
												</div>
											</div>
											
											
											
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Categories</label>
												<div class="col-sm-8">
													<input type="number" name="nc" class="form-control" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Full Adress</label>
												<div class="col-sm-8">
													<input type="text" name="address" class="form-control" />
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Business License</label>
												<div class="col-sm-8">
													<div class="custom-file">
														<input type="file" class="custom-file-input" name="license" id="business-license-input" accept="image/*">
														<label class="custom-file-label" for="business-license-input">Choose file</label>
													</div>
												</div>
											</div>
										</div>
									</section>
									<!-- Step 3 -->
									
									<!-- Step 4 -->
									

									<br>
									<?php if (isset($vars['error_message'])){ ?><b style="color:gray;"><?php echo $vars['error_message'] ?></b> <?php } ?>

									<br>

									<button  for ="owner_credentials" class="form-wrap max-width-600" style=" margin-top:50px;position:relative;left:10%;" type ="submit">submit</button>


								</form>


							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		


		

		<!-- js -->
		<script src="view/resources/vendors/scripts/core.js"></script>
		<script src="view/resources/vendors/scripts/script.min.js"></script>
		<script src="view/resources/vendors/scripts/process.js"></script>
		<script src="view/resources/vendors/scripts/layout-settings.js"></script>
		<script src="view/resources/src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="view/resources/vendors/scripts/steps-setting.js"></script>
		<!-- Google Tag Manager (noscript) -->
		
	</body>
</html>
