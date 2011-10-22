<?php if ($use_recaptcha): ?>
<script type="text/javascript"
 src="http://www.google.com/recaptcha/api/challenge?k=6LckEccSAAAAAPhnum1-a2Y1BSH-4AeM9uQdMauN">
</script>
<noscript>
	<iframe src="http://www.google.com/recaptcha/api/noscript?k=6LckEccSAAAAAPhnum1-a2Y1BSH-4AeM9uQdMauN"
	 height="300" width="500" frameborder="0"></iframe><br>
	<textarea name="recaptcha_challenge_field" rows="3" cols="40">
	</textarea>
	<input type="hidden" name="recaptcha_response_field"
	 value="manual_challenge">
</noscript>
<?php else: ?>
<p class="small">You have been locked out for 1 hour due to a number of failed password attempts.</p>
<?php endif; ?>
