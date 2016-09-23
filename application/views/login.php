<!-- Login Section -->
<section id="login">
	<!-- <div class="container"> -->
		<div class="row">
		 	<div class="col-lg-12 text-center">
		 		<h2 class="section-heading">ลงชื่อเข้าใช้ระบบ</h2>
		 		 <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
		 	</div>
		 </div>
		<div class="row">
			<div class="col-lg-12">
				<?php echo form_open('authen/checkLogin','name="sentMessage" id="contactForm1" novalidate');?>
				<!-- <form name="sentMessage" id="contactForm1" novalidate> -->
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="email" class="form-control input-lg " placeholder="Your Email *" name="loginEmail" id="email" required data-validation-required-message="Please enter your email address." autofocus>
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-lg" placeholder="Password *" id="loginPassword" name="loginPassword" required data-validation-required-message="Please enter your password.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<!-- <div class="clearfix"></div> -->
					<div class="col-lg-12 text-center">
						<div id="success"></div>
						<button type="submit" name="loginSubmit" class="btn btn-xl">ตกลง</button>
					</div>
				</div>
				<!-- </form> -->
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</section>