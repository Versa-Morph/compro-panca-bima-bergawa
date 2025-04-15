<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quote Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }
        h2 {
            color: #4a90e2;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            vertical-align: top;
        }
        th {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>New Quote Request</h2>
    <p>Here are the details submitted from the request form:</p>

    <table>
        <tr>
            <th>Name</th>
            <td>{{ $data['name'] ?? '-' }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $data['email'] ?? '-' }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $data['phone'] ?? '-' }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $data['address'] ?? '-' }}</td>
        </tr>
        <tr>
            <th>Company Name</th>
            <td>{{ $data['company'] ?? '-' }}</td>
        </tr>
        <tr>
            <th>Project Type</th>
            <td>{{ $data['project_type'] ?? '-' }}</td>
        </tr>
        <tr>
            <th>Modular Units Needed</th>
            <td>{{ $data['modular_units'] ?? '-' }}</td>
        </tr>
        <tr>
            <th>City (Project Location)</th>
            <td>{{ $data['city'] ?? '-' }}</td>
        </tr>
        <tr>
            <th>Area (m²)</th>
            <td>{{ $data['area'] ?? '-' }}</td>
        </tr>
        <tr>
            <th>Estimated Timeline</th>
            <td>
                Start: {{ $data['start_date'] ?? '-' }}<br>
                End: {{ $data['end_date'] ?? '-' }}
            </td>
        </tr>
        <tr>
            <th>Preferred Contact Method</th>
            <td>{{ $data['preferred_contact'] ?? '-' }}</td>
        </tr>
    </table>

    <p style="margin-top: 30px;">Regards,<br><strong>Website Quote System</strong></p>

</body>
</html>
