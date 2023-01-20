{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CRUD OPERATION</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    {{-- component --}}
{{-- <div class="container">
                        <x-input type="text" name="name" label="please enter your name" />
                        <x-input type="text" name="email" label="please enter your email" />
                        <x-input type="text" name="city" label="please enter your city" />
                        <x-input type="text" name="address" label="please enter your address" />
                        <button class="btn btn-primary">Submit</button>

                    </div> --}}
{{-- <div>
                        <x-input>
                            <span>hello i m alert</span>
                        </x-input>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>


</html> --}}
{{--
<x-layout />
<x-slot name='title'>Home</x-slot>

</x-layout> --}}

{{-- template inheritance --}}
{{-- @extends('layout.adminlayout')
@section('title', 'home')
@section('page-name')
    <h1>Home page</h1>
    <hr>

@endsection
@section('banner')
    <h2>This is banner of contact page</h2>
    <hr>
@endsection --}}

{{-- middleware --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>

<body>
    <h1>Home Page</h1>
    <hr>
    <ul>
        <li><a href="\">Home</a></li>
    <li><a href="\dashboard">Dashboard</a></li>
        <li><a href="\stock">Stock</a></li>
        <li><a href="\report">Report</a></li>
    </ul>
</body>

</html>
