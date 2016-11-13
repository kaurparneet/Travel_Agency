<?php
    require("functions.php");
    if (!isset($_REQUEST['AgtFirstName']) ||
        !isset($_REQUEST['AgtMiddleInitial']) ||
        !isset($_REQUEST['AgtLastName']) ||
        !isset($_REQUEST['AgtBusPhone']) ||
        !isset($_REQUEST['AgtEmail']) ||
        !isset($_REQUEST['AgtPosition']) ||
        !isset($_REQUEST['AgencyId']) ||
        !isset($_REQUEST['AgtUserId']) ||
        !isset($_REQUEST['AgtPassword'])
  ) {
      print("One or more fields of data were empty, please try again");
    }

    else {
      if(insertData($_REQUEST,"agents")){
        print("Data was successfully inserted.");
      }
        else {
          print("Looks like something went wrong!. Please contact customer support");
        }
    }

 ?>
