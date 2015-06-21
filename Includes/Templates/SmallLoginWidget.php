<?php
 /*
  * This file was written by Michael Hanon. This file is not liscensed for reuse or distribution..
  */
?>
<div class="widget widget_login">
    <h3 class="widget_title">Login</h3>
    <div class="form-style form-style-2">
        <!--                    <form>
                                <div class="form-inputs clearfix">
                                    <p class="login-text">
                                        <input type="text" value="Username" onfocus="if (this.value == 'Username') {
                                                    this.value = '';
                                                }" onblur="if (this.value == '') {
                                                            this.value = 'Username';
                                                        }">
                                        <i class="icon-user"></i>
                                    </p>
                                    <p class="login-password">
                                        <input type="password" value="Password" onfocus="if (this.value == 'Password') {
                                                    this.value = '';
                                                }" onblur="if (this.value == '') {
                                                            this.value = 'Password';
                                                        }">
                                        <i class="icon-lock"></i>
                                        <a href="#">I Forgot</a>
                                    </p>
                                </div>
                                <p class="form-submit login-submit">
                                    <input type="submit" value="Log in" class="button color small login-submit submit">
                                </p>
                                <div class="rememberme">
                                    <label><input type="checkbox" checked="checked"> Remember Me</label>
                                </div>
                            </form>-->
        <?php if(login_check($conn)==true) : ?>
             <?php echo '<p>Currently logged '.$logged.' as '.htmlentities($_SESSION['username']).'.</p>'; ?>
             <a href="/includes/login/logout.php"><i class="icon-signout"></i>Log Out</a>
         <?php else : ?>

             <form action="includes/login/processlogin.php" method="post" name="login_form">

                 <!--  TODO ADD TABINDEX TO LOGIN FORM-->
                 <div class="form-inputs clearfix">
                     <p class="login-text">
                         <input  type="text" id="email" name="email" value="Email" onfocus="if (this.value === 'Email') {
                                          this.value = '';
                                      }" onblur="if (this.value === '') {
                                                  this.value = 'Email';
                                              }">
                         <i class="icon-user"></i>
                     </p>
                     <p class="login-password">
                         <input  type="password" name="password" id="password" value="Password" onfocus="if (this.value === 'Password') {
                                          this.value = '';
                                      }" onblur="if (this.value === '') {
                                                  this.value = 'Password';
                                              }">
                         <i class="icon-lock"></i>
                         <a style="font-size:11px;" href="#">Forgot Password</a>
                     </p>
                 </div>
                 <p class="form-submit login-submit">
                     <input type="button" value="Log in" onclick="formhash(this.form, this.form.password);" class="button color small login-submit submit">
                 </p>
                 <div class="rememberme">
                     <label><input type="checkbox" checked="checked"> Remember Me</label>
                 </div>

             </form>


             <ul class="login-links login-links-r">
                 <li><a href="#">Register</a></li>
             </ul>
        <?php endif; ?>


        <div class="clearfix"></div>
    </div>
</div>