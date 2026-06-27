<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Environment Credentials</title>
<style>
/* ===== Reset & Base ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
body {
    background-color: #1e293b; /* Dark Blue Background */
    padding: 40px;
    color: #f1f5f9;
}

/* ===== Heading ===== */
h1 {
    font-size: 2.5rem;
    color: #38bdf8; /* Sky Blue */
    text-align: center;
    margin-bottom: 40px;
    font-weight: 700;
}

/* ===== Table Container ===== */
.table-container {
    max-width: 800px;
    margin: 0 auto;
    background: #0f172a; /* Darker Blue */
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    overflow: hidden;
}

/* ===== Table Styles ===== */
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 15px 20px;
    text-align: left;
}

th {
    background-color: #2563eb; /* Blue */
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

td {
    border-bottom: 1px solid #334155; /* Dark gray */
    font-size: 1rem;
    color: #e2e8f0; /* Light gray text */
}

/* ===== Row Hover ===== */
tr:hover {
    background-color: #334155; /* Slight highlight */
    transition: 0.3s;
}

/* ===== Responsive ===== */
@media (max-width: 600px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }
    tr {
        margin-bottom: 15px;
    }
    th {
        background-color: #2563eb;
        color: #fff;
        padding: 10px;
    }
    td {
        padding: 10px;
        border: none;
        position: relative;
    }
    td::before {
        content: attr(data-label);
        font-weight: 600;
        display: block;
        color: #38bdf8;
        margin-bottom: 5px;
    }
}
</style>
</head>
<body>

<h1>User Credentials</h1>
<div class="table-container">
<table>
    <thead>
    <tr>
        <th>Environment Number</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
    <tr>
        <td data-label="Environment Number">{{ $d->Environment_Number }}</td>
        <td data-label="Password">{{ $d->Password }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>

</body>
</html>
