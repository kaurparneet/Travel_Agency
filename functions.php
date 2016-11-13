<?php
   require("variables.php");



   function insertData($data, $table)
   {
      global $host, $user, $password, $database;
	     $keys = array_keys($data);
	      $colnames = implode(", ", $keys);
	       $values = array_values($data);
	        $colvalues = "'" . implode("', '", $values) . "'";

	         $sql = "INSERT INTO $table ($colnames) VALUES ($colvalues)";
	          //print($sql);

	           //connect to database and run query
	            $dbh = mysqli_connect($host, $user, $password, $database);
	             if (!$dbh){
	                print(mysqli_connect_error());
	                 return false;
                   }
	            $result = mysqli_query($dbh, $sql);
	             if (!$result){
	                print(mysqli_error($dbh));
	               }

	                mysqli_close($dbh);
	                 return $result;
                 }

   function insertPreparedData($data, $table)
   {
      global $host, $user, $password, $database;
	  $keys = array_keys($data);
	  $colnames = implode(", ", $keys);
	  $values = array_values($data);

	  $sql = "INSERT INTO $table ($colnames) VALUES (?,?,?,?,?,?,?)";
	  print($sql);

	  //connect to database and run query
	  $dbh = mysqli_connect($host, $user, $password, $database);
	  if (!$dbh)
	  {
	     print(mysqli_connect_error());
	     return false;
	  }

	  $stmt = mysqli_prepare($dbh, $sql);
	  mysqli_stmt_bind_param($stmt, "ssssssi", $values[0], $values[1], $values[2], $values[3], $values[4], $values[5], $values[6]);
	  mysqli_execute($stmt);
	  $result = mysqli_stmt_affected_rows($stmt);
	  if (!$result)
	  {
	     print(mysqli_error($dbh));
	  }

	  mysqli_close($dbh);
	  return $result;
   }
   //AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId
?>
