{{-- <h1>User Login</h1>
<form action="users" method="post">
    {{ method_field('put') }}
    @csrf
    <input type="text" name="user" placeholder="enter name"><br> <br>
    <input type="password" name="password" placeholder="enter Password"><br><br>
    <button type="submit">Login</button>
</form> --}}

{{-- flash session --}}
<h1>User Login</h1>
@if (session('user'))
    <h3 style="color:green">{{ session('user') }} User has been added</h3>
@endif
<form action="add" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter name"><br> <br>
    <input type="password" name="password" placeholder="enter Password"><br><br>
    <button type="submit">Login</button>
</form>
