<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contacts</title>
        <link rel="stylesheet" href="view/assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="view/assets/js/jquery-ui-1.11.3/jquery-ui.css" type="text/css">        
        <link rel="stylesheet" href="view/assets/css/validation/validation_messages.css" type="text/css">
        <script type="text/javascript" src="view/assets/js/jquery-1.11.2.min.js" ></script>
        <script type="text/javascript" src="view/assets/js/jquery-ui-1.11.3/jquery-ui.js" ></script>
        <script type="text/javascript" src="view/assets/js/jquery-validation-1.13.1/jquery.validate.min.js" ></script>
        <script type="text/javascript" src="view/assets/js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="view/assets/js/validation/register_validation.js"></script>
    </head>
    <body>                
        <div id="list" class="panel panel-default" style="width: 900px; margin: 0 auto; margin-top: 20px;">
            <div class="panel-heading">
                <h1 class="panel-title">Contacts</h1>
            </div>
            <table class="table table-condensed table-hover contacts" border="0" cellpadding="0" cellspacing="0">
                <thead style="background-color: #eee;">
                    <tr>
                        <th><a href="?orderby=name">Name</a></th>
                        <th><a href="?orderby=phone">Phone</a></th>
                        <th><a href="?orderby=email">Email</a></th>
                        <th><a href="?orderby=address">Address</a></th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <td><a href="index.php?op=show&id=<?php print $contact->id; ?>"><?php print htmlentities($contact->name); ?></a></td>
                            <td><?php print htmlentities($contact->phone); ?></td>
                            <td><?php print htmlentities($contact->email); ?></td>
                            <td><?php print htmlentities($contact->address); ?></td>

                            <td>
                                <a class="btn btn-info" href="index.php?op=edit&id=<?php print $contact->id; ?>">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </a>
                            </td>                            
                            <td>
                                <a class="btn btn-danger" href="index.php?op=delete&id=<?php print $contact->id; ?>">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="panel-footer" >
                <a href="index.php?op=new" type="button" class="btn btn-primary glyphicon glyphicon-save">
                    <span aria-hidden="true">New</span>
                </a>
            </div>
        </div>
    </body>
</html>
