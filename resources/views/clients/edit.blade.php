<!DOCTYPE html>
<html>
<head>
    <title>تعديل بيانات الموكل</title>
</head>
<body>
    <h1>تعديل بيانات الموكل</h1>
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">اسم المدعي:</label>
        <input type="text" id="name" name="name" value="{{ $client->name }}" required>
        <br>
        <label for="phone">رقم الهاتف:</label>
        <input type="text" id="phone" name="phone" value="{{ $client->phone }}" required>
        <br>
        <button type="submit">تحديث</button>
    </form>
</body>
</html>
