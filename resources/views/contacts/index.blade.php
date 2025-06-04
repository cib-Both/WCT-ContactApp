@extends('layouts.main')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
                        <!-- Card Header with Glass Morphism Effect -->
                        <div class="card-header p-4 border-0 bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="mb-2 text-dark fw-light fw-semibold">
                                        <i class="bi bi-person-lines-fill me-2 text-primary"></i>Contact Directory
                                    </h3>
                                    <p class="text-muted mb-0 small">Manage your professional network</p>
                                </div>
                                
                                @if (session('success'))
                                <div class="alert alert-success bg-opacity-25 border-0 py-2 px-3 mb-0 fade show">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    {{ session('success') }}
                                </div>
                                @endif
                                
                                <a href="{{ route('contacts.create') }}" class="btn btn-primary rounded-pill px-4">
                                    <i class="bi bi-plus-lg me-2"></i> New Contact
                                </a>
                            </div>
                        </div>
                        
                        <!-- Filter Section -->
                        <div class="bg-white px-4 py-3">
                            @include('contacts.company-filter')
                        </div>
                        
                        <!-- Card Body -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="bg-white text-uppercase small">
                                        <tr class="text-muted border-bottom">
                                            <th class="ps-4 py-3">ID</th>
                                            <th class="py-3">Name</th>
                                            <th class="py-3">Contact</th>
                                            <th class="py-3">Location</th>
                                            <th class="py-3">Company</th>
                                            <th class="pe-4 py-3 ">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                        <tr class="border-bottom border-light">
                                            <td class="ps-4 text-muted">{{ $contact->id }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6 class="mb-0">{{ $contact->first_name }} {{ $contact->last_name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-muted small">
                                                    <div><i class="bi bi-telephone me-2"></i>{{ $contact->phone }}</div>
                                                    <div><i class="bi bi-envelope me-2"></i>{{ $contact->email }}</div>
                                                </div>
                                            </td>
                                            <td class="text-muted small">{{ $contact->address }}</td>
                                            <td>
                                                <span class="badge bg-soft-primary text-primary rounded-pill">
                                                    {{ $contact->company->name }}
                                                </span>
                                            </td>
                                            <td class="pe-4 text-start">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('contacts.show', $contact->id) }}" 
                                                       class="btn btn-sm btn-icon btn-outline-primary rounded-circle me-1"
                                                       data-bs-toggle="tooltip" title="View">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('contacts.edit', $contact->id) }}" 
                                                       class="btn btn-sm btn-icon btn-outline-secondary rounded-circle me-1"
                                                       data-bs-toggle="tooltip" title="Edit">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" 
                                                                class="btn btn-sm btn-icon btn-outline-danger rounded-circle"
                                                                data-bs-toggle="tooltip" 
                                                                title="Delete"
                                                                onclick="return confirm('Delete this contact permanently?')">
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
    .bg-gradient-primary {
        background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
    }
    .bg-soft-primary {
        background-color: rgba(67, 97, 238, 0.1);
    }
</style>