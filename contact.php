<script type="text/javascript">
	$(document).ready(function() {
		$('#submitform').ajaxForm({
			target: '#error',
			success: function() {
			$('#error').fadeIn('slow');
			}
		});
	});
</script>
<body>
<h2 id="contacth2">Contact Form</h2>
<div id="contactform">
<div id="formleft">
	<form id="submitform" action="/cnc/submitemail.php" method="post">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="name" />
		</fieldset>

		<fieldset>
			<legend>Email</legend>
			<input type="text" name="email" />
		</fieldset>

		<fieldset>
			<legend>Message</legend>
			<textarea rows="5" cols="20" name="message"></textarea>
		</fieldset>

		<fieldset>
			<input type="submit" class="button" value="Submit" />
		</fieldset>
	</form>
    </div>
	<div id="error">

	</div>
<div class="clear"></div>
</div>
</body>
