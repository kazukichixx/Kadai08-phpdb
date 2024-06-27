<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-80">
        <h1 class="text-2xl font-bold mb-4 text-center">Instructor Profile</h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="border-2 border-gray-300 p-2 rounded-lg flex justify-center">
                <button class="flex flex-col items-center bg-gray-200 rounded-full w-16 h-16 text-xl font-bold focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="mt-2">Instructor A</p>
                </button>
            </div>
            <div class="border-2 border-gray-300 p-2 rounded-lg flex justify-center">
                <button class="flex flex-col items-center bg-gray-200 rounded-full w-16 h-16 text-xl font-bold focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="mt-2">Instructor B</p>
                </button>
            </div>
            <div class="border-2 border-gray-300 p-2 rounded-lg flex justify-center">
                <button class="flex flex-col items-center bg-gray-200 rounded-full w-16 h-16 text-xl font-bold focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="mt-2">Instructor C</p>
                </button>
            </div>
            <div class="border-2 border-gray-300 p-2 rounded-lg flex justify-center">
                <button class="flex flex-col items-center bg-gray-200 rounded-full w-16 h-16 text-xl font-bold focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="mt-2">Instructor D</p>
                </button>
            </div>
        </div>
    </div>
<script>
    document.querySelectorAll('button')[0].addEventListener('click', function() {
        window.location.href = 'post2.php';
    });
    document.querySelectorAll('button')[1].addEventListener('click', function() {
        window.location.href = 'post3.php';
    });
    document.querySelectorAll('button')[2].addEventListener('click', function() {
        window.location.href = 'post4.php';
    });
    document.querySelectorAll('button')[3].addEventListener('click', function() {
        window.location.href = 'post5.php';
    });
</script>
</body>
</html>