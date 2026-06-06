<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ադմին Պանել | Երգերի Ցանկ</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🎵</text></svg>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #fff4df; font-family: 'Montserrat', sans-serif; color: #2E2E2E; }
        .admin-card { border-radius: 15px; border: none; box-shadow: 0 8px 30px rgba(0,0,0,0.05); margin-bottom: 30px; background: white; overflow: hidden; }
        .table-header { background-color: #ffa447; color: white; padding: 25px; display: flex; justify-content: space-between; align-items: center; }
        .btn-refresh { background-color: rgba(255,255,255,0.2); border: 1px solid white; color: white; border-radius: 10px; padding: 8px 16px; transition: all 0.3s; text-decoration: none; }
        .btn-refresh:hover { background-color: white; color: #ffa447; }
        .table thead th { background-color: #fafafa; color: #6b5a45; font-weight: 600; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.05em; padding: 15px; }
        .table tbody td { padding: 15px; border-bottom: 1px solid #f0f0f0; }
        .song-link { color: #ffa447; font-weight: 500; text-decoration: none; transition: 0.2s; }
        .song-link:hover { color: #d67115; text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card admin-card">
            <div class="table-header">
                <h3 class="mb-0">🎵 Ցանկալի Երգերի Ցանկ</h3>
                <div class="d-flex gap-2">
                    <a href="{{ route('admin') }}" class="btn btn-refresh btn-sm">🔙 Վերադառնալ</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Հյուրի Անուն</th>
                                <th>Ցանկալի Երգ</th>
                                <th>Յութուբ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($songs as $song)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $song->name }}</strong></td>
                                <td>{{ $song->desired_song }}</td>
                                <td>
                                    @php
                                        $normalized = str_ireplace([',', ';', "\n", "\r", ' and ', ' ու ', ' և '], '|', $song->desired_song);
                                        $songList = array_filter(array_map('trim', explode('|', $normalized)));
                                    @endphp
                                    
                                    @if(count($songList) > 0)
                                        @foreach($songList as $singleSong)
                                            <a href="https://www.youtube.com/results?search_query={{ urlencode($singleSong) }}" target="_blank" class="song-link d-block mb-1">
                                                ▶️ Փնտրել «{{ \Illuminate\Support\Str::limit($singleSong, 25) }}»
                                            </a>
                                        @endforeach
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">Դեռևս երգեր չեն ավելացվել</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
