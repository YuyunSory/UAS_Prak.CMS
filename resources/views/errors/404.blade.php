<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #3b8fe2;
            color: #2d3748;
            text-align: center;
        }
        .container {
            max-width: 600px;
            padding: 30px;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            font-size: 4rem;
            margin: 0;
            font-weight: 700;
            color: #e53e3e;
        }
        p {
            font-size: 1.25rem;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: #3182ce;
            font-weight: 500;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Sorry, the page you are looking for could not be found.</p>
        <a href="{{ url('/') }}">Go back to Homepage</a>
    </div>
</body>
</html>