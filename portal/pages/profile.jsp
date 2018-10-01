<%-- 
    Document   : profile.jsp
    Created on : Jul 17, 2016, 1:57:28 AM
    Author     : Gagandeep Rangi
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>InSpec: Profile</title>
        <link rel="icon" href="Pics/favicon2.png">
        <style>
            body, html{
                margin:0;
                padding:0;
                font-family: Tahoma;
            }
            b{
                font-size: 13px;
                padding: 3px;
                margin:3px;
            }
            input{
                margin: 3px;
                width: 300px;
                border-radius: 5px;
                background-color: #ffffff;
                border:1px solid #CDCDCD;
                padding: 7px;
                font-size: 15px;
            }
            input:focus{
                transition-duration: 0.2s;
                box-shadow: 0px 0px 15px #E1EFFC;
            }
            input.submit{
                cursor: pointer;
            }
            #container{
                width:80%;
                margin-left: 14%;
                margin-top: 6%;
                height:10px;
            }
            #left{
                width:40%;
                margin-left: 13%;
                margin-bottom: 5%;
                margin-right: 2%;
                float:left;
            }
            #left img{
                margin-left: 10%;
                padding-left:15%;
                padding-right:15%;
                padding-bottom:10%;
                height:200px;
                width:250px;
            }
            #right{
                width:40%;
                float:left;
                margin-left: 2%;
            }
            #right h3{
                margin-top:8%;
            }
            #right #dummy{
                height:200px;
                width: 230px;
            }
            #dummy h2{
                font-size: 15px;
                color:#CDCDCD;
            }
            #dummy h2 span{
                font-size: 25px;
                color:#000000;
            }
        </style>
        <script>
            function sendInfo()  
{  
  
   
   //alert(c);
      

var url="update_profile_password.jsp?passOld="+document.getElementById('op').value+"&pass="+document.getElementById('np').value+"&cpass="+document.getElementById('ncp').value;  
  //alert(url);
if(window.XMLHttpRequest){  
request=new XMLHttpRequest();  
}  
else if(window.ActiveXObject){  
request=new ActiveXObject("Microsoft.XMLHTTP");  
}  
  
try{  
request.onreadystatechange=getInfo;  
request.open("GET",url,true);  
request.send();  
}catch(e){alert("Unable to connect to server");}  
   
}
function getInfo(){  
if(request.readyState==4){  
var val=request.responseText;  
document.getElementById('error').innerHTML=val;
$('#error').slideDown(300).delay(1000).slideUp(200);
//alert(val);
}
}
            function val_form()
            {
                var f=0;
                if(document.getElementById('op').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('op').style.borderColor="red";
                    document.getElementById('op').focus();
                    return false;
                    f=1;
                }
                if(document.getElementById('np').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('np').style.borderColor="red";
                    document.getElementById('np').focus();
                    return false;
                    f=1;
                }
                if(document.getElementById('ncp').value=="")
                {
                    alert("Fill required coloumns!!");
                    document.getElementById('ncp').style.borderColor="red";
                    document.getElementById('ncp').focus();
                    return false;
                    f=1;
                }
                if(document.getElementById('np').value!=document.getElementById('ncp').value)
                {
                    alert("Password not matched!!");
                    document.getElementById('np').style.borderColor="red";
                    document.getElementById('np').focus();
                    document.getElementById('ncp').style.borderColor="red";
                    document.getElementById('ncp').value="";
                    return false;
                    f=1;
                }
               
               if(f==0)
               {
                sendInfo();
            }
                return  true;
            }
        </script>
        
    </head>
    <body>
        <%@include  file="header.jsp" %>
        <%!            
            ArrayList<String> details = new ArrayList<String>();
        %>
        <%
            details = new Database().getProfileDetails(h);
        %>
        <div id="container">
            <div id="left">
                <center>
                    <img src = "Pics/profile_and_logo_icon-300x300.png">
                    <br>
                    </center>
              
                <h3 style="font-size: 24px;">Edit Profile</h3>
                <form action="update_profile_details.jsp?" method="POST">
                    <b>Registered First name:</b></br>
                    <input type="text" name="fname" value="<%= details.get(2)%>" /></br>
                    <b>Registered Last name:</b></br>
                    <input type="text" name="lname" value="<%= details.get(3)%>" /></br>
                    <b>Registered email:</b></br>
                    <input type="text" name="email" value="<%= details.get(4)%>" /></br>
                    <b>Registered phone:</b></br>
                    <input type="text" name="phone" value="<%= details.get(5)%>" /></br>
                    <input class="submit" type="submit" value="Update Profile" style="color:#ffffff;background-color: #5CB85C;margin-top:15px; font-size: 17px;">
                </form>
            </div>
            <div id="right">
                <div id="dummy">
                    <h3 class="class_time">Hi,<%= r.get(0).toString()%></h3>
                    <h2>Username: <br><span><%= details.get(0)%></span></h2>
                    <h2>Account type:<br><span><%= details.get(1)%></span></h2>

                </div>
                      <span id="error" class="error" style="display: none; position: static;"></span>
                
                <h3 style="font-size: 24px;">Change password</h3>
                <form action="update_profile_password.jsp?" method="POST" onsubmit="return val_form()">
                    <b>Enter old password:</b></br>
                    <input type="password" name="passOld" id="op"  /></br>
                    <b>Enter new password:</b></br>
                    <input type="password" name="pass" id="np" /></br>
                    <b>Confirm password:</b></br>
                    <input type="password" name="cpass"  id="ncp" /></br>
                    <input class="submit" type="button" onclick="return val_form() " value="Update Password" style="color:#ffffff;background-color: #F0AD4E; margin-top:15px; font-size: 17px;">
                </form>
            </div>
        </div>
                    
 
    </body>
</html>
<%@include file="footer.jsp" %>
