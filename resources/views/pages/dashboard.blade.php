<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite('resources/css/dashboard.css')
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
            Dashboard
        </h3>
        <p class="i-nameee">Welcome back, [Admin!]</p>
        <div class="values">
            <div class="val-box">
                <i class="fa-solid fa-briefcase"></i>
                <div>
                    <h3>20</h3>
                    <span>Job Post</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fa-solid fa-calendar-days"></i>
                <div>
                    <h3>10</h3>
                    <span>Events</span>
                </div>
            </div>
            <div class="val-box">
                <i class="fa-solid fa-users"></i>
                <div>
                    <h3>800</h3>
                    <span>Alumni</span>
                </div>
            </div>
        </div>

        <div class="board">
            <div class="board-1">
                <table width="100%">
                    <thead>
                        <tr>
                            <td><br></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><br><br><br><br><br><br><br><br><br><br><br></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="board-2">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Upcoming Events</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="event">
                                <i class="fa-regular fa-file"></i>
                                    <div>
                                        <h3>Jade Riel Abuela</h3>
                                        <p>Bachelor of Science in Information Systems</p>
                                    </div>                         
                            </td>
                            <td class="event">
                                <i class="fa-regular fa-file"></i>
                                    <div>
                                        <h3>Jade Riel Abuela</h3>
                                        <p>Bachelor of Science in Information Systems</p>
                                    </div>                         
                            </td>
                            <td class="event">
                                <i class="fa-regular fa-file"></i>
                                    <div>
                                        <h3>Jade Riel Abuela</h3>
                                        <p>Bachelor of Science in Information Systems</p>
                                    </div>                         
                            </td>
                            <td class="event">
                                <i class="fa-regular fa-file"></i>
                                    <div>
                                        <h3>Jade Riel Abuela</h3>
                                        <p>Bachelor of Science in Information Systems</p>
                                    </div>                         
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