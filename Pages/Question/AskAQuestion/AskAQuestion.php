<?php
 $path=$_SERVER['DOCUMENT_ROOT'];
 include $path.'/includes/Templates/Header.php';
 //include $path.'/includes/login/SessionStart.php';
 //$conn=new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');
 $conn=dbConnect();
?>


<?php if(login_check($conn)==true) : ?>

     <div class="breadcrumbs">
         <section class="container">
             <div class="row">
                 <div class="col-md-12">
                     <h1>Ask Question</h1>
                 </div>
                 <div class="col-md-12">
                     <div class="crumbs">
                         <a href="/index.php">Home</a>
                         <span class="crumbs-span">/</span>
                         <!--                         <a href="#">Pages</a>
                                                  <span class="crumbs-span">/</span>-->
                         <span class="current">Ask a Question</span>
                     </div>
                 </div>
             </div><!-- End row -->
         </section><!-- End container -->
     </div><!-- End breadcrumbs -->

     <section class="container main-content">
         <div class="row">
             <div class="col-md-9">

                 <div class="page-content ask-question">
                     <div class="boxedtitle page-title"><h2>Ask Question</h2></div>

                     <p>When asking a question, please include ALL of the needed code and information, or your question may be closed and you may be asked to include more information before it will be unlocked.</p>

                     <div class="form-style form-style-3" id="question-submit">

                         <div class="form-inputs clearfix">
                             <p>
                                 <label class="required">Question Title<span>*</span></label>
                                 <input type="text" id="QuestionTitle">
                                 <span class="form-description">Please make the title very descriptive.</span>
                             </p>
                             <p>
                                 <label>Tags</label>
                                 <input type="text" class="input" name="question_tags" id="QuestionTags" data-seperator=",">
                                 <span class="form-description">Please choose  suitable Tags. Example: <span class="color">HTML, CSS, Javascript</span></span>
                             </p>

                         </div>
                         <div id="form-textarea">
                             <p>
                                 <label class="required">Details<span>*</span></label>
                                 <textarea id="QuestionDetails" aria-required="true" cols="58" rows="8"></textarea>
                                 <span class="form-description">Type a detailed description.</span>
                             </p>
                         </div>
                         <p class="form-submit">
                             <input type="submit" id="PublishQuestion" value="Publish Your Question" class="button color small submit">
                         </p>

                     </div>
                 </div><!-- End page-content -->
             </div><!-- End main -->
             <aside class="col-md-3 sidebar">
                 <?php include $path.'/includes/Templates/StatsWidget.php'; ?>
                 <?php include $path.'/includes/Templates/SocialWidget.php'; ?>
                 <?php // include $path.'/includes/Templates/SmallLoginWidget.php'; ?>
                 <?php include $path.'/includes/Templates/HighestPointsWidget.php'; ?>
                 <?php include $path.'/includes/Templates/TagCloudWidget.php'; ?>
                 <?php include $path.'/includes/Templates/RecentQuestionsWidget.php'; ?>
             </aside><!-- End sidebar -->
         </div><!-- End row -->
     </section><!-- End container -->

     <script type="text/javascript">



         $("#PublishQuestion").click(function () {
             var Title = $('#QuestionTitle').val();
             var Tags = $('#QuestionTags').val();
             var Details = $('#QuestionDetails').val();
             $.ajax({
                 url: "/Pages/Question/AskAQuestion/AskAQuestionAjax.php",
                 method: "POST",
                 data: {title: Title, tags: Tags, details: Details},
                 beforeSend: function (xhr, opts) {
                     //This event, which is triggered before an Ajax request is started
                     //to exit
                     //if (Questionvalidate == false)
                     //{
                     //xhr.abort();
                     //alert('Please');
                     // }
                 },
                 success: function () {
                     //This event is only called if the request was successful (no errors from the server, no errors with the data).

                 },
                 complete: function () {
                     //on request complete wether it is successful or not
                     alert('some alerts!');

                 },
                 error: function () {
                     //This event is only called if an error occurred with the request. If eFrror, the success will not fire

                 }
             });
         });
         function QuestionValidate(Title, Tags, Details)
         {
             if (Title == "" || Tags == "" || Details == "")
             {
                 alert('Please fill in all ');
             }
         }
         ;


     </script>

 <?php else : ?>
     <p>
         <span class="error">You must register or login to ask a question.</span>
     </p>
<?php endif; ?>


<?php include $path.'/includes/Templates/Footer.php'; ?>