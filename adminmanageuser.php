

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Profile</title>
    <link rel="stylesheet" href="css/adminprofile.css">
    <?php
    include 'adminnavbar.php';
    $email = $_GET['email'];
    $sql = "SELECT * From `admin` where email = '$email'";
	$r = mysqli_query($conn,$sql);
	$re = mysqli_fetch_assoc($r);
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
    table
    {
        /* position: absolute; */
        margin: auto;
        margin-top: 150px;
        width: 60%;
        height: 400px;
        background: rgba(255, 255, 255, 0.7);
        color: #343c4e;
        border-collapse: collapse;
        border-spacing: 0;
        border-radius: 12px 12px 0 0;
        overflow: hidden;
    }
    th
    {
        background: rgba(0,0,0,0.7);
        color: #fff;
        text-align: center;
        text-transform: uppercase;
    }
    th,td
    {
        padding: 12px 15px;
    }
</style>
<body >
            
            <table>
                <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>2</th>
                    <th>2</th>
                    <th>2</th>

                </tr>
            <?php
            // include 'dataconnection.php';

            $p = "SELECT * From `users`";
                $query = mysqli_query($conn,$p);
                while($user = mysqli_fetch_assoc($query))
                {
            ?>
                <tr>
                    <td><?php echo $user['id']?></td>
                    <td><?php echo $user['username']?></td>
                    <td><?php echo $user['password']?></td>
                    <td><?php echo $user['email']?></td>
                    <td><?php echo $user['status']?></td>

                </tr>
            <?php
                }
            ?>
            </table>
</div>
</div>

</body>
</html>