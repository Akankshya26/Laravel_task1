<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Soft Delete in Laravel</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">My App</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trashed">Trashed</a>
                </li>

            </ul>
        </div>
    </nav>
    {{-- content --}}
    <div class="container-fluid">
        <h1 class="text-center text-danger py-4">Restore Articles</h1>
        <table class="table">
            <h3><a class="btn btn-success" href="restore-all"><i class="fa fa-sharp fa-solid fa-trash">Restore
                        all</a></h3>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Author</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">restore</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->author }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ subStr($article->description, 0, 30) }}</td>
                        <td>
                            <a href="restore/{{ $article->id }}" class="text-primary btn"><i
                                    class=" bi bi-arrow-up-square"></i>
                                Restore</a>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
