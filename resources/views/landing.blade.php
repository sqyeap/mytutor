<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>MyTutor Landing Page</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="bar">
                <ul class="left">
                    <li class="title">MyTutor</li>
                </ul>
                <ul class="right">
                    <li>
                        <a href="#contact" class="sectionlink">Contacts</a>
                    </li>
                    <li>
                        <a href="{{ url('register') }}"><button>Register</button></a>
                    </li>
                    <li>
                        <a href="{{ url('login') }}"><button>Login</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Description for MyTutor -->
    <div class="content">
        <ul class="content_title">
            <li>Lorem Ipsum</li>
        </ul>
        <ul class="content_item">
            <li>
                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, 
                adipisci velit...
            </li>
            <li>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                tempor incididunt ut labore et dolore magna aliqua.
            </li>
        </ul>
    </div>

    <footer>
        <!-- Contacts and other info -->
        <ul id="contact">
            <li class="footer_title">About MyTutor.com</li>
            <li class="footer_item">
                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit 
                quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, 
                omnis dolor repellendus.
            </li>
        </ul>

        <ul>
            <li class="footer_title">Contacts</li>
            <li class="footer_item">mytutor@email.com</li>
            <li class="footer_item">(+60) 12-4567890</li>
        </ul>

        <!-- Copyright, Title & Year -->
        <div style="text-align:center;">
            <span>&copy; MyTutor 2022</span>
        </div>
    </footer>
</body>

</html>