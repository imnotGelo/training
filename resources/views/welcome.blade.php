<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CAR MANAGEMENT</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-zo8Peh9VrE+hDm/X5HpV8SVzAHy3zZ/c+5n6PLX+eKhFb3ePn6TCe29cMN0a1XTf"
        crossorigin="anonymous">
    <style>
        /* Center the card at the top */
        .card-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 3px solid black;
            border-radius:10px;
            padding: 50px;
        }

        .card-title {
            margin-bottom: 20px;
        }

        .desc {
            text-align: center;
            margin-bottom: 40px;

        }

        .btn {
            background: #B4B4B8;
            border-radius: 10px;
            padding: 10px 20px;
            margin: 0 auto;
            text-decoration: none; 
            color: #fff; 
            display: flex; 
            width: fit-content; 
        }
        
        .btn svg {
            margin-left: 5px; 
            margin-top: 2px;
        }

        .btn:hover {
            background: #8c8c8e; 
        }

    </style>
    </head>
    <body>
    <div class="card-container">
        <div class="card text-center">
            <div class="card-body">
                <h1 class="card-title">CAR MANAGEMENT</h1>
                <p class="desc">Angelo Mendoza</p>
            </div>
        </div>
        <div >
        <a href="/register" class="btn">Continue
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                    <path fill="none" stroke="white" stroke-linejoin="round" stroke-width="1.5" d="M3 6.804v10.392c0 1.54 1.667 2.502 3 1.732l3-1.732V6.804L6 5.072c-1.333-.77-3 .192-3 1.732Zm18 3.464c1.333.77 1.333 2.694 0 3.464l-9 5.196c-1.333.77-3-.192-3-1.732V6.804c0-1.54 1.667-2.502 3-1.732z"/>
                </svg>
            </span>
        </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-TZNtvrDsRj8TVRTVYZ7tv9W++z9vzVqu9FCK3zGLhKFX1VrPd6W32XOJJktxlL6V"
        crossorigin="anonymous"></script>
    </body>
    
</html>
