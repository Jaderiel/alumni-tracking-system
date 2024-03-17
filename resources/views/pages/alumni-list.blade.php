<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni List Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="css/alumni.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <section id="menu">
        <div class="logo">
            <h2>LVCC Alumni <br> Tracking System</h2>
        </div>

        <div class="items">
            <li><i class="fa-solid fa-house"></i><a href="dashboard.html">Dashboard</a></li>
            <li><i class="fa-solid fa-users"></i><a href="alumni-list.html">Alumni List</a></li>
            <li><i class="fa-solid fa-calendar-days"></i><a href="events.html">Events</a></li>
            <li><i class="fa-solid fa-briefcase"></i><a href="jobs.html">Jobs</a></li>
            <li><i class="fa-solid fa-image"></i><a href="gallery.html">Gallery</a></li>
            <li><i class="fa-solid fa-chart-line"></i><a href="analytics.html">Analytics</a></li><br><br><br><br>
            <li><i class="fa-solid fa-user-gear"></i><a href="profile.html">Profile</a></li>
            <li><i class="fa-solid fa-right-from-bracket"></i><a href="login.html">Logout</a></li>
        </div>
    </section>

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
            Alumni List
        </h3>

        <div class="find">
            <div class="search-course">
                <select name="course" id="course">
                    <option value="" selected disabled>COURSE NAME</option>
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
            <div class="search-batch">
                <select name="batch" id="batch">
                    <option value="" selected disabled>BATCH YEAR</option>
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
            <div class="search">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="Search...">
            </div>
        </div>

            <div class="board-list">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Course</td>
                            <td>Batch</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="number">
                                <p>1</p>
                            </td>

                            <td class="user">
                                <div class="user-info">
                                    <h5>Jade Riel Abuela</h5>
                                    <p>jaderielabuela@student.laverdad.edu.ph</p>
                                </div>
                            </td>

                            <td class="course">
                                <p>Bachelor of Arts in Broadcasting (BAB)</p>
                            </td>

                            <td class="batch">
                                <p>2023</p>
                            </td>

                            <td class="action">
                                <a href="alumni-info.html" class="button">View</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="number">
                                <p>2</p>
                            </td>

                            <td class="user">
                                <div class="user-info">
                                    <h5>Melanie Lopez</h5>
                                    <p>melanieainalopez@student.laverdad.edu.ph</p>
                                </div>
                            </td>

                            <td class="course">
                                <p>Bachelor of Science in Information Systems (BSIS)</p>
                            </td>

                            <td class="batch">
                                <p>2022</p>
                            </td>

                            <td class="action">
                                <a href="alumni-info.html" class="button">View</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="number">
                                <p>3</p>
                            </td>

                            <td class="user">
                                <div class="user-info">
                                    <h5>Monica Ocampo</h5>
                                    <p>monicaocampo@student.laverdad.edu.ph</p>
                                </div>
                            </td>

                            <td class="course">
                                <p>Bachelor of Science in Accountancy (BSA)</p>
                            </td>

                            <td class="batch">
                                <p>2020</p>
                            </td>

                            <td class="action">
                                <a href="alumni-info.html" class="button">View</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="number">
                                <p>4</p>
                            </td>

                            <td class="user">
                                <div class="user-info">
                                    <h5>Daniel Gaspar</h5>
                                    <p>danielgaspar@student.laverdad.edu.ph</p>
                                </div>
                            </td>

                            <td class="course">
                                <p>Bachelor of Science in Social Work (BSSW)</p>
                            </td>

                            <td class="batch">
                                <p>2021</p>
                            </td>

                            <td class="action">
                                <a href="alumni-info.html" class="button">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

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

#interface{
    width: calc(100% - 300px);
    margin-left: 300px;
    position: relative;
}

#interface .navigation{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 15px 30px;
}

#interface .navigation .profile {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

#interface .navigation .profile i{
    font-size: 19px;
    font-weight: 400; 
}

.i-name{
    color:#2D55B4;
    padding: 20px 30px 0 30px;
    font-size: 24px;
    font-weight: 700;
}

