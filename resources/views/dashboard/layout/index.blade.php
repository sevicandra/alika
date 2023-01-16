<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="flex flex-col max-h-screen max-w-full w-screen h-screen gap-2 overflow-hidden">
    <header class="shrink flex justify-between p-3 bg-neutral-200">
        <div class="shrink">Logo Alika</div>
        <div class="shrink">
            <form action="/logout" method="post">
            @csrf
            <button type="submit">
                <img src="/img/logout.png" alt="logout" class="h-8">
            </button>
            </form>
        </div>
    </header>

    <main class="grow bg-neutral-200 flex flex-col overflow-hidden">
        @yield('main')
    </main>

    <footer class="shrink flex justify-center p-3 bg-neutral-200">
        <div class="shrink">
            Version: 2.0.0
        </div>
    </footer>
</body>

</html>