<!comment>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Articles data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div>
            <p>
                Filters
            </p>
            <form action="/articles" method="get">
                <label>Character code</label>
                <input type="text" name="character_code" />
                <label>Title part</label>
                <input type="text" name="title" />
                <label>Tag part</label>
                <input type="text" name="tag_id" />
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
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
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->character_code }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->creation_date }}</td>
                    <td>{{ $article->author }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
</body>

</html>
