<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المحامي</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            justify-content: center;
            align-items: center;
            height: 50vh;

        }

        .btn-grid-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container btn-grid-container">
        <div class="btn-grid">
            <a href="{{ route('legal_cases.create')}}" class="btn btn-outline-primary">إضافةدعوى</a>
            <a href="{{ route('legal_cases.index')}}" class="btn btn-outline-secondary">تصفح الدعاوي </a>
            <a href="{{ route('clients.new') }}" class="btn btn-outline-success">إضافة موكل</a>
            <a href="{{ route('clients.list') }}" class="btn btn-outline-danger">تصفح الموكلين</a>
            <button class="btn btn-outline-warning">إضافة مهمة</button>
            <button class="btn btn-outline-info">تصفح المهام</button>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>