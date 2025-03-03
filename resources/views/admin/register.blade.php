<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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

    <div class="bg-gray-800 p-10 md:p-20 rounded-lg shadow-lg relative color-changing border-rotating">
        <div class="absolute inset-0 bg-gradient-to-r from-pink-500 via-transparent to-blue-500 rounded-lg opacity-50">
        </div>
        <div class="relative z-10">
            <div class="text-center mb-10">
                <i class="fas fa-user-plus text-pink-500 text-3xl"></i>
                <span class="text-white text-3xl font-semibold mx-2">SIGN UP</span>
                <i class="fas fa-heart text-pink-500 text-3xl"></i>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <input type="text" name="name" placeholder="Username"
                        class="w-full px-6 py-3 md:px-8 md:py-4 rounded-full bg-gray-700 text-white text-lg md:text-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-6 py-3 md:px-8 md:py-4 rounded-full bg-gray-700 text-white text-lg md:text-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-6 py-3 md:px-8 md:py-4 rounded-full bg-gray-700 text-white text-lg md:text-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                        class="w-full px-6 py-3 md:px-8 md:py-4 rounded-full bg-gray-700 text-white text-lg md:text-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <button type="submit"
                        class="w-full py-3 md:py-4 rounded-full bg-teal-400 text-gray-900 text-lg md:text-xl font-semibold hover:bg-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500 btn-animated">Sign
                        up</button>
                </div>
                <div class="flex justify-between text-sm md:text-lg text-gray-400">
                    <a href="#" class="hover:underline">Already have an account? Sign in</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
