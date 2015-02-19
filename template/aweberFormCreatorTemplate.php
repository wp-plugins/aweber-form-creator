<div id="afc_form_container" class="afc_form_container" style="background-color:<?php echo $background_color; ?>">
	<div id="afc_headline" class="afc_headline"><?php echo $headline; ?></div>
	<?php
		if($image){
	?>
	<div id="afc_image" class="afc_image"><img src="<?php echo $image ?>"/></div>
	<?php
		} //end if($image)
	?>
	<div id="afc_message" class="afc_message"><?php echo wpautop($message); ?></div>
	<div id="afc_form_box">
		<form action="http://www.aweber.com/scripts/addlead.pl" id="afc_form" method="post">
			<div id="afc_name_field">
				<input type="text" name="name" placeholder="Enter Your Name" class="afc_name">
			</div>
			<div id="afc_email_field">
				<input type="text" name="email" placeholder="Enter Your Email" class="afc_email">
			</div>
			<input type="hidden" name="unit" value="<?php echo $aweber_listname ?>">
			<input type="hidden" value="http://www.aweber.com/form/thankyou_vo.html" name="redirect">
		</form>
	</div>
	<div id="afc_button" class="afc_button">
		<a class="btn" href="#" style="background:<?php echo $button_color; ?>"><?php echo $button_text; ?></a>
	</div>
</div>
