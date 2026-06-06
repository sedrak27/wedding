<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ադմին Պանել | RSVP Ցուցակ</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🧡</text></svg>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #fff4df; font-family: 'Montserrat', sans-serif; color: #2E2E2E; }
        .admin-card { border-radius: 15px; border: none; box-shadow: 0 8px 30px rgba(0,0,0,0.05); margin-bottom: 30px; background: white; overflow: hidden; }
        .table-header { background-color: #ffa447; color: white; padding: 25px; display: flex; justify-content: space-between; align-items: center; }
        .badge-yes { background-color: #ffa447; padding: 6px 12px; border-radius: 6px; }
        .badge-no { background-color: #d9534f; padding: 6px 12px; border-radius: 6px; }
        .stat-card { border-radius: 15px; border: none; padding: 25px; color: white; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .stat-card:hover { transform: translateY(-5px); }
        .stat-sedrak, .stat-gohar { background: linear-gradient(135deg, #ffa447 0%, #ffac5e 100%); }
        .stat-num { font-size: 2.8rem; font-weight: bold; margin: 10px 0; }
        .btn-refresh { background-color: rgba(255,255,255,0.2); border: 1px solid white; color: white; border-radius: 10px; padding: 8px 16px; transition: all 0.3s; }
        .btn-refresh:hover { background-color: white; color: #ffa447; }
        .table thead th { background-color: #fafafa; color: #6b5a45; font-weight: 600; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.05em; padding: 15px; }
        .table tbody td { padding: 15px; border-bottom: 1px solid #f0f0f0; }
    </style>
</head>
<body>
    <div class="container py-5">
        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm mb-4" style="border-radius: 15px; background-color: #d4edda; color: #155724;">
                ✅ {{ session('success') }}
            </div>
        @endif
        
        <!-- Վիճակագրություն -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="stat-card stat-sedrak">
                    <h5>Սեդրակի հյուրեր</h5>
                    <div class="stat-num">{{ $sedrakGuests }}</div>
                    <small>Ընդհանուր քանակ</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="stat-card stat-gohar">
                    <h5>Գոհարի հյուրեր</h5>
                    <div class="stat-num">{{ $goharGuests }}</div>
                    <small>Ընդհանուր քանակ</small>
                </div>
            </div>
        </div>

        <div class="card admin-card">
            <div class="table-header">
                <h3 class="mb-0">Հրավիրվածների Ցուցակ</h3>
                <div class="d-flex gap-2">
                    <a href="{{ route('admin.songs') }}" class="btn btn-refresh btn-sm">🎵 Երգերի ցանկ</a>
                    <a href="{{ route('admin') }}" class="btn btn-refresh btn-sm">🔄 Թարմացնել</a>
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-refresh btn-sm">🚪 Ելք</button>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Անուն</th>
                                <th>Մասնակցություն</th>
                                <th>Հյուրեր</th>
                                <th>Հրավիրված</th>
                                <th>Երգ</th>
                                <th>IP Հասցե</th>
                                <th>Տեղանք</th>
                                <th>Սարք (Device)</th>
                                <th>Ամսաթիվ</th>
                                <th>Գործողություն</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rsvps as $rsvp)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><strong>{{ $rsvp->name }}</strong></td>
                                <td>
                                    <span class="badge {{ $rsvp->attend == 'yes' ? 'badge-yes' : 'badge-no' }}">
                                        {{ $rsvp->attend == 'yes' ? 'Այո' : 'Ոչ' }}
                                    </span>
                                </td>
                                <td>{{ $rsvp->guest_count ?? 0 }}</td>
                                <td>{{ $rsvp->invited_by }}</td>
                                <td>
                                    @if($rsvp->desired_song)
                                        <small class="text-muted">{{ Str::limit($rsvp->desired_song, 30) }}</small>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td><small class="text-muted">{{ $rsvp->ip_address }}</small></td>
                                <td><small class="text-muted">{{ $rsvp->location ?? 'Անհայտ' }}</small></td>
                                <td><small class="text-muted" title="{{ $rsvp->user_agent }}">{{ Str::limit($rsvp->user_agent, 20) }}</small></td>
                                <td>{{ $rsvp->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-outline-primary btn-sm" 
                                            onclick="openEditModal({{ json_encode($rsvp) }})">
                                            ✏️
                                        </button>
                                        <form action="{{ route('rsvp.destroy', $rsvp) }}" method="POST" onsubmit="return confirm('Վստա՞հ եք, որ ուզում եք ջնջել այս գրառումը:')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">🗑️</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 10px 40px rgba(0,0,0,0.2);">
                <div class="modal-header" style="background: #ffa447; color: white; border-radius: 20px 20px 0 0;">
                    <h5 class="modal-title">Խմբագրել RSVP</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label">Անուն Ազգանուն</label>
                            <input type="text" name="name" id="edit-name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Մասնակցություն</label>
                            <select name="attend" id="edit-attend" class="form-select" required>
                                <option value="yes">Այո</option>
                                <option value="no">Ոչ</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Հյուրերի քանակ</label>
                            <input type="number" name="guest_count" id="edit-guest_count" class="form-control" min="0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ում կողմից</label>
                            <select name="invited_by" id="edit-invited_by" class="form-select" required>
                                <option value="sedrak">Սեդրակ</option>
                                <option value="gohar">Գոհար</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer border-0 p-4 pt-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="border-radius: 10px;">Չեղարկել</button>
                        <button type="submit" class="btn" style="background: #ffa447; color: white; border-radius: 10px; padding: 10px 25px;">Պահպանել</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function openEditModal(rsvp) {
            const form = document.getElementById('editForm');
            form.action = `/admin/rsvp/${rsvp.id}`;
            
            document.getElementById('edit-name').value = rsvp.name;
            document.getElementById('edit-attend').value = rsvp.attend;
            document.getElementById('edit-guest_count').value = rsvp.guest_count || 0;
            document.getElementById('edit-invited_by').value = rsvp.invited_by;
            
            new bootstrap.Modal(document.getElementById('editModal')).show();
        }
    </script>
</body>
</html>
