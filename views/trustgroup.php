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
            <h3><em>Trust Group Registration</em></h3>
            <p>Enter your details in the field below to register.</p>
        </div>
        <form action="trustgroup"  method="post" autocomplete="off"> <br>
            <label for="firstName" id="top-word" class="top-word">Leader Full Name</label> <br> 
            <input type="text" name="leaderName" placeholder="enter first name and surname here"> <br>
            <br>
            <label for="lastName">Secretary Full Name</label> <br> 
            <input type="text" name="secretaryName" placeholder="enter first name and surname here"> <br>
            <br>
            <label for="lastName">Member Full Name</label> <br> 
            <input type="text" name="memberName" placeholder="enter first name and surname here"> <br>
            <br>
            <label for="birthDate">Date Of Birth of Leader</label> <br> 
            <input type="date" name="birthDate" placeholder="enter date of birth"> <br>
            <br>
            <label for="address">Residential Address of Leader</label> <br>
            <input type="text" name="address" placeholder="enter residential address"> <br>
            <br>
            <label for="ward">Ward of Leader</label> <br>
            <input type="text" name="ward" placeholder="enter ward"> <br>
            <br>
            <label for="lga">Local Government Area (lga) of Leader</label> <br>
            <input type="text" name="lga" placeholder="enter lga"> <br>
            <br>
            <label for="state">State of Leader</label> <br>
            <input type="text" name="state" placeholder="enter state"> <br>
            <br>
            <label for="phoneNumber1">Leader Phone Number</label> <br>
            <input type="number" name="leaderPhone" maxlength="11" autocomplete="off" placeholder="enter leader phone number"> <br> <br>
            <label for="phoneNumber2">Secretary Phone Number</label> <br>
            <input type="number" name="secretaryPhone" maxlength="11" placeholder="enter secretary phone number"> <br>
            <br>
            <label for="phoneNumber2">Member Phone Number</label> <br>
            <input type="number" name="memberPhone" maxlength="11" placeholder="enter member phone number"> <br>
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
            <label for="gaurantor">Leader Passport Photograph</label> <br>
            <input type="file" name="leaderPassport"> <br>
            <br>
            <label for="gaurantor">Secretary Passport Photograph</label> <br>
            <input type="file" name="secretaryPassport"> <br>
            <br>
            <label for="gaurantor">Member Passport Photograph</label> <br>
            <input type="file" name="memberPassport"> <br>
            <br>
            <label for="gaurantor">Leader Valid ID Card</label> <br>
            <input type="file" name="leaderId"> <br>
            <br>
            <label for="gaurantor">Secretary Valid ID Card</label> <br>
            <input type="file" name="secretaryId"> <br>
            <br>
            <label for="gaurantor">Member Valid ID Card</label> <br>
            <input type="file" name="memberId"> <br>
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
        height: 1950px;
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