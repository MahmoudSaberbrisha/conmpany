<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-left: 2em;
            padding-right: 2em;
            padding-bottom: 0.4em;
            background-color: #171717;
            border-radius: 25px;
            transition: 0.4s ease-in-out;
        }

        .card {
            background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border-radius: 22px;
            transition: all 0.3s;
        }

        .card2 {
            border-radius: 0;
            transition: all 0.2s;
        }

        .card2:hover {
            transform: scale(0.98);
            border-radius: 20px;
        }

        .card:hover {
            box-shadow: 0px 0px 30px 1px rgba(0, 255, 117, 0.3);
        }

        #heading {
            text-align: center;
            margin: 2em;
            color: rgb(255, 255, 255);
            font-size: 1.2em;
        }

        .field {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5em;
            border-radius: 25px;
            padding: 0.6em;
            border: none;
            outline: none;
            color: white;
            background-color: #171717;
            box-shadow: inset 2px 5px 10px rgb(5, 5, 5);
        }

        .input-icon {
            height: 1.8em;
            width: 1.3em;
            fill: white;
        }

        .input-field {
            background: none;
            border: none;
            outline: none;
            width: 100%;
            color: #d3d3d3;
        }

        .form .btn {
            display: flex;
            justify-content: center;
            flex-direction: row;
            margin-top: 2.5em;
        }

        .button1 {
            padding: 0.5em;
            padding-left: 1.1em;
            padding-right: 1.1em;
            border-radius: 5px;
            margin-right: 0.5em;
            border: none;
            outline: none;
            transition: 0.4s ease-in-out;
            background-color: #252525;
            color: white;
        }

        .button1:hover {
            background-color: black;
            color: white;
        }

        .button2 {
            padding: 0.5em;
            padding-left: 2.3em;
            padding-right: 2.3em;
            border-radius: 5px;
            border: none;
            outline: none;
            transition: 0.4s ease-in-out;
            background-color: #252525;
            color: white;
        }

        .button2:hover {
            background-color: black;
            color: white;
        }

        .button3 {
            margin-bottom: 3em;
            padding: 0.5em;
            border-radius: 5px;
            border: none;
            outline: none;
            transition: 0.4s ease-in-out;
            background-color: #252525;
            color: white;
        }

        .button3:hover {
            background-color: red;
            color: white;
        }
    </style>
</head>

<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="card" style="width: 500px; height: 600px;">
        <div class="card2" style="width: 500px; height: 600px;">
            <form class="form" style="width: 500px; height: 600px;" method="post"
                action="{{ route('userregister') }}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <p id="heading">Register</p>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16"
                        xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path
                            d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
                        </path>
                    </svg>
                    <input type="text" name="name" class="input-field" placeholder="Username"
                        autocomplete="off" />
                </div>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16"
                        xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path
                            d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
                        </path>
                    </svg>
                    <input type="email" name="email" class="input-field" placeholder="Email" autocomplete="off" />
                </div>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16"
                        xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                        </path>
                    </svg>
                    <input type="password" name="password" class="input-field" placeholder="Password" />
                </div>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16"
                        xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path
                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                        </path>
                    </svg>
                    <input type="password" name="password_confirmation" class="input-field"
                        placeholder="Confirm Password" />
                </div>
                <div class="btn">


                    <button type="submit" class="button1">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </button>
                    <button class="button2">Log In</button>
                </div>
                <button class="button3">Forgot Password</button>
            </form>
        </div>
    </div>

</body>

</html>
