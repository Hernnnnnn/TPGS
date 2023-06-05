<?php
session_start();

include('dataconnection.php');
$host = "localhost";
	$username = "root";
	$password = "";
	$database = "tpgs";
$connect =mysqli_connect("localhost","root","","tpgs");
if(isset($_POST['add_to_cart'])){
    if (isset($_SESSION['cart'])) {

        $session_array_id=array_column($_SESSION['cart'],"id");

        if(!in_array($_GET['id'],$session_array_id)){
            $session_array =array(
                'id' =>$GET['id'],
                "name" =>$_POST['name'],
                "price" =>$_POST['price'],
                "quantity" => $_POST['quantity']
            );
        };
    }
    else{
        $session_array =array(
            'id' =>$GET['id'],
            "name" =>$_POST['name'],
            "price" =>$_POST['price'],
            "quantity" => $_POST['quantity']
        );
        $_SESSION['cart'][]=$session_array;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="usergenerator_test.css">
    <LINK rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<style>
    
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
    margin: 1px;
  }
  .active {
    background-color: #000000;
    color: #ffffff;
  }

 /*dehui的searchbar*/

 .search-wrapper
 {
     border: 1px solid black;
     border-radius: 30px;
     height: 50px;
   
     /* align-items: center; */
     overflow-x: hidden;
     /* margin: auto; */
     width: 300px;
     float: left;
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
 }

 .search-wrapper span
 {
     font-size: 15px;
     margin-left: 10px;
 }
 .search-wrapper input
 {
     height: 100%;
     padding: .5rem;
     border: none;
     outline: none;
     background: transparent;
     color: gray;
     padding-left: 20px;
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


.card .card-content button {
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
  
  }

  .sidenav {
 background-color: #f0eeee;
width: 50%;

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
  color: #fff;
  width: 15%;
  height: 50px;
  font-size: 20px;
  font-weight: 600;
  border-radius: 5px;
  background: linear-gradient(45deg, #fabd14, #eb9616  );
  /* float: right; */
  /* margin-right:60px ; */
  margin-left: 80%;

 

}


.delete{
  cursor: pointer;
  color: #fff;
  width: 15%;
  height: 50px;
  font-size: 20px;
  font-weight: 600;
  border-radius: 5px;
  background: linear-gradient(45deg, #fabd14, #eb9616  );
  float: left;
  margin-left:60px;
  

}

.print{
  cursor: pointer;
  color: #fff;
  width: 15%;
  height: 50px;
  font-size: 20px;
  font-weight: 600;
  border-radius: 5px;
  background: linear-gradient(45deg, #fabd14, #eb9616  );
  float: right;
  margin-right:60px;

  
}

body
{
background-image: url(images/image.gif);
background-size: cover; 
background-repeat: no-repeat;
background-attachment: fixed;
}


/* .popup{
  background:rgba(0, 0, 0, 0.6) ;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  display: none;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.popup-content{
  height: 250px;
  width: 500px;
  background: #fff;
  padding: 20px;
  border-radius: 5px;
  position: relative;



}

input{
    margin: 10px auto;
    margin-bottom: 20px;
  
    width: 50%;
    padding:5px;
    border-radius: #fff;
    position:relative;
}




.button{
background:#fff;
padding:10px 15px;
color: #34495e;
font-weight: bolder;
text-transform: uppercase;
font-size: 18px;
border-radius: 5px;
box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
margin:25px;
transition: 0.4s;


}

.button:hover{
    background: #34495e;
    color: #fff;
} */
</style>
<body>

	
<div id="buttons">
			  <button class="button-value" onclick="filterProduct('all')">All</button>
			  
			  <button class="button-value" onclick="filterProduct('RESTAURANT')">
				RESTAURANT
			  </button>
			  <button class="button-value" onclick="filterProduct('DESTINATION')">
				DESTINATION
			  </button>
			  <div class="search-wrapper">
				<input type="text" name="search" placeholder="Search here" >
	
				<button type="submit" name="submit"><span class="fa fa-search"></span></button>
					
					
				</div>
			</div>
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                     <div class="col-md-6">
                        <h2 class="text-center"></h2>
<div class="col-md-12">
    <div class="row">
         

                        <?php
                        $query ="SELECT * FROM  usergenerator";
                        $result = mysqli_query($conn,$query);




                        while ($row = mysqli_fetch_array($result)){?>

                        <div class="col-md-4 ">
                            <form method="post" action="index.php?id=<?php $row['des_id'] ?>">
                            <img src="<?=$row['des_img']?>" style ='height:150px;'>
                            <h5><?= $row['des_Name']; ?></h5> 

                            <input type="submit"  id="button" class="btn btn-warning btn-block my-3" value="Add To Cart">
                            

                            </form>
                        </div>

                        <?php
                        
                        }
                        ?>

</div>
</div>


                    </div>
                    <div class="sidenav">
                        <h2 class="text-center">Location</h2>

                        <button class="add">Add Trip</button>

			<div class="container_calendar">
				<div class="calendar">
					<h3>Day 1</h3>
				

					</div>
					
					<hr style="height:2px;border-width:0;color:gray;background-color:gray">
					<div class="add_destination">
					<h4>add destination</h4>
					
					</div>
			
			</div>
        	<div class="line"></div>
			<div class="container_calendar">
				<div class="calendar">
					<h3>Day 1</h3>
					
					</div>
				<hr style="height:2px;border-width:0;color:gray;background-color:gray">
					<div id="add_destination">
						<h4>add destination</h4>
					</div>
			</div>

			
			<div class="container_calendar">
				<div class="calendar">
					<h3>Day 1</h3>
					</div>
					<hr style="height:2px;border-width:0;color:gray;background-color:gray">
					<div class="add_destination"  >
						<h4 >add destination</h4>
					</div>
			</div>


			<div class="container_calendar">
				<div class="calendar">
					<h3>Day 1</h3>
					</div>
					<hr style="height:2px;border-width:0;color:gray;background-color:gray">
					<div class="add_destination">
						<h4>add destination</h4>
					</div>
			</div>
		<button class="delete">delete</button>
		<button class="print">Print</button>
	

                      
                         
                    </div>
                </div>
            </div>
        </div>


<!-- <div class="popup">
  <div class="popup-content">
  <form >

  <label for="days">Choose a day:</label>
  <select name="days" id="days">
    <option value="days">Day 1</option>
    <option value="days">Day 2</option>
    <option value="days">Day 3</option>
  </select>
  <br><br>

  <label for="duration">Duration:</label><br>
  <input type="text" id="duration" name="duration"><br>

  <a href="#" class="button">submit</a>

  
</form>
  </div>

</div> -->

<!-- <script>
    document.getElementById("button"),addEventListener("click",function({
        document.querySelector(".popup").style.display="flex";
    }))
    </script> -->


</body>
</html>