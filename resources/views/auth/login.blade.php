@extends('layouts.auth')

@section('container')
<div class="content-col">
    <h5>Login</h5>
    <form action="" method="post" class="form-col">
        @csrf
        @method('post')
        <div class="input-col">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan Email">
        </div>
        <div class="input-col">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password">
            <a href="">lupa kata sandi</a>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <footer>
        <p>Anda belum memiliki akun? Silahkan daftar</p>
        <a href="/registration">Daftar disini</a>
    </footer>
</div>
@endsection
