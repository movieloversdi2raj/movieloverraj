<html>
<head>
    <meta charset="utf-8">
    <title>MovieLover Book Ticket </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="css/main_css.css" type="text/css"/>
</head>
<body>
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
                  <li><a href="MovieList.php">Movies</a></li>
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
                            <div class="form-group login">
                                    <label for="email">Email/Username:</label>
                                    <input type="text" name="field" class="form-control" id="email" placeholder="Enter email/username" onchange="input_check(this.id)">
                                </div>
                                <div class="form-group">
                                        <label for="firstname">Password:</label>
                                        <input type="text" name="field" class="form-control" id="firstname" placeholder="Enter password" onchange="input_check(this.id)">
                                    </div>
                                    Not a member yet? 
                                    <a href="registerpage.html"> Join us Now!</a>
                                    <br>
                            <input type="button" class="btn btn-info" value="Submit Button" onclick="sub_bt()">
                        
                            <input type="reset" class="btn btn-danger" value="Reset">
                            
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
    <div class="container"  >
        <br>
        <br>
        <div class="row" id="register">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            
            </div>
            <div class="col-lg-8  col-md-8 col-sm-8 col-xs-8">
            <h1>Book your Ticket</h1>
            <h3>Pokemon Detective Pikachu</h3>
            
            <div class="dropdown">
              <button class="dropbtn">How many ticket</button>
              <div class="dropdown-content" style="left:0;">
                <a href="#">1</a>
                <a href="#">2</a>
              </div>
            </div>
            <br>
            <div class="dropdown" >
              <button class="dropbtn">Theatre</button>
              <div class="dropdown-content">
                <a href="#">City Centre</a>
                <a href="#">Manukau</a>
                <a href="#">St Lukes</a>
              </div>
            </div>
            <br>
            
            <div class="dropdown" >
                    <button class="dropbtn">Session</button>
                    <div class="dropdown-content">
                      <a href="#">12.15</a>
                      <a href="#">15.15</a>
                      <a href="#">18.15</a>
                    </div>
                  </div>


            <form name="pay">
                    
                    <div class="row">
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                            <div class="form-horizontal col-xs-10 col-sm-10 col-md-10 col-lg-10">
                                
                                <div class="form-group form_align col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="checkbox" id="check">I have read the <a id="law_file">terms and conditions</a>.
                                    </div>
                                <div class="form-group form_align col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="button" class="btn btn-default btn-md" value="Submit" onclick="submit_button_clicked()"></button>
                                    </div>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                        </div>
                        <div id="confirm_message">
                            <p class="alert alert-success">Hi, <a id="user_name"></a><br> thanks for the payment using  your <a id="cardT"></a> 
                                credit  card  no. xxxx xxxx xxxx <a id="card_num"></a>. We will email your receipt on <a id="email"></a> </p>
                        </div>
                        
                </form>

    </div></div> 
</div>

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