<html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-sm w-full">
        <div class="text-center mb-6">
            <img src="rogo1.jpg" alt="rogo1 Logo" class="mx-auto mb-4">
        
        </div>
        <form>
        <form action="write1.php" method="get">
            <div class="mb-4">
                <input type="text" name="name" placeholder="your name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <input type="email" name="email" placeholder="email address" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Enter</button>
            </div>


    </form>   
    <script>
        document.querySelector('button[type="submit"]').addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = 'post1-1.php';
        });
    </script>
    </div>
</body>

</html>

