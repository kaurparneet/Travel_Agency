  <?php
      include("header.php");
   ?>

  <html>
  <head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylingWP.css"/>
   <script src="responsiveRegister.js"></script>

  </head>

  <body>
  	<!--<form method="get" action="bouncer.php">-->
  	<!--<script>
    function validate(){
    alert("validate");
    var username = document.getElementById("username");
       if(username.value=="" || username.value.match("[^a-z]"))
  	 {
  	    alert("First name must have a value");
  		username.style.backgroundColor="red";
  		status=false;
  	 }
    return status;
    }
  </script>-->

  <div="container">
    <div class="table-responsive">
  		    <table class="table">
  			       <tbody>
                    <tr>
  			                 <td><label for="username">Username</label> </td>
  			                  <td><input type="text" id="username" name="username" value="" placeholder="No numbers allowed" /></td>
  			            </tr>
                    <tr>
  			                  <td><label for="password">Password</label> </td>
  			                   <td><input type="password" id="password" value="" name="password" placeholder="Use at least one number"/></td>
  			              </tr>
  			              <tr>
  			                    <td><label  for="emailConsent">Send me recent offers</label> </td>
  				                  <td><input type="checkbox" id="emailConsent"value="" name="emailConsent"checked="checked"></td>
  			               </tr>
                     <tr>
  				                 <td><label  for="gender">Please choose:</label> </td>
  				                    <td><label class="radio-inline"><input type="radio" name="gender" value='f'>Female</label>
  				                      <label class="radio-inline"><input type="radio" name="gender" value='m'>Male</label></td>
  			                          <td></td>
  			              </tr>
                      <tr>
  				              <td><label for="age">Age</label> </td>
  				              <td><input type="number" name="age" id="age" min="18" max="80" placeholder="18-80" /></td>
  			             </tr>
                     <tr>
  				              <td><label for="postalCode">Postal Code</label> </td>
  				              <td><input type="text" name="postalCode" id="postalCode"  placeholder="Please enter a valid postalcode" /></td>
  			             </tr>
                    <tr>
  			                 <td><label for="destination" >Favorite vacation destination</label></td>
  			                    <td>
  				                        <Select id="destination" name="destination">
  				                              <option value="AB">Alberta</option>
  				                              <option value="VN">Vancouver</option>
  				                              <option value="ON">Ontario</option>
  				                              <option value="Mt">Montreal</option>
  				                          </Select>
  			                      </td>
  			            </tr>
	                   <tr>
  			                  <td><label for="description">Tell us about yourself</label></td>
  			                    <td><textarea class="form-control" rows="5" id="descripton" value="" placeholder="what do you enjoy the most tours,treks,museums etc"></textarea></td>
  			            </tr>
                    <tr>
  		                  <td><label for="forRegistration">Thank you for your time!!</label></td>
  		                    <td><input type="hidden" name="forRegistration" id="forRegistration" value="form1" /></td>
  		              </tr>
                  	<tr>
	                     <td><input class="btn btn-primary btn-lg" type="submit" value="Send"  onclick="return content()"/></td>
  			                  <td><input type="reset" value="Reset" class="btn btn-primary btn-lg" onclick="return confirm('Do you really want to reset the page?')"/> </td>
  			            </tr>

	          </tbody>
  		</table>
  	</div>
  </div>
  
</body>
</html>

  <?php
    include("footer.php");
   ?>
