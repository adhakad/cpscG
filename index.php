<?php
		include "database.php";
		$db = new database();
		$query = "SELECT * FROM crud1";
		$read = $db->select($query);
                
                $query = "SELECT * FROM crud1";
		$read1 = $db->select($query);
                
                $query = "SELECT * FROM crud1";
		$read2 = $db->select($query);
                
                $query = "SELECT * FROM crud1";
		$read3 = $db->select($query);
                
                $query = "SELECT * FROM crud1";
		$read4 = $db->select($query);
 		?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Beryllium &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="FreeHTML5.co" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="styl.css">
        <link rel="stylesheet" href="styles.css"><!-- use for header & img slider section -->
        
	</head>
	<body>            	
                        <div class="gtco-container" style="margin-top: 200px; padding:0px 0px 0px 20px;">
                            
			    <div class="row">
				<div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth" >
                                            <?php if ($read) { ?>
			                        <?php while($row = $read->fetch_array())  { ?>                                            
                                        <img src="<?php echo 'imagess/'.$row['image'];?>" height="150px"style="border:2px solid transparent;border-radius: 7px;"/>
     			                        <?php } ;?>
		                            <?php } ;?>
                                    </div>
				</div>                                  
		            </div>
	                </div>
                        
                        <div class="gtco-container" style="margin-top: 100px; padding:0px 0px 0px 20px;background-color:#432727;">
                            <div class="row">
                                <div class="col-xs-2 col-xs-offset-5">
                                    <h2 style="color: #e1e1e1;">School Faculty</h2>
                                </div>
                            </div>
                            <div class="container">
                            <div class="row" style="padding-top: 80px;padding-bottom: 100px;">
                                
                                <div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth">
                                    <?php if ($read1) { 
			              while($row = $read1->fetch_array())  { ?>                                            
                                           <div class="card">
                                               <div class="box">
                                                    <div class="img">
                                                        <img src="img/model.jpg">
                                                    </div>
                                                   <h2>Abhishek Dhakad<br><span style="background-color:#432727;">Web Graphic Designer</span></h2>
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    <span>
                                                         <ul>
                                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </span>
                                                </div>
                                            </div>
     			                       
                                        <?php } };?>                               
                                    </div>
				</div> 
		            </div>
                            </div>
	                </div>
                        <div class="gtco-container" style="margin-top: 100px; padding:0px 0px 0px 20px;background-color: #004843;">
                            <div class="row">
                                <div class="col-xs-2 col-xs-offset-5">
                                    <h2 style="color: #e1e1e1;">School Faculty</h2>
                                </div>
                            </div>
                            <div class="row" style="padding-top: 80px;padding-bottom: 100px;">
                                
                                <div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth">
                                    <?php if ($read2) { 
			              while($row = $read2->fetch_array())  { ?>                                            
                                           <div class="card">
                                               <div class="box">
                                                    <div class="img">
                                                        <img src="img/model.jpg">
                                                    </div>
                                                   <h2>Abhishek Dhakad<br><span style="background-color:#004843;">Web Graphic Designer</span></h2>
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed incididunt ut labore et.</p>
                                                    <span>
                                                         <ul>
                                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </span>
                                                </div>
                                            </div>
     			                       
                                        <?php } };?>                               
                                    </div>
				</div> 
		            </div>
	                </div>
                        <div class="container" style="margin-top: 100px; padding:0px 0px 0px 20px;border-radius: 7px;"><!--background:linear-gradient(to right , #ff1d7f,#f7a3a6);-->
                            <div class="row" style="padding-top: 80px;padding-bottom: 50px;">                                
                                <div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth-a">
                                           <div class="cards">
                                               <div class="boxs">  
                                                   <div class="imgs">
                                                       <img class="img1" src="images/person_1.jpg">
                                                       <img class="img2" src="images/teacher.png">
                                                    </div>
                                                   <div class="row" style="padding-left: 15px;">
                                                       <div class="col-xs-4">
                                                           <h6 style="color: #7b7b7b;font-size: 10px;font-family: sans-serif;font-weight: bold;letter-spacing: 2px;">MATHEMATICS</h6>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-7">
                                                           <h6 style="color: #000;font-size: 12px;font-family: sans-serif;font-weight: bold;padding-bottom: 3px;">Tricks to improve your</h6>
                                                           <h6 style="color: #000;font-size: 12px;margin-left: 10px;font-family: sans-serif;font-weight: bold;">Vocabulary by Abhishek</h6>
                                                       </div>
                                                       <div class="col-xs-5">   
                                                            <a class="btn btn-md" style="padding: 4px;border: 1px solid transparent;border-radius:30px;width: 80px;height: 30px;background-color: #8939e2;color: #fff;">Join now</a>     
                                                       </div>
                                                       <div class="col-xs-8">
                                                           
                                                           <h6 style="font-size: 11px;font-family: sans-serif;"><p style="color:#7b7b7b;letter-spacing: 1px;">15 min * By Abhishek Dhakad</p></h6>
                                                       </div>
                                                       <div class="row" style="padding: 15px;">
                                                           <div class="col-xs-10 col-xs-offset-1" style="height: 1px;background-color:#a3a3a3; ">
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                            </div>
                                     
                                    
                                           <div class="cards">
                                               <div class="boxs">
                                                   <div class="imgs">
                                                       <img class="img1" src="images/person_1.jpg">
                                                       <img class="img2" src="images/teacher.png">
                                                    </div>
                                                   <div class="row" style="padding-left: 15px;">
                                                       <div class="col-xs-4">
                                                           <h6 style="color: #7b7b7b;font-size: 10px;font-family: sans-serif;font-weight: bold;letter-spacing: 2px;">MATHEMATICS</h6>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-7">
                                                           <h6 style="color: #000;font-size: 12px;font-family: sans-serif;font-weight: bold;padding-bottom: 3px;">Tricks to improve your</h6>
                                                           <h6 style="color: #000;font-size: 12px;margin-left: 10px;font-family: sans-serif;font-weight: bold;">Vocabulary by Abhishek</h6>
                                                       </div>
                                                       <div class="col-xs-5">   
                                                            <a class="btn btn-md" style="padding: 5px;border: 1px solid transparent;border-radius:30px;width: 80px;height: 30px;background-color: #8939e2;color: #fff;">Join now</a>     
                                                       </div>
                                                       <div class="col-xs-8">
                                                           
                                                           <h6 style="font-size: 11px;font-family: sans-serif;"><p style="color:#7b7b7b;letter-spacing: 1px;">15 min * By Abhishek Dhakad</p></h6>
                                                       </div>
                                                       <div class="row" style="padding: 15px;">
                                                           <div class="col-xs-10 col-xs-offset-1" style="height: 1px;background-color:#a3a3a3; ">
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="cards">
                                               <div class="boxs">
                                                   <div class="imgs">
                                                       <img class="img1" src="images/person_1.jpg">
                                                       <img class="img2" src="images/teacher.png">
                                                    </div>
                                                   <div class="row" style="padding-left: 15px;">
                                                       <div class="col-xs-4">
                                                           <h6 style="color: #7b7b7b;font-size: 10px;font-family: sans-serif;font-weight: bold;letter-spacing: 2px;">MATHEMATICS</h6>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-7">
                                                           <h6 style="color: #000;font-size: 12px;font-family: sans-serif;font-weight: bold;padding-bottom: 3px;">Tricks to improve your</h6>
                                                           <h6 style="color: #000;font-size: 12px;margin-left: 10px;font-family: sans-serif;font-weight: bold;">Vocabulary by Abhishek</h6>
                                                       </div>
                                                       <div class="col-xs-5">   
                                                            <a class="btn btn-md" style="padding: 5px;border: 1px solid transparent;border-radius:30px;width: 80px;height: 30px;background-color: #8939e2;color: #fff;">Join now</a>     
                                                       </div>
                                                       <div class="col-xs-8">
                                                           
                                                           <h6 style="font-size: 11px;font-family: sans-serif;"><p style="color:#7b7b7b;letter-spacing: 1px;">15 min * By Abhishek Dhakad</p></h6>
                                                       </div>
                                                       <div class="row" style="padding: 15px;">
                                                           <div class="col-xs-10 col-xs-offset-1" style="height: 1px;background-color:#a3a3a3; ">
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="cards">
                                               <div class="boxs">
                                                   <div class="imgs">
                                                       <img class="img1" src="images/person_1.jpg">
                                                       <img class="img2" src="images/teacher.png">
                                                    </div>
                                                   <div class="row" style="padding-left: 15px;">
                                                       <div class="col-xs-4">
                                                           <h6 style="color: #7b7b7b;font-size: 10px;font-family: sans-serif;font-weight: bold;letter-spacing: 2px;">MATHEMATICS</h6>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-7">
                                                           <h6 style="color: #000;font-size: 12px;font-family: sans-serif;font-weight: bold;padding-bottom: 3px;">Tricks to improve your</h6>
                                                           <h6 style="color: #000;font-size: 12px;margin-left: 10px;font-family: sans-serif;font-weight: bold;">Vocabulary by Abhishek</h6>
                                                       </div>
                                                       <div class="col-xs-5">   
                                                            <a class="btn btn-md" style="padding: 5px;border: 1px solid transparent;border-radius:30px;width: 80px;height: 30px;background-color: #8939e2;color: #fff;">Join now</a>     
                                                       </div>
                                                       <div class="col-xs-8">
                                                           
                                                           <h6 style="font-size: 11px;font-family: sans-serif;"><p style="color:#7b7b7b;letter-spacing: 1px;">15 min * By Abhishek Dhakad</p></h6>
                                                       </div>
                                                       <div class="row" style="padding: 15px;">
                                                           <div class="col-xs-10 col-xs-offset-1" style="height: 1px;background-color:#a3a3a3; ">
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="cards">
                                               <div class="boxs">
                                                   <div class="imgs">
                                                       <img class="img1" src="images/person_1.jpg">
                                                       <img class="img2" src="images/teacher.png">
                                                    </div>
                                                   <div class="row" style="padding-left: 15px;">
                                                       <div class="col-xs-4">
                                                           <h6 style="color: #7b7b7b;font-size: 10px;font-family: sans-serif;font-weight: bold;letter-spacing: 2px;">MATHEMATICS</h6>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-7">
                                                           <h6 style="color: #000;font-size: 12px;font-family: sans-serif;font-weight: bold;padding-bottom: 3px;">Tricks to improve your</h6>
                                                           <h6 style="color: #000;font-size: 12px;margin-left: 10px;font-family: sans-serif;font-weight: bold;">Vocabulary by Abhishek</h6>
                                                       </div>
                                                       <div class="col-xs-5">   
                                                            <a class="btn btn-md" style="padding: 5px;border: 1px solid transparent;border-radius:30px;width: 80px;height: 30px;background-color: #8939e2;color: #fff;">Join now</a>     
                                                       </div>
                                                       <div class="col-xs-8">
                                                           
                                                           <h6 style="font-size: 11px;font-family: sans-serif;"><p style="color:#7b7b7b;letter-spacing: 1px;">15 min * By Abhishek Dhakad</p></h6>
                                                       </div>
                                                       <div class="row" style="padding: 15px;">
                                                           <div class="col-xs-10 col-xs-offset-1" style="height: 1px;background-color:#a3a3a3; ">
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="cards">
                                               <div class="boxs">
                                                   <div class="imgs">
                                                       <img class="img1" src="images/person_1.jpg">
                                                       <img class="img2" src="images/teacher.png">
                                                    </div>
                                                   <div class="row" style="padding-left: 15px;">
                                                       <div class="col-xs-4">
                                                           <h6 style="color: #7b7b7b;font-size: 10px;font-family: sans-serif;font-weight: bold;letter-spacing: 2px;">MATHEMATICS</h6>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-7">
                                                           <h6 style="color: #000;font-size: 12px;font-family: sans-serif;font-weight: bold;padding-bottom: 3px;">Tricks to improve your</h6>
                                                           <h6 style="color: #000;font-size: 12px;margin-left: 10px;font-family: sans-serif;font-weight: bold;">Vocabulary by Abhishek</h6>
                                                       </div>
                                                       <div class="col-xs-5">   
                                                            <a class="btn btn-md" style="padding: 5px;border: 1px solid transparent;border-radius:30px;width: 80px;height: 30px;background-color: #8939e2;color: #fff;">Join now</a>     
                                                       </div>
                                                       <div class="col-xs-8">
                                                           
                                                           <h6 style="font-size: 11px;font-family: sans-serif;"><p style="color:#7b7b7b;letter-spacing: 1px;">15 min * By Abhishek Dhakad</p></h6>
                                                       </div>
                                                       <div class="row" style="padding: 15px;">
                                                           <div class="col-xs-10 col-xs-offset-1" style="height: 1px;background-color:#a3a3a3; ">
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="cards">
                                               <div class="boxs">
                                                   <div class="imgs">
                                                       <img class="img1" src="images/person_1.jpg">
                                                       <img class="img2" src="images/teacher.png">
                                                    </div>
                                                   <div class="row" style="padding-left: 15px;">
                                                       <div class="col-xs-4">
                                                           <h6 style="color: #7b7b7b;font-size: 10px;font-family: sans-serif;font-weight: bold;letter-spacing: 2px;">MATHEMATICS</h6>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-7">
                                                           <h6 style="color: #000;font-size: 12px;font-family: sans-serif;font-weight: bold;padding-bottom: 3px;">Tricks to improve your</h6>
                                                           <h6 style="color: #000;font-size: 12px;margin-left: 10px;font-family: sans-serif;font-weight: bold;">Vocabulary by Abhishek</h6>
                                                       </div>
                                                       <div class="col-xs-5">   
                                                            <a class="btn btn-md" style="padding: 5px;border: 1px solid transparent;border-radius:30px;width: 80px;height: 30px;background-color: #8939e2;color: #fff;">Join now</a>     
                                                       </div>
                                                       <div class="col-xs-8">
                                                           
                                                           <h6 style="font-size: 11px;font-family: sans-serif;"><p style="color:#7b7b7b;letter-spacing: 1px;">15 min * By Abhishek Dhakad</p></h6>
                                                       </div>
                                                       <div class="row" style="padding: 15px;">
                                                           <div class="col-xs-10 col-xs-offset-1" style="height: 1px;background-color:#a3a3a3; ">
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                        <div class="cards">
                                               <div class="boxs">
                                                   <div class="imgs">
                                                       <img class="img1" src="images/person_1.jpg">
                                                       <img class="img2" src="images/teacher.png">
                                                    </div>
                                                   <div class="row" style="padding-left: 15px;">
                                                       <div class="col-xs-4">
                                                           <h6 style="color: #7b7b7b;font-size: 10px;font-family: sans-serif;font-weight: bold;letter-spacing: 2px;">MATHEMATICS</h6>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-7">
                                                           <h6 style="color: #000;font-size: 12px;font-family: sans-serif;font-weight: bold;padding-bottom: 3px;">Tricks to improve your</h6>
                                                           <h6 style="color: #000;font-size: 12px;margin-left: 10px;font-family: sans-serif;font-weight: bold;">Vocabulary by Abhishek</h6>
                                                       </div>
                                                       <div class="col-xs-5">   
                                                            <a class="btn btn-md" style="padding: 5px;border: 1px solid transparent;border-radius:30px;width: 80px;height: 30px;background-color: #8939e2;color: #fff;">Join now</a>     
                                                       </div>
                                                       <div class="col-xs-8">
                                                           
                                                           <h6 style="font-size: 11px;font-family: sans-serif;"><p style="color:#7b7b7b;letter-spacing: 1px;">15 min * By Abhishek Dhakad</p></h6>
                                                       </div>
                                                       <div class="row" style="padding: 15px;">
                                                           <div class="col-xs-10 col-xs-offset-1" style="height: 1px;background-color:#a3a3a3; ">
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                        <div class="cards">
                                               <div class="boxs">
                                                   <div class="imgs">
                                                       <img class="img1" src="images/person_1.jpg">
                                                       <img class="img2" src="images/teacher.png">
                                                    </div>
                                                   <div class="row" style="padding-left: 15px;">
                                                       <div class="col-xs-4">
                                                           <h6 style="color: #7b7b7b;font-size: 10px;font-family: sans-serif;font-weight: bold;letter-spacing: 2px;">MATHEMATICS</h6>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-xs-7">
                                                           <h6 style="color: #000;font-size: 12px;font-family: sans-serif;font-weight: bold;padding-bottom: 3px;">Tricks to improve your</h6>
                                                           <h6 style="color: #000;font-size: 12px;margin-left: 10px;font-family: sans-serif;font-weight: bold;">Vocabulary by Abhishek</h6>
                                                       </div>
                                                       <div class="col-xs-5">   
                                                            <a class="btn btn-md" style="padding: 5px;border: 1px solid transparent;border-radius:30px;width: 80px;height: 30px;background-color: #8939e2;color: #fff;">Join now</a>     
                                                       </div>
                                                       <div class="col-xs-8">
                                                           
                                                           <h6 style="font-size: 11px;font-family: sans-serif;"><p style="color:#7b7b7b;letter-spacing: 1px;">15 min * By Abhishek Dhakad</p></h6>
                                                       </div>
                                                       <div class="row" style="padding: 15px;">
                                                           <div class="col-xs-10 col-xs-offset-1" style="height: 1px;background-color:#a3a3a3; ">
                                                               
                                                           </div>
                                                       </div>
                                                   </div>
                                                </div>
                                            </div>
                                     </div>
				</div> 
		            </div>
                            </div>
	                </div>
                        <div class="gtco-container" style="margin-top: 100px; padding:0px 0px 0px 20px;">               
			    <div class="row">
				<div class="col-xs-12">
                                    <div class="owl-carousel owl-carousel-fullwidth" >
                                        <?php if ($read4) { ?>
			                        <?php while($row = $read4->fetch_array())  { ?>                                            
                                        
                                        <div><img src="<?php echo 'imagess/'.$row['image'];?>" height="150px"style="border:2px solid transparent;border-radius: 7px;"/></div>
                                        
     			                        <?php } ;?>
		                        <?php } ;?>
                                        
                                    </div>
				</div>                                  
		            </div>
	                </div>            



	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
        <script src="js/main1.js"></script>
	</body>
</html>

