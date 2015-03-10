<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="view/assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="view/assets/js/jquery-ui-1.11.3/jquery-ui.css" type="text/css">        
        <script type="text/javascript" src="view/assets/js/jquery-1.11.2.min.js" ></script>
        <script type="text/javascript" src="view/assets/js/jquery-ui-1.11.3/jquery-ui.js" ></script>
        <script type="text/javascript" src="view/assets/js/jquery-validation-1.13.1/jquery.validate.min.js" ></script>
        <script type="text/javascript" src="view/assets/js/bootstrap.min.js" ></script>
        <title><?php print $contact->name; ?></title>
    </head>
    <body>
        <div class="panel panel-default" style="width: 400px; margin: 0 auto; margin-top: 20px;">
            <div class="panel-heading">
                <h1 class="panel-title"><?php print $contact->name; ?></h1>
            </div>
            <div class="panel-body"> 
                <div class="form-horizontal" style="padding: 10px;">
                    <div class="form-group">                    
                        <label for="phone" class="control-label">Phone:</label>
                        <div class="form-control" id="phone">
                            <?php print $contact->phone; ?>
                        </div>                     
                    </div>
                    <div class="form-group">                    
                        <label for="email" class="control-label">Email:</label>
                        <div class="form-control" id="email">
                            <?php print $contact->email; ?>
                        </div>
                    </div>
                    <div class="form-group">                    
                        <label for="address" class="control-label">Address:</label>
                        <div class="form-control" id="address">
                            <?php print $contact->address; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
