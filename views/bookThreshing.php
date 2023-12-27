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
            <h3><em>Unscheduled Book Threshing</em></h3>
            <p>Enter the date this member will be ready to thresh this farm and click the next button to proceed.</p>
            <fieldset><h3><em>Unscheduled Book Threshing</em></h3></fieldset>
        </div>
        <form action="bookThreshing" method="post"> <br>
            <label for="Thresher" id="top-word" class="top-word">Who is threshing this farm?</label> <br>
            <select name="thresher" id="thresher" required>
                <option value="thresher" name="thresher[]"></option>
                <option value="thresher" name="thresher[]">Member</option>
                <option value="thresher" name="thresher[]">Company</option>
            </select> <br>
            <br>
            <label for="personnel">Name of personel Threshing</label> <br>
            <select name="thresher" id="thresher">
                <option value="thresher"></option> <br>
                <option value="thresher" name="nameThresher">Robotech 001</option>
                <option value="thresher" name="nameThresher">Robotech 002</option>
                <option value="thresher" name="nameThresher">Robotech 003</option>
                <option value="thresher" name="nameThresher">Robotech 004</option>
                <option value="thresher" name="nameThresher">Robotech 005</option>
            </select> <br>
            <br>
            <label for="id">ID of Personnel Threshing</label> <br>
            <input type="text" name="id" maxlength="18"> <br>
            <br>
            <label for="date">Enter Threshing date</label> <br>
            <input type="date" name="date"> <br>
            <br>
            <label for="dateConfirmation">Re-enter Threshing date</label> <br>
            <input type="date" name="dateConfirm"> <br>
            <br>
            <label for="startTime">Start Time</label> <br>
            <input type="time" name="time"> <br>
            <br>
            <label for="endTime">End Time</label> <br>
            <input type="time" name="endTime"> <br>
            <br>
            <br>
            <button type="submit" style="width: 150px; height: 30px;" name="backbtn" class="btn">Back</button>
            <button type="submit" style="width: 150px; height: 30px; " name="nextbtn" class="btn">Next</button>
            </form>
        </form> 
            <br>
        <footer style="font-family: cursive; text-align:center;" >
            <h2><em>&copy; Victor Onipinsaiye, <?php echo "$year" ?> </em></h2>
        </footer>
    </div>

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
        width:610px ;
        height: 990px;
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