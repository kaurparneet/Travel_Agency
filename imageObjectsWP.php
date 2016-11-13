     <?php
      include("header.php");
        ?>
    <head>

        <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
              <meta http-equiv="x-ua-compatible" content="ie=edge"/>
              <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylingWP.css"/>
        <script src="imageObjectsWP.js"></script>
</head>
<html>
<body>
    <div class="container">



      <div class="col-sm-3">
        <div class="sidebar-nav">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <span class="visible-xs navbar-brand">Travel tips</span>
            </div>
            <div class="navbar-collapse collapse sidebar-navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="#" id="travelTips" onmouseover="displayImage(this.id)">Travel tips</a></li>
                <li><a href="#" id="bestDestinations" onmouseover="displayImage(this.id)">Best destinations</a></li>
                <li><a href="#" id="travelSafely" onmouseover="displayImage(this.id)">Travel safety</a></li>
                </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>



    <div class="col-sm-3 col-md-4">
    <div class="col-sm-9 col-lg-9" id="imagePlace">
      <img id="imagePlaceHolder" src="" visibility="visible"/>
    </div>
    </div>


    <div class="row" id="descPlaceHolder" style="visibility:hidden">
      <textarea disabled id="test" row="25" cols="55" placeholder="random" visibility="hidden"></textarea>   <!--used for testing-->
    </div>
    </div>

</body>
</html>
    <?php
      include("footer.php");
     ?>
