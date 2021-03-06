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
            @foreach ($listsubject as $listItem)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $listItem->id}}</td>
                <td>{{ $listItem->sub_title}}</td>
                <td>{{ $listItem->sub_desc}}</td>
                <td>{{ $listItem->sub_price}}</td>
                <td>{{ $listItem->sub_hours}}</td>
                <td>
                    <div class="w3-cell">
                        <form method="post" action="{{route('markDelete',$listItem->id)}}" accept-charset="UTF-8" onsubmit="return confirm('Delete?');">
                            {{csrf_field()}}
                            <button class="w3-button w3-round w3-block" type="submit">
                                <i class="fa fa-trash"> </i></button>
                        </form>
                    </div>
                    <div class="w3-cell">
                        <button class="w3-button w3-round w3-block" onclick="document.getElementById('{{$loop->iteration}}').style.display='block';return false;"><i class="fa fa-pencil-square-o"> </i>
                        </button>
                    </div>
                    <div id="{{$loop->iteration}}" class="w3-modal w3-animate-opacity">
                        <div class="w3-modal-content w3-round" style="width:500px">
                            <header class="w3-row w3-blue"> <span onclick="document.getElementById('{{$loop->iteration}}').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                                <h4 class="w3-margin-left">Update Product Form</h4>
                            </header>
                            <div class="w3-padding">
                                <form method="post" action="{{route('markUpdate',$listItem->id)}}">
                                    {{csrf_field()}}
                                    <p><input class="w3-input w3-round w3-border" type="text" name="prname" placeholder="Name" value ="{{ $listItem->product_name}}"></p>
                                    <p><input class="w3-input w3-round w3-border" type="text" name="prtype" placeholder="Type" value ="{{ $listItem->product_type}}"></p>
                                    <p><input class="w3-input w3-round w3-border" type="number" name="prprice" placeholder="Price" step="any" value ="{{ $listItem->product_price}}"></p>
                                    <p><input class="w3-input w3-round w3-border" type="number" name="prqty" placeholder="Quantity" value ="{{ $listItem->product_qty}}"></p>
                                    </textarea></p>
                                    <button class="w3-button w3-blue w3-round" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
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