<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Technique boncoin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <style type="text/css">
        .login-form {
            width: 340px;
            margin: 50px auto;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
	<header>

	</header>

	<?php echo $contentInLayout;  // VUE ?>



	<footer>

       <script>
           $(document).ready(function(){
               $("#mytable #checkall").click(function () {
                   if ($("#mytable #checkall").is(':checked')) {
                       $("#mytable input[type=checkbox]").each(function () {
                           $(this).prop("checked", true);
                       });

                   } else {
                       $("#mytable input[type=checkbox]").each(function () {
                           $(this).prop("checked", false);
                       });
                   }
               });

               $("[data-toggle=tooltip]").tooltip();
           });
       </script>




	</footer>
</body>
</html>