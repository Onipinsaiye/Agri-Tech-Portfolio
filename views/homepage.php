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
            <h3><em>Select Homepage</em></h3>
            <p>Select the desired activity you want to perform and click on the button.</p>
        </div>
        <form action="homepage" method="post"> <br>
            <button type="submit" id="btn1" class="btnHomepage" name="btn1">Learning Videos</button> <br> <br>
            <button type="submit" id="btn2" class="btnHomepage" name="btn2">My Homepage</button> <br> <br>
            <button type="submit" id="btn3" class="btnHomepage" name="btn3">My Entrepreneurs</button> <br></br>
            <button type="submit" id="btn4" class="btnHomepage" name="btn4">My Trust Groups</button> <br> <br>
            <button type="submit" id="btn5" class="btnHomepage" name="btn5">My Members</button> <br> <br>
            <button type="submit" id="btn6" class="btnHomepage" name="btn6">My Thresher</button> <br></br>
            <button type="submit" id="btn7" class="btnHomepage" name="btn7">My Transporter</button> <br></br>
            <button type="submit" id="btn8" class="btnHomepage" name="btn8">View Activity by phase</button> <br></br>
            <button type="submit" id="btn9" class="btnHomepage" name="btn9">Sync</button> <br></br>
            <button type="submit" id="btn10" class="btnHomepage" name="btn10">Log Out</button> <br></br>
        </form>
            <br>
        <footer style="font-family: cursive; text-align:center;" >
            <h2><em>&copy; Victor Onipinsaiye, <?php echo "$year" ?> </em></h2>
        </footer>
    </div>

</body>
<style>
    .btnHomepage{
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
        margin-top: 10px;
        margin-left: 350px;
        margin-bottom: 30px;
        border: 2px solid whitesmoke;
        width:610px ;
        height: 1050px;
        font-family: cursive;
        background-image: url(/img/Babbangona02.jpeg);
        background-repeat: no-repeat;
        background-size: 900vh;
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
    a{
        text-decoration: none;
    }


</style>
</html>