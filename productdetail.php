<?php
    session_start();
    if(isset($_GET['pid'])){
        $pid=$_GET['pid'];
    }
    else{
        header("location:index.php");
    }
    include("connect.php");
    $sql ="SELECT * FROM product WHERE id=$pid";
    $result = $conn->query($sql);
    if(!$result){
        echo "Error:".$conn->error;
    }
    else{
        if($result->num_rows>0){
            $prd = $result->fetch_object();
        }
        else{
            $prd=NULL;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TingTong Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <div class="container">
        <div class="row">
            <h2 class="text-center">Product Name</h2>
            <div class="col-md-6 col-sm-12">
                <div class="thumbnail">
                    <img src="img/product/<?php echo $prd->picture ?>" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <p>Description: <?php echo $prd->description ?> </p>
                <p>Price: <?php echo $prd->price ?> Baht</p>
                <p>Stock: <?php echo $prd->unitInStock ?> </p>
                <p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                    <a href="#" class="btn btn-info">Add To Cart</a>
                </p>
                        
            </div>
        </div>
    </div>

</body>
</html>