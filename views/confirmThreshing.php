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
            <h3><em>Unscheduled Threshing</em></h3>
            <p>Enter the threshing details for the selected farm.</p>
            <fieldset><h3><em>Unscheduled Threshing</em></h3></fieldset>
        </div>
        <form action="confirmThreshing"  method="post" autocomplete="off"> <br>
            <label for="Thresher" id="top-word" class="top-word">Who threshed the farm?</label> <br> 
            <select name="thresherName" id="thresher">
                <option value="thresher"></option>
                <option value="member">Member</option>
                <option value="company">Company</option>
            </select> <br>
            <br>
            <label for="personnel">Confirm who threshed this farm</label> <br> 
            <select name="thresherConfirm" id="thresher">
                <option value="thresher"></option> <br>
                <option value="member" name="member">Member</option>
                <option value="company" name="company">Company</option>
            </select> <br>
            <br>
            <label for="id">Name of Personnel Threshing</label> <br>
            <select name="personnel" id="thresher">
                <option value="personnel"></option>
                <option value="personnel">Robotech 001</option>
                <option value="personnel">Robotech 002</option>
                <option value="personnel">Robotech 003</option>
                <option value="personnel">Robotech 004</option>
                <option value="personnel">Robotech 005</option>
                <option value="personnel">Others</option>
            </select> <br>
            <br>
            <label for="Id">ID of Personnel Threshing</label> <br>
            <input type="text" name="id" maxlength="18" autocomplete="off"> <br> <br>
            <label for="date">Enter Threshing date</label> <br>
            <input type="date" name="date"> <br>
            <br>
            <button type="submit" style="width: 150px; height: 30px;" name="backbtn" class="btn">Back</button>
            <button type="submit" style="width: 150px; height: 30px;" name="nextbtn" class="btn">Next</button>
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
        height: 770px;
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