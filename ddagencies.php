  <?php
      require("variables.php");
      //require("getConnection.php");

   ?>
   <?php
   function ddAgencies(){

            print("<script>alert(dgfdmh)</script>");
            $dbh=getConnection();
            $sql="select agncyId from agencies";
            $result=mysqli_query($dbh,$sql);

            if(mysqli_error($dbh)){
                print(mysqli_error($dbh));
              }
          else {
            while($row=mysqli_fetch_row($result))
            {
              $dd=array_merge($dd,$row);
              print("<script>alert($dd)</script>");
            }
          }

   }
  ?>
