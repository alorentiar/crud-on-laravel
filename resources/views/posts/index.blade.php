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

        <h1 class="text-2xl font-bold mb-4">My Title & Content</h1>

        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Add Post</a>

        @foreach ($posts as $post)

        <article class="mb-2">
            <a href="/posts/{{$post->id}}/edit"<h2 class="text-xl font-bold text-blue-500">{{$post->title}}</h2>
            <p class="text-md text-gray-600">{{$post->content}}</p>
            <hr class="mt-2">
        </article>

        @endforeach
    </div>
    </body>
</html>