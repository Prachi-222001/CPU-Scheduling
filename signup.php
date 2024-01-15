<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
      }
      body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
     background-image: url(images/F1.jpg);
     background-size: cover;
          
         }
      
      .container{
        max-width: 700px;
        width: 100%;
        background-color: #9bcdde31;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(253, 253, 253, 0.724);
        background: linear-gradient(135deg, #5b5d5f, #5d98bb6c);
      }
      .container .title{
        font-size: 25px;
        font-weight: 500;
        position: relative;
      }
      .container .title::before{
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        border-radius: 5px;
        background: linear-gradient(135deg, #71b7e6, #764889);
      }
      .content form .user-details{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
      }
      form .user-details .input-box{
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
      }
      form .input-box span.details{
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
      }
      .user-details .input-box input{
        height: 45px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
      }
      .user-details .input-box input:focus,
      .user-details .input-box input:valid{
        border-color: #9b59b6;
      }
       form .gender-details .gender-title{
        font-size: 20px;
        font-weight: 500;
       }
       form .category{
         display: flex;
         width: 80%;
         margin: 14px 0 ;
         justify-content: space-between;
       }
       form .category label{
         display: flex;
         align-items: center;
         cursor: pointer;
       }
       form .category label .dot{
        height: 18px;
        width: 18px;
        border-radius: 50%;
        margin-right: 10px;
        background: #d9d9d9;
        border: 5px solid transparent;
        transition: all 0.3s ease;
      }
       #dot-1:checked ~ .category label .one,
       #dot-2:checked ~ .category label .two,
       #dot-3:checked ~ .category label .three{
         background: #9b59b6;
         border-color: #d9d9d9;
       }
       form input[type="radio"]{
         display: none;
       }
       form .button{
         height: 45px;
         margin: 35px 0
       }
       form .button button{
         height: 100%;
         width: 100%;
         border-radius: 5px;
         border: none;
         color: #fff;
         font-size: 18px;
         font-weight: 500;
         letter-spacing: 1px;
         cursor: pointer;
         transition: all 0.3s ease;
         background: linear-gradient(135deg, #71b7e6, #9b59b6);
       }
       form .button input:hover{
        /* transform: scale(0.99); */
        background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }


        



       





        @media(max-width: 459px){
        .container .content .category{
          flex-direction: column;
        }
      }</style>
    <!--<meta charset ="UTF-8">-->

    <!--<link rel="stylesheet" href="style.css">-->
     <!--<meta name="viewport" content="width=device-width,inital-scale=1.0">-->
     
  </head>
  <body>

    <div class="container">
        <div class="title">Registration</div>>
        <div class="content">
            <form  method="POST">
                <div class="user-details">
                    <div class="input-box">
                       
                        <span class="details"> First Name : </span>
                        <input type="text" placeholder="Enter your first name" name='firstname'  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name :</span>
                        <input type="text" placeholder="Enter your lastname" name='lastname'  required>
                        </div>
                        <div class="input-box">
                          <span class="details">Email</span>
                          <input type="text" placeholder="Enter your email " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email"> 
                           </div>
    
                             <div class="input-box">
                                <span class="details">Password</span>
                               <input type="password" value="" id="myInput" name='password' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  placeholder="Enter your password" required>
                                 </div> 


                                 <div class="input-box">
                                  <label for="Seqque">Choose a Security Question:</label>&nbsp;&nbsp;&nbsp;
                                  <select style="height:45px;width:100%" id="seq" name="seq">
                                  <option value="#">&nbsp;&nbsp;&nbsp;&nbsp;------Select------</option>
                                  <option value="Who is your Favourite Cricketer?">&nbsp;Who is your Favourite Cricketer?&nbsp;</option>
                                  <option value="Which is your Favourite number?">&nbsp;Which is your Favourite number?</option>
                                  <option value="What is your 12th Std % ?">&nbsp;What is your 12th Std % ?</option>
                                  </select>
                                </div> 
                                
                                <div class="input-box">
                                <span class="details">Security Answer</span>
                               <input type="text" value="" id="myInput" name='seqans' placeholder="Enter your Answer" required>
                                 </div> 
                                 
                                
                                
                                 <!--<label for='sex' ><b>Gender : </b></label>
		                         <input type='radio' name='sex' value='male' required>
		                         <label ><b>Male</b></label>
		                         <input type='radio' name='sex' value='female' required>
		                         <label ><b>Female</b></label><br>-->

                                
                                 
                                    </div>
                                      <a>Already Have Account Then</a>
                                      <center><a style=color:white; href="login.php">Login Here...</a></center>
                                    <!--<center><a href="http://localhost:8000/login/">Login Here...</a></center>-->
                                
                                        <center><div class="button">
                                             
                                            <button type="submit" value= "btnsub" name="btnsub"><b>Register Here</b></button>
                                        </div></center>
                                        </form>
                                        </div>
                                        </div>
                                        
                                        

                                        </body>
                                        </html>>
                                        <?php
                                        if(isset($_POST['btnsub']))
                                        { 
                                          extract($_POST);
                                          include("connection.php");
                                          $q="insert into signup values('$firstname','$lastname','$email','$password','$seq','$seqans')";
                                          mysqli_query($cn,$q);
                                          mysqli_close($cn);
                                          echo"<script>alert('Registration Successful');window.location='login.php'</script>";
                                        }
                                        ?>

                                      