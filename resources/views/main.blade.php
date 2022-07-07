<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <title>MyTutor Main Page</title>
</head>

<body>
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

    <header>
        <div class="navbar">
            <div class="bar">
                <ul class="left">
                    <li class="title">MyTutor</li>
                </ul>
                <ul class="right">
                    <li>
                        <a href="{{ url('logout') }}"><button>Logout</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="w3-center w3-card" style="display: flex; justify-content: center; margin: 32px auto; max-width: 1000px;">
        <h3 class="content_title" style="font-size: 28px;">Subject List</h3>
    </div>
    
    <div style="display: flex; justify-content: flex-end; margin: 32px auto; max-width: 1000px;">
        <button class="button" onclick="document.getElementById('newsubject').style.display='block';">New Subject</button>
    </div>

    <div class="w3-center w3-card" style="display: flex; justify-content: center; margin: 32px auto; max-width: 1000px; padding: 0px;">
        <table style="width: 100%; padding: 10px 0px;">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Total Learning Hours</th>
            </thead>
        </table>
    </div>

    

    <div id="newsubject" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-round" style="width:500px">
            <header class="w3-row w3-blue">
                <span onclick="document.getElementById('newsubject').style.display='none';" 
                    class="w3-button w3-display-topright w3-small">&times;</span>
                <h4 class="w3-margin-left">New Subject Form</h4>
            </header>
            <div class="w3-padding">
                <form method="post" action="{{ route('savesubject') }}">
                    {{csrf_field()}}
                    <p><input class="w3-input w3-round w3-border" type="text" name="title" placeholder="Title"></p>
                    <p><textarea class="w3-input w3-round w3-border" type="text" name="desc" placeholder="Description"></textarea></p>
                    <p><input class="w3-input w3-round w3-border" type="number" name="price" placeholder="Price" step="any"></p>
                    <p><input class="w3-input w3-round w3-border" type="number" name="hours" placeholder="Total Learning Hours"></p>
                    <button class="button" type="submit">Add Subject</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <!-- Copyright, Title & Year -->
        <div style="text-align:center;">
            <span>&copy; MyTutor 2022</span>
        </div>
    </footer>
</body>

</html>