<section>
	<!-- #BeginEditable "content" -->


	<div id="news">

		<div id="innerBanner">
			<div class="container-fluid">
				<h2> Contact Us <br> <span> Get in touch with Us</span></h2>
			</div>
		</div>
		<div id="map">
			<div  class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7860.9838230731275!2d8.8820826288893!3d9.892925000001256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sDogon+Karfe+!5e0!3m2!1sen!2sng!4v1534442601952" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>					
		</div>

		<div id="mainContact"> 
			<div class="container-fluid">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<h2> Drop Your <span style="color:rgba(15,104,155,1)">Message Here </span></h2>

					<?php $attributes = array("name" => "form1");
				  echo form_open("contact/sendEmail", $attributes);?>
				  <div class="input-group">
							<span class="input-group-addon label-primary"> Full Name </span>
							<input type="text" name="name" placeholder=" Surname first" class="form-control">

						</div>
						<div class="input-group">
							<span class="input-group-addon  label-primary"> Telephone</span>
							<input type="tel" name="phone" placeholder=" +2348100000000"  class="form-control">
						</div>
						<div class="input-group">
							<span class="input-group-addon  label-primary"> E-mail Address </span>
							<input type="email" name="email" placeholder=" Email address e.g mail@domain.com"  class="form-control">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" rows="5" id="comment" placeholder="Message/comment/question goes here..."></textarea>
						</div>
						<div class="btn-group" role="group">
							<button type="submit" class="btn btn-success" formmethod="post"><span class="glyphicon glyphicon-send"></span> Send Message</button>
						</div>
					</form>
				</div>

				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right sideContact">
					<h2>Contact Address</h2>
					<p> Plot 22, Mary Lot Close Behind Fototek, Dogon Karfe, Jos, Plateau State, Nigeria.</p>
					<label>Email Address: </label>
					<p> contact@alpinehol.com </p>


					<label>Telephone: </label>
					<p> <strong>Hotline:</strong> +2348094022810, +2348054091023 </p>
					<p> <strong>Whatsapp:</strong> +2348147701949 </p>	
				</div>
			</div>
		</div>
	</div>


	<!-- #EndEditable -->
</section>