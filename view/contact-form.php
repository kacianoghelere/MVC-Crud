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
        <title><?php print htmlentities($title) ?></title>
    </head>
    <body>
        <?php
        if ($errors) {
            print '<ul class="errors">';
            foreach ($errors as $field => $error) {
                print '<li>' . htmlentities($error) . '</li>';
            }
            print '</ul>';
        }
        ?>
        <div class="panel panel-primary" style="width: 400px; margin: 0 auto; margin-top: 20px;">
            <div class="panel-heading">
                <h3 class="panel-title"><?php print htmlentities($title) ?></h3>
            </div>
            <div class="panel-body">
                <form id="form_reg" name="form_reg" method="POST" class="form-horizontal"  style="padding-right: 10px; padding-left: 10px;">

                    <div class="form-group">
                        <label for="name" class="control-label">Name:</label>
                        <input id="name" type="text" name="name" class="form-control" value="<?php print htmlentities($name) ?>"/>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="control-label">Phone:</label>
                        <input type="text" name="phone" class="form-control" value="<?php print htmlentities($phone) ?>"/>
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Email:</label>
                        <input id="email" type="text" name="email" class="form-control" value="<?php print htmlentities($email) ?>" />
                    </div>

                    <div class="form-group">
                        <label for="address" class="control-label">Address:</label>
                        <textarea name="address" class="form-control"><?php print htmlentities($address) ?></textarea>
                    </div>

                    <input type="hidden" name="form-submitted" value="1" />
                    <input type="submit" value="Submit" class="btn btn-info" />
                </form>
            </div>
        </div>
    </body>
</html>
