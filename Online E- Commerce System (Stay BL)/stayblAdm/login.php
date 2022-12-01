<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<head>
<meta
charset="utf-8">
<meta
http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width", initial-scale=1>
<link rel="stylesheet" href="loginn.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <h1 style="color:bl; size:20px">StayBlizz Admin<h1>
        <nav>
            
  
        </nav>
        
   </header>

<!------------------------------------------------------------------------------------------------->


<h1 id="heading1">Login to your Admin system</h1>
      
     <div class="loginContainer">
         <form action="lprocess.php" method="post" class="myForm" name="myForm">
             <div class="input-container">
                 <i class="fa fa-envelope icon"></i>
                 <input type="text" placeholder="Username" name="ausn" class="input-field" required>
             </div>
             <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" placeholder="Password" name="apass" class="input-field"  required>
               </div>
            <div><input type="submit" class="bttn"></div>
         </form>
     </div>







</body>
