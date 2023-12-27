const express = require("express");

const bodyParser = require("body-parser");

const php = require("php");

const app = express();

const port = 3000;

app.use(bodyParser.urlencoded({extended: true}));

app.use(express.static("public"));

app.set("view engine", "php");

const today = new Date();

const currentYear = today.getFullYear();




// this is the landing page of the web app
app.get("/", function(req,res){
    res.render("index", {year: currentYear})
})

app.post("/", function(req,res){
    var hausa = req.body.btn1;

    var english = req.body.btn2;

    if(hausa === ""){
        return res.redirect("loginpage");
    } else if(english === ""){
        return res.redirect("loginpage");
    }else{
        console.log("Error 404!");
    }
})

//this is the language selection page of the web app
app.get("/loginpage", function(req,res){
    res.render("loginpage", {year: currentYear})
})

app.post("/loginpage", function(req,res){

    var register = req.body.btn1;

    var login = req.body.btn2;

    var backButton = req.body.btn3

    if(login === ""){
        return res.redirect("login");
    }else if(register === ""){
        return res.redirect("register");
    }else if(backButton === ""){
        return res.redirect("/");
    }
    else{
        console.log("Error 404!");
    }
})

// this is the page where the use enters the phone number and password to access the app fully

var clients = [
    {
        phoneNumber: 2348100134348,
        password: 8904,
        clientName: "Victor",
    },
    {
        phoneNumber: 2347088860770,
        password: 2145,
        clientName: "Joseph",
    },
    {
        phoneNumber: 2348106583065,
        password: 3065,
        clientName: "Tosin",
    },
    {
        phoneNumber: 2347039484266,
        password: 4266,
        clientName: "Friday",
    }
]

app.get("/login", function(req,res){
    res.render("login", {year: currentYear})

})


app.post("/login", function(req,res){

    var username = Number(req.body.phonenumber);

    var password = Number(req.body.password);

    var login = req.body.btn1

    var backButton = req.body.btn2;

    let isAuthenticated = false;

    if(backButton === ""){
        return res.redirect("loginpage");
    } else if(login === ""){
        for(let i = 0; i<clients.length; i++){
            if(clients[i].phoneNumber === username && clients[i].password === password){
                console.log(clients[i].phoneNumber, clients[i].password)
                isAuthenticated = true;
                break;
            }
        }
    }

    if(isAuthenticated){
        return res.redirect("homepage")
    }else{
        return res.redirect("login")
    }


})

//this line of code will handle the get and post request for the registeration page for  a field officer or an operator

app.get("/register", function(req,res){
    res.render("register", {year: currentYear})
})

app.post("/register", function(req,res){
    var buttonOne = req.body.btn1;

    var buttonTwo = req.body.btn2;

    var buttonThree = req.body.btn3;

    if(buttonThree === ""){
        return res.redirect("loginpage");
    }else if(buttonOne === ""){
        return res.redirect("foregistration");
    } else if(buttonTwo === ""){
        return res.redirect("opregistration");
    }
})

//this line of code will render the form for the field officer to register 

app.get("/foregistration", function(req,res){
    res.render("foregistration", {year: currentYear})
})

app.post("/foregistration", function(req,res){

    var firstName = req.body.firstName;

    var lastName = req.body.lastName;

    var birthDate = req.body.birthDate;

    var address = req.body.address;

    var phoneNumber1 = req.body.phoneNumber;

    var ward = req.body.ward;

    var lga = req.body.lga;

    var state = req.body.state

    var guarantor = req.body.guarantor;

    var back = req.body.backbtn;

    var submit = req.body.submitbtn;


    if(back === ""){
        return res.redirect("register");
    } else if(submit === "" && firstName !== "" && lastName !== "" && birthDate !== "" && address !== "" && phoneNumber1 !== "" && ward !== "" && lga !== "" && state !== "" && guarantor !== ""){
        console.log(firstName, lastName, birthDate, address, phoneNumber1);
        return res.redirect("success")
    }else{
        console.log("Error 404!");
        return res.redirect("foregistration")
    }
})

