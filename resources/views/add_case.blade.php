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
            <input type="text" class="form-control" id="case_number" name="case_number" value="{{ $nextCaseId }}" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="case_type">تصنيف القضية</label>
            <select class="form-control" id="case_type" name="case_type" required onchange="updateCaseSubjectOptions()">
                <option value="">اختر التصنيف</option>
                <option value="مدني">مدني</option>
                <option value="شرعي">شرعي</option>
                <option value="جزائي">جزائي</option>
                <option value="صلحي">صلحي</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="case_subject">موضوع الدعوى</label>
            <select class="form-control" id="case_subject" name="case_subject" required>
                <option value="">اختر الموضوع</option>
            </select>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">إضافة</button>
    </div>
</form>

<script>
    function updateCaseSubjectOptions() {
        const caseType = document.getElementById('case_type').value;
        const caseSubject = document.getElementById('case_subject');
        caseSubject.innerHTML = '';

        let options = [];

        if (caseType === 'مدني') {
            options = ['بيع عقار', 'بيع سيارة'];
        } else if (caseType === 'شرعي') {
            options = ['زواج', 'طلاق'];
        } else {
            options = ['اختر الموضوع'];
        }

        options.forEach(option => {
            const opt = document.createElement('option');
            opt.value = option;
            opt.innerHTML = option;
            caseSubject.appendChild(opt);
        });
    }
</script>


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>
</html>
