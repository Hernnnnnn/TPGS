<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || State</title>
</head>
<style>
	body{
    background-image: url(images/image.gif);
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
    
:root{
  --primary:#4bb6b7;
  --secondary:#FFFFFF;
  --gray:#575757;d
  --lightgray:#848484;
  --lightgray2:rgb(127,183,126,0.1);
  --darkgray:#2E3238;
  --black:#393e46;
  --green:#00AD7C;
  --yellow:#FFEA61;

  --shadow:0px 2px 8px 0px var(--lightgray);
}   

.hot {
  max-width: 100%;
  padding: 10px 20px 20px 20px;
  align-items: center;
}

.hot h1 {
  text-align: center;
  padding-bottom: 1.5rem;
  color:var(--gray);
  font-size: 2rem;
  text-transform: uppercase;
}

.hot span {
  position: relative;
  z-index: 0;
}

.tourline {
  border: none;
  margin: 0 auto;
  margin-top: 10px;
  height: 6px;
  width: 230px;
  background-color: var(--primary);
}

.hot .tourbox-container {
  display: grid;
  grid-template-columns: repeat(auto-fill,minmax(25rem,1fr));
  gap: 1rem;
}

.hot .tourbox-container .tour-box{
  background-color: var(--secondary);
  border-radius: 0.5rem;
  box-shadow: var(--shadow);
}

.hot .tourbox-container .tour-box .image{
  height: 18rem;
  width: 100%;
  padding: 1rem;
  position: relative;
}

.hot .tourbox-container .tour-box .image img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 0.5rem;
}

.hot .tourbox-container .tour-box .image h3{
  position: absolute;
  top: 1.5rem;
  left: 1.5rem;
  font-size: 1rem;
  color: var(--secondary);
  background: rgba(0, 0, 0, 0.5);
  border-radius: 0.5rem;
  font-weight: lighter;
  padding: 0.3rem 0.5rem;
}

.hot .tourbox-container .tour-box .image h3 i{
  color:var(--primary);
}

.hot .tourbox-container .tour-box .content{
  padding: 1.5rem;
  padding-top: 0;
}

.hot .tourbox-container .tour-box .content p{
  font-size: 0.9rem;
  margin-top: -10px;
  color: var(--lightgray);
  line-height: 1.5;
}

.hot .tourbox-container .tour-box .content .btn {
  display: inline-block;
  width: calc(50% - 5px); /* Adjusted width to accommodate both buttons */
  text-align: center;
  padding: 0.6rem 0.8rem;
  font-size: 0.9rem;
  font-weight: 700;
  margin-top: 8px;
  margin-right: 5px; /* Added margin between the buttons */
  color: var(--secondary);
  background: var(--primary);
  border-radius: 0.5rem;
  cursor: pointer;
  text-decoration: none;
  transition: 0.5s;
}

.hot .tourbox-container .tour-box .content .btn:last-child {
  margin-right: 0; /* Remove margin on the last button */
}

.hot .tourbox-container .tour-box .content .btn:hover {
  background: var(--darkgray);
}

.search-wrapper
{
  border: 1px solid black;
  border-radius: 30px;
  height: 50px;
  align-items: center;
  overflow-x: hidden;
  margin: auto;
  width: 300px;
  float: left;
  margin: 3px;  
  position: absolute;
  top: 100px;
}
.search-wrapper button
{
  display: inline-block;
  padding: 0rem .5rem;
  color: black;
  border: none;
  background-color: transparent;
  margin-right: 15px;
  z-index: 999;
  left: 250px;
}

.search-wrapper span
{
  font-size: 15px;
  margin-left: 50px;
}

.search-wrapper input
{
  height: 85%;
  padding: .5rem;
  border: none;
  outline: none;
  background: transparent;
  color: gray;
  padding-left: 20px;
  margin-top: 5px;
}
</style>
<body>
<section class="hot" id="hot">
<?php 
                    if(isset($_POST['search']))
                    {
                        $searchKey=$_POST['search'];
                        $p = "SELECT * From `locations` where name LIKE '%$searchKey%'";

                    }
                    else
                    {
                        $p = "SELECT * From `locations`";
                        $searchKey = "";
                    }
                        
                        $result = mysqli_query($conn,$p);


                    ?>
    <h1 class="hot"><span>State</span><hr class="tourline"> </h1>
    <form action="" method="post">
    <div class="header">
                    <div class="search-wrapper">
                    <input type="text" name="search" placeholder="Search here" value="<?php echo $searchKey?>">

                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                    </div>
                    </form>
    <div class="tourbox-container">
        <?php

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $image =  'images/'.$row['image_url']; 
                $location = $row['name']; 
                $description = $row['description'];
        ?>
                <div class="tour-box">
                    <div class="image">
                        <img src="<?php echo $image; ?>">
                        <h3><i class="fas fa-map-marker-alt"></i> <?php echo $location; ?></h3>
                    </div>
                    <div class="content">
                        <p><?php echo $description; ?></p>
						<?php 
							$direction_link = $row['direction_link'];
							$locationdetail_link = $row['locationdetail_link'];						
						?>
                        <a href="<?php echo $direction_link; ?>" target="_blank" class="btn">Direction ></a>
                        <a href="<?php echo $locationdetail_link; ?>" target="_blank" class="btn">View more ></a>
                    </div>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </section>

<?php include "userfooter.php"; ?>
</body>

</html>