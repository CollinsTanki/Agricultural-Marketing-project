<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location: ../index.php");
}

?>

<?php
 include("config.php");
 extract($_SESSION); 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
		$stmt_edit->execute(array(':user_email'=>$user_email));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
		
		<?php
 include("config.php");
		  $stmt_edit = $DB_con->prepare("select sum(order_total) as total from orderdetails where user_id=:user_id and order_status='Ordered'");
		$stmt_edit->execute(array(':user_id'=>$user_id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmers Market</title> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.css"/> 
	 <link rel="shortcut icon" href="../assets/img/logoo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />
    <link rel="stylesheet" href="css/sty.css">
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
  
                <a class="navbar-brand" href="index.php"><img class="logo-custom" src="../assets/img/logoo.png" alt="" ></a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php"> &nbsp; <span class='glyphicon glyphicon-home'></span> Home</a></li>
					<li><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Shop Now</a></li>
					<li><a href="cart_items.php"> &nbsp; <span class='fa fa-cart-plus'></span> Shopping Cart Lists</a></li>
					<li><a href="orders.php"> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> My Ordered Items</a></li>
					<!--li><a href="view_purchased.php"> &nbsp; <span class='glyphicon glyphicon-eye-open'></span> Previous Items Ordered</a></li-->
					<li><a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-gear'></span> Account Settings</a></li>
					<li><a href="logout.php"> &nbsp; <span class='glyphicon glyphicon-off'></span> Logout</a></li>
					
                    
                </ul>
              
                <ul class="nav navbar-nav navbar-right navbar-user">                
                    <li class="dropdown messages-dropdown">                    
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
					<li class="dropdown user-dropdown">
                        <a href="cart_items.php"> Cart<span class='glyphicon glyphicon-shopping-cart'></span><!--?php echo $total; ?--> </b></a>
                       
                    </li>
					
					
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user_email; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#setAccount"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                        
                    </li>
                </ul>
            </div>
        </nav>
        <!--image sliders-->


        <div class="container">           
        <div class="row text-center py-5">
        <h2 class="title">Featured Products</h2>
        <hr>
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="index.php" method="post">
                    <div class="card shadow">

                    <div>
                    <img src="../assets/img/veg.jpg" alt="image1" class="img-fluid card-img-top">

            </div>
            <div class="card-body"> 
                <h5 class="card-title">Product1</h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>

               </h6>
               <p class="card-text">
                   <!--Some quick example text to build on the card-->
                </p>
                <h5>
                    <small><s class="text-secondary">KES600</s></small>
                    <br>
                    <span class="price">KES519</span>
               </h5>
               <!--button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button-->
              </div>
             </div>            
            </div>
            <div class="col-md-3 col-sm-6 my-3 my-md-0  ">
            <form action="index.php" method="post">
                    <div class="card shadow">

                    <div>
                    <img src="../assets/img/veggies.jpg" alt="image1" class="img-fluid card-img-top">

            </div>
            <div class="card-body"> 
                <h5 class="card-title">Product2</h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>

               </h6>
               <p class="card-text">
                   <!--Some quick example text to build on the card-->
                </p>
                <h5>
                    <small><s class="text-secondary">KES500</s></small>
                    <br>
                    <span class="price">KES380</span>
               </h5>
               <!--button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button-->
              </div>
             </div>  

            </div>
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                    <div class="card shadow">

                    <div>
                    <img src="../assets/img/cabbage.jpg" alt="image1" class="img-fluid card-img-top">

            </div>
            <div class="card-body"> 
                <h5 class="card-title">Product3</h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>

               </h6>
               <p class="card-text">
                   <!--Some quick example text to build on the card-->
                </p>
                <h5>
                    <small><s class="text-secondary">KES800</s></small>
                    <br>
                    <span class="price">KES600</span>
               </h5>
               <!--button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button-->
              </div>
             </div>
            </div>
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                    <div class="card shadow">

                    <div>
                    <img src="../assets/img/spinach.jpg" alt="image1" class="img-fluid card-img-top">

            </div>
            <div class="card-body"> 
                <h5 class="card-title">Product4</h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>

               </h6>
               <p class="card-text">
                   <!--Some quick example text to build on the card-->
                </p>
                <h5>
                    <small><s class="text-secondary">KES1000</s></small>
                    <br>
                    <span class="price">KES800</span>
               </h5>
               <!--button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button-->
              </div>
             </div>
            </div>
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                    <div class="card shadow">

                    <div>
                    <img src="../assets/img/tomato.jpg" alt="image1" class="img-fluid card-img-top">

            </div>
            <div class="card-body"> 
                <h5 class="card-title">Product4</h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>

               </h6>
               <p class="card-text">
                   <!--Some quick example text to build on the card-->
                </p>
                <h5>
                    <small><s class="text-secondary">KES800</s></small>
                    <br>
                    <span class="price">KES600</span>
               </h5>
               <!--button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button-->
              </div>
             </div>
            </div>
            <br>
                    <br>
                    <hr>
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                    <div class="card shadow">

                    <div>
                    <img src="../assets/img/lea.jpg" alt="image1" class="img-fluid card-img-top">                 
                    

            </div>
            <div class="card-body"> 
                <h5 class="card-title">Product5</h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>

               </h6>
               <p class="card-text">
                   <!--Some quick example text to build on the card-->
                </p>
                <h5>
                    <small><s class="text-secondary">KES800</s></small>
                    <br>
                    <span class="price">KES600</span>
               </h5>
               <!--button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button-->
              </div>
             </div>
            </div>
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                    <div class="card shadow">

                    <div>
                    <img src="../assets/img/carrot.jpg" alt="image1" class="img-fluid card-img-top">

            </div>
            <div class="card-body"> 
                <h5 class="card-title">Product6</h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>

               </h6>
               <p class="card-text">
                   <!--Some quick example text to build on the card-->
                </p>
                <h5>
                    <small><s class="text-secondary">KES800</s></small>
                    <br>
                    <span class="price">KES600</span>
               </h5>
               <!--button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button-->
              </div>
             </div>
            </div>
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                    <div class="card shadow">

                    <div>
                    <img src="../assets/img/to.jpg" alt="image1" class="img-fluid card-img-top">

            </div>
            <div class="card-body"> 
                <h5 class="card-title">Product7/h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>

               </h6>
               <p class="card-text">
                   <!--Some quick example text to build on the card-->
                </p>
                <h5>
                    <small><s class="text-secondary">KES800</s></small>
                    <br>
                    <span class="price">KES600</span>
               </h5>
               <!--button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button-->
              </div>
             </div>
            </div>

        </div>
    </div>
    <div class="alert alert-default" style="background-color:#f5e8e6;">
                       <p style="color:#000;text-align:center;">
                       &copy 2021 FMarket| All Rights Reserved |  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        	<!-- Mediul Modal -->
        <div class="modal fade" id="setAccount" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Account Settings</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="settings.php">
                   <fieldset>
					
						
                            <p>Firstname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Firstname" name="user_firstname" type="text" value="<?php  echo $user_firstname; ?>" required>
                           
							 
							</div>
							
							
							<p>Lastname:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Lastname" name="user_lastname" type="text" value="<?php  echo $user_lastname; ?>" required>
                           
							 
							</div>
							
							<p>Address:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Address" name="user_address" type="text" value="<?php  echo $user_address; ?>" required>
                           
							 
							</div>
							
							<p>Password:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="<?php  echo $user_password; ?>" required>
                           
							 
							</div>
							
							<div class="form-group">
							
                                <input class="form-control hide" name="user_id" type="text" value="<?php  echo $user_id; ?>" required>
                           
							 
							</div>
							
							
							
							
				
							
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-block btn-success btn-md" name="user_save">Save</button>
				
				 <button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
	  	  <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
</body>
</html>
