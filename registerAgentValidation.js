
    function validate(){

                      //alert("hsvbhadbhf");
            var firstName= document.getElementById("firstName").value;
            var mInitial= document.getElementById("middleInitial").value;
            var lastName= document.getElementById("lastName").value;
            var phone= document.getElementById("agtBusinessPhone").value;
            var email= document.getElementById("agtEmail").value;
            var position= document.getElementById("agtPosition").value;
            var userId= document.getElementById("agtUserId").value;
            var password= document.getElementById("agtPassword").value;
            var warn=document.getElementById("warning");
            var flag=0;

            if(true){

                    //validation for firstName***************
              if (firstName!="" ) {
                var re = new RegExp("[a-z]");
                if (re.test(firstName)) {
                      flag=0;
                }
                    else {
                    document.getElementById("firstName").value="";
                    document.getElementById("firstName").placeholder="Only alphabets are allowed";
                    }
                }
                else {
                  warn.style.visibility="visible";
                  document.getElementById("firstName").placeholder="*";
                  flag=1;
                }

                  //validation for middle initial***************
                  if (mInitial!="" ) {
                    var re = new RegExp("[a-z]");
                    if (re.test(mInitial)) {
                          flag=0;
                    }
                        else {
                        document.getElementById("middleInitial").value="";
                        document.getElementById("middleInitial").placeholder="Only 1 alphabet is allowed";
                        }
                    }
                    else {
                      warn.style.visibility="visible";
                      document.getElementById("middleInitial").placeholder="*";
                      flag=1;
                    }

                    //validation for lastName***************
                    if (lastName!="" ) {
                      var re = new RegExp("[a-z]");
                        if (re.test(lastName)) {
                              flag=0;
                        }
                          else {
                          document.getElementById("lastName").value="";
                          document.getElementById("lastName").placeholder="Only alphabets are allowed";
                          }
                      }
                      else {
                        warn.style.visibility="visible";
                        document.getElementById("lastName").placeholder="*";
                        flag=1;
                      }
              //validation for phone*****************
              if (phone!="" ) {
                var re = new RegExp("[0-9]");
                if (re.test(phone)) {
                      flag=0;
                }
                    else {
                    document.getElementById("agtBusinessPhone").value="";
                    document.getElementById("agtBusinessPhone").placeholder="Only numbers are allowed";
                    }
                }
                else {
                  warn.style.visibility="visible";
                  document.getElementById("agtBusinessPhone").placeholder="*";
                  flag=1;
                }
              //validation for email***************
              if (email!="" ) {
                var re = new RegExp("[^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$]");
                if (re.test(email)) {
                      flag=0;
                }
                    else {
                    document.getElementById("agtEmail").value="";
                    document.getElementById("agtEmail").placeholder="Please enter a valid email";
                    }
                }
                else {
                  warn.style.visibility="visible";
                  document.getElementById("agtEmail").placeholder="*";
                  flag=1;
                }
            //validation for position*******************
            if (position!="" ) {
              var re = new RegExp("[a-zA-Z]\s[a-zA-Z]");
              if (re.test(position)) {
                    flag=0;
              }
                  else {
                  document.getElementById("agtPosition").value="";
                  document.getElementById("agtPosition").placeholder="Only are alphabets allowed";
                  }
              }
              else {
                warn.style.visibility="visible";
                document.getElementById("agtPosition").placeholder="*";
                flag=1;
              }

            //validation for userId***************
            if (userId!="" ) {
              var re = new RegExp("[a-zA-Z0-9]");
              if (re.test(userId)) {
                    flag=0;
              }
                  else {
                  document.getElementById("agtUserId").value="";
                  document.getElementById("agtUserId").placeholder="Only are alphabets allowed";
                  }
              }
              else {
                warn.style.visibility="visible";
                document.getElementById("agtUserId").placeholder="*";
                flag=1;
              }
                //No regular experssion on password as it can have any value.
              if (password=="") {
                warn.style.visibility="visible";
                document.getElementById("agtPassword").placeholder="*";
                flag=8;
              }
            }//end of if to check if fields have data in them



            if (flag>0) {
              return false;
            }
    }//end of function validate
