<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";

$day = $_GET['num_days'];
$email = $_GET['email'];
$loc = $_GET['destination'];
$q1 = "SELECT * from generator";
$r=mysqli_query($conn,$q1);
$rz = mysqli_fetch_assoc($r);
if($day == 0)
{
  $q = "INSERT INTO `generator`(day) Values(1)";
  mysqli_query($conn,$q);
}
else if(empty($rz['day']))
{
  for($i =1;$i<=$day;$i++)
  {
   $q = "INSERT INTO `generator` (day) VaLUes ('$i')";
   mysqli_query($conn,$q);
  }
}


$msg =" ";
if(isset($_POST['add_to_cart'])){
  $id = mysqli_real_escape_string($conn,$_POST['id']);
  $day1 = mysqli_real_escape_string($conn,$_POST['des_day']);
  $name =  mysqli_real_escape_string($conn,$_POST['product_name']);
  $link = mysqli_real_escape_string($conn,$_POST['link']);
  $q1 = "UPDATE `generator` set destination='$name',link = '$link' where day =  $day1";
  $q2 = mysqli_query($conn,$q1);
}
else if(isset($_POST['add_to_cart1'])){

  $id = mysqli_real_escape_string($conn,$_POST['id1']);
  $day1 = mysqli_real_escape_string($conn,$_POST['des_day1']);
  $name =  mysqli_real_escape_string($conn,$_POST['product_name1']);
  $link1 = mysqli_real_escape_string($conn,$_POST['link1']);

  $q1 = "UPDATE `generator` set destination='$name',link = '$link1' where day =  $day1";
  $q2 = mysqli_query($conn,$q1);
}



?>
<?php 
        $searchKey="";
        $loc = $_GET['destination'];
        $p = "SELECT * From `".$loc."restaurant`";
        $q = "SELECT * From `".$loc."location`";  
        $query = mysqli_query($conn,$p);
        $ss = mysqli_query($conn,$q);
        if(isset($_POST['all']))
        {
          $p = "SELECT * From `".$loc."restaurant`";
          $q = "SELECT * From `".$loc."location`";  
          $query = mysqli_query($conn,$p);
        $ss = mysqli_query($conn,$q);          
        }
        else if(isset($_POST['restaurant']))
        {
          $p = "SELECT * From `".$loc."restaurant`";
          $q = "SELECT * From `".$loc."location` where id = 0";
          $query = mysqli_query($conn,$p);
        $ss = mysqli_query($conn,$q);
        }
        else if(isset($_POST['location']))
        {
          $p = "SELECT * From `".$loc."restaurant` where id = 0";
          $q = "SELECT * From `".$loc."location` ";
          $query = mysqli_query($conn,$p);
        $ss = mysqli_query($conn,$q);
        }
        
        if(isset($_POST['search']))
          {
              $searchKey=$_POST['search'];
              $p = "SELECT * From `".$loc."restaurant` where restaurantname LIKE '%$searchKey%'";
              $q = "SELECT * From `".$loc."location` where locationname LIKE '%$searchKey%'"; 
              $query = mysqli_query($conn,$p);
        $ss = mysqli_query($conn,$q);     
          } 
          else
        {
            $p = "SELECT * From `".$loc."restaurant`";
            $q = "SELECT * From `".$loc."location`";
            $searchKey = "";  
            $query = mysqli_query($conn,$p);
        $ss = mysqli_query($conn,$q);
        if(isset($_POST['all']))
        {
          $p = "SELECT * From `".$loc."restaurant`";
          $q = "SELECT * From `".$loc."location`";  
          $query = mysqli_query($conn,$p);
        $ss = mysqli_query($conn,$q);          
        }
        else if(isset($_POST['restaurant']))
        {
          $p = "SELECT * From `".$loc."restaurant`";
          $q = "SELECT * From `".$loc."location` where id = 0";
          $query = mysqli_query($conn,$p);
        $ss = mysqli_query($conn,$q);
        }
        else if(isset($_POST['location']))
        {
          $p = "SELECT * From `".$loc."restaurant` where id = 0";
          $q = "SELECT * From `".$loc."location` ";
          $query = mysqli_query($conn,$p);
        $ss = mysqli_query($conn,$q);
        }        
        } 
        
                    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Itinerary</title>
    <link rel="stylesheet" href="usergenerator_test.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    
