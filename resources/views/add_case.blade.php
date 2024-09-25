<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة قضية</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            direction: rtl;
        }
        .form-group label {
            text-align: right;
            display: block;
        }
        .form-control {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">إضافة قضية</h2>
        <form action="{{ url('/cases') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="case_number">رقم القضية</label>
                    <input type="text" class="form-control" id="case_number" name="case_number" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="case_type">تصنيف القضية</label>
                    <input type="text" class="form-control" id="case_type" name="case_type" required>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">إضافة</button>
            </div>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.amazonaws.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
