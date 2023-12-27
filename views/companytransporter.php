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
            <h3><em>Company Transporter Registration</em></h3>
            <p>
                Kindly provide the following details pertaining to the <br>
                transporter information
            
            </p>
        </div>
        <form action="companytransporter"  method="post" autocomplete="off"> <br>
            <label for="firstName" id="top-word" class="top-word">First Name</label> <br> 
            <input type="text" name="firstName" placeholder="first name"> <br>
            <br>
            <label for="lastName">Last Name (Surname)</label> <br> 
            <input type="text" name="lastName" placeholder="last name (surname)"> <br>
            <br>
            <label for="id">Staff ID</label> <br>
            <input type="number" name="id" placeholder="Enter staff Id" maxlength="18"> <br>
            <br>
            <label for="role">Staff Role</label> <br>
            <input type="text" name="role" placeholder="Staff Role"> <br>
            <br>
            <label for="hub">Hub</label> <br>
            <input type="text" name="hub" placeholder="hub"> <br>
            <br>
            <label for="state">State</label> <br>
            <input type="text" name="state"  placeholder="Enter state"> <br>
            <br>
            <label for="phoneNumber1">Phone Number 1</label> <br>
            <input type="number" name="phoneNumber1" maxlength="11" autocomplete="off" placeholder="Enter personal phone number"> <br>
            <br>
            <label for="phoneNumber2">Phone Number 2 (optional)</label> <br>
            <input type="number" name="phoneNumber2" maxlength="11" placeholder="Enter second personal phone number"> <br>
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
        height: 1000px;
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