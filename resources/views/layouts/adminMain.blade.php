<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/318da83258.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>
    <script src="js\jquery-3.6.0.js"></script>
    <title>Airport Train Service</title>
</head>
<body class="min-h-screen flex flex-col">

    <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center md:ml-20">
            <a href="/dashboard" class="text-xl">
                 Airline Train <i class="fa fa-train"></i> Service 
            </a>
            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <i class="fa-sharp fa-solid fa-bars" onclick="Menu(this)"></i>
            </span>
        </div>

        <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 md:mr-20">
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-400 duration-500 px-6 py-2 mx-4 hover:bg-red-300 rounded">
                        Logout
                    </button>
                </form>
            @else
                <a href="/login" class="bg-red-400 duration-500 px-6 py-2 mx-4 hover:bg-red-300 rounded">
                    Login
                </a>
                <a href="/register" class="bg-red-400 duration-500 px-6 py-2 mx-4 hover:bg-red-300 rounded my-6 md:my-0">
                    Register
                </a>
            @endauth
        </ul>
    </nav>

    <div class="container mx-auto flex-grow">
        @yield('container')
    </div>

    <footer class="flex-shrink-0">
        <div class="w-full px-10">
            <div class="text-center">
                Copyright <strong><span>Kelompok 1</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

</body>
</html>