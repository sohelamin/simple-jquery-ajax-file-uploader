<?php 
if ( isset ($_POST['name']) ) {
	$is_uploaded = move_uploaded_file( $_FILES['image']['tmp_name'], 'upload/' . $_FILES['image']['name'] );

	if ( $is_uploaded ) {
		echo 1;
	} else {
		echo 0;
	}
}
?>