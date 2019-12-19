<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">All Car.</h1>
    </div>
</div>
<div class="row">
<?php
    if(isset($_SESSION['id'])){
    ?>
    <div class="col-lg-12">
        <p><a href="Index.php?menu=insert" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Post a car</a></p>
    </div>
    <?php                        
    }                   
    ?>
</div>
<div class="container">
            <div class="row">
            <?php
                $sql = "SELECT * FROM car ORDER BY id";
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
                            <a href="index.php?menu=edit&pid=<?php echo $prd->id ?>" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="deleteproduct.php?pid=<?php echo $prd->id ?>" class="btn btn-danger lnkDelete" ><i class="glyphicon glyphicon-trash"></i></a>
                            </p>
                            
                            <?php
                        }
                        ?>

                    </div>
                </div>
                        <?php
                    }
                }
            ?>
              <script>
                            $(document).ready(function(){
                                $(".lnkDelete").click(function(){
                                    return confirm("Confirm Delete?");
                                });
                            });
                            </script>  
            </div>
        </div>
        