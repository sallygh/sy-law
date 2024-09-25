<!DOCTYPE html>
<html>
<head>
    <title>Legal Cases List</title>
</head>
<body>
    <h2>Legal Cases List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Case Number</th>
            <th>Case Type</th>
            <th>Actions</th>
        </tr>
        @foreach ($legalCases as $legalCase)
        <tr>
            <td>{{ $legalCase->id }}</td>
            <td>{{ $legalCase->case_number }}</td>
            <td>{{ $legalCase->case_type }}</td>
            <td>
                <a href="{{ route('legal_cases.edit', $legalCase->id) }}">Edit</a>
                <form action="{{ route('legal_cases.destroy', $legalCase->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
