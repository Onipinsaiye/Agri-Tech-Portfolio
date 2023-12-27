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
         <h3><em>Select A Transporter</em></h3>
            <p>
                See a list of transporters below. Click on the add transporter button <br>
                to register a new transporter or click on an existing transporter <br>
                card to book the transporter.
            </p>
        </div>
        <form action="transporter" method="post"> <br>
            <button type="submit" id="btn1" class="btn2" name="btn2">Add Transporter</button> <br> <br>
            <button type="submit" id="btn2" class="btn1" name="btn1">Back</button> <br> <br>
        </form>
            <br>
        <footer style="font-family: cursive; text-align:center;" >
            <h2><em>&copy; Victor Onipinsaiye, <?php echo "$year" ?> </em></h2>
        </footer>
    </div>
</body>
<style>
    .btn1, .btn2, .btn3{
        width: 65%;
        height: 60px;
        margin-left: 100px;
        font-family: cursive;
        font-weight: bolder;
        background-color: #9ACD32;
        border-radius: 8px;
        border-color: #9ACD32;
    }
    .container{
        margin-top: 10%;
        margin-left: 350px;
        margin-bottom: 30px;
        border: 2px solid whitesmoke;
        width:610px ;
        height: 450px;
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