</head>
<style>
:root{
  --primary:#4bb6b7;
  --secondary:#FFFFFF;
  --gray:#575757;
  --lightgray:#848484;
  --lightgray2:rgb(127,183,126,0.1);
  --darkgray:#2E3238;
  --black:#393e46;
  --green:#00AD7C;
  --yellow:#FFEA61;

  --shadow:0px 2px 8px 0px var(--lightgray);
}

.wrapper {
  width: 95%;
  margin: 20px;
  text-align: right;
  padding: 20px;
}
 
/*FILTER*/
.button-value {
  border: 1px solid #000000;
  padding: 1em 2.2em;
  border-radius: 3em;
  background-color: transparent;
  color: #000000;
  cursor: pointer;
  margin: 5px;
  /* position:absolute; */
}

.active {
  background-color: #000000;
  color: #ffffff;
}

.header
    {
        display: flex;
        padding: 1rem;
        margin: 0;
    }
.search-wrapper
{
  border: 1px solid black;
  border-radius: 30px;
  height: 50px;
  /* align-items: center; */
  /* overflow-x: hidden; */
  /* margin: auto; */
  width: 300px;
  margin: 3px;
}
.search-wrapper button
{
  display: inline-block;
  padding: 0rem .5rem;
  color: black;
  border: none;
  background-color: transparent;
  margin-right: 15px;
  /* float: right; */
  position: absolute;
  top: 160px;
  z-index: 999;
  left: 250px;
}

.search-wrapper span
{
  font-size: 15px;
  margin-left: 10px;
}
.search-wrapper input
{
  height: 100%;
  padding: .8rem;
  border: none;
  outline: none;
  background: transparent;
  color: gray;
  padding-left: 20px;
  margin-top: 5px;
}


.container_product {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  border: none;
  outline: none;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
  left: 20px;
  display: grid;
  grid-template-columns:15% 15% 15% ;
  grid-gap: 2px;
}

/* .card .card-content button {
  cursor: pointer;
  color: #fff;
  width: 100%;
  height: 50px;
  font-size: 22px;
  font-weight: 600;
  border-radius: 12px;
  background: linear-gradient(45deg, #fabd14, #eb9616  );
}


.card .card-content.add-to-cart:hover {
  background: linear-gradient(45deg, aqua, #00ffff);
}

  .card {
    background-color: #ffffff;
    max-width: 18em;
    margin-top: 1em;
    padding: 1em;
    border-radius: 5px;
    box-shadow: 1em 2em 2.5em rgba(1, 2, 68, 0.08);
  }
  .image-container {
    text-align: center;
  }
  img {
    max-width: 100%;
    object-fit: contain;
    height: 15em;
  }
  
  .container h5 {
    font-weight: 500;
  }
  .hide {
    display: none;
  }
  @media screen and (max-width: 720px) {
    img {
      max-width: 100%;
      object-fit: contain;
      height: 10em;
    }
    .card {
      max-width: 18em;
      margin-top: 1em;
    }
  
  } */

.sidenav {
  background-color: #f0eeee;
  width: 50%;
  padding-bottom: 90px;
  padding-top: 20px;

  
  
 
 
}
.sidenav h2{
text-align: center;
}

.container_calendar {
  background-color: #ffffff;
  padding:20px;
  width: 85%;
  margin: 60px;
  box-shadow: 0 0 16px -4px rgba(0, 0, 0, 0.75);
}

.add{
  cursor: pointer;
  width: 15%;
  height: 50px;
  font-size: 20px;
  font-weight: 600;
  border-radius: 5px;
  color: var(--secondary);
  background: var(--primary);
  /* float: right; */
  /* margin-right:60px ; */
  margin-left: 80%;
  transition: 0.5s;
  text-decoration: none;
}

.add:hover{
  background: var(--darkgray);
}

.delete{
  cursor: pointer;
  width: 15%;
  height: 50px;
  font-size: 20px;
  font-weight: 600;
  border-radius: 5px;
  color: var(--secondary);
  background: var(--primary);
  transition: 0.5s;
  text-decoration: none;
  float: left;
  margin-left:60px;
  padding: 0.6rem 0.8rem;
  transition: 0.5s;
  text-align: center;
}

