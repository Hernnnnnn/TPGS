<?php 
session_start();
include 'dataconnection.php';

$email = $_GET['email'];
    $loc=$_GET['localname'];
    $sql = "SELECT * From `".$loc."place`";
	$r = mysqli_query($conn,$sql);
	$re = mysqli_fetch_assoc($r);
if(!$_SESSION['email'])
{
    header("Location:adminloginpage.php");
}
    $email = $_GET['email'];
    $msg=" ";
    if(isset($_POST['submit']))
    {
    $sl = "SELECT * From `".$loc."place`";
        $sql=mysqli_query($conn,$sl);
        $r=mysqli_fetch_assoc($sql);
        $name=$_POST['name'];
        $imageName = $_FILES['image']['name'];
        $imageTempName = $_FILES['image']['tmp_name'];
        $targetPath = "images/".$loc."/"."PLACE/".$imageName;

        
        if(!$name)
        {
            $msg = "Please key-in Place's name!";
        }
        else if($name == $re['placename'])
        {
            $msg = "Please key-in <span style='font-weight: bold;'>new</span> location's name!";
            
        }
        else if(!$imageName)
        {
            $msg = "Please upload location's image!";
        }
        else
        {
            if(move_uploaded_file($imageTempName,$targetPath))
        {
            {
                $sql = "INSERT INTO `".$loc."place`(placename,placeimage) VALUES ('$name','$targetPath')";
                $result = mysqli_query($conn,$sql);
            }

            
        }
        }
        
        
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Add Place</title>
    <?php
    // session_start();
    if(!$_SESSION['email'])
{
    header("Location:adminloginpage.php");
}
    include 'adminnavbar.php';
    
    ?>
</head>
<style>
    body
    {
    background-image: url(images/image.gif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    }

    .container1
    {
        margin: auto;
        margin-top: 5%;
        max-width: 800px;

    }
    .editbox
    {
        border: 1px solid black;
    }
    .container1 h1
    {
        text-align: center;
        padding: 20px;
        background:rgba(0,0,0, 0.7);
        color: white;
        font-weight: bold;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
        margin: 0;
    }
    .edi-box
    {
        /* text-align: center; */
        background: rgba(255, 255, 255, 0.6);
        padding-left: 35px;
    }
    .edi-box input[type="text"]
    {
        border: none;
        background: transparent;
        border-bottom: 2px solid black;
        width: 55%;
        margin-bottom: 10px;
    }
    .edi-box input[type="file"]
    {
        display: none;
    }
    label
    {
        padding-right: 20px;
    }
    .Choose
    {
        background: #4bb6b7;
        padding: 10px;
        color: white;
        border-radius: 20px;
        margin-top: 12px;
    }
    .Choose:hover
    {
        cursor: pointer;
        color: black;
        background: rgba(255, 255, 255, 0.4);
        font-weight: bold;
    }
    .submit
    {
        text-align: center;
    }
    .submit input
    {
        background: #4bb6b7;
        padding: 10px;
        color: white;
        border-radius: 20px;
        margin-top: 12px;
        width: 40%;
        border: none;
        font-weight: bold;

    }
    .submit input:hover
    {
        cursor: pointer;
        color: black;
        background: rgba(255, 255, 255, 0.4);
        font-weight: bold;
    }
    .back a
    {
        color: black;
        text-decoration: underline;
        font-weight: bold;
    }

    .back a:hover
    {
        font-style: italic;
        text-decoration: none;
        color: #4bb6b7;
    }
    
</style>
<body>
<div class="container1">
        
            
        <h1>Add Place</h1>
            <div class="edi-box">
            <form action="" method="post" enctype="multipart/form-data">
            <?php echo $msg?>
            <br>
            <label for="">Place's Name:</label>
            <input type="text" name="name" id="" value="<?php if(isset($_POST['submit'])){echo $_POST['name'];}?>">
            <br>
            <label for="">Location's Image:</label>
            <label for="file"  class="Choose"><i class="fa fa-camera"></i> Choose a Photo</label>
            <input type="file" id="file" name="image" class="form-control" multiple >
            <br>
            <div class="submit">
            <input type="submit" name="submit" value="Add Place">
            </div>
            <br>
            <div class="back">
            <a href="adminlocatmoredetailsplace.php?email=<?php echo $email?>&&localname=<?php echo $loc?>">Back to Location's details</a>
            </div>
            
    </form>
    </div>
</div>
</body>
</html>