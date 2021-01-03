<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Title</title>
</head>
<body>
<style>
    table{
        border-spacing: 50px 1rem;
    }
    td{

        border: 1px solid black;
    }
</style>
<table>
   <?php require 'controllers/controller.php';

    $controller = new Controller();
    $result = $controller->all();


    ?>

</table>

</body>
</html