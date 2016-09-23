<!-- Question -->
<section id="question">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">ถาม - ตอบ</h2>
				<h3 class="section-subheading text-muted">สังคมแห่งการแบ่งปัน และร่วมกันหาทางออกของปัญหาที่เกิดขึ้น.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<?php echo form_open('#','name="sentMessage" id="contactForm1" novalidate');?>
				<!-- <form name="sentMessage" id="contactForm1" novalidate> -->
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<table class="table-hover" border="1">
							<tbody>
								<tr>
									<td>คำถาม</td>
									<td></td>
								</tr>
								<tr>
									<!-- <td></td> -->
									<td colspan="2" class="col-sm-10">ตอบ</td>
								</tr>
								<tr>
									<td colspan="2" class="col-sm-10">ตอบ</td>
								</tr>
							</tbody>
						</table>
					</div>

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
<!-- End Question -->