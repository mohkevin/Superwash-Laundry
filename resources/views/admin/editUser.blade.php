<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('src/admin.css') }}">
</head>
<body>
    <form action="/admin/user/update/{{ $user->id }}" method="post" class="edit-form">
        @csrf
        @method('put')
        <label for="username">username</label>
        <input type="text" name="nama_lengkap" id="username" value="{{ $user->nama_lengkap }}">
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="{{ $user->email }}">
        <label for="password">ganti password</label>
        <input type="text" name="password" id="password">
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>