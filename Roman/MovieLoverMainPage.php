<html>
<head>
    <meta charset="utf-8">
    <title>MovieLoverMainPage</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link rel="stylesheet" href="css/main_css.css" type="text/css"/>

</head>
<body>
<header>
    <div data-target=".navbar" data-offset="50">

          <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>  
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#"><img id="logo_pic" src="img/logomovielover.png"></a>
              </div>
              
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li><a href="#section1">Home</a></li>
                    <li><a href="MovieList.php">Movies</a></li>
                    <li><a href="#section3">News</a></li>
                    <li><a href="#section4">Contact Us</a></li>
                    <li>
                    
            
                    <!-- Trigger/Open The Modal -->
                    <a id="myBtn">Login/Register</a>
                    
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                    
                      <!-- Modal content -->
                      <div class="modal-content" >
                        <span class="close">&times;</span>

                        <h1>Login/Register</h1>
                        
                        <form action="loginprocess.php" method="post">
                        <div class="form-group login" >
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" onchange="input_check(this.id)">
                            </div>
                            <div class="form-group login">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" onchange="input_check(this.id)">
                                </div>
                            
                                Not a member yet? 
                                <a href="registerpage.php"> Join us Now!</a>
                                <br>
                                Forgot your password? <a>Click here</a>
                                <br> 

                                <input type="submit"name="submit" class="btn btn-info" value="Login">
                        
                                </form>

            </div>
          
</header>
          
          </div> </li></ul>

                      <div class="search-container">
                      <form action="/action_page.php" id="searchbox">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><img src="img/magnify.png" width=20px></i></button>
                      </form></div>                  
                </div>
              </div>
            </div></nav>
          </div>
  
           


        <div class="container">
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
          
                <div class="item active">
                  <img src="img/xmen.jpg" class="img-responsive"  width="400" height="300">
                  <div class="carousel-caption">
                    <h3>XMEN DARK PHOENIX</h3>
                    <p>RELEASED ON 6 JUNE</p>
                  </div>
                </div>
          
                <div class="item">
                  <img src="img/pikachu.jpg"  width="400" height="300">
                  <div class="carousel-caption">
                    <h3>DETECTIVE PIKACHU</h3>
                    <p>RELEASED ON 10 MAY</p>
                  </div>
                </div>
              
                <div class="item">
                  <img src="img/the-lion-king-trailer.jpg" width="400" height="300">
                  <div class="carousel-caption">
                    <h3>The Lion King</h3>
                    <p>RELEASED ON 19 JULY</p>
                  </div>
                </div>

                <div class="item">
                    <img src="img/ITchaptertwo.jpg"  width="400" height="300">
                    <div class="carousel-caption">
                      <h3>IT Chapter Two </h3>
                      <p>RELEASED ON 6 September</p>
                    </div>
                  </div>
          
                </div>
            
              </div>
          
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            

          
    <br>
    <br>
    <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            
                <section class="text text-1 row" id="section3">
                        <article>
                        <h1>News</h1>
                        <br><ul style="list-style-type:disc;">
                        
                        
                      <?php
                      include 'connection.php';
                      $sql ="SELECT newsUrl, newstitle FROM news";
                      $result = mysqli_query($connect,$sql);
                      //$row = mysqli_fetch_array($result);

                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                          echo '<li>' . '<a href="' . $row['newsUrl']. '">' .   $row['newstitle'] . '</a>' . '</li>' . '<br/>';
                        }
                    } else {
                        echo "0 results";
                    }                      
                    /*
                      while($row){
                         
                        echo '<li>' . '<a href="' . $row['newsUrl']. '">' .   $row['newstitle'] . '</a>' . '</li>' . '<br/>';
                    } 
                    */ 

?>

                            </article></ul>
                    </section>
        
                <section class="text text-2 row" id="section4">
                         <form name="contactform">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <h1>CONTACT US</h1>
                                    <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" name="field" class="form-control" id="email" placeholder="Enter email" onchange="input_check(this.id)">
                                        </div>
                                        <div class="form-group">
                                                <label for="firstname">First Name:</label>
                                                <input type="text" name="field" class="form-control" id="firstname" placeholder="Enter firstname" onchange="input_check(this.id)">
                                            </div>
                                            <div class="form-group">
                                                    <label for="message">Message:</label>
                                                    <textarea type="text" name="field" class="form-control rounded-0" id="textarea" rows="3" onchange="input_check(this.id)"></textarea>
                                                </div>
                                    
                                        <input type="button" class="btn btn-info" value="Submit Button" onclick="sub_bt()">
                                
                                        <input type="reset" class="btn btn-danger" value="Reset">
                                    </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        </form>
                    </section>
            </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>

    </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/page1.js"></script>

</body>

<footer>
    <article>
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <br>
        <p>Copyright © 2019 Movie Lover, All Rights Reserved </p></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <br>  
        <img src="img/socialmedia.png" width="100px">
        </div>

    </article>
</footer>


</html>