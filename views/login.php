<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriTech.com</title>
</head>
<body>
    <div class="container" id="container">
        <div class="header" id="header">
            <h3><em>Select Login Option</em></h3>
            <p> 
                In order to gain full access to this application, you are to enter <br>
                your username, which is your phone number in the first box <br>
                below. Then, enter your password in the second box. Click the <br>
                gree login button to proceed when done.
            </p>
        </div>
        <form action="login" method="post" autocomplete="off"> <br>
            <input type="number" maxlength="13" minlength="13" placeholder="phone number" name="phonenumber"> <br> <br>
            <input type="password" maxlength="4" minlength="4" placeholder="password" name="password" autocomplete="off"> <br> <br>
            <button type="submit" id="btn1" class="btn1" name="btn1">Log in</button> <br> <br>
            <button type="submit" id="btn2" class="btn2" name="btn2">Back</button> <br> <br>
        </form>
        </form>
        <br>
        <footer style="font-family: cursive; text-align:center;" >
            <h2><em>&copy; Victor Onipinsaiye, <?php echo "$year" ?> </em></h2>
        </footer>
    </div>




    <?php
    
    
    
    ?>
</body>
<style>
    input{
        width: 65%;
        height: 60px;
        margin-left: 100px;
        font-family: cursive;
        font-weight: bolder;
        border-radius: 8px;
        border-color: whitesmoke;
        padding-left: 10px;
    }
    .btn1, .btn2{
        width: 65%;
        height: 60px;
        margin-left: 110px;
        font-family: cursive;
        font-weight: bolder;
        background-color: #9ACD32;
        border-radius: 8px;
        border-color: #9ACD32;
    }

    .container{
        margin-left: 350px;
        margin-bottom: 30px;
        border: 2px solid whitesmoke;
        width:610px ;
        height: 610px;
        font-family: cursive;
        background-image: url(/img/Babbangona02.jpeg);
        background-repeat: no-repeat;
        background-size: 400vh;
        color: whitesmoke;
    }
    .header{
        text-align: center;
    }
    fieldset{
        width: 600px;
        margin-left: 345px;
        border-color: whitesmoke;
    }
</style>
</html>