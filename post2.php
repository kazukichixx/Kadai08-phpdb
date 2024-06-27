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
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <div class="flex justify-end">
            <button class="bg-gray-200 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </button>
        <script>
            document.querySelector('button').addEventListener('click', function() {
                window.location.href = 'post3.php';
            });
        </script>
        </div>
        <div class="text-center mb-4">
            <div class="inline-block bg-gray-200 p-4 rounded-full mb-2">
                <span class="text-2xl font-bold">A</span>
            </div>
            <h2 class="text-xl font-bold">Evaluate</h2>
        </div>
        <div class="flex justify-center mb-4">
            <div class="flex space-x-1">
                
                <button class="text-gray-400 hover:text-yellow-500" onclick="this.classList.add('text-yellow-500'); this.classList.remove('text-gray-400');">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.318l1.176 3.618h3.8l-3.088 2.243 1.176 3.618L12 11.554l-3.064 2.243 1.176-3.618L7.024 7.936h3.8L12 4.318z" />
                    </svg>
                </button>
              
                <button class="text-gray-400 hover:text-yellow-500" onclick="this.classList.add('text-yellow-500'); this.classList.remove('text-gray-400');">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.318l1.176 3.618h3.8l-3.088 2.243 1.176 3.618L12 11.554l-3.064 2.243 1.176-3.618L7.024 7.936h3.8L12 4.318z" />
                    </svg>
                </button>
              
                <button class="text-gray-400 hover:text-yellow-500" onclick="this.classList.add('text-yellow-500'); this.classList.remove('text-gray-400');">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.318l1.176 3.618h3.8l-3.088 2.243 1.176 3.618L12 11.554l-3.064 2.243 1.176-3.618L7.024 7.936h3.8L12 4.318z" />
                    </svg>
                </button>
                <button class="text-gray-400 hover:text-yellow-500" onclick="this.classList.add('text-yellow-500'); this.classList.remove('text-gray-400');">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.318l1.176 3.618h3.8l-3.088 2.243 1.176 3.618L12 11.554l-3.064 2.243 1.176-3.618L7.024 7.936h3.8L12 4.318z" />
                    </svg>
                </button>
            <button class="text-gray-400 hover:text-yellow-500" onclick="this.classList.add('text-yellow-500'); this.classList.remove('text-gray-400');">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.318l1.176 3.618h3.8l-3.088 2.243 1.176 3.618L12 11.554l-3.064 2.243 1.176-3.618L7.024 7.936h3.8L12 4.318z" />
                </svg>
            </button>

            </div>
        </div>
        
        <form method="post" action="insert.php">
        <div class="jumbotron">
            <div class="mb-4">
                <label for="goodPoint" class="block text-gray-700">Good Point:</label>
                <input type="text" id="goodPoint" name="content1" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="badPoint" class="block text-gray-700">Bad Point:</label>
                <input type="text" id="badPoint" name="content2" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            </div>    
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Enter
            </button>
        </div>
    </div>
</body>
</html>
</body>

</html>

