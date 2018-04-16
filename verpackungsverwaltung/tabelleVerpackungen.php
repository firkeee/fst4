<!DOCTYPE html>

<!-- 
 Als App-Benutzer möchte ich eine bereits existierende Verpackung über eine Tabelle mittels Checkbox deaktivieren können, 
 damit diese nicht mehr angeboten wird.
-->

<html>
    <head>
        <title>Verpackungen Seite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        
        // setup the autoloading
        require_once '../vendor/autoload.php';
        // setup Propel
        require_once '../generated-conf/config.php';
        
        ?>
        <h1>Alle Verpackungen</h1>
        
        <div>Currently learning how this works</div>
        
        <?php
        //get a list of all Verpackungen and display as a table (with checkbox)
        ?>
        
        <table border='1'>
            <thead>
                <th>Id</th>
                <th>Description</th>
                <th>Price</th>
            </thead>
        
            <tr>
                <td>345678</td>
                <td>ssssssss</td>
                <td>3456789</td>
            </tr>

            <tr>
                <td>34567890</td>
                <td>ffffffff</td>
                <td>3456789</td>
            </tr>

            <tr>
                <td>34567890</td>
                <td>ccccccc</td>
                <td>34567890</td>
            </tr>
        </table>
        
    </body>
</html>