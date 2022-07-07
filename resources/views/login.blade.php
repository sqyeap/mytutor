<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <title>MyTutor Login Page</title>
</head>

<body class="antialiased">
    @if (session('save'))
        <script>
            alert("Success");
        </script>
    @endif

    @if (session('error'))
        <script>
            alert("Failed");
        </script>
    @endif

    <div style="display: flex; justify-content: center;">
        <div class="w3-container w3-card w3-padding-64" style="width: 800px; margin: 64px 0px; text-align: left;">
            <div class="w3-container">
                <h2 class="w3-center"><b>MyTutor</b></h2>
                <h3 class="w3-center" style="text-decoration: underline;">User Login Page</h3>
            </div>
            
            <form name="loginForm" action="{{ route('login.post') }}" method="POST">
                {{csrf_field()}}
                <p>
                    <label><b>Email</b></label>
                    <input type="email" id="idemail" name="email" class="w3-input w3-round w3-border" placeholder="Your Email" required>
                </p>
                @if ($errors->has('email'))
                    <span class="w3-red">{{ $errors->first('email') }}</span>
                @endif
                
                <p>
                    <label><b>Password</b></label>
                    <input type="password" id="idpass" name="password" class="w3-input w3-round w3-border" placeholder="Password" required>
                </p>
                @if ($errors->has('password'))
                    <span class="w3-red">{{ $errors->first('password') }}</span>
                @endif

                <p>
                    <input type="checkbox" id="idremember" name="rememberme" class="w3-check w3-round" onclick="rememberMe()">
                    <label style="font-family: Georgia; font-size: 14px;">Remember Me</label>
                </p>
                <p class="w3-center">
                    <input type="submit" id="submit" name="submit" class="button" value="Login">
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="reset" class="button">
                </p>
            </form>
        </div>
    </div>
    
    <footer class="w3-bottom">
        <p>&copy; MyTutor 2022</p>
    </footer>
</body>

</html>