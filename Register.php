<?php
include("init.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") 
 {
$fname=  $_POST["firstname"];
$lname=  $_POST["Lastname"];
$uDOB=  $_POST["DOB"];
$uphoneno=  $_POST["phoneno"];
$uemail=  $_POST["email"];
$upassword=  $_POST["password"];
$uugper=  $_POST["ugcent"];
$uugyear=  $_POST["ugyear"];
$upgper=  $_POST["pgcent"];
$upgyear=  $_POST["pgyear"];
$uslper=  $_POST["slcent"];
$uslyear=  $_POST["slyear"];
$uexp=  $_POST["Experience"];
$uprskil=  $_POST["primaryskills"];
$usrskil=  $_POST["secondaryskills"];
$ucctc=  $_POST["currentctc"];
$uectc=  $_POST["exctc"];
$ureason=  $_POST["reason"];
$unotice=  $_POST["noticeperiod"];
$uwhatoffer=  $_POST["whatoffer"];
$ucurlocation=  $_POST["clocation"];
$uplocation=  $_POST["plocation"];
$udetails=  $_POST["details"];
$ugender  = $_POST["gender"];

           $sql_query = "insert into registerdata values('$fname','$lname','$uDOB','$uphoneno','$uemail','$upassword','$uexp','$uprskil','$usrskil','$ucctc','$uectc','$ureason','$unotice','$uwhatoffer','$ucurlocation','$uplocation','$udetails');";
            if(mysqli_query($con,$sql_query))
              {
                       ?>
                          <script type="text/javascript">
                          alert('Registration Successful');
                          document.location.href='Login.php';
                          </script>
                          <?php
                          
              }
            else
              {   
                   ?>
                          <script type="text/javascript">
                          alert('Registration Failed.Check the internet connection');
                          </script>
                          <?php
                          

              }
 }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>InternShip</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="font-awesome.min.css">
         <link rel="stylesheet" href="form-elements.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <script src ="jquery-1.7.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <script type="text/javascript">
          $(document).ready(function($)
          {
            $('phoneno').mask("9999 99 9999",{placeholder:"xxxx xx xxxx"});
          });
        </script>
    <style type="text/css">
    body{
      background-image: url('1.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0px;
      padding: 0px;
      width: 100%;
      height: 100vh;
    }
    </style>
    <script type="text/javascript">
 window.onload = function() {
   MaskedInput({
      elm: document.getElementById('phone'), // select only by id
      format: '+91 ____-__-____',
      separator: '+91 -'
   });
  
};

// masked_input_1.4-min.js
// angelwatt.com/coding/masked_input.php
(function(a){a.MaskedInput=function(f){if(!f||!f.elm||!f.format){return null}if(!(this instanceof a.MaskedInput)){return new a.MaskedInput(f)}var o=this,d=f.elm,s=f.format,i=f.allowed||"0123456789",h=f.allowedfx||function(){return true},p=f.separator||"/:-",n=f.typeon||"_YMDhms",c=f.onbadkey||function(){},q=f.onfilled||function(){},w=f.badkeywait||0,A=f.hasOwnProperty("preserve")?!!f.preserve:true,l=true,y=false,t=s,j=(function(){if(window.addEventListener){return function(E,C,D,B){E.addEventListener(C,D,(B===undefined)?false:B)}}if(window.attachEvent){return function(D,B,C){D.attachEvent("on"+B,C)}}return function(D,B,C){D["on"+B]=C}}()),u=function(){for(var B=d.value.length-1;B>=0;B--){for(var D=0,C=n.length;D<C;D++){if(d.value[B]===n[D]){return false}}}return true},x=function(C){try{C.focus();if(C.selectionStart>=0){return C.selectionStart}if(document.selection){var B=document.selection.createRange();return -B.moveStart("character",-C.value.length)}return -1}catch(D){return -1}},b=function(C,E){try{if(C.selectionStart){C.focus();C.setSelectionRange(E,E)}else{if(C.createTextRange){var B=C.createTextRange();B.move("character",E);B.select()}}}catch(D){return false}return true},m=function(D){D=D||window.event;var C="",E=D.which,B=D.type;if(E===undefined||E===null){E=D.keyCode}if(E===undefined||E===null){return""}switch(E){case 8:C="bksp";break;case 46:C=(B==="keydown")?"del":".";break;case 16:C="shift";break;case 0:case 9:case 13:C="etc";break;case 37:case 38:case 39:case 40:C=(!D.shiftKey&&(D.charCode!==39&&D.charCode!==undefined))?"etc":String.fromCharCode(E);break;default:C=String.fromCharCode(E);break}return C},v=function(B,C){if(B.preventDefault){B.preventDefault()}B.returnValue=C||false},k=function(B){var D=x(d),F=d.value,E="",C=true;switch(C){case (i.indexOf(B)!==-1):D=D+1;if(D>s.length){return false}while(p.indexOf(F.charAt(D-1))!==-1&&D<=s.length){D=D+1}if(!h(B,D)){c(B);return false}E=F.substr(0,D-1)+B+F.substr(D);if(i.indexOf(F.charAt(D))===-1&&n.indexOf(F.charAt(D))===-1){D=D+1}break;case (B==="bksp"):D=D-1;if(D<0){return false}while(i.indexOf(F.charAt(D))===-1&&n.indexOf(F.charAt(D))===-1&&D>1){D=D-1}E=F.substr(0,D)+s.substr(D,1)+F.substr(D+1);break;case (B==="del"):if(D>=F.length){return false}while(p.indexOf(F.charAt(D))!==-1&&F.charAt(D)!==""){D=D+1}E=F.substr(0,D)+s.substr(D,1)+F.substr(D+1);D=D+1;break;case (B==="etc"):return true;default:return false}d.value="";d.value=E;b(d,D);return false},g=function(B){if(i.indexOf(B)===-1&&B!=="bksp"&&B!=="del"&&B!=="etc"){var C=x(d);y=true;c(B);setTimeout(function(){y=false;b(d,C)},w);return false}return true},z=function(C){if(!l){return true}C=C||event;if(y){v(C);return false}var B=m(C);if((C.metaKey||C.ctrlKey)&&(B==="X"||B==="V")){v(C);return false}if(C.metaKey||C.ctrlKey){return true}if(d.value===""){d.value=s;b(d,0)}if(B==="bksp"||B==="del"){k(B);v(C);return false}return true},e=function(C){if(!l){return true}C=C||event;if(y){v(C);return false}var B=m(C);if(B==="etc"||C.metaKey||C.ctrlKey||C.altKey){return true}if(B!=="bksp"&&B!=="del"&&B!=="shift"){if(!g(B)){v(C);return false}if(k(B)){if(u()){q()}v(C,true);return true}if(u()){q()}v(C);return false}return false},r=function(){if(!d.tagName||(d.tagName.toUpperCase()!=="INPUT"&&d.tagName.toUpperCase()!=="TEXTAREA")){return null}if(!A||d.value===""){d.value=s}j(d,"keydown",function(B){z(B)});j(d,"keypress",function(B){e(B)});j(d,"focus",function(){t=d.value});j(d,"blur",function(){if(d.value!==t&&d.onchange){d.onchange()}});return o};o.resetField=function(){d.value=s};o.setAllowed=function(B){i=B;o.resetField()};o.setFormat=function(B){s=B;o.resetField()};o.setSeparator=function(B){p=B;o.resetField()};o.setTypeon=function(B){n=B;o.resetField()};o.setEnabled=function(B){l=B};return r()}}(window));

            function lastnameverify() 
            {
              var ufirstname = document.getElementById('firstname').value;
              var ulastname = document.getElementById('lastname').value;
              var element = document.getElementById("id02");
              if(ufirstname == ulastname)
          {
            element.innerHTML = "Last Name should not be same as First Name";
            element.style.color = "red";
            document.getElementById("lastname").style.color = "red";
          }   
          else
          {
            element.innerHTML = "";
            document.getElementById("lastname").style.color = "black";
          }               
        }
     
      function checkEmail() 
      { 
                
          var uemail = document.getElementById('form-email');
          var element = document.getElementById("id05");
          var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

          if (!pattern.test(uemail.value)) {
          element.innerHTML = "Please provide a valid email address";
          element.style.color = "red";
          uemail.style.color="red";
            uemail.focus;
              }
            else{
          element.innerHTML = "";
          element.style.color = "black";
          uemail.style.color="black";

            }
        }


        function checkpass() 
      { 
                
          var upass = document.getElementById('form-password');
          var element = document.getElementById("id06");
          var pattern = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

          if (!pattern.test(upass.value)) {
          element.innerHTML = "one upper case and one symbol and should atleast be 8 characters long";
          element.style.color = "red";
          upass.style.color="red";
          }
            else{
          element.innerHTML = "";
          element.style.color = "black";
          upass.style.color="black";

            }
        }


        function checkphone() 
      { 
                
          var uphone = document.getElementById('form-phone');
          var element = document.getElementById("id04");
          var pattern = /\d{10}/;

          if (!pattern.test(uphone.value)) {
          element.innerHTML = "xx-xxxx-xx-xxxx ";
          element.style.color = "red";
          uphone.style.color="red";
          }
            else{
          element.innerHTML = "";
          element.style.color = "black";
          uphone.style.color="black";
            }
        }


        function checkradio1()
        {
          if (document.getElementById('r1').checked) {
           document.getElementById("form-noticeoffers").style.display='block';
          
          }
          
        }
        function checkradio2()
        {
          if (document.getElementById('r2').checked) {
           document.getElementById("form-noticeoffers").style.display='none';
        }
          
        }
        function submitactive()
        {
        if (document.getElementById('agree').checked)
        {
          document.getElementById("Submit").disabled = false;
        } 
        }

        function checkcard()
        {
          if (document.getElementById('pan').checked) {
          var ucard = document.getElementById('form-carddetails');
          var element = document.getElementById("id10");
          var pattern = /(?=^.{10}$)((?=.*\d))(?![.\n])(?=.*[A-Z]).*$/;

          if (!pattern.test(ucard.value)) {
          element.innerHTML = "Invalid Pan number";
          element.style.color = "red";
          ucard.style.color="red";
          }
            else{
          element.innerHTML = "";
          element.style.color = "black";
          ucard.style.color="black";
                }
           }
           if (document.getElementById('aadhar').checked){
          var ucard = document.getElementById('form-carddetails');
          var element = document.getElementById("id10");
          var pattern = /(?=^.{12}$)((?=.*\d)).*$/;

          if (!pattern.test(ucard.value)){
          element.innerHTML = "Invalid Aadhar number";
          element.style.color = "red";
          ucard.style.color="red";
          }
            else{
          element.innerHTML = "";
          element.style.color = "black";
          ucard.style.color="black";
                }
           }

           else{
          var ucard = document.getElementById('form-carddetails');
          var element = document.getElementById("id10");
          var pattern = /[A-Z]{1}\d{2}\s\d{5}/;

          if (!pattern.test(ucard.value)){
          element.innerHTML = "Invalid Passport";
          element.style.color = "red";
          ucard.style.color="red";
          }
            else{
          element.innerHTML = "";
          element.style.color = "black";
          ucard.style.color="black";
                }
           }
        }

        


</script>
      </head>
    <body>

    <div class="container">
    <center><h1 style="color:white">InternShip</h1></center>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box">
            <div class="form-top">
            <div class="form-top-left">
                <h3>Registration Form</h3>
            </div>
            </div>
            <div class="form-bottom">
            <form method="post" class="login-form">
            <div class="form-group">
                <input type="text" name="firstname" placeholder="FirstName." class="form-control" id="firstname">
                <span id="id01" class="pull-right"></span>
                   </div>
              <div class="form-group">
                      <input type="text" name="Lastname" placeholder="Last Name." class="form-control" id="lastname" onblur="lastnameverify()">
                       <span id="id02" class="pull-right"></span>
                   </div>
                   <div class="form-group">
                      <input type="date" name="DOB" placeholder="DOB." class="form-control" id="form-dob" required="required" onblur="checkdob()">
                      <span id="id03" class="pull-right"></span>
                   </div>
                   <label class="row">Gender:</label>
                        <div class="form-group"> 
                            <div class="col-sm-4">
                               <input name="gender" id="input-gender-male" value="Male" type="radio" />Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <input name="gender" id="input-gender-female" value="Female" type="radio" />Female
                                 </label>
                             </div>
                            <div class="col-sm-4">
                                 <input name="gender" id="input-gender-female" value="Female" type="radio" />Transgenders
                                 </label>
                             </div>
                        </div> 
                 <div class="form-group">
                      <input id="phone" 
                      type="tel" name="phoneno" placeholder="Phone Number." class="form-control" value="+91 ____-__-____" pattern="^\+91(\s+)?[0-9]{4}-?[0-9]{2}-?[0-9]{4}$">
                      <span id="id04" class="pull-right"></span>
                   </div>
                      <div class="form-group">
                      <input type="email" name="email" placeholder="Email." class="form-control" id="form-email" onblur="checkEmail()">
                      <span id="id05" class="pull-right"></span>
                   </div>
                      <div class="form-group">
                      <input type="password" name="password" placeholder="Password" class="form-control" id="form-password" required="required" onblur="checkpass()">
                      <span id="id06" class="pull-right" ></span>
                   </div>

                  <label class="row">Educational Qualification:</label>
                        <div class="form-group"> 
                            <div class="col-sm-12">
                               <label class="row">UG:</label><br>
                               <input name="ugcent" id="ugcent" type="text" placeholder="Percentage" />
                               <input name="ugyear" id="ugyear" type="text" placeholder="Year"/>
                            </div>
                            <div class="col-sm-12">
                                <label class="row">PG:</label><br>

                               <input name="pgcent" id="pgcent" type="text" placeholder="Percentage"/>
                               <input name="pgyear" id="pgyear" type="text" placeholder="Year"/>
                            </div>
                            <div class="col-sm-12">
                            <label class="row">Schooling:</label><br>
                               <input name="slcent" id="slcent" type="text" placeholder="Percentage" />
                               <input name="slyear" id="slyear" type="text" placeholder="Year"/><br>
                               <br>
                            </div>
                            <br>
                            </div>

                   <div class="form-group">
                      <input type="Number" name="Experience" placeholder="Experience." class="form-control" id="form-Experience">
                   </div>
                    <div class="form-group">
                      <input type="text" name="primaryskills" placeholder="Primary Skills." class="form-control" id="form-primaryskills">
                   </div>
                    <div class="form-group">
                      <input type="text" name="secondaryskills" placeholder="Secondary Skills." class="form-control" id="form-secondaryskills">
                   </div>
                   <div class="form-group">
                      <input type="number" name="currentctc" placeholder="Current CTC." class="form-control" id="form-cctc">
                   </div>
                    <div class="form-group">
                      <input type="number" name="exctc" placeholder="Expected CTC." class="form-control" id="form-ectc">
                   </div>
                    <div class="form-group">
                      <input type="text" name="reason" placeholder="Reason to Change." class="form-control" id="form-reason">
                   </div>
                    <div class="form-group">
                      <input type="number" name="noticeperiod" placeholder="Notice Period(days)." class="form-control" id="form-notice">
                   </div>
                   <label class="row">Are You serving Notice:</label>
                        <div class="form-group"> 
                            <div class="col-sm-4">
                               <input name="radio1" id="r1" value="yes" type="radio" onclick ="checkradio1()"/>Yes
                                </label>
                            </div>
                             <div class="col-sm-4">
                               <input name="radio1" id="r2" value="no" type="radio" onclick ="checkradio2()"/>No
                                </label>
                            </div>
                         </div>
                    <div class="form-group">
                      <input type="text" name="whatoffer" placeholder="WHAT ARE THE OFFERS IN HAND" class="form-control" id="form-noticeoffers" style="display:none">
                   </div>
                   <div class="form-group">
                      <input type="text" name="clocation" placeholder="Current Location" class="form-control" id="form-clocation">
                   </div>

                   <div class="form-group">
                      <input type="text" name="plocation" placeholder="Preferred Location" class="form-control" id="form-plocation">
                   </div>
                   <label class="row">Verification :</label>
                        <div class="form-group"> 
                            <div class="col-sm-4">
                               <input name="card" id="pan" value="pan" type="radio"/>Pan Card
                                </label>
                            </div>
                             <div class="col-sm-4">
                               <input name="card" id="aadhar" value="adhar" type="radio"/>Aadhar
                                </label>
                            </div>
                              <div class="col-sm-4">
                               <input name="card" id="passport" value="adhar" type="radio"/>Passport
                                </label>
                            </div>
                         </div>
                    <div class="form-group">
                      <input type="text" name="details" placeholder="Card Number" class="form-control" id="form-carddetails" onblur="checkcard()">
                      <span id="id10" class="pull-right" ></span>
                   </div>
                   <div class="form-group"> 
                            <div class="col-sm-12">
                               <input name="agree" id="agree" value="agree" type="checkbox" onchange="submitactive()"/>Agree to the terms of the condition*.
                            </div>
                            <button type="submit" name="Submit" id="Submit" disabled="disabled" class="btn">Sign in!</button>
                          </form>
                        </div>
                        </div>
                    </div>
                 </div>
        </body>
</html>
