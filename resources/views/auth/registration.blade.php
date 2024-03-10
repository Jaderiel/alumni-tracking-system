<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-custom-blue font-poppins">
    <div class="grid grid-cols-2">
        <!-- column 1 -->
        <div class="">
            <div></div>
            <div class="size-full bg-custom-yellow rounded-br-full shadow-lg">
                <div class="h-screen flex justify-center items-center">
                    <h1 class="text-6xl text-white font-bold">Hello, Alumni !</h1>
                </div>
            </div>
        </div>

        <!-- column 2 -->
        <div class="h-screen flex justify-center items-center">
            <div class=" bg-white rounded-3xl">
                <div class="p-10">
                    <h1 class="p-2 flex justify-center text-2xl font-bold">Sign Up</h1>
                    
                        <form action="{{route('register-user')}}" method="post" class="flex flex-col gap-2 p-2">
                                @if(Session::has('success'))
                                <div>{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div>{{Session::get('fail')}}</div>
                                @endif
                                @csrf
                                <input type="text" name="username" value="{{old('username')}}" placeholder="Username" class="bg-slate-300 p-2 text-sm rounded-sm">
                                <span class="text-red-600 text-xs">@error('username') {{$message}} @enderror</span>
                                <input type="text" name="email" value="{{old('email')}}" placeholder="Email" class="bg-slate-300 p-2 text-sm rounded-sm w-96">
                                <span class="text-red-600 text-xs">@error('email') {{$message}} @enderror</span>
                                <input type="password" name="password" value="{{old('password')}}" placeholder="Password" class="bg-slate-300 p-2 text-sm rounded-sm">
                                <span class="text-red-600 text-xs">@error('password') {{$message}} @enderror</span>
                                <button class="bg-custom-yellow rounded-full p-2 mt-6 mb-6 text-white w-52 self-center">SIGN UP</button>
                            
                        </form>
                    
                    <p class="flex justify-center text-xs">Already Have an Account? <strong class="hover:cursor-pointer">Sign In here</strong></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>