<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beautiful Card</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center h-screen bg-gray-100 m-0 mt-3">
    <div class="bg-gradient-to-r from-blue-500 to-purple-500 p-6 rounded-xl shadow-lg text-white text-center text-xl font-bold w-72">
        <p>Abdullah Shamil Basayev</p>
        <p>TI 2D / 01</p>
        <p>2341720166</p>
    </div>
    <x-option></x-option>
    <main class="mt-6">
        {{ $slot }}
    </main>
</body>
</html>
