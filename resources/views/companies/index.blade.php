@extends('layouts.main')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
                        <!-- Card Header -->
                        <div class="card-header bg-white py-4 px-5 border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="mb-2 text-dark fw-semibold">
                                        <i class="bi bi-building me-2 text-primary"></i>Company Directory
                                    </h3>
                                    <p class="text-muted mb-0 small">Manage your organization's companies</p>
                                </div>
                                
                                @if (session('success'))
                                <div class="alert alert-success border-0 bg-success-soft fade show py-2 px-3">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    {{ session('success') }}
                                </div>
                                @endif
                                
                                <a href="{{ route('companies.create') }}" class="btn btn-primary rounded-pill px-4">
                                    <i class="bi bi-plus-lg me-2"></i> Add Company
                                </a>
                            </div>
                        </div>
                        
                        <!-- Records Per Page Selector -->
                        <div class="px-5 pt-3 pb-0 bg-light bg-opacity-10">
                            <form action="{{ route('companies.index') }}" method="GET" class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="perPage" class="col-form-label text-muted small">Show:</label>
                                </div>
                                <div class="col-auto">
                                    <select name="perPage" id="perPage" class="form-select form-select-sm rounded-pill" onchange="this.form.submit()">
                                        <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
                                        <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                                        <option value="25" {{ $perPage == 25 ? 'selected' : '' }}>25</option>
                                        <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Card Body -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="bg-light text-uppercase small">
                                        <tr class="text-muted border-top">
                                            <th class="ps-5 py-3">
                                                <a class="text-decoration-none text-dark" href="{{ route('companies.index', ['sortBy' => 'id', 'sortDirection' => $sortBy === 'id' && $sortDirection === 'asc' ? 'desc' : 'asc', 'perPage' => $perPage]) }}">
                                                    ID
                                                    @if ($sortBy === 'id')
                                                        <i class="bi bi-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }} ms-1"></i>
                                                    @endif
                                                </a>
                                            </th>
                                            <th class="py-3">
                                                <a class="text-decoration-none text-dark" href="{{ route('companies.index', ['sortBy' => 'name', 'sortDirection' => $sortBy === 'name' && $sortDirection === 'asc' ? 'desc' : 'asc', 'perPage' => $perPage]) }}">
                                                    Company Name
                                                    @if ($sortBy === 'name')
                                                        <i class="bi bi-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }} ms-1"></i>
                                                    @endif
                                                </a>
                                            </th>
                                            <th class="py-3">
                                                <a class="text-decoration-none text-dark" href="{{ route('companies.index', ['sortBy' => 'email', 'sortDirection' => $sortBy === 'email' && $sortDirection === 'asc' ? 'desc' : 'asc', 'perPage' => $perPage]) }}">
                                                    Email
                                                    @if ($sortBy === 'email')
                                                        <i class="bi bi-arrow-{{ $sortDirection === 'asc' ? 'up' : 'down' }} ms-1"></i>
                                                    @endif
                                                </a>
                                            </th>
                                            <th class="pe-5 py-3 text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($companies as $company)
                                        <tr class="border-bottom border-light">
                                            <td class="ps-5 text-muted">{{ $company->id }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6 class="mb-0">{{ $company->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted">{{ $company->email }}</td>
                                            <td class="pe-5 text-center">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('companies.show', $company->id) }}" 
                                                       class="btn btn-sm btn-icon btn-outline-primary rounded-circle me-1"
                                                       data-bs-toggle="tooltip" title="View">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('companies.edit', $company->id) }}" 
                                                       class="btn btn-sm btn-icon btn-outline-secondary rounded-circle me-1"
                                                       data-bs-toggle="tooltip" title="Edit">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" 
                                                                class="btn btn-sm btn-icon btn-outline-danger rounded-circle"
                                                                data-bs-toggle="tooltip" 
                                                                title="Delete"
                                                                onclick="return confirm('Permanently delete this company?')">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Card Footer with Pagination -->
                        <div class="card-footer bg-white border-0 py-3 px-5">
                            {{ $companies->appends(['sortBy' => $sortBy, 'sortDirection' => $sortDirection, 'perPage' => $perPage])->links('pagination::bootstrap-5') }}
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
    .btn-icon {
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0;
    }
    .bg-success-soft {
        background-color: rgba(25, 135, 84, 0.1);
    }
    .bg-soft-primary {
        background-color: rgba(67, 97, 238, 0.1);
    }
    .card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
</style>