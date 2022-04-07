<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto">
        <form method="POST" action="/posts">

            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-900" for="title">Title:</label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-900" for="content">Content:</label>
                <textarea class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="content"></textarea>
            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Update</button>
            <a href="/posts" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Cancel</a>
        </form>
    </div>
</body>
</html>