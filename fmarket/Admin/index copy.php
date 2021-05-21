<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fmarket</title>
	 <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

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
                    <!--li class="active"><a href="index.php"> &nbsp; &nbsp; &nbsp; Home</a></li-->
                    <li class="active"><a href="customers.php"> &nbsp; &nbsp; &nbsp; Dashboard</a></li>
					<li><a data-toggle="modal" data-target="#uploadModal"> &nbsp; &nbsp; &nbsp; Upload Items</a></li>
					<li><a href="items.php"> &nbsp; &nbsp; &nbsp; Item Management</a></li>					
					<li><a href="orderdetails.php"> &nbsp; &nbsp; &nbsp; Order Details</a></li>
					<li><a href="logout.php"> &nbsp; &nbsp; &nbsp; Logout</a></li>
					
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php   extract($_SESSION); echo $admin_username; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            
			
			
			
			
			
			<!-- <!--image sliders-->


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
			<div class="alert alert-default" style="background-color:#000;">
                       <p style="color:white;text-align:center;">
                       &copy 2021 Fmarket| All Rights Reserved |  

						</p>
                        
                    </div>
            
                </div>
            </div>

           

           
        </div>
		
		
		
    </div>
    <!-- /#wrapper -->

	
	<!-- Mediul Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Upload Items</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="additems.php">
                   <fieldset>
					
						
                            <p>Name of Item:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Name of Item" name="item_name" type="text" required>
                           
							 
							</div>
							
							
							
							
							
							
							
							
							<p>Price:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Price" name="item_price" type="text" required>
                           
							 
							</div>
							
							
							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
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
