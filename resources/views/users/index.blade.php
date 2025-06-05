@extends('layouts.main')
@section('content')
<main class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- User List Card -->
                <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
                    <!-- Card Header -->
                    <div class="card-header bg-white border-bottom pt-4 pb-5 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2 class="h5 mb-0 fw-semibold text-dark">
                                    <i class="bi bi-people-fill text-primary me-2"></i>User Management
                                </h2>
                                <p class="text-muted small mb-0">View and manage all registered users</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card Body -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr class="text-muted">
                                        <th class="ps-4 py-3 fw-semibold small">#</th>
                                        <th class="py-3 fw-semibold small">User name</th>
                                        <th class="py-3 fw-semibold small">Email</th>
                                        <th class="pe-4 py-3 fw-semibold small">Registration Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr class="border-bottom border-light">
                                            <td class="ps-4 text-muted">{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6 class="mb-0">{{ $user->name }}</h6>
                                                        <small class="text-muted">User ID: {{ $user->id }}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-muted small">
                                                    <div><i class="bi bi-envelope me-2"></i>{{ $user->email }}</div>
                                                    <div><i class="bi bi-calendar me-2"></i>Member since {{ $user->created_at->format('M Y') }}</div>
                                                </div>
                                            </td>
                                            <td class="text-muted small">
                                                {{ $user->created_at->format('F j, Y') }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-4 text-muted">
                                                <i class="bi bi-people display-6 d-block mb-2"></i>
                                                No users found in the system
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('styles')
<style>
    .avatar-sm {
        width: 36px;
        height: 36px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }
    .bg-soft-primary {
        background-color: rgba(67, 97, 238, 0.1);
    }
    .card {
        transition: all 0.2s ease;
    }
    .card:hover {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .table-hover tbody tr:hover {
        background-color: rgba(67, 97, 238, 0.03);
    }
    .card-header {
        background-color: #f8f9fa;
    }
</style>
@endpush