// this line of code will handle the get and post request for the operator registration

app.get("/opregistration", function(req,res){
    res.render("opregistration", {year: currentYear})
})

app.post("/opregistration", function(req,res){
    var firstName = req.body.firstName;

    var lastName = req.body.lastName;

    var birthDate = req.body.birthDate;

    var address = req.body.address;

    var phoneNumber1 = req.body.phoneNumber;

    var ward = req.body.ward;

    var lga = req.body.lga;

    var state = req.body.state

    var guarantor = req.body.guarantor;

    var back = req.body.backbtn;

    var submit = req.body.submitbtn;

    if(back === ""){
        return res.redirect("register");
    } else if(submit === "" && firstName !== "" && lastName !== "" && birthDate !== "" && address !== "" && phoneNumber1 !== "" && ward !== "" && lga !== "" && state !== "" && guarantor !== ""){
        console.log(firstName, lastName, birthDate, address, phoneNumber1);
        return res.redirect("success")
    }else{
        console.log("Error 404!");
        return res.redirect("opregistration")
    }
})
//This line of code will render the select homepage when the homepage route is accessed
app.get("/homepage", function(req,res){
    res.render("homepage", {year: currentYear});
})

app.post("/homepage", function(req,res){

    var learn = req.body.btn1;

    var homepage = req.body.btn2;

    var entrepreneurs = req.body.btn3;

    var trustGroups = req.body.btn4;

    var members = req.body.btn5;

    var thresher = req.body.btn6;

    var transporter = req.body.btn7;

    var viewActivity = req.body.btn8;

    var sync = req.body.btn9;

    var logout = req.body.btn10;

    if(logout === ""){
        return res.redirect("loginpage");
    } else if(transporter === ""){
        return res.redirect("transporter");
    }else if(thresher === ""){
        return res.redirect("activities");
    }else if(members === ""){
        return res.redirect("memberpage");
    }else if(trustGroups === ""){
        return res.redirect("trustgroup");
    }else if(entrepreneurs === ""){
        return res.redirect("entrepreneur")
    }
})

// this line of code handles the get and post request of the entrepreneur route

app.get("/entrepreneur", function(req,res){
    res.render("entrepreneur", {year: currentYear} )
})

app.post("/entrepreneur", function(req,res){
    var firstName = req.body.firstName;

    var lastName = req.body.lastName;

    var birthDate = req.body.birthDate;

    var address = req.body.address;

    var phoneNumber1 = req.body.phoneNumber;

    var ward = req.body.ward;

    var lga = req.body.lga;

    var state = req.body.state

    var guarantor = req.body.guarantor;

    var passport = req.body.passport;

    var id = req.body.id;

    var back = req.body.backbtn;

    var submit = req.body.submitbtn;


    if(back === ""){
        return res.redirect("homepage");
    } else if(submit === "" && firstName !== "" && lastName !== "" && birthDate !== "" && address !== "" && phoneNumber1 !== "" && ward !== "" && lga !== "" && state !== "" && guarantor !== "" && passport !== "" && id !== ""){
        console.log(firstName, lastName, birthDate, address, phoneNumber1);
        return res.redirect("success")
    }else{
        console.log("Error 404!");
        return res.redirect("entrepreneur")
    }
})

// this line of code handles the get and post request of the trust group route

app.get("/trustgroup", function(req,res){
    res.render("trustgroup", {year: currentYear} )
})


