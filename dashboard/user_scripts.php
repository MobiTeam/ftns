<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
	$(document).ready(function() {
		$(document)
			.on('click', '.exit-link', _onExitLinkClick);

		function _onExitLinkClick(event) {
			location.href = "/auth.html";
		}					
	})
</script>