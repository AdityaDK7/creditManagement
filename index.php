<html>
    <title>Home</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  width:400px;
  height: 100px;
  margin-left: 660px;
  background-image: none;
  padding: 50px;
  
}
.img{
    width: 700px;
    height: 700px;
}
body{
    background-image: url("swipe.gif");
     background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
h3 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}
.border {

  
  padding-bottom: 20px;
  padding-top: 10px;
  margin-left: 10px;
  margin-right: 1000px;
  
  
}

#b1{
  position: relative;
  right:200px;
}

#b2{
  position: relative;
    }
  

#b3{
  position: relative;
  right:230px;
  top:70px;
}



</style>
    <body> 
        <br>
    <div class="">
        <br><br>
        <h3 style="color: #dc3545;"><b>Sparks Foundation Internship</b> <br> Credit Management System <br> Task #2</h3>

    </div >
        <div class="center" style="text-align: center">
           <!--  <a href="insert.php" style="color:black; "  style="text-decoration: none"><button class=".btn-primary">Add users</button></a>
            <button><a href="allusers.php" style="color:black; " style="text-decoration: none">All Users</a></button>
            <button> <a href="transaction.php" style="color:black; " style="text-decoration: none">Mini Statement</a> </button> -->
            <a href="insert.php" style="color:black; "  style="text-decoration: none"><button id="b1" type="button" class="btn btn-primary">Add user</button></a>
            <a href="allusers.php" style="color:black; " style="text-decoration: none"><button id="b2" type="button" class="btn btn-primary">All users</button></a>
            <a href="transaction.php" style="color:black; " style="text-decoration: none"><button id="b3" type="button" class="btn btn-primary">Statement</button></a>
        </div>








    </body>
</html>