<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    include "script.php";
    ?>
    <table border="3px solid red" id="myTable">
        <thead>
            <tr>
                <td>Type</td>
                <td>Value</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 0;
            while( $i++ < (count($keys))-1):;?>
            <tr>
                <td><?php echo $keys[$i] ?></td>
                <td><?php echo $values[$i] ?></td>
            </tr>
            <?php endwhile?>
        </tbody>
    </table>

    <form action="write.php" method="post" style="padding:10px; border: 2px solid green; justify-content:center;">
        <label for="name" style = "margin-right:20px;">Введите имя</label>
        <input type="text" name="name" id="name" style = "margin-right:20px;">
        <label for="val" style = "margin-right:20px;">Введите значение</label>
        <input type="text" name="val" id="val" style = "margin-right:20px;">
        <input type="submit" value="Записать">

    </form>
    <p>
        <?php
        echo $decodeInfo;
        ?>
    </p>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>