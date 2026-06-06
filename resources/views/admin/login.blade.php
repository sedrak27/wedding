<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Մուտք | Ադմին Պանել</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #fff4df; height: 100vh; display: flex; align-items: center; justify-content: center; font-family: 'Montserrat', sans-serif; }
        .login-card { width: 100%; max-width: 400px; padding: 40px; border-radius: 20px; border: none; box-shadow: 0 10px 40px rgba(0,0,0,0.1); background: white; }
        .btn-primary-orange { background-color: #ff8d21; color: white; border-radius: 12px; padding: 12px; width: 100%; border: none; transition: 0.3s; font-weight: 600; }
        .btn-primary-orange:hover { background-color: #e67a0d; color: white; transform: translateY(-2px); }
        .form-control { border-radius: 12px; padding: 12px; border: 1px solid #eee; background-color: #fafafa; }
        .form-control:focus { border-color: #ff8d21; box-shadow: 0 0 0 0.25rem rgba(255, 141, 33, 0.1); }
        .logo { font-family: 'Great Vibes', cursive; font-size: 2.5rem; color: #ff8d21; margin-bottom: 20px; text-align: center; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="logo">Սեդրակ & Գոհար</div>
        <h5 class="text-center mb-4">Ադմին Պանել</h5>

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Գաղտնաբառ" required autofocus>
                @if($errors->has('password'))
                    <div class="text-danger mt-2"><small>{{ $errors->first('password') }}</small></div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary-orange">Մուտք գործել</button>
        </form>
    </div>
</body>
</html>
