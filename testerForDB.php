<?php

  require("functions.php");

  //get row data

    function validate(){

      if($_REQUEST["AgtLastName"]==""){
          $message="Lastname must have a value.<br/>";
          return false;
      }
      if($_REQUEST["AgtPosition"]==""){
          $message="Position must have a value.<br/>";
          return false;
      }return true;

    }

        if (!isset($_REQUEST['AgtFirstName'])) {
          # code...
          header("Location: dataInsertion.php");
        }

          $agent = array("AgtFirstName"=>"Alpha",
                "AgtMiddleInitial"=>"f",
                "AgtLastName"=>"Romeo",
                "AgtBusPhone"=>"4031256363",
                "AgtEmail"=>"gotham@batman.com",
                "AgtPosition"=>"Junior agent",
                "AgencyId"=>"1"
                  );

                    if(validate()){
                          //if(insertData($agent,"agents"))
                        if(insertData($_REQUEST,"agents")){
                          print("insertion successsful ");
                        }
                        else {
                          print("try again");
                        }
                  }
                  else {
                    # code...
                    header("Location: dataInsertion.php");
                  }
?>
