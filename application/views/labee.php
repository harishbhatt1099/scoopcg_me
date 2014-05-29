<?php session_start(); echo session_id(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>/js/multiupload.js"></script>
<script type="text/javascript">
var fig = {
	support : "image/jpg,image/png,image/bmp,image/jpeg,image/gif",		// Valid file formats
	form: "demoFiler",					// Form ID
	dragArea: "dragAndDropFiles",		// Upload Area ID
	uploadUrl: "<?=base_url();?>/welcome/upload"				// Server side upload url
}
$(document).ready(function(){
	initMultiUploader(fig);
});
</script>    
    <div class="tainer">


		
				<div class="row">
					<div class="span12">
       <style>
       #drop_zone {
border: 2px dashed #bbb;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
padding: 25px;
text-align: center;
font: 20pt bold 'Vollkorn';
color: #bbb;

       /* Internet Explorer 10 */
display:-ms-flexbox;
-ms-flex-pack:center;
-ms-flex-align:center;

/* Firefox */
display:-moz-box;
-moz-box-pack:center;
-moz-box-align:center;

/* Safari, Opera, and Chrome */
display:-webkit-box;
-webkit-box-pack:center;
-webkit-box-align:center;

/* W3C */
display:box;
box-pack:center;
box-align:center;


height:400px;
line-height:35px;
vertical-align:middle;
margin-bottom:20px;

margin-top:80px;
}

  #drop_zone_text {
   vertical-align:middle;
  }
  
  
     #drop_zone_results {
border: 2px dashed #bbb;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
padding: 25px;
text-align: center;
font: 20pt bold 'Vollkorn';
color: #bbb;
height:100px;
padding-top:30px;
padding-bottom:30px;
margin-top:20px;
margin-bottom:25px;
display:none;


}

#gallerydescription {
 display:none;                                                                
}

   #progress_bar {
    margin: 10px 0;
    padding: 3px;
    border: 1px solid #000;
    font-size: 14px;
    clear: both;
    opacity: 0;
    -moz-transition: opacity 1s linear;
    -o-transition: opacity 1s linear;
    -webkit-transition: opacity 1s linear;
  }
  #progress_bar.loading {
    opacity: 1.0;
  }
  #progress_bar .percent {
    background-color: #99ccff;
    height: auto;
    width: 0;
  }
</style>   
        <div id="drop_zone">   
        <div id="drop_zone_text" onclick="jQuery('#file').click()">  
        Share an Image create a Gallery <br>Drag & drop files or Click and select images now!
                                                                   </div>
        </div>  <center><h1 class="title">Multiple Drag and Drop File Upload</h1></center>
<div id="dragAndDropFiles" class="uploadArea">
	<h1>Drop Images Here</h1>
</div>
<form name="demoFiler" id="demoFiler" enctype="multipart/form-data">
<input type="file" name="multiUpload" id="multiUpload" multiple />
<input type="text" id="firstname" name="firstname" placeholder="F Name" >
<input type="text" id="lastname" name="lastname" placeholder="L Name" >
<input type="submit" name="submitHandler" id="submitHandler" value="Upload" class="buttonUpload" />
</form>
<div class="progressBar">
	<div class="status"></div>
</div>
         <div id="progress_bar"><div class="percent">0%</div></div>
<output id="list"></output>

 

			</div><!--/span4-->
				</div><!--/row-->
        
        		<div class="row">
					<div class="span12">
              <div id="drop_zone_results">  
              
              </div>
          
          </div>
          </div>
          
           	<div class="row clearfix instrotext">
		<div class="col-md-12 column">
			<div class="jumbotron">
				<h1>
			Create your Gallery Now!
