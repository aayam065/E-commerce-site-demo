<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Sajha Bazar
	</title>
</head>
<body>
	<div class = "container">	
	<a href = "home.html"><img src = "brandlogo.png" class = "pic"></a>
  <a href = "profile.html"><img src = "profile.png" class = "profile"></a>
  <a href = "profile.html"><font size = 3 face = "Inter" color = "black" class = "text"><b>Login/Register</b></font></a>
  

	<table class ="table">
         <tr align = "center">
          
          <td><font size = 3 face = "Poppins" color = "grey" ><b><a class = "link1" href = "home.html">Home</a></b></font></td>
          <td><font size = 3 face = "Poppins" color = "grey"><b><a class = "link2" href = "hotdeals.html">Hot deals</a></b></font></td>
          <td><font size = 3 face = "Poppins" color = "grey"><b><a class = "link3" href = "flashsale.html">Flash sale</a></i></i></b></font></td>
          <td><font size = 3 face = "Poppins" color = "grey"><b><a class = "link4" href = "freedelivery.html">Free delivery</a></b></font></td>
          <td><font size = 3 face = "Poppins" color = "grey"><b><a class = "link5" href = "Contact.html">Contact</a></b></font></td>

         </tr>
         </table>

</div>

<div class = vline>
<img src = "brandlogo.png" class = "loginpic">
<p class = "login">Login</p>
</div>
  

   <form action = "index.php" method = "post"> 
    <label for = "email"><p class = "emailtext"> Email:</p> </label>
    <input class = "email" type = "email" name = "email" placeholder = "Example: xyz123@gmail.com" required>
    <label for = "password"><p class = "passtext"> Password: </p></label>
    <input class = "password" type = "password" name = "password" required>
    <button class = "button" type = "Submit">Submit</button>
  </form>
  <p class = "sugg">Don't have an account?</p>
  <a href = "register.html"><p class = "register">Register</p></a>
   

	<style>
		    .container {
          position: relative;
          height: 50px;
          background-color: lightcyan;
        }

        .pic {
          width: 50px;
          height: 50px;
          position: absolute;
          top: 4px;
          left: 20px;
        }

        .table{
          background-color: lightcyan;
          height: 40px;
          width: 800px;
          position: absolute;
          top: 8px;
          left: 150px;
          }

          .profile {
            width: 30px;
            height: 30px;
            position: absolute;
            top: 12px;
            right: 220px;
          }

        .text {
          position: absolute;
          top: 16px;
          right: 95px;
        }
      

          .link1{
          	color: grey;
            text-decoration: none;
transition: transform 0.2s ease;
display: inline-block;
          }

          .link1:hover{
            color:grey;
            text-decoration: none;
transition: transform 0.2s ease;
display: inline-block;
          }
         

          .link2{
            color: grey;
            text-decoration: none;
transition: transform 0.2s ease;
display: inline-block;
          }
          .link2:hover{
            color: black;
            transform: scale(1.1);
          }

          .link3{
            color: grey;
            text-decoration: none;
transition: transform 0.2s ease;
display: inline-block;
          }
          .link3:hover{
            color: black;
            transform: scale(1.1);
          }

          .link4{
            color: grey;
            text-decoration: none;
transition: transform 0.2s ease;
display: inline-block;
          }
          .link4:hover{
            color: black;
            transform: scale(1.1);
          }

          .link5{
            color: grey;
            text-decoration: none;
transition: transform 0.2s ease;
display: inline-block;
          }

          .link5:hover{
            color:black;
          }

          .email{

            color: black;
            width: 350px;
            height: 40px;
            border: 2px solid black;
            top: 200px;
            left:800px;
            position: absolute;
            font-size: 20px;
          }

          .emailtext{
            color: black;
            top: 173px;
            left:690px;
            position: absolute;
            font-size: 32px;
            font-weight: bold;
          }


          .loginpic{

            width: 220px;
            height: 220px;
            left: 190px;
            top: 160px;
            position: absolute;

          }

          .login{

            color: black;
            font-family: "Times New Roman";
            font-size:35px;
            top: 100px;
            left: 850px;
         
            font-weight: bold;
            position: absolute;
            text-decoration: underline;

          }
         .vline {

          width: 5px;
          height: 350px;
          background: skyblue;
          position: relative;
          margin-top:70px;
          margin-left: 450px;

         }

        .password {
            color: black;
            width: 350px;
            height: 40px;
            border: 2px solid black;
            top: 260px;
            left:800px;
            position: absolute;
            font-size: 20px;

        }

        .passtext {
            color: black;
            top: 235px;
            left:645px;
            position: absolute;
            font-size: 32px;
            font-weight: bold;

        }

        .sugg{
           color: darkslategrey;
            top: 410px;
            left:650px;
            position: absolute;
            font-size: 25px;
            font-weight: bold;
            }

         .register{
          color: darkslategrey;
            top: 410px;
            left:1030px;
            position: absolute;
            font-size: 25px;
            font-weight: bold;
            text-decoration: underline;
            }

            .register:hover {

              color: darkblue;
            }

            .button{
             color: black;
            top: 350px;
            left:845px;
            position: absolute;
            font-size: 25px;
            font-weight: bold;

            }

          
  </style>




</body>
</html>

