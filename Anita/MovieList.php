<html>
<head>
    <meta charset="utf-8">
    <title>MovieList</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
   
    <link rel="stylesheet" href="css/main_css.css" type="text/css"/>
</head>
<body>
  
  
<div id="backmovie" style="background-image: url(img/prism.png)">
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
                    <div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                          <li><a href="MovieLoverMainPage.php">Home</a></li>
                          <li><a href="moviedetails.php">Movies</a></li>
                          <li><a href="MovieLoverMainPage.php#section3">News</a></li>
                          <li><a href="MovieLoverMainPage.php#section4">Contact Us</a></li>
                          <li>
                    
            
                              <!-- Trigger/Open The Modal -->
                              <a id="myBtn">Login/Register</a>
                              
                              <!-- The Modal -->
                              <div id="myModal" class="modal">
                              
                                <!-- Modal content -->
                                <div class="modal-content">
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

                                  <input type="submit" class="btn btn-info" value="Login">
              
                                </form>
                                  
                                </div>
                              
                                
                              
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
              <div class="row">
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> </div>
                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
      
                <div class="row" id="bundles">
                       <h1 class="title">Movie List</h1>
                       <div class="col-lg-4 col-md-4 col-sm-46 col-xs-12">
                            <img class="img-rounded posterpic" src="img/POKEMONDETECTIVE.jpg">
                            
                             <h3>DETECTIVE PIKACHU</h3>
                             <p>RELEASED ON 10 MAY</p> 
                             <button type="button" class="btn btn-info btn-sm">Add to MyList</button>
                             <button type="button" class="btn btn-danger btn-sm"><a href="bookticket.html">Book Ticket</a></button>
                         </div>
                         
                       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img class="img-rounded posterpic" src="img/godzilla-king-of-the-monsters-ghidorah-poster-456x676.jpg">
                            <h3>Godzilla : King of the Monsters</h3>
                            <p>31 May</p>
                            <button type="button" class="btn btn-info btn-sm">Add to MyList</button>
                            <button type="button" class="btn btn-danger btn-sm">Book Ticket</button>
                        </div> 

                       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                           <img class="img-rounded posterpic" src="img/xmendarkphoenix.jpg">
                           <h3>XMEN DARK PHOENIX</h3>
                           <p>RELEASED ON 6 JUNE</p>
                           <button type="button" class="btn btn-info btn-sm">Add to MyList</button>
                           <button type="button" class="btn btn-danger btn-sm">Book Ticket</button>
                       </div>
                     </div>
                   <br> 
                   <div class="row" id="bundles">
                        <div class="col-lg-4 col-md-4 col-sm-46 col-xs-12">
                             <img class="img-rounded posterpic" src="img/lion_king_xlg.jpg">
                             
                              <h3>THE LION KING</h3>
                              <p>19 JULY</p>
                              <button type="button" class="btn btn-info btn-sm">Add to MyList</button>
                              <button type="button" class="btn btn-danger btn-sm">Book Ticket</button>
                          </div>
                          
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                             <img class="img-rounded posterpic" src="img/it-chapter-two-poster-456x676.jpg">
                             <h3>IT CHAPTER TWO</h3>
                             <p>6 SEPTEMBER</p>
                             <button type="button" class="btn btn-info btn-sm">Add to MyList</button>
                             <button type="button" class="btn btn-danger btn-sm">Book Ticket</button>
                         </div> 
 
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <img class="img-rounded posterpic" src="img/JOKERPOSTER.jpg">
                            <h3>JOKER</h3>
                            <p>4 OCTOBER</p>
                            <button type="button" class="btn btn-info btn-sm">Add to MyList</button>
                            <button type="button" class="btn btn-danger btn-sm">Book Ticket</button>
                        </div>
                      </div>
                    
                </div>
                </div></div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                <script src="js/page2.js"></script>

            
    
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