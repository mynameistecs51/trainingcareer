
<!-- regis Section Register -->
<section id="regis" class="well">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">สมัครสมาชิก</h2>
				<!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
			</div>
		</div>
		<div class="row ">
			<div class="col-sm-12">
				<?php echo form_open('authen/regis','name="register" novalidate');?>
				<!-- <form name="register" id="register" novalidate> -->
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="email" class="form-control input-lg " placeholder="Your Email *" id="regisEmail" name="regisEmail" required data-validation-required-message="กรุณากรอก Email.">
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-lg" placeholder="Password *" id="regisPassword" name="regisPassword" required data-validation-required-message="กรุณากรอกรหัสผ่าน.">
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="ชื่อ *" id="regisName" name="regisName" required data-validation-required-message="กรุณากรอกชื่อ.">
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="นามสกุล *" id="regisLastName" name="regisLasname" required data-validation-required-message="กรุณากรอกนามสกุล.">
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<input type="tel" class="form-control input-lg" placeholder=" เบอร์โทรศัพท์ *" id="regisPhone" name="regisPhone" required data-validation-required-message="กรุณากรอกเบอร์โทรศัพท์.">
							<p class="help-block text-danger"></p>
						</div>
					</div>
					<!-- <div class="clearfix"></div> -->
					<div class="col-sm-12 text-center">
						<div id="success"></div>
						<button type="submit" name="regisSubmit" class="btn btn-xl">ตกลง</button>
					</div>
				</div>
				<!-- </form> -->
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</section>