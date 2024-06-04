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
    <h1>Selamat Datang di Halaman Admin</h1>
    <div class="table">
        <div>
            <h4>Table Users</h4>
            <table>
                <thead> 
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)                    
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nama_lengkap }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="/admin/user/edit/{{ $user->id }}">Edit</a>
                                <form action="/admin/user/delete/{{ $user->id }}" method="post" class="delete-form">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('yakin mau menghapus data ini?')">hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h4>Table Laundry</h4>
            <table>
                <thead> 
                    <th>ID</th>
                    <th>Laundry</th>
                    <th>Tipe</th>
                </thead>
                <tbody>
                    @foreach ($laundry as $laundry)                    
                        <tr>
                            <td>{{ $laundry->id }}</td>
                            <td>{{ $laundry->laundry }}</td>
                            <td>{{ $laundry->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h4>Table Services</h4>
            <a href="/admin/service">tambah service</a>
            <table>
                <thead> 
                    <th>ID</th>
                    <th>Service</th>
                    <th>Laundry</th>
                    <th>Harga</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($services as $service)                    
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->service }}</td>
                            <td>{{ $service->laundry->laundry }}</td>
                            <td>{{ $service->price }}</td>
                            <td>
                                <a href="/admin/service/edit/{{ $service->id }}">Edit</a>
                                <form action="/admin/service/delete/{{ $service->id }}" method="post" class="delete-form">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('yakin mau menghapus data ini?')">hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h4>Table Sub Services</h4>
            <a href="/admin/subService">tambah sub service</a>
            <table>
                <thead> 
                    <th>ID</th>
                    <th>Sub Service</th>
                    <th>Service</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($subServices as $i)                    
                        <tr>
                            <td>{{ $i->id }}</td>
                            <td>{{ $i->sub_service }}</td>
                            <td>{{ $i->service->service }}</td>
                            <td>
                                <a href="/admin/subService/edit/{{ $i->id }}">Edit</a>
                                <form action="/admin/subService/delete/{{ $i->id }}" method="post" class="delete-form">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('yakin mau menghapus data ini?')">hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>