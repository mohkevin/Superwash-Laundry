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
    <form action="" method="post" class="edit-form">
        @csrf
        @method('put')
        <label for="service">Service</label>
        <input type="text" name="service" id="service" value="{{ $service->service }}">
        <label for="price">Harga</label>
        <input type="number" name="price" id="price" value="{{ $service->price }}">
        <label for="laundry_id">Laundy</label>
        <select name="laundry_id" id="laundry_id">
            <option value="{{ $service->laundry->id }}" selected>{{ $service->laundry->laundry }}</option>
            @foreach ($laundry as $i)
                <option value="{{ $i->id }}">{{ $i->laundry }}</option>
            @endforeach
        </select>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>