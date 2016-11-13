  <?php
    require("header.php");

   ?>
   <head>
     <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1" />
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link rel="stylesheet" type="text/css" href="stylingWP.css"/>
       <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      

     </head>

   </head>
  <body>
    <div class="container">
      <div id="welcomeBanner">
        <label >
          <?php
            $hvar=date("G ");
            $mvar=date("i");
            if($hvar>=0  && $hvar<12){
                if($hvar<=11 && $mvar<=59){
                  print("Good morning");
                }
            }
            else if ($hvar>=12 && $hvar<18) {
              if($hvar<18 && $mvar<=59){
                print("Good afternoon");
              }
            }
            else if ($hvar>18) {
              if($hvar=24 && $mvar<=59){
                print("Good evening");
              }
            }
   ?>
 </label>
      </div>
    </div>
  </body>

   <?php
    require("footer.php");
    ?>
