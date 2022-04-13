<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Article {{$article->id}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-bordered mb-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Character code</th>
                    <th>Content</th>
                    <th>Creation date</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->character_code }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->creation_date }}</td>
                    <td>{{ $article->author }}</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered mb-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Character code</th>
                </tr>
            </thead>
            <tbody>
                @foreach($helper->tag_id->sortByAsc('created_at') as $tag_id)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->title }}</td>
                    <td>{{ $tag->character_code }}</td>
                </tr>
                @endforeach
            </tbody>
    </div>
</body>

</html>
