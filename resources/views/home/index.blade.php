<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('src/home.css') }}">
</head>
<body>
    <div class="container">
        <nav>
            <div><h1>Superwash Laundry</h1></div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#outlet">Outlet</a>
                </li>
                @if(auth()->user())
                <li>
                    <a href="/logout">Sign Out</a>
                </li>
                @else
                <li>
                    <a href="/login">Sign In</a>
                </li>
                @endif
            </ul>
        </nav>
        <main>
            <div>
                <h1>Superwash Laundry Banjarmasin</h1>
                <p>Kepuasan Anda adalah prioritas kami, kami berkomitmen untuk memberikan pelayanan terbaik.</p>
            </div>
        </main>
    </div>
    <section id="outlet">
        <h2>Outlet</h2>
        <div class="outlet">
            @foreach ($laundry as $i)
            @if($i->type == 'kiloan')
            <div class="outlet-card" style="background-image: url('../assets/cardKiloan.png')">
                <h3>{{ $i->laundry }}</h3>
                <a href="laundry/{{ $i->id }}">Pilih</a>
            </div>
            @else
            <div class="outlet-card" style="background-image: url('../assets/card-dry.jfif')">
                <h3>{{ $i->laundry }}</h3>
                <a href="laundry/{{ $i->id }}">Pilih</a>
            </div>
            @endif
            @endforeach
        </div>
    </section>
    <div class="contact">
        <div class="contact-col">
            <div>
                <h4>Lokasi Kami</h4>
                <p>Jl.Pangeran gang simpang pangeran</p>
            </div>
            <div>
                <h4>Connect</h4>
                <p>Whatsapp: 085654077817 (Faiz Muhammad)</p>
            </div>
        </div>
    </div>
    @include('partials.footerHome')
</body>
</html>
