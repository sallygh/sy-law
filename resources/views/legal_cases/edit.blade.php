<!DOCTYPE html>
<html>
<head>
    <title>Edit Legal Case</title>
</head>
<body>
    <h2>Edit Legal Case</h2>
    <form action="{{ route('legal_cases.update', $legalCase->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="case_number">Case Number:</label>
        <input type="text" id="case_number" name="case_number" value="{{ $legalCase->case_number }}" required><br><br>
        <label for="case_type">Case Type:</label>
        <input type="text" id="case_type" name="case_type" value="{{ $legalCase->case_type }}" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
