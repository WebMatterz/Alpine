<header id="header" style="background: transparent none repeat scroll 0% 0%; border-bottom: medium none; color: white;">
	<div class="container-fluid">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="logoName">

		</div>
	</div>
</header>

<section>
	<!-- #BeginEditable "content" -->


	<div id="destination">

		<div id="innerBanner">
			<div class="container-fluid">
				<h2> Alpine Selling Portal <br> <span> Log in to access our exciting Itineraries</span></h2>
			</div>
		</div>
		<div id="aboutContent">
			<div class="container-fluid">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<h2><span> Log </span> In </h2> 
						<?php echo form_open('auth/login', 'id="loginForm"'); ?>					
						<div class="form-group">
							<label class="control-label" for="username">Username</label>
							<input type="text" title="Please enter you username" name="username" id="username" class="form-control" placeholder="Enter your username" required="">
						</div>
						<div class="form-group">
							<label class="control-label" for="password" id="passwd-label">Password</label>
							<input type="password" name="password" id="password" class="password form-control" placeholder="Please enter your password" required="">
						</div>
						<button type="submit" class="btn btn-success btn-block" style="width: 80px; height: 45px;">Login</button>
					</form>	
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
</div>
</div>

</section>