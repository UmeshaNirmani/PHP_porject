<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin item list</title>

     <!--font awsome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/user_profile.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/navbar.css" />
    <link rel="icon" type="image/ico" href="./Image/logo.ico">
    <?php require_once "head.php" ?>
</head>
<body>
    <?php require_once "nav.php" ?>

    <!--admin item list-->

    <!--header-->
    <div class="container">
        <br>
        <h4>Modify component</h4>

    </div>

    <!--manipulation item list-->
    <div class="container">
        <div class="row">
        <?php
            require_once "home/homeDb.php";
            $sql = "SELECT * FROM productb";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0){
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Book Name</th>
                        <th>Price ($)</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
            
                <?php
                $i=0;
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["product_name"];?></td>
                    <td><?php echo $row["product_price"];?></td>
                    <td><?php echo $row["product_author"];?></td>
                    <td><?php echo $row["product_category"]?></td>
                    <td>
                        <a href="delete_process.php?id=<?php echo $row['id'];?> "class="btn btn-danger">Remove</a>
                        <a href="admin_itemList?edit=<?php echo $row['id'];?> "class="btn btn-info">Edit</a>

                    </td>
                </tr> 
                <?php
                $i++;  
                }
                
                ?>
                
            </table>
            <?php
            }
                else{
                    echo "no";
                }
                ?>

          
        </div>
    </div>
    

</body>
</html>