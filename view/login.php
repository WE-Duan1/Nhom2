	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login</a>
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
							<a class="primary-btn" href="index.php?act=signup">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<?php

							if(isset($_SESSION['user'])){
								extract($_SESSION['user']);
						?>
						
							<!-- <div class="col-md-12 form-group">
								Xin chào <?=$user?>
							</div>
							<div class="col-md-12 form-group">
								<a href="">Quên mật khẩu</a>
							</div>
							<div class="col-md-12 form-group">
								<a href="">Cập nhập tài khoản</a>
							</div>
							<div class="col-md-12 form-group">
								<a href="index.php?act=thoat">Thoát</a>
							</div> -->
						<?php

							}else{


						?>
						<form class="row login_form requires-validation" action="index.php?act=login" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="user" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
								<div class="invalid-feedback">Username field cannot be blank!</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="pass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
								<div class="invalid-feedback">Password field cannot be blank!</div>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account form-check">
                                    <div class="col-md-12 form-group">
									    <input type="checkbox" id="invalidCheck"  class="form-check-input" required>
									    <label for="f-option2" class="form-check-label">Keep me logged in</label>
                                        <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                                    </div>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="submit" value="submit" class="primary-btn" name="dangnhap" id="submit"></input>
								<a href="#">Forgot Password?</a>
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
						<?php }?>
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
