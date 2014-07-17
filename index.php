<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>jQuery Ajax File Upload</title>
</head>
<body>
	<form id="ajax_form" name="ajax_form" action="process.php" enctype="multipart/form-data" method="post">
		Name: <input type="text" name="name" required /><br />
		Image: <input type="file" name="image" required /><br />
		<input type="submit" name="ajax_form_submit" id="ajax_form_submit" value="SAVE" />	
	</form>
	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('input#ajax_form_submit').bind("click",function(e) { 
				$('form#ajax_form_submit').submit();				
			});	

			$('form#ajax_form').on('submit', function(e){
				e.stopPropagation();
				e.preventDefault();	
				$form = $('form#ajax_form');
				var formObj = $(this);
				var formURL = formObj.attr("action");
				var formData = new FormData(this);				
				$.ajax({
					type: 'POST',
					url: formURL,
					data: formData,
					processData: false, 
					contentType: false
				})
				.done(function( msg ) {
						if ( msg == 1 ) {
							alert('Success');
						} else {
							alert('Something went wrong!');
						}	
				});
			});			
		});
	</script>
</body>
</html>