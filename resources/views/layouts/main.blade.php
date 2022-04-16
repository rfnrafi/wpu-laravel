<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LATIHAN | {{$title}}</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="/">home</a>
                <a href="/">Login</a>
                <a href="/">Register</a>
                <a href="/posts">Blog</a>
            </li>
        </ul>
    </nav>
    <article>
        @yield("content")
    </article>
</body>
</html>
