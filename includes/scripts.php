<!--   Jquery 3.6.0   -->
<script src="./resources/js/jquery-3.6.0.min.js"></script>

<!-- SweetalertJs JavaScript -->
<script src="./resources/js/sweetalert.min.js"></script>

<!--   Core JS Files   -->
<script src="./resources/js/core/popper.min.js"></script>
<script src="./resources/js/core/bootstrap.min.js"></script>

<script>
	function getAddress() {
		const currentUrl = new URL(location.href);
		const addressID = currentUrl.searchParams.get('address-id');
		$.ajax({
			type: "POST",
			url: "./helpers/get-address.php",
			data: {
				addressID: addressID
			},
			dataType: "json",
			success: function(response) {
				$('#js-address-region').html(response.region);
				$('#js-address-city').html(response.city);
				$('#js-address-district').html(response.district);
			}
		});
	}

	function checkClickCount(currentPage = '') {

		new Notify({
			status: 'error',
			title: 'Too many login attempts',
			text: 'Try again after 15 seconds',
			effect: "slide",
			speed: 300,
			customClass: null,
			customIcon: null,
			showIcon: true,
			showCloseButton: true,
			autoclose: true,
			autotimeout: 2500,
			gap: 20,
			distance: 20,
			type: 1,
			position: "right top",
		});

		$('button').prop('disabled', true);
		const page = currentPage;
		setTimeout(() => {
			$.ajax({
				type: "POST",
				url: "./helpers/h-click-counter.php",
				data: {
					page: page
				},
				dataType: "text",
				success: function(response) {
					if (response === '200') {
						$('button').prop('disabled', false);
					}
				}
			});
		}, 15000);
	}
</script>


<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->


<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script> -->


<script defer>
	if (document.getElementById('state1')) {
		const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
		if (!countUp.error) {
			countUp.start();
		} else {
			console.error(countUp.error);
		}
	}
	if (document.getElementById('state2')) {
		const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
		if (!countUp1.error) {
			countUp1.start();
		} else {
			console.error(countUp1.error);
		}
	}
	if (document.getElementById('state3')) {
		const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
		if (!countUp2.error) {
			countUp2.start();
		} else {
			console.error(countUp2.error);
		};
	}
</script>

<!-- simple-notify JavaScript -->
<script src="./resources/js/simple-notify.min.js"></script>
<!-- material dashboard javascript -->
<script src="./resources/js/material-dashboard.min.js"></script>
<!-- custom JavaScript -->

<script>
	$(document).ready(function() {
		setTimeout(() => {
			$('*').removeClass('placeholder');
		}, 1000);
	});
</script>