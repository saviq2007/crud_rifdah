<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kontak</title>
</head>
<body>
    <h1>Tambah Kontak</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="phone">Telepon:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
        

        <button type="submit">Simpan Kontak</button>
        <a href="{{ route('contacts.index') }}">Kembali</a>
    </form>
</body>
</html>
