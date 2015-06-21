<?php
 $path=$_SERVER['DOCUMENT_ROOT'];

 include_once $path.'/includes/Login/Register.inc.php';
 include_once $path.'/includes/login/SessionStart.php';
 include $path.'/Templates/Header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script>
        <script type="text/JavaScript" src="js/LoginForms.js"></script>

    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
            set or if the registration script caused an error. -->

        <?php
         if(!empty($error_msg)) {
             echo $error_msg;
         }
        ?>
        <!-- <ul>
             <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
             <li>Emails must have a valid email format</li>
             <li>Passwords must be at least 6 characters long</li>
             <li>Passwords must contain
                 <ul>
                     <li>At least one uppercase letter (A..Z)</li>
                     <li>At least one lower case letter (a..z)</li>
                     <li>At least one number (0..9)</li>
                 </ul>
             </li>
             <li>Your password and confirmation must match exactly</li>
         </ul>-->
     <!--    <form action="<?php //echo esc_url($_SERVER['PHP_SELF']);  ?>"
             method="post"
             name="registration_form">
             Username:
             <input type='text' name='username' id='username' />
             <br />
             Email:
             <input type="text" name="email" id="email" />
             <br />
             Password:
             <input type="password" name="password"  id="password" />
             <br />
             Confirm password:
             <input type="password"  name="confirmpwd" id="confirmpwd" />
             <br />
             <input type="button" value="Register" onclick="return regformhash(this.form,
                                        this.form.username,
                                        this.form.email,
                                        this.form.password,
                                        this.form.confirmpwd);" />
         </form>-->
















        <div class="container"  style="height: auto; padding:20px;">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">

                            <h2>Register</h2>



                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" role="form" name="registration_form">
                                        <div class="form-group">
                                            <label class="control-label" for="username">Username</label>
                                            <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="email">Email</label>
                                            <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="password">Password</label>
                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="confirmpwdl">Confirm Password (Please Re-Enter Your Password)</label>
                                            <input type="password" name="confirmpwd" id="confirmpwd" tabindex="2" class="form-control" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input tabindex="4" class="form-control btn btn-register"
                                                           type="button" value="Register" onclick="return regformhash(this.form,
                                                                    this.form.username,
                                                                    this.form.email,
                                                                    this.form.password,
                                                                    this.form.confirmpwd);"">
                                                    <p style="width:100%">
                                                        Return to the
                                                        <a href="index.php">login page</a>
                                                        .
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>



        </script>

        <style>
            /*body {
            padding-top: 0px;
        }*/
            .panel-login
            {
                border-color: #ccc;
                -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
                -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
                box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            }

            .panel-login > .panel-heading
            {
                color: #00415d;
                background-color: #fff;
                border-color: #fff;
                text-align: center;
            }

            .panel-login > .panel-heading a
            {
                text-decoration: none;
                color: #666;
                font-weight: bold;
                font-size: 15px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }

            .panel-login > .panel-heading a.active
            {
                color: #029f5b;
                font-size: 18px;
            }

            .panel-login > .panel-heading hr
            {
                margin-top: 10px;
                margin-bottom: 0px;
                clear: both;
                border: 0;
                height: 1px;
                background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
                background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
                background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            }

            .panel-login input[type="text"], .panel-login input[type="email"], .panel-login input[type="password"]
            {
                height: 45px;
                border: 1px solid #ddd;
                font-size: 16px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }

            .panel-login input:hover,
            .panel-login input:focus
            {
                outline: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                border-color: #ccc;
            }

            .btn-login
            {
                background-color: #59B2E0;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #59B2E6;
            }

            .btn-login:hover,
            .btn-login:focus
            {
                color: #fff;
                background-color: #53A3CD;
                border-color: #53A3CD;
            }

            .forgot-password
            {
                text-decoration: underline;
                color: #888;
            }

            .forgot-password:hover,
            .forgot-password:focus
            {
                text-decoration: underline;
                color: #666;
            }

            .btn-register
            {
                background-color: #1CB94E;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #1CB94A;
            }

            .btn-register:hover,
            .btn-register:focus
            {
                color: #fff;
                background-color: #1CA347;
                border-color: #1CA347;
            }
        </style>














    </body>
</html>

<?php include $path.'/Templates/Footer.php'; ?>