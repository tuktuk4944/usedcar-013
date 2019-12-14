<?php
    if(isset($_GET['type'])){
        $type=$_GET['type'];
    }
    else{
        header("location:index.php");
    }
    include("connect.php");
    
    $sql ="SELECT * FROM car WHERE carType=$type ";
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
<div class="row">
    <div class="col-lg-9">
        <h1 class="page-header">Car Type <?php echo $type?></h1>
    </div>
</div>
<div class="container">
            <div class="row">
            <?php
                $sql = "SELECT * FROM car WHERE carType=$type ";
                $result = $conn->query($sql);
                if(!$result){
                    echo "Error during data retrieval";
                }
                else{
                    //fetch data
                    while($prd = $result->fetch_object()){
                        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <a href="productdetail.php?pid=<?php echo $prd->id; ?>">
                            <img src="image/car/<?php echo $prd->carpic ?>" alt="">
                        </a>
                        <div class="caption">
                            <h3><?php echo $prd->brand ?></h3>
                            <p>Model : <?php echo $prd->model ?></p>
                            <p>Model Year : <?php echo $prd->modelYear ?></p>
                            <p>Color : <?php echo $prd->color ?></p>
                            <p>License : <?php echo $prd->license ;  echo $prd->province ;?></p>
                            <h4>Price : <?php echo $prd->price ?> Baht</h4>
                        </div>
                        <?php
                        if(isset($_SESSION['id'])){
                        ?>
                            <p>
                            <a href="editproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="deleteproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-danger lnkDelete" ><i class="glyphicon glyphicon-trash"></i></a>
                            </p>

                            <script>
                            $(document).ready(function(){
                                $(".lnkDelete").click(function(){
                                    return confirm("Confirm Delete?");
                                });
                            });
                            </script>
                            <?php
                            
                        }
                        
                        ?>
                    </div>
                </div>
                        <?php
                    }
                }
            ?>
                
            </div>
        </div>