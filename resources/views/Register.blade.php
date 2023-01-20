<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    {{-- @if ($errors->any())
        {{ $errors }}
    @endif --}}
    {{-- //Retrieving first error messages for a Field --}}
    {{-- @if ($errors->any())
        {{ $errors->first('email') }}
    @endif --}}
    {{-- Determining if messages exist for a field --}}
    {{-- @if ($errors->any())
        @if ($errors->has('email'))
            <h1>error in email</h1>
        @endif
    @endif --}}

    <form action="{{ route('file.store') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class=form-group>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}"><br>
        </div>
        {{-- @if ($errors->any())
            <ul>
                @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif --}}
        @error('name')
            <span> {{ $message }}</span><br>
        @enderror
        <div class=form-group>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
        </div>
        {{-- @if ($errors->any())
            <ul>
                @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif --}}
        @error('email')
            <span> {{ $message }}</span><br>
        @enderror
        <div class=form-group>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
        </div>
        {{-- @if ($errors->any())
            <ul>
                @foreach ($errors->get('password ') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif --}}
        @error('password')
            <span> {{ $message }}</span><br>
        @enderror
        <label for="file">File</label>
        <input type="file" name="image">
        <div>
            <input type="submit" value="submit">
        </div>
    </form>

    @if (isset($data))
        @foreach ($data as $item)
            {{ $item }}
        @endforeach
    @endif
</body>

</html>
