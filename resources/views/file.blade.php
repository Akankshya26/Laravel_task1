<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>file upload</title>
</head>

<body>
    @if ($success = \Session::get('success'))
        <div class="alert alert-success">
            {{ $success }}
        </div>
    @endif
    <form action="{{ route('file.store') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="container mt-3">
            <div class="form-group">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name') }}"><br>

                @error('name')
                    <span> {{ $message }}</span><br>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" class="form-control"
                    value="{{ old('email') }}"><br>

                @error('email')
                    <span> {{ $message }}</span><br>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" class="form-control"><br>

                @error('password')
                    <span> {{ $message }}</span><br>
                @enderror
            </div>
            <div class="form-group">
                <label for="">File</label>
                <input type="file" name="file_name" id="" class="form-control" placeholder=""><br>
                @error('file')
                    <span class="alert alert-danger"> {{ $message }}</span><br>
                @enderror
            </div>
            <br><br>
            <div>
                <button class="btn btn-primary">submit</button>
            </div>
        </div>

    </form>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
