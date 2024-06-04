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
        @method('post')
        <label for="service">Service</label>
        <input type="text" name="service" id="service">
        <label for="price">Harga</label>
        <input type="number" name="price" id="price">
        <label for="laundry_id">Laundy</label>
        <select name="laundry_id" id="laundry_id">
            @foreach ($laundry as $i)
                <option value="{{ $i->id }}">{{ $i->laundry }}</option>
            @endforeach
        </select>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>