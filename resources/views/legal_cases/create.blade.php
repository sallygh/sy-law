<!DOCTYPE html>
<html>
<head>
    <title>Create Legal Case</title>
</head>
<body>
    <h2>Create Legal Case</h2>
    <form action="{{ route('legal_cases.create') }}" method="POST">
        @csrf
        <label for="case_number">Case Number:</label>
        <input type="text" id="case_number" name="case_number" required><br><br>
        <label for="case_type">Case Type:</label>
        <input type="text" id="case_type" name="case_type" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
