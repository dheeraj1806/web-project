    <script>
        function showRegisterPassword(){
            var x = document.getElementById("rpassword");
            if (x.type === "password"){
                x.type = "text";
            } else{
                x.type = "password";
            }
        }
        function showLoginPassword(){
            var x = document.getElementById("lpassword");
            if (x.type === "password"){
                x.type = "text";
            } else{
                x.type = "password";
            }
        }
        function showOldPassword(){
            var x = document.getElementById("oldPassword");
            if (x.type === "password"){
                x.type = "text";
            } else{
                x.type = "password";
            }
        }
        function showNewPassword(){
            var x = document.getElementById("newPassword");
            if (x.type === "password"){
                x.type = "text";
            } else{
                x.type = "password";
            }
        }
        function showConfirmPassword(){
            var x = document.getElementById("confirmNewPassword");
            if (x.type === "password"){
                x.type = "text";
            } else{
                x.type = "password";
            }
        }
		
		$(document).ready(function(){
          $('.search-box input[type="text"]').on("keyup input", function(){
          var inputVal = $(this).val();
          var resultDropdown = $(this).siblings(".result");
            if(inputVal.length){
            $.get("back_end_search.php", {term: inputVal}).done(function(data){
                resultDropdown.html(data);
            });
            } 
			else{
            resultDropdown.empty();
        }
       });
       $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
     });
});
    </script>

        
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Demo Header</a>
            </div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
             <div class="search-box">
             <input  class="form-control mr-sm-2" type="text" autocomplete="off" placeholder="Search..." />
           <div class="result"></div>
        </div>
          </form>
		  </ul>
		  </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (isset($_SESSION['id'])) {
                        ?>
                        <li class="dropdown show">
                            <a style="text-decoration:none;" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['userFirstName']." ".$_SESSION['userLastName']; ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <ul class="nav navbar-primary">
                                    <li><a class="dropdown-item" href="#myModalAccountDetails" data-toggle="modal" data-target="#myModalAccountDetails" style="text-decoration:none;color:black;">Account</a></li>
                                    <li><a class="dropdown-item" href="#myModalChangePassword" data-toggle="modal" data-target="#myModalChangePassword" style="text-decoration:none;color:black;"><span class="glyphicon glyphicon-cog"></span> Change Password</a></li>
                                    <li><a class="dropdown-item" href="logout.php" style="text-decoration:none;color:black;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li><a href="#myModalRegister" data-toggle="modal" data-target="#myModalRegister"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                        <li><a href="#myModalLogin" data-toggle="modal" data-target="#myModalLogin"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    

    <!-- Modal -->
    <div id="myModalRegister" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Register</h2>
                </div>
                <div class="modal-body">
                    <form action="register" method="post">
                        <fieldset class="form-group"
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">First Name:</label>
                                            <input type="text" required class="form-control overrideheight" id="name" placeholder="First Name..." name="registerFirstName">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lastName">Last Name:</label>
                                            <input type="text" class="form-control overrideheight" id="lastName" placeholder="Last Name...(Optional)" name="registerLastName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" required class="form-control email overrideheight" id="email" placeholder="Email..." name="registerEmailId">
                                    </div>
                                    <div class="form-group">
                                        <label for="rpassword">Password:</label>
                                        <input type="password" required class="form-control password overrideheight" id="rpassword" placeholder="Password..." name="registerPassword">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" onclick="showRegisterPassword()"> Show password
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number:</label>
                                        <input type="tel" required class="form-control overrideheight" id="phone" placeholder="Phone Number..." name="registerPhoneNumber">
                                    </div>
                                    <div class="form-group col-md-offset-2 col-md-8">
                                        <div style="text-align: center;">
                                            <button type="submit" class="form-control btn btn-lg btn-primary overrideheight" name="register" style="width: 100px;">Register</button>
                                            <br><hr>
                                            <a href="#myModalLogin" data-toggle="modal" data-target="#myModalLogin" data-dismiss="modal" style="text-decoration: none;">have account? LOGIN</a>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <div id="myModalLogin" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Login</h2>
                </div>
                <div class="modal-body">
                    <form action="login" method="post">
                        <fieldset class="form-group"
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" required class="form-control email overrideheight" id="email" placeholder="Email..." name="loginEmailId" value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>">
                                </div>
                                <div class="form-group">
                                    <label for="lpassword">Password:</label>
                                    <input type="password" required class="form-control password overrideheight" id="lpassword" placeholder="Password..." name="loginPassword" value="<?php if(isset($_COOKIE["loginPassword"])) { echo $_COOKIE["loginPassword"]; } ?>">
                                    <div class="checkbox">
                                            <label>
                                                <input type="checkbox" onclick="showLoginPassword()"> Show password
                                            </label>
                                    </div>
                                <center>
                                    <div class="input-group">
                                      <div class="checkbox">
                                            <label>
                                                <input  type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["loginId"])) { ?> checked <?php } ?>> Remember me
                                            </label>
                                      </div>
                                    </div>
                                </center>
                                <div class="form-group col-md-offset-2 col-md-8">
                                    <div style="text-align: center;">
                                        <button type="submit" class="form-control btn btn-lg btn-primary btn-customized overrideheight" name="login" style="width: 100px;">Login</button>
                                        <br><hr>
                                        <a href="#myModalRegister" data-toggle="modal" data-target="#myModalRegister" data-dismiss="modal" style="text-decoration: none;">don't have account? REGISTER</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div id="myModalAccountDetails" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Login</h2>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <fieldset class="form-group"
                            <div class="container">
                                <table>
                                    <tr class="form-group">
                                        <td style="width: 40%; padding: 20px;">Name:</td>
                                        <td style="width: 60%; padding: 20px;"><?php echo $_SESSION['userFirstName']." ".$_SESSION['userLastName']; ?></td>
                                    </tr>
                                    <tr class="form-group">
                                        <td style="width: 40%; padding: 20px;">Email Address:</td>
                                        <td style="width: 60%; padding: 20px;"><?php echo $_SESSION['userEmailId']; ?></td>
                                    </tr>
                                    <tr class="form-group">
                                        <td style="width: 40%; padding: 20px;">Phone Number:</td>
                                        <td style="width: 60%; padding: 20px;"><?php echo $_SESSION['userPhoneNumber']?></td>
                                    </tr>
                                </table>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        
    <div id="myModalChangePassword" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Change Password</h2>
                </div>
                <div class="modal-body">
                    <form action="change_password" method="post">
                        <fieldset class="form-group"
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    <div class="form-group">
                                        <label for="oldPassword">Old Password:</label>
                                        <input type="password" required class="form-control email overrideheight" id="oldPassword" placeholder="Old Password..." name="oldPassword">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" onclick="showOldPassword()"> Show password
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="newPassword">New Password:</label>
                                        <input type="password" required class="form-control password overrideheight" id="newPassword" placeholder="New Password..." name="newPassword">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" onclick="showNewPassword()"> Show password
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmNewPassword">Confirm New Password(Re-type):</label>
                                        <input type="password" required class="form-control overrideheight" id="confirmNewPassword" placeholder="Confirm New Password..." name="confirmNewPassword">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" onclick="showConfirmPassword()"> Show password
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-offset-2 col-md-8">
                                        <div style="text-align: center;">
                                            <button type="submit" class="form-control btn btn-lg btn-primary overrideheight" name ="confirm" style="width: 100px;">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
	