app.post("/trustgroup", function(req,res){
    var leaderName = req.body.leaderName;

    var secretaryName = req.body.secretaryName;

    var memberName = req.body.memberName;

    var birthDate = req.body.birthDate;

    var address = req.body.address;

    var leaderPhone = req.body.leaderPhone;

    var secretaryPhone = req.body.secretaryPhone;

    var memberPhone = req.body.memberPhone;

    var ward = req.body.ward;

    var lga = req.body.lga;

    var state = req.body.state

    var guarantor = req.body.guarantor;

    var leaderpassport = req.body.leaderpassport;

    var secretaryPassport = req.body.secretaryPassport;

    var memberPassport = req.body.memberPassport;

    var leaderId = req.body.leaderId;

    var secretaryId = req.body.secretaryId;

    var memberId = req.body.leaderId;

    var back = req.body.backbtn;

    var submit = req.body.submitbtn;


    if(back === ""){
        return res.redirect("homepage");
    } else if(submit === "" && leaderName !== "" && secretaryName !== "" && memberName !== "" && birthDate !== "" && address !== "" && phoneNumber1 !== "" && ward !== "" && lga !== "" && state !== "" && guarantor !== "" && passport !== "" && id !== ""){
        console.log(firstName, lastName, birthDate, address, phoneNumber1);
        return res.redirect("success")
    }else{
        console.log("Error 404!");
        return res.redirect("trustgroup")
    }
})
// this line of code handles the get and post request of the member route

app.get("/memberpage", function(req,res){
    res.render("memberpage",  {year: currentYear} )
})

app.post("/memberpage", function(req,res){
            
    var firstName = req.body.firstName;

    var lastName = req.body.lastName;

    var birthDate = req.body.birthDate;

    var address = req.body.address;

    var phoneNumber1 = req.body.phoneNumber;

    var ward = req.body.ward;

    var lga = req.body.lga;

    var state = req.body.state

    var guarantor = req.body.guarantor;

    var passport = req.body.passport;

    var id = req.body.id;

    var back = req.body.backbtn;

    var submit = req.body.submitbtn;


    if(back === ""){
        return res.redirect("homepage");
    } else if(submit === "" && firstName !== "" && lastName !== "" && birthDate !== "" && address !== "" && phoneNumber1 !== "" && ward !== "" && lga !== "" && state !== "" && guarantor !== "" && passport !== "" && id !== ""){
        console.log(firstName, lastName, birthDate, address, phoneNumber1);
        return res.redirect("success")
    }else{
        console.log("Error 404!");
        return res.redirect("memberpage")
    }
})
//this line of code is responsible for the get and post request of the transporter app

app.get("/transporter", function(req,res){
    res.render("transporter", {year: currentYear});
})

app.post("/transporter", function(req,res){

    var back = req.body.btn1;

    var add = req.body.btn2;

    if(back === ""){
        return res.redirect("homepage");
    }else if(add === ""){
        return res.redirect("transportercategory")
    }
})

app.get("/transportercategory", function(req,res){
    res.render("transportercategory", {year: currentYear})
})

app.post("/transportercategory", function(req,res){

    var thirdParty = req.body.btn1;

    var companyTransporter = req.body.btn2;

    var back = req.body.btn3;

    if(back === ""){
        return res.redirect("transporter")
    }else if(companyTransporter === ""){
        return res.redirect("companytransporter")
    } else if(thirdParty === ""){
        return res.redirect("thirdtransporter")
    }else{
        console.log("Error 404!");
        return res.redirect("transportercategory")
    }
})

app.get("/thirdtransporter", function(req,res){
    res.render("thirdtransporter",{year: currentYear} )
})

app.post("/thirdtransporter", function(req,res){

    var firstName = req.body.firstName;

    var lastName = req.body.lastName;

    var address = req.body.address;

    var phoneNumber1 = req.body.phoneNumber;

    var ward = req.body.ward;

    var lga = req.body.lga;

    var state = req.body.state

    var agreement = req.body.agreement;

    var driverLicense = req.body.driverLicense;

    var back = req.body.backbtn;

    var submit = req.body.submitbtn;

    if(back === ""){
        return res.redirect("transportercategory");
    } else if(submit === "" && firstName !== "" && lastName !== ""  &&  address !== "" && phoneNumber1 !== "" && ward !== "" && lga !== "" && state !== "" && driverLicense !== "" && agreement !== ""){
        return res.redirect("success");
    }else{
        console.log("Error 404!");
        return res.redirect("thirdtransporter");
    }

})

app.get("/companytransporter", function(req,res){
    res.render("companytransporter", {year: currentYear})
})

