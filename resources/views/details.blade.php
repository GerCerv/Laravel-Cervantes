<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        </head>
<body>
 <nav class="navbar">
        <ul>
        <li><a href="/homepage">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <main>
    
        <h1> </h1>
        <input type="text" id="username" placeholder="Enter Username">
        <button onclick="getInput()">Name</button>
        <h3>I am {{$name}}</h3>
        <script>
        function getInput() {
            var username = document.getElementById("username").value;
            window.location.href = "/details/"+ username;
        }
        </script>
    @if($name == "Gerryson")
        <h3>Hi, I am Gerryson P. Cervantes Jr.</h3>
        <h3> College student of Cavite State of University Imus Campus </h3>
        
    @elseif($name == "Irvin")
        <h3>Hi, I am Irvin</h3>
        <h3> My section is BSIT 4-F currently training for OJT </h3>
    @elseif($name == "Keth")
        <h3>Hi, I am KETH</h3>
        <h3> I am good at designing, willing to learn and currently training for OJT</h3>
    @endif



        
    </main>

</body>
</html>