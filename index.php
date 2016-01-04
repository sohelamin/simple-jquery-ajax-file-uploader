<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>jQuery Ajax File Upload</title>
    </head>
    <body>
        <form id="ajax_form" name="ajax_form" action="process.php" enctype="multipart/form-data" method="post">
            <label>Choose a file: </label><input type="file" name="image" required /><br />
            <input type="submit" name="upload" value="Upload">
        </form>

        <script src="js/jquery.min.js"></script>
        <script>
            $(document).ready(function() {

                $('form#ajax_form').on('submit', function(e) {
                    e.preventDefault();

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
                    .done(function(data) {
                        if (data == 1) {
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
