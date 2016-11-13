<?php
    include("header.php");
    include("variables.php");
    //include("getConnection.php");
    //include("ddagencies.php");
 ?>

<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="stylingWP.css"/>
 <script src="registerAgentValidation.js"></script>

</head>

<body>
  <form method="GET" action="registerAgentInsert.php" >

<div="container">
  <div class="table-responsive">
        <table class="table">
             <tbody>
          <!--        <tr>
                       <td><label for="AgentId">Username</label> </td>
                        <td><input type="text" id="username" name="username" value="" placeholder="No numbers allowed" /></td>
                  </tr>--><!--Auto incremented in db-->
                  <tr>
                      <label id="warning" style="visibility:hidden">* Mandatory Fields</label>
                    </tr>
                  <tr>
                        <td><label for="AgtFirstName">First Name</label> </td>
                         <td><input type="text" id="firstName" value="" name="AgtFirstName" placeholder="Enter first name"/></td>
                    </tr>
                    <tr>
                          <td><label for="AgtMiddleInitial">Middle Initial</label> </td>
                           <td><input type="text" id="middleInitial" maxlength="1" value="" name="AgtMiddleInitial" placeholder="Enter middle initial"/></td>
                      </tr>
                      <tr>
                            <td><label for="AgtLastName">Middle Initial</label> </td>
                             <td><input type="text" id="lastName" value="" name="AgtLastName" placeholder="Enter last nmae"/></td>
                        </tr>
                      <tr>
                            <td><label for="AgtBusPhone">Business Phone</label> </td>
                             <td><input type="text" id="agtBusinessPhone" value="" name="AgtBusPhone" placeholder="xxx xxx xxxx"/></td>
                        </tr>
                        <tr>
                              <td><label for="AgtEmail">Email</label> </td>
                               <td><input type="text" id="agtEmail" value="" name="AgtEmail" placeholder="abc@def.xyz"/></td>
                          </tr>
                          <tr>
                                <td><label for="AgtPositon">Position</label> </td>
                                 <td><input type="text" id="agtPosition" value="" name="AgtPosition" placeholder="Enter agent position"/></td>
                            </tr>
                            <tr>
                                  <td><label for="AgencyId">Agency Id</label> </td>
                                   <td><select  id="agencyId"   name="AgencyId" />
                                     <option value="">Please select one of the following</option>
                                     <?php
                                 	     $con = mysqli_connect($host, $user, $password, $database);
                                 	     if (mysqli_connect_errno()){
                                 		    print(mysqli_connect_error());
                                 		 }
                                 		 $sql = "select  agencyId,agncyAddress from agencies";
                                 		 $result = mysqli_query($con, $sql);
                                 		 if (mysqli_errno($con))
                                 		 {
                                 		    print(mysqli_error($con));
                                 			exit;
                                 		 }
                                 		 while ($row = mysqli_fetch_row($result))
                                 		 {
                                 		    print("<option value='$row[0]'>$row[1]\n</option>");
                                          //print("<script>alert('$row[0]')</script>");
                                 		 }
                                 	  ?>
                                    </td>
                              </tr>
                              <tr>
                                    <td><label for="AgtUserId">UserId</label> </td>
                                     <td><input type="text" id="agtUserId" value="" name="AgtUserId" /></td>
                                </tr>
                                <tr>
                                      <td><label for="AgtPassword">Password</label> </td>
                                       <td><input type="password" id="agtPassword" value="" name="AgtPassword" placeholder="Choose password"/></td>
                                  </tr>
                  <tr>
                     <td><input class="btn btn-primary btn-lg" type="submit" value="Send"  onclick=" return validate()"/></td>
                        <td><input type="reset" value="Reset" class="btn btn-primary btn-lg" onclick="return confirm('Do you really want to reset the page?')"/> </td>
                  </tr>

          </tbody>
    </table>
  </div>
</div>
</form>
</body>
</html>

<?php
  include("footer.php");
 ?>
