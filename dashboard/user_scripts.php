<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
	$(document).ready(function() {
		$(document)
			.on('click', '.exit-link', _onExitLinkClick)
			.on('click', '.load-photo', _onLoadPhotoClick)
			.on('click', '.edit-user-profile', _onEditUserProfileClick);

		function _onExitLinkClick(event) {
			location.href = "/auth.html";
		}

		function _onEditUserProfileClick(event) {
			displayForm();
		}

		function displayForm() {
			$('.table-user-information-form').fadeIn(0);			
			$('.table-user-information').fadeOut(0);			
		}

		function _onLoadPhotoClick(event) {
			alert('Данная возможность еще не реализована');
		}					
	})
</script>