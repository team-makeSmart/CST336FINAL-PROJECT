<?php
if (isset($_GET['logOut'])) {
    session_start();
    session_destroy();
    header('Location:login.php');
} else {

    session_start();
    include 'dbConnection.php';

    if (isset($_GET['productImage'])) {
        if($_GET['productImage']==null){
           $_GET['productImage']="https://www.jainsusa.com/images/store/landscape/not-available.jpg";
    }

        $conn = getDatabaseConnection();
        $sql = "INSERT INTO plant (plantName, plantDesc, priceDollar, priceCent, imgLink) VALUES (?,?,?,?,?)";
        $data = array($_GET['productName'], $_GET['description'], $_GET['priceDollar'], $_GET['priceCent'], $_GET['productImage']);
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);

        $_SESSION['prodAdded'] = $_GET['productName'];
        header('Location:admin.php');
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Add a product </title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles/main.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Nosifer" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand">
                <span id="teeny-shop">Teeny Shop</span>
                <span id="of"> of</span>
                <span id="horrors"> Horrors</span>
            </a>
        </nav>

        <div class='container'>
            <div class='well'>

                <h1> Add a product</h1>
                <form >
                    <strong> Product name </strong> <input type="text" class="form-control" name="productName"><br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                    </div>
                    <strong>Price Dollar</strong><input type="text" class="form-control" name="priceDollar"><br>
                    <strong>Price Cent</strong><input type="text" class="form-control" name="priceCent"><br>
                    <strong>Set Image Url</strong><input type = "text" name = "productImage" class="form-control"><br>
                    <input type="submit" name="submitProduct"  class="btn btn-primary" value="Add Product">

                </form>
            </div>
        </div>
    </body>
</html>