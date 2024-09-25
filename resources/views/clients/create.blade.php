<!DOCTYPE html>
<html>
<head>
    <title>إضافة موكل جديد</title>
</head>
<body>
    <h1>إضافة موكل جديد</h1>
    <form action="{{ route('clients.save') }}" method="POST">
        @csrf
        <label for="name">اسم المدعي:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="phone">رقم الهاتف:</label>
        <input type="text" id="phone" name="phone" required>
        <br>
        <button type="submit">إضافة</button>
    </form>
</body>
</html>
