<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div class="container">
        タイトル
        <ul>
            @foreach($posts as $post)
            <li>
                {{$post['title']}}
            </li>
            @endforeach
        </ul>
    </div>
</body>

</html>