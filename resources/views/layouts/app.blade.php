<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'LaporBanjir') - BPBD Kabupaten Bandung</title>
    <style>
        *{box-sizing:border-box}
        body{margin:0;font-family:system-ui,-apple-system,"Segoe UI",sans-serif;background:#f1f5f9;color:#0f172a}
        header{background:#0c4a6e;color:#fff}
        .wrap{max-width:960px;margin:0 auto;padding:0 20px}
        header .wrap{display:flex;justify-content:space-between;align-items:center;padding:16px 20px}
        header h1{margin:0;font-size:1.25rem}
        nav a{color:#bae6fd;text-decoration:none;margin-left:16px;font-weight:500}
        nav a:hover{color:#fff}
        main{padding:28px 0 48px}
        h2{margin-top:0}
        .grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(270px,1fr));gap:16px}
        .card{background:#fff;border-radius:10px;padding:16px;box-shadow:0 1px 3px rgba(0,0,0,.1);border-left:6px solid #94a3b8}
        .card.waspada{border-left-color:#eab308}
        .card.siaga{border-left-color:#f97316}
        .card.awas{border-left-color:#dc2626}
        .card h3{margin:0 0 4px;font-size:1.05rem}
        .card p{margin:4px 0;color:#475569;font-size:.92rem}
        .badge{display:inline-block;padding:2px 10px;border-radius:999px;font-size:.8rem;font-weight:700;color:#fff}
        .badge.waspada{background:#ca8a04}.badge.siaga{background:#ea580c}.badge.awas{background:#dc2626}
        form .field{margin-bottom:16px}
        label{display:block;font-weight:600;margin-bottom:4px}
        input{width:100%;padding:10px;border:1px solid #cbd5e1;border-radius:6px;font-size:1rem}
        .error{color:#b91c1c;font-size:.85rem;margin-top:4px}
        .btn{display:inline-block;background:#0369a1;color:#fff;border:0;padding:10px 20px;border-radius:6px;font-size:1rem;text-decoration:none;cursor:pointer}
        .btn:hover{background:#075985}
        .box{background:#fff;border-radius:10px;padding:24px;box-shadow:0 1px 3px rgba(0,0,0,.1);max-width:560px}
        .alert{padding:14px 16px;border-radius:8px;margin-bottom:16px}
        .alert-success{background:#dcfce7;color:#166534}
        .alert-danger{background:#fee2e2;color:#991b1b}
        .alert-info{background:#e0f2fe;color:#075985}
        .meta{color:#64748b;margin-bottom:16px}
    </style>
</head>
<body>
    <header>
        <div class="wrap">
            <h1>🌊 LaporBanjir</h1>
            <nav>
                <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
                <a href="{{ route('laporan.create') }}">Buat Laporan</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="wrap">
            @yield('content')
        </div>
    </main>
</body>
</html>