.delete:hover{
  background: var(--darkgray);
}

.print{
  cursor: pointer;
  width: 20%;
  height: 50px;
  font-size: 20px;
  font-weight: 600;
  border-radius: 5px;
  color: var(--secondary);
  background: var(--primary);
  transition: 0.5s;
  text-decoration: none;
  margin-left:60px;
  padding: 0.6rem 0.8rem;
  transition: 0.5s;
  float: right;
  margin-right:60px;
  text-align: center;
  text-decoration:none;
}

.print:hover{
  background: var(--darkgray);
}

body
{
background-image: url(images/image.gif);
background-size: cover; 
background-repeat: no-repeat;
background-attachment: fixed;
}

.button:hover{
  background: var(--darkgray);
}  

.buttons{
  display: inline-block;
  width: calc(50% - 5px);
  text-align: center;
  padding: 0.6rem 0.8rem;
  font-size: 0.9rem;
  font-weight: 700;
  margin-top: 8px;
  margin-right: 5px;
  color: var(--secondary);
  background: var(--primary);
  border-radius: 0.5rem;
  cursor: pointer;
  text-decoration: none;
  transition: 0.5s;
}

.close{
  position: absolute;
  top:-15px;
  right: -15px;
  background:#fff;
  height: 20px;
  width: 20px;
  border-radius: 50%;
  box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
  cursor:pointer;
}
#submit
{
      margin: 10px auto;
      margin-bottom: 20px;
      width: 100%;
      padding:5px;
      border-radius: #fff;
      position:relative;
}

/* hot tour */
.container-fluid{
  width:40%;
}

.hot {
  max-width: 100%;
  padding: 10px 20px 20px 20px;
  align-items: center;
  background:none;
  
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
  grid-template-columns:50% 50% ;
  grid-gap: 30px;
  
}

.hot .tourbox-container .tour-box{
  background-color: var(--secondary);
  border-radius: 0.5rem;
  box-shadow: var(--shadow);
  height: 95%;
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
  /* height: 50%; */
}

.hot .tourbox-container .tour-box .content .btn {
  display: inline-block;
  width: calc(50% - 5px);
  text-align: center;
  padding: 0.6rem 0.8rem;
  font-size: 0.9rem;
  font-weight: 700;
  margin-top: 8px;
  margin-right: 5px;
  color: var(--secondary);
  background: var(--primary);
  border-radius: 0.5rem;
  cursor: pointer;
  text-decoration: none;
  transition: 0.5s;
}

.hot .tourbox-container .tour-box .content .btn:last-child {
  margin-right: 0;
}

.hot .tourbox-container .tour-box .content .btn:hover {
  background: var(--darkgray);
}
input{
width: 100%;
padding: 5px;
}
.container-fluid
{
  position: absolute;
}
.sidenav
{
  margin-left: 45%;
}
.day
{
  margin-bottom: 100px;
}
.number
{
  width: 80%;
  border-radius: .5rem;
  font-size: 1rem;
  text-align: center;
}

#close
{
  float: right;
  color: red;
  /* position: absolute; */
}
#close:hover{
  transition: 0.6s;
  color: black;
}
.add a
{
    text-decoration: none;
    color: white;
}
</style>
<body>

	
<div id="buttons" class="">
  <form action="" method="post">
			  <button class="button-value" name="all">All</button>
			  
			  <button class="button-value" name="restaurant">
				RESTAURANT
			  </button>
			  <button class="button-value" name ="location">
				LOCATION
</button>
  </form>
        <form action="" method="post">
        <div class="header">
			  <div class="search-wrapper">
        <!-- <form action="" method="post"> -->
				<input style="color: black;" type="text" name="search" placeholder="Search here" value="<?php echo $searchKey?>">
				<button  name="submit"><span class="fa fa-search"></span></button>