It's Free!
				</h1>
				<p>
				Start a public or private gallery and share with your friends. Drag and drop and fill out details below
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Load Details</a>
          
              		<a href="<?php ///echo site_url(SITE_AREA) ?>" class="btn btn-large btn-success">Go to the Admin area</a>
     		<a href="<?php /////echo site_url(REGISTER_URL); ?>" class="btn btn-large btn-primary">Regiter free account</a>
				</p>
			</div>
			<div class="row clearfix">
				<div class="col-md-12 column">
				</div>
			</div>
		</div>
	</div>
          
          
          <div class="tainer" id="gallerydescription">
	<div class="row clearfix">
		<div class="metadasection column">
			<div class="page-header">
				<h1>
					Add Gallery Details <small>Title, description, privacy settings and custom url eding</small>
				</h1>
			</div>
	
		<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 trol-label" for="gallerytitle">Title </label>  
  <div class="col-md-6">
  <input id="gallerytitle" name="gallerytitle" type="text" placeholder="add a title" class="form-trol input-md">
  <span class="help-block">title missing</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 trol-label" for="gallerydescription">Details</label>
  <div class="col-md-4">                     
    <textarea class="form-trol" id="gallerydescription" name="gallerydescription">add some details to your gallery</textarea>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 trol-label" for="customurlfield">Add a Custom URL</label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon">thescoop.us/</span>
      <input id="customurlfield" name="customurlfield" class="form-trol" placeholder="add a custom url" type="text">
    </div>
    <p class="help-block">add a custom url</p>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 trol-label" for="privacysettings">Privacy Settings</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="privacysettings-0">
      <input type="radio" name="privacysettings" id="privacysettings-0" value="public" checked="checked">
      Public (of course sharing is good)
    </label> 
    <label class="radio-inline" for="privacysettings-1">
      <input type="radio" name="privacysettings" id="privacysettings-1" value="private">
      Private
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 trol-label" for="thepassword">Password</label>  
  <div class="col-md-5">
  <input id="thepassword" name="thepassword" type="text" placeholder="add a password" class="form-trol input-md">
  <span class="help-block">password is missing</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 trol-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-trol input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 trol-label" for="publishingsettings">Ready for take off! </label>
  <div class="col-md-8">
    <button id="publishingsettings" name="publishingsettings" class="btn btn-primary">Preview</button>
    <button id="button2id" name="button2id" class="btn btn-success">Publish Gallery</button>
  </div>
</div>

</fieldset>
</form>

		</div>
	</div>
</div>
          
          
			</div><!--/tainer-->

			<div class="tainer">
			

		        
		        <div class="row">
					<div class="span12 middle-headings" id="center">

                        
                        

    
    


        


















<div id="myModallogin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?</button>
    <h3 id="myModalLabel">Log in to your Account</h3>
  </div>
  
  <div class="modal-body">
<div id="login">
	<h2>Please sign in</h2>

	
	
	<form action="http://thescoop.us/index.php/login" method="post" accept-charset="utf-8" autocomplete="off"><div style="display:none">
<input type="hidden" name="ci_csrf_token" value="d40cf323f1dba58c14520b4011e482ca">
</div>
		<div class="trol-group ">
			<div class="trols">
				<input style="width: 95%" type="text" name="login" id="login_value" value="" tabindex="1" placeholder="Email">
			</div>
		</div>

		<div class="trol-group ">
			<div class="trols">
				<input style="width: 95%" type="password" name="password" id="password" value="" tabindex="2" placeholder="Password">
			</div>
		</div>

					<div class="trol-group">
				<div class="trols">
					<label class="checkbox" for="remember_me">
						<input type="checkbox" name="remember_me" id="remember_me" value="1" tabindex="3">
						<span class="inline-help">Remember me</span>
					</label>
				</div>
			</div>
		
		<div class="trol-group">
			<div class="trols">
				<input class="btn btn-large btn-primary" type="submit" name="log-me-in" id="submit" value="Sign In" tabindex="5">
			</div>
		</div>
	</form>
		<!-- Activation Block -->
			<p style="text-align: left" class="well">
				Need to activate your account?<br>
				<b>Have an activation code to enter to activate your membership?</b> Enter it on the <a href="http://thescoop.us/index.php/activate">Activate</a> page.<br><br>    <b>Need your code again?</b> Request it again on the <a href="http://thescoop.us/index.php/resend_activation">Resend Activation</a> page.			</p>
	
	<p style="text-align: center">
					<a href="http://thescoop.us/index.php/register">Create An Account</a>		
		<br><a href="http://thescoop.us/index.php/forgot_password">Forgot Your Password?</a>	</p>

</div>
  </div>
  
  <div class="modal-footer">
  <button  href="#myModallogin" class="btn btn-info" data-toggle="modal" aria-hidden="true">Need to Register?</button>  
  
  <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>-->
    
  </div>
  </div>

    
   
    
    
    
    
    
					</div><!--/span12-->					
				</div><!--/row-->
				
				<div class="row-fluid">
		            <ul class="thumbnails">
		         
                       
                      
                      
		            </ul>
		        </div><!--/row fluid-->




			</div><!--/tainer-->
		</div><!--/white--><!--/testimonials-->


