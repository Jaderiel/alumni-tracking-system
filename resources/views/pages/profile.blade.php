<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="css/profile.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="profile.js" defer></script>
</head>

<body>
    @include('sideNavigation')

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <i id="menu-btn" class="fa-solid fa-bars"></i>
            </div>
            <div class="profile">
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>

        <h3 class="i-name">
        Profile Settings
        </h3>
        
        <div id="container" class="container">
            <div class="panel">
                <div class="heading">
                    USER INFORMATION
                </div>
                <div class="panel-btn">
                    <div class="row">
                        <a href="profile-edit.html">
                            <button class="edit-button" onclick="openPopup"><i class="fa-solid fa-user-pen"></i> Edit</button>
                        </a>
                        
                            <button class="delete-button" onclick="deletePopup()"><i class="fa-solid fa-user-xmark"></i> Delete</button>
                    </div>
                    <div class="inline-group">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" id="first-name" placeholder="Monica">
                        </div>
                        <div class="form-group">
                            <label for="middle-name">Middle Name</label>
                            <input type="text" class="form-control" id="middle-name" placeholder="Tapion">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Ocampo">
                        </div>
                    </div>
                    <div class="inline-group">
                        <div class="form-group">
                            <label for="course">Course</label>
                            <select class="form-control" id="course">
                                <option value="" selected disabled>Bachelor of Science in Accountancy (BSA)</option>
                                <option value="course1">Bachelor of Arts in Broadcasting (BAB)</option>
                                <option value="course2">Bachelor of Science in Accountancy (BSA)</option>
                                <option value="course3">BSA Technology (BSAT) | BSA Information Systems (BSAIS)</option>
                                <option value="course4">Bachelor of Science in Social Work (BSSW)</option>
                                <option value="course5">Bachelor of Science in Information Systems (BSIS)</option>
                                <option value="course6">Computer Technology (CT)</option>
                                <option value="course7">Computer Programming (CP)</option>
                                <option value="course8">Health Care Services (HCS)</option>
                                <option value="course9">International Cookery (IC)</option>
                                <option value="course10">Mass Communication (MC)</option>
                                <option value="course11">Nursing Student (NS)</option>
                                <option value="course12">Office Management (OM)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="batch">Batch</label>
                            <select class="form-control" id="batch">
                                <option value="" selected disabled>2021</option>
                                <option value="batch1">2006</option>
                                <option value="batch2">2007</option>
                                <option value="batch3">2008</option>
                                <option value="batch4">2009</option>
                                <option value="batch5">2010</option>
                                <option value="batch6">2011</option>
                                <option value="batch7">2012</option>
                                <option value="batch8">2013</option>
                                <option value="batch9">2014</option>
                                <option value="batch10">2015</option>
                                <option value="batch11">2016</option>
                                <option value="batch12">2017</option>
                                <option value="batch13">2018</option>
                                <option value="batch14">2019</option>
                                <option value="batch15">2020</option>
                                <option value="batch16">2021</option>
                                <option value="batch17">2022</option>
                                <option value="batch18">2023</option>
                            </select>
                        </div>
                    </div>
                    <div class="inline-group">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="monicaocampo@student.laverdad.edu.ph">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="mocsss321">
                        </div>
                    </div>
                </div>
                
                <div class="heading">
                    USER EMPLOYMENT INFORMATION
                </div>
                <div class="panel-btn">
                        <div class="inline-group2">
                            <div class="form-group">
                                <label for="employment">Employment Status</label>
                                <select class="form-control" id="employment">
                                    <option value="" selected disabled>Employed</option>
                                    <option value="status1">Employed</option>
                                    <option value="status2">Unemployed</option>
                                </select>
                            </div>
                        </div>
                        <div class="inline-group2">
                                <div class="form-group">
                                    <label for="date">Date of First Employment</label>
                                    <input type="date" class="form-control" id="date" placeholder="09/29/2019">
                                </div>
                                <div class="form-group">
                                    <label for="date2">Date of Employment</label>
                                    <input type="date" class="form-control" id="date2" placeholder="05/25/2022">
                                </div>
                        </div>
                        <div class="inline-group2">
                            <div class="form-group">
                                <label for="industry">Industry</label>
                                <input type="text" class="form-control" id="industry" placeholder="Technology">
                            </div>
                            <div class="form-group">
                                <label for="job">Job Title</label>
                                <input type="text" class="form-control" id="job" placeholder="UI Designer">
                            </div>
                        </div>
                        <div class="inline-group2">
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company" placeholder="XYZ Technical Solutions">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" placeholder="United States">
                            </div>
                        </div>
                        <div class="inline-group2">
                            <div class="form-group">
                                <label for="salary">Salary Per Year</label>
                                <input type="number" class="form-control" id="salary" placeholder="2,700,00">
                            </div>
                        </div>
                    </div>

                    <div class="heading">
                        USER POST-GRADUATION INFORMATION
                    </div>
                    <div class="panel-btn">
                            <div class="inline-group2">
                                <div class="form-group">
                                    <label for="degree">Degree Status</label>
                                    <input type="text" class="form-control" id="degree" placeholder="Ph.D. in Psychology">
                                </div>
                            </div>
                    </div> 
            </div>
        </div>

        <h3 class="i-name">
            My Job Posted
        </h3>
            
            <div id="container2" class="container2">
            </div>

        <h3 class="i-name">
            My Gallery Posted
        </h3>
                
            <div id="container3" class="container3">
            </div>

    </section>

    <div class="popup" id="popup">
        <img src="img/trash.png" alt="">
        <h2>Are you sure you want to delete your account?</h2>
            <div class="inline-group3">
                <button type="button" onclick="closePopup()">NO, CANCEL</button>
                <a href="login.html">
                <button class="sure-button" onclick="openPopup">YES, I'M SURE</button>
                </a>
            </div>
    </div>

    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass("active");
        })
    </script>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    background: #EFF2FB;
    position: relative;
    display: flex;
}

