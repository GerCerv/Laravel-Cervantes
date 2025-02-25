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
    
        <h1>     </h1>
        <input type="text" id="username" placeholder="Enter Username">
        <button onclick="getInput()">Name</button>
        <h3>Please input the name you want to know <h3>
        <script>
        function getInput() {
            var username = document.getElementById("username").value;
            window.location.href = "/details/"+ username;
        }
        </script>


        <p>This page will view the information of
            a specific name
        </p>
    </main>

</body>
</html>