<html>
<body>
<?php
    if (isset($_POST['numero1'])){
        if ($_POST['numero1'] == $_POST['numero2']){
?>
    <h1>El número <?php echo $_POST['numero1']?> es igual al número <?php echo $_POST['numero2']?></h1>
<?php
        }
        else if ($_POST['numero1'] > $_POST['numero2']) {
            echo "<h1>El número " . $_POST['numero1'] . " es mayor que el número " . $_POST['numero2'] . "</h1>";
        }
        else {
            echo "<h1>El número " . $_POST['numero1'] . " es menor que el número " . $_POST['numero2'] . "</h1>";
        }
    }
    else{
?>

    <form action="" method="POST">
        <label for="numero1">Introduce el número 1</label>
        <input type="text" id="numero1" name="numero1" /><br/>
        <label for="numero2">Introduce el número 2</label>
        <input type="text" id="numero2" name="numero2" /><br/>
        <input type="submit" value="Enviar" />
    </form>

<?php
    }
?>

</body>
</html>