#menu{
    background: #162F65;
    width: 300px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
}

#menu .logo{
    display: flex;
    align-items: center;
    font-size: 90%;
    color: #fff;
    padding: 30px 0 0 20px;
}

#menu .items{
    margin-top: 30px;
}

#menu .items li{
    list-style: none;
    padding: 10px;
    transition: 0.3s ease;
}

#menu .items li:hover{
    background: #E8C766;
    cursor: pointer;
}

#menu .items li i{
    color: rgb(255, 255, 255);
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    font-size: 14px;
    margin: 0 10px 0 25px;
}

#menu .items li:hover i,
#menu .items li:hover a {
    color: #162F65;
}

#menu .items li a{
    color: rgb(255, 255, 255);
    text-decoration: none;
    transition: 0.3s ease;
}

#menu-btn{
    display: none;
    cursor: pointer
}

#interface {
    width: calc(100% - 300px);
    margin-left: 300px;
    position: relative;
    padding-top: 70px; /* Adjust based on the height of your navigation bar */
}

#interface .navigation {
    display: flex;
    align-items: center;
    background: #fff;
    padding: 15px 30px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

#interface .navigation .profile {
    display: flex;
    justify-content: flex-end;
    align-items:flex-end;
}

#interface .navigation .profile i {
    font-size: 19px;
    font-weight: 400;
    margin-left: 880px;
    justify-content: flex-end;

}

/* Adjust the content padding to prevent overlap with the fixed navigation */
#interface .content {
    padding-top: 70px; /* Adjust based on the height of your navigation bar */
}

.i-name{
    color:#2D55B4;
    padding: 20px 30px 0 30px;
    font-size: 24px;
    font-weight: 700;
}

.container{
  width: 95%;
  height: 100%;
  border-radius: 10px;
  overflow: auto;
  background: #fff;
  margin: 20px 20px 0 20px;
}

.container.blur {
    opacity: 0.1;
    transition: filter 0.5s ease-in-out;
}

.container2{
    width: 95%;
    height: 10%;
    border-radius: 10px;
    overflow: auto;
    background: #fff;
    margin: 20px 20px 0 20px;
}
  
.container2.blur {
      opacity: 0.1;
      transition: filter 0.5s ease-in-out;
}

.container3{
    width: 95%;
    height: 10%;
    border-radius: 10px;
    overflow: auto;
    background: #fff;
    margin: 20px 20px 0 20px;
}
  
.container3.blur {
      opacity: 0.1;
      transition: filter 0.5s ease-in-out;
}


.panel {
    width: 95%;
    margin: 20px;
    overflow: auto;
    background: #fff;
    border: 1px solid #00000086;}

.heading {
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    background: #162F65;
    text-align: start;
    padding: 10px 15px;
}

.panel-btn .row {
    display: flex;
    justify-content: flex-end;
    margin: 10px;
}

.panel-btn button {
    border: none;
    margin: 5px;
    color: #fff;
    border-radius: 4px;
    font-size: 10px;
    cursor: pointer;
}

.row a button.edit-button {
    background: #00A36C; 
    padding: 3px 7px;
}

.row a button.edit-button:hover {
    background: #016443; 
}

.delete-button {
    background: #BB0237; 
    padding: 3px 8px;
}

.delete-button:hover {
    background: #850227; 
}

.row{
    margin-top: 30px;
}
.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding: 5px 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
    font-size: 13px;
    margin-right: 10px;
}

