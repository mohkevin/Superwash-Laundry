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
        <label for="sub_service">Sub Service</label>
        <input type="text" name="sub_service" id="sub_service">
        <label for="service_id">Service</label>
        <select name="service_id" id="service_id">
            @foreach ($service as $i)
                <option value="{{ $i->id }}">{{ $i->service }}</option>
            @endforeach
        </select>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>