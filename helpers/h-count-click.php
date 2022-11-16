<?php
if (isset($_SESSION['sign_in_click'])) :
	if ($_SESSION['sign_in_click'] === 3) :
?>

		<script>
			checkClickCount('signInCountEnd');
		</script>

<?php
	endif;
endif;
?>