
    var images=["travelTips.jpg","bestDestinations.jpg","travelSafely.jpg"];
    var desc=["We wish your travel to as convineint as possible. Check out some tips by clicking on the image above.",
              "Consider these travel destinations before planning your next trip.",
              "Safety is our priority. Please read these tips."];
    var links=["www.expertvagabond.com","www.lonelyplanet.com","wwww.locationindependant.com"];

    var imgObjects = [];
     imgObjects[0] = new Image();
     imgObjects[0].src = "travelTips.jpg";
     imgObjects[1] = new Image();
     imgObjects[1].src = "bestDestinations.jpg";
     imgObjects[2] = new Image();
     imgObjects[2].src = "travelSafely.jpg";

     function displayImage(idd){

     document.getElementById("test").value=idd; //used for testing
       if(idd=="travelTips"){
         document.getElementById("imagePlaceHolder").style.visibility="visible";
         document.getElementById("descPlaceHolder").style.visibility="visible";
         document.getElementById("imagePlaceHolder").src=images[0];
         document.getElementById("test").value=desc[0];
       }

       if(idd=="bestDestinations"){
         document.getElementById("imagePlaceHolder").style.visibility="visible";
         document.getElementById("descPlaceHolder").style.visibility="visible";
           document.getElementById("imagePlaceHolder").src=images[1];
         document.getElementById("test").value=desc[1];
       }

       if(idd=="travelSafely"){
         document.getElementById("imagePlaceHolder").style.visibility="visible";
         document.getElementById("descPlaceHolder").style.visibility="visible";
         document.getElementById("imagePlaceHolder").src=images[2];
         document.getElementById("test").value=desc[2];
       }



      //  diplayDesc();

  	  }
