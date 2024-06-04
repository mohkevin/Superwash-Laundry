@if($laundry->type == 'kiloan')
<nav class="main-nav" style="background-image: url('../assets/nav-kiloan.png')">
    <div class="brand">Laundry Kiloan</div>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/laundry/2">Dry Cleaning</a>
        </li>
        <li>
            <a href="">Harga</a>
        </li>
        <li>
            <a href="/pesan/{{ $laundry->id }}">Pesan</a>
        </li>
    </ul>
</nav>
@else
<nav class="main-nav" style="background-image: url('../assets/nav-dry.png')">
    <div class="brand">Dry Cleaning</div>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/laundry/1">Laundry Kiloan</a>
        </li>
        <li>
            <a href="">Harga</a>
        </li>
        <li>
            <a href="/pesan/{{ $laundry->id }}">Pesan</a>
        </li>
    </ul>
</nav>
@endif

