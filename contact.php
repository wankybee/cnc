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
<h2 id="contact2">Help us reach you</h2>
<div id="contactform">
<div id="formleft">
	<form id="submitform" action="/cnc/submitemail.php" method="post">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="name" />
		</fieldset>

		<fieldset>
			<legend>Mobile</legend>
			<input type="text" name="mobile" />
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
