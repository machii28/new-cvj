<html>

<head>
    <title>@yield('title', 'Caterie')</title>
</head>
    
<body>
    
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact Us</a> to learn more.</li>
        <li><a href="/about">Click here</a> for more Information.</li>
    </ul>
    
    @yield('content')
</body>
</html>