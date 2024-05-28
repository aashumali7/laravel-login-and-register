<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #131921;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            margin: 1px 0;
            text-align: center;
            background-color: #232F3E; /* Background color for the navigation bar */
            padding: 10px 0; /* Padding to create the red area around the navigation links */
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #4CAF50;
            display: inline-block;
            padding: 5px 10px;
            position: relative;
        }
        nav a::after {
            content: "";
            display: block;
            width: 0;
            height: 2px;
            background: yellow;
            transition: width 0.4s;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        nav a:hover::after {
            width: 100%;
        }
        nav a:hover {
            color: white; /* Change text color on hover */
        }
        .container {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #232F3E;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome Page</h1>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="container">
        <h1>Welcome, {{ session('username') }}!</h1>
        <p>This is the landing page of our website. Feel free to explore and learn more about what we offer.</p>
    </div>
    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
</body>
</html>
