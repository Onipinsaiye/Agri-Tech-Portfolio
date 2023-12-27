<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriTech.com</title>
</head>
<body>
    <div class="covering" id="covering">
        <div class="header" id="header">
            <h3><em>Operator Registration</em></h3>
            <p>Enter your details in the field below to register.</p>
        </div>
        <form action="opregistration"  method="post" autocomplete="off"> <br>
            <label for="firstName" id="top-word" class="top-word">First Name</label> <br> 
            <input type="text" name="firstName"> <br>
            <br>
            <label for="lastName">Last Name (Surname)</label> <br> 
            <input type="text" name="lastName"> <br>
            <br>
            <label for="birthDate">Date Of Birth</label> <br> 
            <input type="date" name="birthDate"> <br>
            <br>
            <label for="address">Residential Address</label> <br>
            <input type="text" name="address"> <br>
            <br>
            <label for="ward">Ward</label> <br>
            <input type="text" name="ward"> <br>
            <br>
            <label for="lga">Local Government Area (lga)</label> <br>
            <input type="text" name="lga"> <br>
            <br>
            <label for="state">State</label> <br>
            <input type="text" name="state"> <br>
            <br>
            <label for="phoneNumber1">Phone Number 1</label> <br>
            <input type="number" name="phoneNumber1" maxlength="11" autocomplete="off" minlength="11"> <br> <br>
            <label for="phoneNumber2">Phone Number 2 (optional)</label> <br>
            <input type="number" name="phoneNumber2"> <br>
            <br>
            <label for="gaurantor">Upload Guarantor's Form</label> <br>
            <input type="file" name="guarantor"> <br>
            <br>
            <button type="submit" style="width: 150px; height: 30px;" name="backbtn" class="btn">Back</button>
            <button type="submit" style="width: 150px; height: 30px;" name="submitbtn" class="btn">Submit</button>
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
    input, select, button{
        width: 85%;
        height: 40px;
        margin-left: 10px;
    }
    .covering{
        margin-top: 10px;
        margin-left: 350px;
        margin-bottom: 30px;
        border: 2px solid whitesmoke;
        width:612px ;
        height: 1150px;
        font-family: cursive;
        background-image: url(/img/Babbangona02.jpeg);
        background-repeat: no-repeat;
        background-size: 520vh;
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
    label{
        margin-bottom: 20px;
        margin-left: 10px;
    }
    .top-word{
        margin-top: 50px;
    }



</style>
</html>