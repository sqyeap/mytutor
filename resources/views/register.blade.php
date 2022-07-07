<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <title>MyTutor Registration Page</title>
</head>

<body>
    <div style="display: flex; justify-content: center;">
        <div class="w3-container w3-card w3-padding-16" style="width: 800px; text-align: left;">
            <form name="registrationForm" action="{{ route('register.post') }}" method="POST">
                {{csrf_field()}}
                <div class="w3-container">
                    <h2 class="w3-center"><b>MyTutor</b></h2>
                    <h3 class="w3-center" style="text-decoration: underline;">New User Registration</h3>
                </div>
                <p>
                    <div class="w3-col w3-left" style="width: 100px;">
                        <label>Name:</label>
                    </div>
                    <div class="w3-rest">
                        <input type="text" name="name" class="w3-input w3-round w3-border" maxlength="100" placeholder="Your Name" required>
                    </div>
                </p>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

                <p>
                    <div class="w3-col w3-left" style="width: 100px;">
                        <label>Email:</label>
                    </div>
                    <div class="w3-rest">
                        <input type="email" name="email" class="w3-input w3-round w3-border" maxlength="50" placeholder="Email Address" required>
                    </div>
                </p>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                
                <p>
                    <div class="w3-col w3-left" style="width: 100px;">
                        <label>Phone No.:</label>
                    </div>
                    <div class="w3-rest">
                        <input type="tel" name="phone" class="w3-input w3-round w3-border" maxlength="20" placeholder="Phone Number" required>
                    </div>
                </p>
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif

                <p>
                    <div class="w3-col w3-left" style="width: 100px;">
                        <label>Address:</label>
                    </div>
                    <div class="w3-rest">
                        <textarea name="address" class="w3-input w3-round w3-border" rows="4" width="100%" maxlength="500" placeholder="Home Address" required></textarea>
                    </div>
                </p>
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif

                <p>
                    <div class="w3-col w3-left" style="width: 100px;">
                        <label>State:</label>
                    </div>
                    <div class="w3-rest">
                        <input type="text" name="state" class="w3-input w3-round w3-border" maxlength="50" placeholder="State" required>
                    </div>
                </p>
                @if ($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif

                <p>
                    <div class="w3-col w3-left" style="width: 100px;">
                        <label>Password:</label>
                    </div>
                    <div class="w3-rest">
                        <input type="password" name="password" class="w3-input w3-round w3-border" maxlength="40" placeholder="Password" required>
                    </div>
                </p>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

                <br>
                <p class="w3-center">
                    <input type="submit" name="submit" class="button" value="Register">
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="reset" class="button">
                </p>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; MyTutor 2022</p>
    </footer>
</body>

</html>