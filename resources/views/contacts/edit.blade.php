<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak</title>
</head>
<body>
    <h1>Edit Kontak</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}">
            @error('name')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}">
            @error('email')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="phone">Telepon:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}">
            @error('phone')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update Kontak</button>
        <a href="{{ route('contacts.index') }}">Kembali</a>
    </form>
</body>
</html>
