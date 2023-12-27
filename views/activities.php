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
            <h3><em>Unscheduled Activties</em></h3>
            <p>Select the unscheduled activity you want to perform for this farm.</p>
            <fieldset><h3><em>Conduct Unscheduled Activties</em></h3></fieldset>
        </div>
        <form action="activities" method="post"> <br>
            <button type="submit" id="btn1" class="btn1" name="btn1">Unscheduled Inspection</button> <br> <br>
            <button type="submit" id="btn2" class="btn2" name="btn2">Unscheduled Book Threshing</button> <br> <br>
            <button type="submit" id="btn3" class="btn3" name="btn3">Unscheduled Threshing</button> <br></br>
            <button type="submit" class="navbtn" name="backBtn">Back</button>
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
        margin-top: 5%;
        margin-left: 350px;
        margin-bottom: 30px;
        border: 2px solid whitesmoke;
        width:610px ;
        height: 600px;
        font-family: cursive;
        background-image: url(/img/Babbangona02.jpeg);
        background-repeat: no-repeat;
        background-size: 600vh;
        color: whitesmoke;
    }
    .header{
        text-align: center;
    }
    fieldset{
        width: 500px;
        border-color: whitesmoke;
        margin: auto;
    }

    .navbtn{
        width: 65%;
        height: 60px;
        margin-left: 100px;
        font-family: cursive;
        font-weight: bolder;
        background-color: #9ACD32;
        border-radius: 8px;
        border-color: #9ACD32;
    }
</style>
</html>