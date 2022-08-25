<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400;500;600;700&display=swap" rel="stylesheet"> 
        <style>
            body {
              font-family: swap;
            }
        </style>
        
        <title>Backyard sales</title>

        
    </head>
    <body class="antialiased m-2">
        <x-header/>
        <div class="flex flex-col-reverse items-center md:flex-row">
            <x-sidebar/>
            <div class="justify-center min-h-screen w-full bg-gray-100 py-4 md:w-4/5 md:items-center ">

                {{ $slot }}

            </div>
        </div>
        <x-footer/>
    </body>
</html>