app.post("/companytransporter", function(req,res){

    var firstName = req.body.firstName;

    var lastName = req.body.lastName;

    var staffId = req.body.id;

    var staffRole = req.body.role;

    var hub = req.body.hub;

    var state = req.body.state;

    var firstNumber = req.body.phoneNumber1;

    var secondNumber = req.body.phoneNumber2

    var submit = req.body.submitbtn;

    var back = req.body.backbtn;

    if(back === ""){
        return res.redirect("transportercategory")
    } else if(submit === "" && firstName !== "" && lastName !== "" && staffId !== "" && staffRole !== "" && hub !== "" && state !=="" && firstNumber !== ""){
        return res.redirect("success");
    }else{
        console.log("Error 404!");
        return res.redirect("companytransporter");
    }
})

app.get("/termtransporter", function(req,res){
    res.render("termtransporter", {year: currentYear} )
})

app.post("/termtransporter", function(req,res){

    var button = req.body.submitbtn;

    if(button === ""){
        return res.redirect("thirdtransporter")
    }else{
        console.log("Error in processing request!")
        return res.redirect("termtransporter")
    }
})

//this line of code is responsible for the get and post request for the threshing app
app.get("/activities", function(req,res){
    res.render("activities", {year: currentYear});
})

app.post("/activities", function(req,res){
    var buttoneOne = req.body.btn1;

    var buttoneTwo = req.body.btn2;

    var buttonThree = req.body.btn3;

    var backButton = req.body.backBtn;

    if(buttoneOne === ""){
        return res.redirect("activities")
    } else if(buttoneTwo === ""){
        return res.redirect("bookThreshing");
    } else if(buttonThree === ""){
        return res.redirect("confirmThreshing")
    }else if(backButton === ""){
        return res.redirect("homepage")
    }
})

app.get("/bookThreshing", function(req,res){
    res.render("bookThreshing", {year: currentYear});
})

app.post("/bookThreshing", function(req,res){

    var backButton = req.body.backbtn;

    var nextButton = req.body.nextbtn;

    var thresher = req.body.thresher;

    var id = req.body.id;

    var date = req.body.date;

    var dateConfirm = req.body.dateConfirm;

    var startTime = req.body.time;

    var endTime = req.body.endTime;

    if(backButton === ""){
        return res.redirect("activities");
    } else if(nextButton === "" && thresher !== "" && id !== "" && date !== "" && dateConfirm !== "" && startTime !== "" && endTime !== ""){
        return res.redirect("success")
    }
})

app.get("/confirmThreshing", function(req,res){
    res.render("confirmThreshing", {year: currentYear});
})

app.post("/confirmThreshing", function(req,res){
    var thresherName = req.body.thresherName;

    var thresherConfirm = req.body.thresherConfirm;

    var date = req.body.date;

    var fieldOfficer = req.body.personnel;

    var id = req.body.id;

    var backButton = req.body.backbtn;

    var nextButton = req.body.nextbtn;

    var id = req.body.id;

    if(backButton === ""){
        return res.redirect("activities");
    } else if(nextButton === "" && thresherName === "member" && thresherConfirm === "member" && date !== ""){
        return res.redirect("success")
    }else if(nextButton === "" && thresherName === "company"  && thresherConfirm === "company" && fieldOfficer !== "" && id !== "" && date !== ""){
        return res.redirect("success")
    }
     else{
        console.log("Error 404!");
    }
})

// this line of code is responsible for the get and post request of the success app
app.get("/success", function(req,res){
    res.render("success")
})

app.post("/success", function(req,res){
    var nextButton = req.body.nextbtn;

    if(nextButton === ""){
        return res.redirect("homepage");
    }else{
        console.log("Error 404!");
    }
})

app.get("/backend", function(req,res){
    res.render("backend", {year: currentYear})
})

app.post("/backend",function(req,res){
    
})
/**
    this line of code enables the server to listen/get request from the user, 
    respond to the request here in the server and sends back to the user via port 3000
*/ 
app.listen(port, function(){
    console.log("Server is running on port 3000!")
})
