<!DOCTYPE html>
<html>
<head>
    <title>قائمة الموكلين</title>
</head>
<body>
    <h1>قائمة الموكلين</h1>
    <table border="1">
        <tr>
            <th>الاسم</th>
            <th>رقم الهاتف</th>
            <th>إجراءات</th>
        </tr>
        @foreach ($clients as $client)
        <tr>
            <td>{{ $client->name }}</td>
            <td>{{ $client->phone }}</td>
            <td>
            <a href="{{ route('clients.modify', $client->id) }}">تعديل</a>
            <form action="{{ route('clients.delete', $client->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">حذف</button>
</form>

            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
