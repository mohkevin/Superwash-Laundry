@extends('layouts.main')

@section('container')
    <div class="row-content">
        <div class="right">
            <div>
                @if($laundry->type == 'kiloan')
                <h5 class="slogan">Laundry Kiloan yang berkualitas dan hemat</h5>
                @else
                <h5 class="slogan">Dry Cleaning yang
                    <p>berkualitas dan hemat</h5></p>
                @endif
            </div>
            <div>
                <p class="desc">Kami dengan senang hati melayani anda setiap hari dari senin hingga sabtu. Jadwal operasional kami adalah sebagai berikut:</p>
            </div>
            <div>
                <ul class="schedule">
                    <li>Senin - Sabtu</li>
                    <li>Buka: 08:00</li>
                    <li>Tutup: 21:00</li>
                </ul>
            </div>
            <div>
                <a href="/pesan/{{ $laundry->id }}" class="order-button">Pesan Sekarang</a>
            </div>
        </div>
        <div>
            @if($laundry->type == 'kiloan')
            <img src="{{ asset('assets/kiloan.png') }}" alt="image" width="250" height="250">
            @else
            <img src="{{ asset('assets/dry.png') }}" alt="image" width="250" height="250">
            @endif
        </div>
    </div>
    <h2 style="text-align: center">Harga</h2>
    <div class="price-list">
        @php 
        $services = App\Models\Service::where('laundry_id', $laundry->id)->get();
        @endphp
        @foreach ($services as $service)            
        <div class="price-card">
            <div class="banner-1" style="background-image: url('../assets/price-1.png')" >{{ $service->service }}</div>
            <ul>
                <li>Mulai dari Rp.{{ $service->price }}/kg</li>
                <li>Per Transaksi</li>
                    @php 
                        $subServices = App\Models\SubService::where('service_id', $service->id)->get();
                    @endphp
                @foreach ($subServices as $subService)
                    <li>{{ $subService->sub_service }}</li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
    <div class="service">
        <div class="service-text">
            <div>
                <h3>Gratis Antar Jemput</h3>
                <p>Kami siap menjemput & mengantar pakaian anda kapanpun,
                    anda bisa menjadwalkan penjemputan instan atau sesuai dengan waktu preferensi anda.
                    Nikmati gratis antar jemput sampai dengan harga Rp 15.000 sampai minimal transaksi Rp 30.000.</p>
            </div>
            <a href="/pesan/{{ $laundry->id }}" class="order-button">Pesan Sekarang</a>
        </div>
        <div>
            <img src="{{ asset('assets/drive.png') }}" alt="image">
        </div>
    </div>
@endsection