</form>
        
					
</div>
				</div>
			</div>
      <div class="container-fluid">
      <section class="hot" id="hot">
      <div class="tourbox-container">
          <?php
          // $query = "SELECT * FROM usergenerator";
          // $result = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_assoc($query)) {
                 
          ?>
                  <div class="tour-box">
                  <form method="post">
                      <div class="image">
                          <img src="<?php echo $row['restaurantimage']; ?>">
                          <h3><i class="fas fa-map-marker-alt"></i> <?php echo $row['restaurantname']; ?></h3>
                      </div>
                      <div class="content">
                      <input type="hidden" name="link" value="<?php echo $row['restaurantlink']?>">
                      <input type="hidden" name="product_name"  value="<?php echo $row["restaurantname"]; ?>" >
                      <input type="hidden" name="id" value="<?php echo $row['id']?>">
                            <label style="color
                            :black; font-size:1.2rem; font-weight:600;" class="day" for="">Day:</label>
                      <input type="number" class="number" name="des_day"  min="1" value="0">
                          <input style="font-size: 1rem; padding:0.6rem 0.8rem;" type="submit" class="btn btn-warning btn-block" id="submit" name="add_to_cart" value="Add to Itinerary">
                      </div>
                  </div>
              </form>
                  <?php 
                }
                while ($row1 = mysqli_fetch_assoc($ss))
                {
                ?>
                  <div class="tour-box">
                  <form method="post">
                      <div class="image">
                          <img src="<?php echo $row1['locationimage']; ?>">
                          <h3><i class="fas fa-map-marker-alt"></i> <?php echo $row1['locationname']; ?></h3>
                      </div>
                      <div class="content">
                      <input type="hidden" name="product_name1"  value="<?php echo $row1["locationname"]; ?>" >
                      <input type="hidden" name="link1" value="<?php echo $row1['locationlink']?>">
                            <input type="hidden" name="id1" value="<?php echo $row1['id']?>">
                            <label style="color
                            :black; font-size:1.2rem; font-weight:600;" class="day" for="">Day:</label>
                      <input type="number" class="number" name="des_day1"  value="0">
                          <input style="font-size: 1rem; padding:0.6rem 0.8rem;" type="submit" class="btn btn-warning btn-block" id="submit" name="add_to_cart1" value="Add to Itinerary">
                      </div>
                  </div>
              </form>
              <?php
                  }
              
              ?>
          </div>
      </section>
  </div>
                    <div class="sidenav">
                        <h2 class="text-center">Itinerary</h2>
<form action="" method="post">
                        <button name="addtrip" class="add"><a href="useraddtrip.php?email=<?php echo $email?>&destination=<?php echo $loc?>&num_days=<?php echo $day?>">Add Trip</a></button>

                        
<?php
$no=1;
                        $query ="SELECT * FROM  `generator`";
                        $result = mysqli_query($conn,$query);
                        while ($r = mysqli_fetch_array($result)){?>

                    
                          
                          <div class="container_calendar">
                            <div class="calendar">
                            <div class="link"><a href="userdeldestination.php?email=<?php echo $email?>&destination=<?php echo $loc?>&num_days=<?php echo $day?>&id=<?php echo $r['id']?>"><span id="close" class="fa fa-close"></span></a></div>

                              <h3>Day <?php echo $r['day'];?></h3>
                              <input name="day" type="hidden" value ="<?php echo $r['day'];?>">
                                  

                              </div>
                              
                              <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                              <div class="add_destination">
                              <p>
                                <?php if($r['day'] == $no){
                                  echo $r['destination'];
                                } 
                                ?>
                            </p>
                              </div>
                          
                          </div>
                              <div class="line"></div>
                          <?php 
                        $no++;
                        }?>
                        <a href="userdelete.php?email=<?php echo $email?>&destination=<?php echo $loc?>&num_days=<?php echo $day?>" style="text-decoration: none; color:white;" class="delete">Delete Trip</a>
                        <a style="text-decoration: none; color:white;" href="usergeneratepdf.php?email=<?php echo $email?>&destination=<?php echo $loc?>&num_days=<?php echo $day?>" class="print">Save & Print</a>
                        </form>

                      
                         
                    </div>
                </div>
            </div>
        </div>


 
<?php echo $msg?>

 


</body>
<script>

  function show()
  {
    document.querySelector('.popup').style.display = 'flex'
  }


document.querySelector('.close').addEventListener('click',function(){
  document.querySelector('.popup').style.display='none';
})

</script>
</html>