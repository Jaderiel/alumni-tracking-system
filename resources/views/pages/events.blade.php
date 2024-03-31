<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="events.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
            Events & Announcements
        </h3>
        
        <div class="box">
            <p>Upcoming Events & Announcements</p>
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

.box {
    background: #E8C766;
    width: 27%;
    border-radius: 5px;
    font-size: 13px;
    font-weight: 500;
    text-align: center;
    padding: 8px;
    margin: 40px 30px;
    border: 1px solid #2D55B4;
    }

.values .val-box i{
    font-size: 25px;
    width: 60px;
    height: 60px;
    line-height: 60px;
    border-radius: 10%;
    text-align: center;
    color: #000000;
    background: #E8C766;
    margin-right: 15px;
}

.values .val-box h3{
    font-size: 20px;
    font-weight: 600;
}

.values .val-box span{
    font-size: 14px;
    color: #828997;
}

.board{  
    display: flex; 
    justify-content: space-between;
}

.board-1 {
  width: 450px;
  height: 250px;
  background-color: #fff;
  background: linear-gradient(#f8f8f8, #fff);
  box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  margin: 1.5rem;}

.board-2 {
    width: 60%;
    margin-left: 30px;
    overflow: auto;
    background: #fff;
    border-radius: 10px;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.288); 
}

.board-3 {
    width: 30%;
    margin-right: 30px;
    overflow: auto;
    background: #fff;
    border-radius: 10px;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.288);
}

table{
    border-collapse: collapse;
}

.board-1 thead td{
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 400;
    background: #162F65;
    text-align: center;
    padding: 10px;
}

.board-2 thead td{
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 400;
    background: #162F65;
    text-align: center;
    padding: 10px;
}

.board-3 thead td{
    font-size: 14px;
    font-weight: 600;
    text-align: center;
    padding: 10px;
    color: #2D55B4;
}

tbody tr td{
    padding: 10px 15px;
}

.board-3 h3{
    font-weight: 500;
    font-size: 13px;
    margin-left: 15px;
}

.board-3 p{
    font-weight: 400;
    font-size: 10px;
    color: #ABAEB7;
    margin-left: 15px;
}

.board-3 .event{
    display: flex;
    justify-content: flex-start;
}

.board-3 .event i{
    font-size: 20px;
    width: 30px;
    height: 35px;
    line-height: 35px;
    border-radius: 40%;
    text-align: center;
    color: #000000;
    background: #EFF2FB;
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
    .values {
        padding: 30px 30px 0 30px;
        justify-content: flex-start;
    }
    .values .val-box {
        padding: 10px 10px;
        margin: 10px 10px 10px 0;
    }
    .board {
        width: 100%;
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