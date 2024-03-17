<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up / Sign In Form</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @vite('resources/css/login.css')
</head>
<body>
<div id="container" class="container">
    <div class="row"> 
        <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">
                <div class="form sign-up">
                    <h1>Create Account</h1>
                    <form action="{{route('register-user')}}" method="post">
                        @if(Session::has('success'))
                        <div>{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div>{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                    <div class="input-group">
                        <input type="text" placeholder="First Name" name="firstName" value="">
                        <span class="text-red-600 text-xs">@error('firstName') {{$message}} @enderror</span>
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="Middle Name" name="middleName" value="">
                        <span class="text-red-600 text-xs">@error('middleName') {{$message}} @enderror</span>
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="Last Name" name="lastName" value="">
                        <span class="text-red-600 text-xs">@error('lastName') {{$message}} @enderror</span>
                    </div>
                    <div class="sign-upp">
                    <div class="input-group">
                        <select name="course" id="course" value="">
                            <option value="" selected disabled>Course</option>
                            <option value="Bachelor of Arts in Broadcasting">Bachelor of Arts in Broadcasting (BAB)</option>
                            <option value="Bachelor of Science in Accountancy">Bachelor of Science in Accountancy (BSA)</option>
                            <option value="BSA Technology (BSAT) | BSA Information Systems">BSA Technology (BSAT) | BSA Information Systems (BSAIS)</option>
                            <option value="Bachelor of Science in Social Work">Bachelor of Science in Social Work (BSSW)</option>
                            <option value="Bachelor of Science in Information Systems">Bachelor of Science in Information Systems (BSIS)</option>
                            <option value="Computer Technology">Computer Technology (CT)</option>
                            <option value="Computer Programming">Computer Programming (CP)</option>
                            <option value="Health Care Services">Health Care Services (HCS)</option>
                            <option value="International Cookery">International Cookery (IC)</option>
                            <option value="Mass Communication">Mass Communication (MC)</option>
                            <option value="Nursing Student">Nursing Student (NS)</option>
                            <option value="Office Management">Office Management (OM)</option>
                        </select>
                        <span class="text-red-600 text-xs">@error('course') {{$message}} @enderror</span>
                    </div>
                    <div class="input-group">
                        <select name="batch" id="batch" value="">
                            <option value="" selected disabled>Batch</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                        <span class="text-red-600 text-xs">@error('batch') {{$message}} @enderror</span>
                    </div>
                    </div>
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email" value="">
                        <span class="text-red-600 text-xs">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="Username" name="username" value="">
                        <span class="text-red-600 text-xs">@error('username') {{$message}} @enderror</span>
                    </div>
                    <div class="sign-uppp">
                    <div class="input-group">
                        <input type="password" placeholder="Password" name="password" value="">
                        <span class="text-red-600 text-xs">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Confirm password" name="confirm-password" value="">
                    </div>
                    </div>
                    
                    <div class="input-group">
                        <input type="checkbox" id="termsCheckbox">
                        <label for="termsCheckbox">I accept the Terms of Use and Privacy Policy</label>
                    </div>
                    <br>
                    <button type="submit" class="btn" onclick="openPopup()">SIGN UP</button>
                    </form>
                    
                    <p>
                        <span>
                            Already have an account?
                        </span>
                        <b onclick="toggle()" class="pointer">
                            Sign in here
                        </b>
                    </p>
                </div>
            </div>
        
        </div>
        <div class="col align-items-center flex-col sign-in">
            <div class="form-wrapper align-items-center">
                <div class="form sign-in">
                    <h1>Sign in</h1>
                    <form action="{{route('login-user')}}" method="post">
                    @if(Session::has('success'))
                    <div>{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div>{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Username" name="username" value="">
                            <span class="text-red-600 text-xs">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Password" name="password" value="">
                            <span class="text-red-600 text-xs">@error('password') {{$message}} @enderror</span>
                        </div>
                        <br>
                        <button type="submit">SIGN IN</button>
                    </form>
                    <p>
                            Forgot password?
                    </p>
                    <p>
                        <span>
                            Don't have an account?
                        </span>
                        <b onclick="toggle()" class="pointer">
                            Sign up here
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row content-row">
        <div class="col align-items-center flex-col">
            <div class="text sign-in">
                <h2>
                    Hello, Alumni!
                </h2>
            </div>

            
            <div class="img sign-in">
    
            </div>
        </div>
        <div class="col align-items-center flex-col">
            <div class="img sign-up">
            
            </div>
            <div class="text sign-up">
                <h2>
                    Join with us!
                </h2>

            </div>
        </div>
    </div>
</div>
<div class="popup" id="popup">
    <img src="img/check.jpg" alt="">
    <h2>Thank you for signing up!</h2>
    <p>For added security, we need to verify your email address. We've sent a verification code to blank@student.laverdad.edu.ph</p>
    <button type="button" onclick="closePopup()">OK</button>
</div>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>

<style>

:root {
    --primary-color: #E8AF30;
    --secondary-color: #E8AF30;
    --black: #000000;
    --white: #ffffff;
    --gray: #efefef;
    --gray-2: #757575;

}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html,
body {
    height: 100vh;
    overflow: hidden;
    background-color: #162F65;
}

.container {
    position: relative;
    min-height: 100vh;
    overflow: hidden;
}

.container.blur {
    filter: blur(50px);
    transition: filter 0.5s ease-in-out;
}

.row {
    display: flex;
    flex-wrap: wrap;
    height: 100vh;
}

.col {
    width: 50%;
}

.align-items-center {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.form-wrapper {
    width: 60%;
    max-width: 28rem;
}

.form {
    padding: 1rem;
    background-color: var(--white);
    border-radius: 1rem;
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    transform: scale(0);
    transition: .5s ease-in-out;
    transition-delay: .5s;
}

.sign-upp{
    display: flex;
    justify-content: space-between;  
}

.sign-uppp{
    display: flex;
    justify-content: space-between;  
}

.input-group {
    position: relative;
    width: 90%;
    margin: .5rem auto;
}

.input-group select {
    display: inline-block;
    width: 80%;
    height: 35px;   
    font-size: .90rem;
    background-color: var(--gray);
    border: 0.125rem solid var(--white);
    outline: none;
    pointer-events: auto;
    padding-left: 0.60rem;
    color: var(--gray-2);
    
}

.sign-uppp .input-group input {
    display: inline-block;
    width: 80%;
    height: 35px;   
    font-size: .90rem;
    background-color: var(--gray);
    border: 0.125rem solid var(--white);
    outline: none;
    pointer-events: auto;
    padding-left: .90rem;
    padding-right: 0;
}

.input-group input {
    width: 100%;
    height: 35px;   
    font-size: .70rem;
    padding: 1rem 3rem;
    font-size: .9rem;
    background-color: var(--gray);
    border: 0.125rem solid var(--white);
    outline: none;
    pointer-events: auto;
    padding-left: 0.90rem;
}

.input-group input:focus {
    border: 0.125rem solid var(--primary-color);
}

.form button {
    cursor: pointer;
    width: 50%;
    padding: .6rem 0;
    border-radius: 5rem;
    border: none;
    background-color: var(--primary-color);
    color: var(--white);
    font-size: .9rem;
    font-weight: bold;
    outline: none;
}

.form p {
    margin: 1rem 0;
    font-size: .7rem;
    color: #757575;
}

.flex-col {
    flex-direction: column;
}

.pointer {
    cursor: pointer;
}

.container.sign-in .form.sign-in,
.container.sign-in .social-list.sign-in,
.container.sign-in .social-list.sign-in>div,
.container.sign-up .form.sign-up,
.container.sign-up .form.sign-upp,
.container.sign-up .form.sign-uppp,
.container.sign-up .social-list.sign-up,
.container.sign-up .social-list.sign-up>div {
    transform: scale(1);
}

.content-row {
    position: absolute;
    top: 0;
    left: 0;
    pointer-events: none;
    z-index: 6;
    width: 100%;
}

.text {
    margin: 4rem;
    color: var(--white);
}

.text.sign-in h2 {
    font-size: 3.5rem;
    font-weight: 800;
    margin: 1rem 4rem 7rem 1rem;
    transition: 1s ease-in-out;
}

.text.sign-up h2 {
    font-size: 3.5rem;
    font-weight: 800;
    margin: 15rem 0 10rem 5rem;
    transition: 1s ease-in-out;
}

.text p {
    font-weight: 600;
    transition: 1s ease-in-out;
    transition-delay: .2s;
}

.text button {
    cursor: pointer;
    width: 100%;
    padding: .6rem 0;
    border-radius: .5rem;
    border: #ffffff;
    background-color: var(--primary-color);
    color: var(--white);
    font-size: 1.2rem;
}

.img img {
    width: 30vw;
    transition: 1s ease-in-out;
    transition-delay: .4s;
}

.text.sign-in h2,
.text.sign-in p,
.img.sign-in img {
    transform: translateX(-250%);
}

.text.sign-up h2,
.text.sign-up p,
.img.sign-up img {
    transform: translateX(250%);
}

.container.sign-in .text.sign-in h2,
.container.sign-in .text.sign-in p,
.container.sign-in .img.sign-in img,
.container.sign-up .text.sign-up h2,
.container.sign-up .text.sign-up p,
.container.sign-up .img.sign-up img {
    transform: translateX(0);
}

.input-group input[type="checkbox"] {
    width: 15px;
    height: 11px;
    border-radius: 30px;
    border: 1px solid #999;
    outline: none;
    cursor: pointer;
    box-sizing: border-box;
}

.input-group label {
    font-size: .8rem;
    color: #757575;
    cursor: pointer;
}

.btn{
    padding: 10px 60px;
    background: #fff;
    border: 0;
    outline: none;
    cursor: pointer;
    font-size: 22px;
    font-weight: 500;
    border-radius: 10px;
    transition: transform 0.2s;
}

.btn:active{
    transform: scale(0.95);
}

.popup {
    width: 400px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.1);
    text-align: center;
    padding: 20px;
    color: #333;
    visibility: hidden;
    z-index: 1000; 
    transition: all 0.5s ease-in-out;
}

.open-popup {
    visibility: visible;
    transform: translate(-50%, -50%) scale(1);
}

.popup img{
    width: 100px;
    margin-top: -50px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.popup h2{
    font-size: 38px;
    font-weight: 800;
    margin: 20px;
}

.popup p{
    font-size: 15px;
    margin: 30px 0 10px;
}

.popup button {
    width: 50%;
    margin: 20px 0 20px;
    padding: 10px 0;
    background-color: #4B86C8;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    cursor: pointer;
}

/* BACKGROUND */

.container::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    height: 100vh;
    width: 300vw;
    transform: translate(35%, 0);
    background-image: linear-gradient(-45deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    transition: 1s ease-in-out;
    z-index: 6;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-bottom-right-radius: max(50vw, 50vh);
    border-top-left-radius: max(50vw, 50vh);
}

.container.sign-in::before {
    transform: translate(0, 0);
    right: 50%;
}

.container.sign-up::before {
    transform: translate(100%, 0);
    right: 50%;
}

/* RESPONSIVE */

@media only screen and (max-width: 425px) {

    .container::before,
    .container.sign-in::before,
    .container.sign-up::before {
        height: 100vh;
        border-bottom-right-radius: 0;
        border-top-left-radius: 0;
        z-index: 0;
        transform: none;
        right: 0;
    }

    /* .container.sign-in .col.sign-up {
        transform: translateY(100%);
    } */

    .container.sign-in .col.sign-in,
    .container.sign-up .col.sign-up {
        transform: translateY(0);
    }

    .content-row {
        align-items: flex-start !important;
    }

    .content-row .col {
        transform: translateY(0);
        background-color: unset;
    }

    .col {
        width: 100%;
        position: absolute;
        padding: 2rem;
        background-color: var(--white);
        border-top-left-radius: 2rem;
        border-top-right-radius: 2rem;
        transform: translateY(100%);
        transition: 1s ease-in-out;
    }

    .row {
        align-items: flex-end;
        justify-content: flex-end;
    }

    .form,
    .social-list {
        box-shadow: none;
        margin: 0;
        padding: 0;
    }

    .text {
        margin: 0;
    }

    .text p {
        display: none;
    }

    .text h2 {
        margin: .5rem;
        font-size: 2rem;
    }
}

</style>