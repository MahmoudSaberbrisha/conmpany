<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @keyframes colorChange {
            0% {
                background-color: #1f2937;
            }

            25% {
                background-color: #3b3f5c;
            }

            50% {
                background-color: #1f2937;
            }

            75% {
                background-color: #3b3f5c;
            }

            100% {
                background-color: #1f2937;
            }
        }

        .color-changing {
            animation: colorChange 5s infinite;
        }

        @keyframes borderRotate {
            0% {
                border-color: #ff0000;
            }

            25% {
                border-color: #00ff00;
            }

            50% {
                border-color: #0000ff;
            }

            75% {
                border-color: #ffff00;
            }

            100% {
                border-color: #ff0000;
            }
        }

        .border-rotating {
            border-width: 4px;
            border-style: solid;
            animation: borderRotate 5s infinite;
        }

        .btn-animated {
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease;
        }

        .btn-animated::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
            transform: translate(-50%, -50%) rotate(45deg);
            opacity: 0;
        }

        .btn-animated:hover::before {
            width: 0;
            height: 0;
            opacity: 1;
        }

        .btn-animated:hover {
            background-color: #38b2ac;
        }
    </style>
</head>

<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="flex justify-center items-center h-full w-full">
        <div class="grid gap-8">
            <section id="back-div" class="bg-gradient-to-r from-blue-500 to-purple-500 rounded-3xl">
                <div class="border-8 border-transparent rounded-xl bg-gray-800 shadow-xl p-8 m-2">
                    <h1 class="text-5xl font-bold text-center cursor-default text-gray-300">
                        Register
                    </h1>
                    <form method="post" action={{ route('adminregister') }}>
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
                        <div>
                            <label for="username" class="block mb-2 text-lg text-gray-300">Username</label>
                            <input id="username"
                                class="border p-3 shadow-md bg-gray-700 text-gray-300 border-gray-700 rounded-lg w-full focus:ring-2 focus:ring-blue-500 transition transform hover:scale-105 duration-300"
                                type="text" placeholder="Username" required="name" name="name" />
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-lg text-gray-300">Email</label>
                            <input id="email"
                                class="border p-3 shadow-md bg-gray-700 text-gray-300 border-gray-700 rounded-lg w-full focus:ring-2 focus:ring-blue-500 transition transform hover:scale-105 duration-300"
                                type="email" placeholder="Email" required="email" name="email" />
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-lg text-gray-300">Password</label>
                            <input id="password"
                                class="border p-3 shadow-md bg-gray-700 text-gray-300 border-gray-700 rounded-lg w-full focus:ring-2 focus:ring-blue-500 transition transform hover:scale-105 duration-300"
                                type="password" placeholder="Password" required="password" name="password" />
                        </div>
                        <div>
                            <label for="confirm-password" class="block mb-2 text-lg text-gray-300">Confirm
                                Password</label>
                            <input id="confirm-password" name="password_confirmation"
                                class="border p-3 shadow-md bg-gray-700 text-gray-300 border-gray-700 rounded-lg w-full focus:ring-2 focus:ring-blue-500 transition transform hover:scale-105 duration-300"
                                type="password" placeholder="Confirm Password" required="confirm-password" />
                        </div>
                        <button
                            class="w-full p-3 mt-4 text-white bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            type="submit">
                            REGISTER
                        </button>
                    </form>
                    <div class="flex flex-col mt-4 text-sm text-center text-gray-300">
                        <p>
                            Already have an account?
                            <a href="#" class="text-blue-400 transition hover:underline">Log In</a>
                        </p>
                    </div>
                    <div id="third-party-auth" class="flex justify-center gap-4 mt-5">
                        <button class="p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg">
                            <img class="w-6 h-6" loading="lazy"
                                src="https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/" alt="Google logo" />
                        </button>
                        <button class="p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg">
                            <img class="w-6 h-6" loading="lazy"
                                src="https://ucarecdn.com/95eebb9c-85cf-4d12-942f-3c40d7044dc6/" alt="LinkedIn logo" />
                        </button>
                        <button class="p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg">
                            <img class="w-6 h-6 dark:invert" loading="lazy"
                                src="https://ucarecdn.com/be5b0ffd-85e8-4639-83a6-5162dfa15a16/" alt="GitHub logo" />
                        </button>
                        <button class="p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg">
                            <img class="w-6 h-6" loading="lazy"
                                src="https://ucarecdn.com/6f56c0f1-c9c0-4d72-b44d-51a79ff38ea9/" alt="Facebook logo" />
                        </button>
                        <button class="p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg">
                            <img class="w-6 h-6" loading="lazy"
                                src="https://ucarecdn.com/82d7ca0a-c380-44c4-ba24-658723e2ab07/" alt="Twitter logo" />
                        </button>
                        <button class="p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg">
                            <img class="w-6 h-6" loading="lazy"
                                src="https://ucarecdn.com/3277d952-8e21-4aad-a2b7-d484dad531fb/" alt="Apple logo" />
                        </button>
                    </div>
                    <div class="mt-4 text-center text-sm text-gray-500">
                        <p>
                            By signing up, you agree to our
                            <a href="#" class="text-blue-400 transition hover:underline">Terms</a>
                            and
                            <a href="#" class="text-blue-400 transition hover:underline">Privacy Policy</a>.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
