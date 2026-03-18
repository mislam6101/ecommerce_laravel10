<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root {
    --primary: #1e293b;      /* deep slate (main brand) */
    --accent: #2563eb;       /* modern blue accent */
    --success: #16a34a;
    --warning: #f59e0b;
    --danger: #dc2626;
    --text: #0f172a;
    --muted: #64748b;
    --light-bg: #f1f5f9;
    --card-bg: #ffffff;
    --border: #e2e8f0;
}

body {
    background: var(--light-bg);
    font-family: 'Segoe UI', sans-serif;
    color: var(--text);
}

/* Sidebar */
.sidebar {
    height: 100vh;
    background: var(--card-bg);
    border-right: 1px solid var(--border);
    padding: 20px;
}

.logo {
    font-weight: 700;
    font-size: 20px;
    color: var(--primary);
    letter-spacing: 0.5px;
}

.sidebar a {
    display: block;
    padding: 12px 14px;
    margin-bottom: 6px;
    border-radius: 10px;
    color: var(--muted);
    text-decoration: none;
    transition: all 0.25s ease;
    font-weight: 500;
}

.sidebar a:hover,
.sidebar a.active {
    background: var(--accent);
    color: #fff;
}

/* Cards */
.dashboard-card {
    border-radius: 14px;
    background: var(--card-bg);
    padding: 22px;
    border: 1px solid var(--border);
    box-shadow: 0 6px 18px rgba(15, 23, 42, 0.05);
    transition: all 0.25s ease;
}

.dashboard-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
}

/* Header */
.topbar {
    background: var(--card-bg);
    padding: 16px 24px;
    border-bottom: 1px solid var(--border);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.user-box {
    display: flex;
    align-items: center;
    gap: 10px;
}

.user-box img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
}

</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

<!-- Sidebar -->
@include('frontend.layouts.customer_side')

<!-- Main Content -->
@yield('content')
</div>
</div>

</body>
</html>
