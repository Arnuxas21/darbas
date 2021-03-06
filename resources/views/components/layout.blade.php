<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>WorkSpace</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="/"
                ><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
             
                    <span class="font-bold uppercase">Sveiki {{auth()->user()->name}}</span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-black hover:opacity-70"
                        ><i class="fa-solid fa-gear"></i>
                        Tvarkyti skelbimus</a
                    >
                </li>
                <li>
                   <form class = "inline" method="POST"action="/logout">
                    @csrf 
                    <button type="submit" class="hover:text-black hover:opacity-70">
                        <i class="fa-solid fa-door-closed"></i>
                      Atsijungti
                    </button>
                </form> 
                </li>
                @else
                <li>
                    <a href="/register" class="hover:text-black hover:opacity-70"
                        ><i class="fa-solid fa-user-plus"></i> Registruotis</a
                    >
                </li>
                <li>
                    <a href="/login" class="hover:text-black hover:opacity-70"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Prisijungti</a
                    >
                </li>
                @endauth
            </ul>
        </nav>

<main>
{{$slot}}
</main>
<footer
class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-black text-white h-16 mt-24 opacity-80 md:justify-center"
>
<p class="ml-2">Copyright &copy; 2022, Arnas Vinci??nas</p>

<a
    href="/listings/create"
    class="absolute top-3/10 right-10 bg-white text-black opacity-90 py-2 px-5"
    >Ikelti skelbim??</a
>
</footer>
<x-flash-message>
</x-flash-message>
</body>
</html>