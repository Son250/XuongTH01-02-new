<section class="py-50">
		<div class="container">
			<div class="row justify-content-center g-0 container-login">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<h2 class="text-primary">Get started with Us</h2>
							<p class="mb-0">Register a New Membership</p>							
						</div>
						<div class="p-40">
                        <?php 
                            if(isset($error) && ($error != "")){
                                echo $error;
                            }else{
                                echo ' ' ;
                            }
                            ?>			
							<form action="index.php?act=register" method="post">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" class="form-control ps-15 bg-transparent" name="fullname" placeholder="Full Name" >
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
										<input type="email" class="form-control ps-15 bg-transparent" name="email" placeholder="Email" >
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" class="form-control ps-15 bg-transparent" name="pass" placeholder="Password" >
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" class="form-control ps-15 bg-transparent" name="repass" placeholder="Retype Password" >
									</div>
								</div>
								  <div class="row">
									
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info w-p100 mt-15" name="dangki">Register</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>	
                           
							<div class="text-center">
								<p class="mt-15 mb-0">Already have an account?<a href="login.html" class="text-danger ms-5"> Log In</a></p>
							</div>
						</div>
					</div>								

					<div class="text-center">
					  <p class="mt-20">- Register With -</p>
					  <p class="d-flex gap-items-2 mb-0 justify-content-center">
						  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
						  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
						  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
						</p>	
					</div>
				</div>
			</div>
		</div>
	</section>	
    