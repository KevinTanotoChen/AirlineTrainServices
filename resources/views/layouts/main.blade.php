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
            <a href="/" class="text-xl">
                 Airpline Train <i class="fa fa-train"></i> Service 
            </a>
            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <i class="fa-sharp fa-solid fa-bars" onclick="Menu(this)"></i>
            </span>
        </div>

        <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 md:mr-20">
            <li class="mx-4 my-6 md:my-0 hover:text-red-400">
                <a href="/schedule" class="text-xl">Schedule</a>
            </li>
            <li class="mx-4 my-6 md:my-0 hover:text-red-400">
                <a href="/promo" class="text-xl">Promo</a>
            </li>
            <li class="mx-4 my-6 md:my-0 hover:text-red-400">
                <a href="/event" class="text-xl">News & Event</a>
            </li>
            <li class="mx-4 my-6 md:my-0 hover:text-red-400">
                <a href="#" class="text-xl">About Us</a>
            </li>

            <a href="/login" class="bg-red-400 duration-500 px-6 py-2 mx-4 hover:bg-red-300 rounded">
                Login
            </a>
            <a href="/register" class="bg-red-400 duration-500 px-6 py-2 mx-4 hover:bg-red-300 rounded my-6 md:my-0">
                Register
            </a>
        </ul>
    </nav>

    <div class="container mx-auto flex-grow">
        @yield('container')
    </div>

    <footer class="flex-shrink-0">
        <div class="p-10 border-2">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
                    <div class="mb-5">
                        <h4 class="text-2xl pb-4">Company</h4>
                        <p>
                            Address <br>
                            Address <br>
                            Address <br>
                            Address <br>
                        </p>
                    </div>
                    <div class="mb-5">
                        <h4 class="pb-4">Useful Links</h4 class="pb-4">
                        <ul>
                            <li class="pb-4">Lorem</li>
                            <li class="pb-4">Lorem</li>
                            <li class="pb-4">Lorem</li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h4 class="pb-4">Useful Links</h4>
                        <ul>
                            <li class="pb-4">Lorem</li>
                            <li class="pb-4">Lorem</li>
                            <li class="pb-4">Lorem</li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h4 class="pb-4">Join Our Newsletter</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <form action="" class="flex flex-row flex-wrap mt-5">
                            <input type="text" class="w-2/3 p-2 border" placeholder="email@example.com">
                            <button class="p-2 w-1/3 bg-red-400 hover:bg-red-300 rounded">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full px-10 shadow">
            <div class="text-center">
                Copyright <strong><span>Kelompok 1</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <script>
        function Menu(e){
          let list = document.querySelector('ul');
          e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
        }
    </script>
</body>
</html>