	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img" style="width:100%;">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="index.php?act=login">Login Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>CREATE AN ACCOUNT</h3>
						<form class="row login_form requires-validation" action="index.php?act=signup" method="post" id="contactForm" novalidate="novalidate" >
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required>
								<!-- <div class="valid-feedback">Email field is valid!</div> -->
								<div class="invalid-feedback">Email field cannot be blank!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="fullname" placeholder="Fullname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Fullname'" required>
								<!-- <div class="valid-feedback">Username field is valid!</div> -->
								<div class="invalid-feedback">Fullname field cannot be blank!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="user" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
								<!-- <div class="valid-feedback">Username field is valid!</div> -->
								<div class="invalid-feedback">Username field cannot be blank!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="pass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
								<!-- <div class="valid-feedback">Password field is valid!</div> -->
								<div class="invalid-feedback">Password field cannot be blank!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="tel" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required minlength="5">
								<!-- <div class="valid-feedback">Phone</div> -->
								<div class="invalid-feedback">Phone field cannot be blank!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account form-check">
									<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
									<label class="form-check-label">I agree to the terms of use</label>
									<div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
									<!-- <input type="checkbox" id="f-option2" name="selector" class="form-check-input">
									<label for="f-option2" class="form-check-label">I agree to the terms of use</label> -->
								</div>
							</div>
							<div class="col-md-12 form-group form-check">
								<input type="submit" value="Register" class="primary-btn" name="dangky" id="submit"></input>
								<div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
							</div>
						</form>
						<!-- Kiểm tra tính hợp lệ -->
						<script>
							(function () {
							'use strict'
							const forms = document.querySelectorAll('.requires-validation')
							Array.from(forms)
							.forEach(function (form) {
								form.addEventListener('submit', function (event) {
								if (!form.checkValidity()) {
									event.preventDefault()
									event.stopPropagation()
								}

								form.classList.add('was-validated')
								}, false)
							})
							})()
						</script>
						<!--  -->
						<h2 class="thongbao" style="color: red;font-size:15px;"> 
							<?php
								if(isset($thongbao)&&($thongbao!="")){
									echo $thongbao;
								}
							?>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
