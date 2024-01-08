
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY INFORMATION</title>
    <link rel="stylesheet" type="text/css" href="parv2.css">
</head>
<style>
    body{
        background-color: cadetblue;
    }
    .display-info{
        text-align: center;
    }
    </style>
<body>
    <h2>INFORMATION</h2>
    <div class="display-info">
    <?php
       

            $username=$_POST["username"];
            $pro_name=$_POST["pro_name"];
            $pro_cat=$_POST["pro_cat"];
            $pro_price=$_POST["pro_price"];
            $pro_quan=$_POST["pro_quan"];
            echo "<p><strong>ID:</strong>$username</p>";
            echo "<p><strong>PRODUCTNAME:</strong>$pro_name</p>";
            echo "<p><strong>PRODUCTCATEGORY:</strong>$pro_cat</p>";
            echo "<p><strong>PRODUCTPRICE:</strong>$pro_price</p>";
            echo "<p><strong>PRODUCTQUANTITY</strong>$pro_quan</p>";
            
    ?>

</body>
</html>