.i-nameee{
    color:#ABAEB7;
    padding: 1px 1px 0 30px;
    font-size: 15px;
}

.list{
    padding: 50px 30px 0;
}

.list .button{
    display: flex;
    width: 110px;
    height: 30px;
    align-items: center;
    padding: 10px 10px 10px;
    border: none;
    border-radius: 5px;
    background: #2264E5;
    color: #fff;
    font-size: 13px;
    cursor: pointer;
}

.list i{
    padding-right: 7px;
}

.find{
    padding: 30px 30px 30px;
    display: flex;
    gap: 20px;
    align-items: center;
    flex-wrap: wrap;
}

.find .search-course{
    display: flex;
    width: 40%;
    height: 40px;
    align-items: center;
    padding: 10px 10px 10px;
    border: 1px solid #2D55B4;
    border-radius: 4px;
}

.find .search-batch{
    display: flex;
    width: 25%;
    height: 40px;
    align-items: center;
    padding: 10px 10px 10px;
    border: 1px solid #2D55B4;
    border-radius: 4px;
}

.find .search{
    display: flex;
    width: 30%;
    height: 6%;
    align-items: center;
    padding: 10px 10px 10px;
    border: 1px solid #2D55B4;
    border-radius: 4px;
}

.find .search i{
    margin-right: 10px;
    color: gray;
}

.find .search input{
    border: none;
    outline: none;
    font-size: 13px;
    background-color: #EFF2FB;
    width: 100%;
}

.find .search-course select{
    border: none;
    outline: none;
    font-size: 13px;
    background-color: #EFF2FB;
    width: 100%;
    cursor: pointer;
}

.find .search-batch select{
    border: none;
    outline: none;
    font-size: 13px;
    background-color: #EFF2FB;
    width: 100%;
    cursor: pointer;
}

.list{
    padding: 50px 15px 0;
}

.list button{
    display: flex;
    width: 110px;
    height: 30px;
    align-items: center;
    padding: 10px 10px 10px;
    border: none;
    border-radius: 10px;
    background: #2264E5;
    color: #fff;
    font-size: 13px;
}

.board-list {
    width: 95%;
    margin: 30px 0 30px 30px;
    overflow: auto;
    background: #fff;
    border-radius: 15px;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.288); 
}

.board-list thead td{
    font-size: 11px;
    text-transform: uppercase;
    font-weight: 400;
    background: #EFF2FB;
    text-align: start;
    padding: 10px 25px;
}

table{
    border-collapse: collapse;
}

tbody tr td{
    padding: 10px 15px;
}

.board-list h5{
    font-weight: 500;
    font-size: 13px;
    margin-left: 10px;
}

.board-list p{
    font-weight: 400;
    font-size: 10px;
    color: #464F60;
    margin-left: 10px;
}

.board-list .user{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    text-align: start;
}

.board-list .action button{
    padding: 3px 12px;
    border-radius: 3px;
    color: #fff;
    border-style: none;
    background: #00A36C;
    margin-left: 7px;
}

.board-list tbody tr:nth-child(odd) {
    background-color: #fff;
}

.board-list tbody tr:nth-child(even) {
    background-color: #F9FAFC;
}

.button {
    padding: 4px 12px;
    border-radius: 3px;
    color: #fff;
    border-style: none;
    background: #00A36C;
    margin-left: 7px;
    text-decoration: none;
    font-size: 13px;
}
  
.button:hover {
    background-color: #2D55B4;
}

.container{
  width: 95%;
  height: 80%;
  border-radius: 10px;
  overflow: auto;
  background: #fff;
  margin: 20px 20px 0 20px;
}

.panel {
    width: 95%;
    margin: 20px;
    overflow: auto;
    background: #fff;
    border: 1px solid #00000086;}

.bio-graph-heading {
    color: #fff;
    font-size: 15px;
    font-weight: 400;
    background: #162F65;
    text-align: start;
    padding: 10px 15px;
}

.bio-graph-info {
    color: #89817e;
}

.row{
    margin-top: 30px;
    padding-bottom: 200px;
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