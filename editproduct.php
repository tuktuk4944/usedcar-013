<?php
    session_start();
    include("connect.php");
    if(!isset($_GET['pid'])|| $_GET['pid']==""){
        header("location:index.php");
    }
    else{
        $pid = $_GET['pid'];
    }
    $sql="SELECT * FROM car Where id=$pid";
    $result=$conn->query($sql);
    if(!$result){
        echo "ERROR : ".$conn->error;
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
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Page</h1>
    </div>
</div>
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
        <div class="thumbnail">
            <label for="">Picture : </label>
            <img src="image/car/<?php echo $prd->carpic; ?>" alt="">

        </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
            <form action="updateproduct.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Type : <?php echo $prd->carType ?> </label>

                </div>
                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Brand: </label>
                    <div class="col-md-9">
                        <input type="textarea" name="txtbrand" id=""class="form-control" value="<?php echo $prd->brand; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Model: </label>
                    <div class="col-md-9">
                        <input type="text" name="txtmodel" id=""class="form-control" value="<?php echo  $prd->model; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">ModelYear: </label>
                    <div class="col-md-9">
                        <input type="text" name="txtmodelyear" id=""class="form-control" value="<?php echo  $prd->modelYear; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Color: </label>
                    <div class="col-md-9">
                        <input type="text" name="txtcolor" id=""class="form-control" value="<?php echo  $prd->color; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">License: </label>
                    <div class="col-md-9">
                        <input type="text" name="txtlicense" id=""class="form-control" value="<?php echo  $prd->license; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Province: </label>
                    <div class="col-md-9">
                        <input type="text" name="txtprovince" id=""class="form-control" value="<?php echo  $prd->province; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">Price: </label>
                    <div class="col-md-9">
                        <input type="text" name="txtprice" id=""class="form-control" value="<?php echo  $prd->price; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3">
                        <input type="hidden" name="hdnProductID" value="<?php echo $prd->id;?>">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="submit" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</body>
</html>