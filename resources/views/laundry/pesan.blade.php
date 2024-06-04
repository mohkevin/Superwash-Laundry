<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Pemesanan</title>
    <link rel="stylesheet" href="{{ asset('src/pesan.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <h4>Pemesanan</h4>
            @if(session('success'))
                <p class="success">{{ session('success') }}</p>
            @endif
            <form action="" method="post">
                @csrf
                @method('post')
                <input type="hidden" name="laundry_id" value="{{ $laundry->id }}">
                <input type="text" value="{{ $laundry->type }}" disabled>
                <input type="number" placeholder="no whatsapp" id="wa" name="wa">
                <textarea name="desc" id="desc" placeholder="nama dan waktu antar/jemput"></textarea>
                <button type="submit">Pesan</button>
                <a href="/">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
