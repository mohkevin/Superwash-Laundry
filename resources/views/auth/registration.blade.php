@extends('layouts.auth')

@section('container')
<div class="content-col">
    <h5>Register</h5>
    <form action="" method="post" class="form-col">
        @csrf
        @method('post')
        <div class="input-col">
            <label for="nama">Nama Lengkap</label>
            <input type="nama" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="input-col">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan Email">
        </div>
        <div class="input-col">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password">
        </div>
        <div>
            <button type="submit">Daftar</button>
        </div>
    </form>
</div>
@endsection