.bio-row p {
    display: inline-block;
    font-size: 13px;
    color: #000000ab;
}

.bold{
    font-weight: 600;
}

.inline-group {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 25px;
}

.inline-group2 {
    display: flex;
    flex-wrap: wrap;
    margin-top: 25px;
    margin-bottom: 25px;
}

.inline-group3 {
    margin-top: 15px;
    margin-bottom: 15px;
}

.form-group {
    margin-left: 30px;
    flex: 1;
}

.form-group label {
    display: block; 
    margin-bottom: 5px; 
    color: #000000cb;
    font-size: 13px;
    font-weight: 500;
}

.form-group input {
    padding: 5px;
    border: 1px solid #2D55B4;
    border-radius: 3px;
    font-size: 12px;
}

.form-group select { 
    padding: 5px;
    border: 1px solid #2D55B4;
    border-radius: 3px;
    color: #000000b2;   
}

.form-control::placeholder {
    color: #000000b2;
}

#first-name, #middle-name, #last-name {
    width: 220px;
}

#course{
    width: 415px; 
}

.form-group label[for="batch"] { 
    margin-left: 60px;
}

#batch {
    width: 100px; 
    margin-left: 60px;
}

#email {
    width: 415px; 
}

.form-group label[for="username"] { 
    margin-left: 60px;
}

.form-group label[for="confirm-password"] { 
    margin-left: 75px;
}

#username{
    width: 100px; 
    margin-left: 60px;
}

#employment{
    width: 130px; 
}

#industry{
    width: 350px; 
}

#job{
    width: 350px; 
}

#company{
    width: 350px; 
}

#location{
    width: 350px; 
}

#salary{
    width: 130px; 
}

#degree{
    width: 350px; 
}

#password{
    width: 220px; 
}

#confirm-password{
    width: 220px; 
    margin-left: 75px;
}

.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: none;
    pointer-events: none;
}

.form-control2 {
    pointer-events: none;
}

.popup {
    width: 350px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    position: fixed;
    top: 55%;
    left: 55%;
    transform: translate(-50%, -50%) scale(0.1);
    text-align: center;
    visibility: hidden;
    z-index: 1000; 
    transition: all 0.5s ease-in-out;
}

.delete-popup {
    visibility: visible;
    transform: translate(-50%, -50%) scale(1);
}

.popup img{
    width: 70px;
    margin-top: 15px;
}

.popup h2{
    font-size: 18px;
    font-weight: 400;
    margin-left: 40px;
    margin-right: 40px;
}

.popup button {
    width: 30%;
    height: 30px;
    background: #9da0a8; 
    margin-bottom: 15px;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 10px;
    border-radius: 4px;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    cursor: pointer;
}

.popup .sure-button {
    margin-left: 20px;
    width: 30%;
    height: 30px;
    background: #BB0237; 
    margin-bottom: 15px;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 10px;
    border-radius: 4px;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    cursor: pointer;
}

.popup button:hover {
    background: #75777e; 
}

.popup .sure-button:hover {
    background: #850227; 
}

@media (max-width: 769px) {
    #menu {
        width: 270px;
        position: fixed;
        left: -270px;
        transition: 0.3s ease;
    }
    #menu.active {
        left: 0px;
    }
    #menu-btn {
        display: initial;
    }
    #interface {
        width: 100%;
        margin-left: 0px;
        display: inline-block;
        transition: 0.3s ease;
    }
    #menu.active~ #interface {
        width: calc(100% - 270px);
        margin-left: 270px;
        transition: 0.3s ease;

    }
    #interface .navigation {
        width: 100%;
    }

    #interface .navigation .profile {
        width: 100%;
    }

    .find {
        padding: 30px 30px 0 10px;
        justify-content: flex-start;
    }
    .find .search-course {
        padding: 10px 10px;
        margin: 10px 0 10px 0;
    }

    .board-list {
        width: 85%;
        overflow-x: auto;
    }

    .panel {
        width: 90%;
        padding: 30px 0 10px 0;
        overflow-x: auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
}

@media (max-width:477px) {
    #interface .navigation {
        padding: 15px;
    }
    .i-name {
        padding: 10px 15px 0 15px;
    }
    .values {
        padding: 10px 15px 0 15px;
    }
    .values .val-box {
        width: 100%;
        margin: 0;
    }
    .board {
        margin: 0 15px 15px 0;
    }
}
</style>