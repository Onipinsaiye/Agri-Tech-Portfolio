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
            <h3><em>Entrepreneur Registration</em></h3>
            <p>Enter your details in the field below to register.</p>
        </div>
        <form action="entrepreneur"  method="post" autocomplete="off"> <br>
            <label for="firstName" id="top-word" class="top-word">First Name</label> <br> 
            <input type="text" name="firstName" placeholder="enter first name"> <br>
            <br>
            <label for="lastName">Last Name (Surname)</label> <br> 
            <input type="text" name="lastName" placeholder="enter surname"> <br>
            <br>
            <label for="birthDate">Date Of Birth</label> <br> 
            <input type="date" name="birthDate" placeholder="enter date of birth"> <br>
            <br>
            <label for="address">Residential Address</label> <br>
            <input type="text" name="address" placeholder="enter residential address"> <br>
            <br>
            <label for="ward">Ward</label> <br>
            <input type="text" name="ward" placeholder="enter ward"> <br>
            <br>
            <label for="lga">Local Government Area (lga)</label> <br>
            <input type="text" name="lga" placeholder="enter lga"> <br>
            <br>
            <label for="state">State</label> <br>
            <input type="text" name="state" placeholder="enter state"> <br>
            <br>
            <label for="phoneNumber1">Phone Number 1</label> <br>
            <input type="number" name="phoneNumber1" maxlength="11" autocomplete="off" placeholder="enter first phone number"> <br> <br>
            <label for="phoneNumber2">Phone Number 2 (optional)</label> <br>
            <input type="number" name="phoneNumber2" maxlength="11" placeholder="enter second phone number"> <br>
            <br>
            <label for="program">Program</label> <br>
                <select name="program" id="program">
                    <option value="select">Select Program</option>
                    <option value="maize">Maize</option>
                    <option value="soybean">Soybean</option>
                    <option value="rice">Rice</option>
                    <option value="poultry">Poultry</option>
                </select> <br>
                <br>
            <label for="gaurantor">Upload Guarantor's Form</label> <br>
            <input type="file" name="guarantor"> <br>
            <br>
            <label for="gaurantor">Upload Passport Photograph</label> <br>
            <input type="file" name="passport"> <br>
            <br>
            <label for="gaurantor">Upload Valid ID Card</label> <br>
            <input type="file" name="id"> <br>
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
        height: 1420px;
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