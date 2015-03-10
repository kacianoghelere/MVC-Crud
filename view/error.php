<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="view/assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="view/assets/js/jquery-ui-1.11.3/jquery-ui.css" type="text/css">        
        <link rel="stylesheet" href="view/assets/css/validation/validation_messages.css" type="text/css">
        <script type="text/javascript" src="view/assets/js/jquery-1.11.2.min.js" ></script>
        <script type="text/javascript" src="view/assets/js/jquery-ui-1.11.3/jquery-ui.js" ></script>
        <script type="text/javascript" src="view/assets/js/jquery-validation-1.13.1/jquery.validate.min.js" ></script>
        <script type="text/javascript" src="view/assets/js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="view/assets/js/validation/register_validation.js"></script>        
        <title>Application error</title>
    </head>
    <body>
        <div class="panel panel-danger" style="width: 700px; margin: 0 auto;">
            <div class="panel-heading">
                <h1 class="panel-title"><?php print htmlentities($title) ?></h1>
            </div>
            <div class="panel-body">
                <p><?php print htmlentities($message) ?></p>
            </div>
        </div>
    </body>
</html>
