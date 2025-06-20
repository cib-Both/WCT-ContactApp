@extends('layouts.main')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Contact Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-2 row">
                                        <label for="fullname" class="col-md-3 col-form-label">First Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$contact['first_name']}}</p>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="fullname" class="col-md-3 col-form-label">Last Name</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$contact['last_name']}}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 row">
                                        <label for="gender" class="col-md-3 col-form-label">Phone</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$contact['phone']}}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 row">
                                        <label for="email" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$contact['email']}}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 row">
                                        <label for="phone" class="col-md-3 col-form-label">Address</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$contact['address']}}</p>
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="company_id" class="col-md-3 col-form-label">Company</label>
                                        <div class="col-md-9">
                                            <p class="form-control-plaintext text-muted">{{$contact['company']->name}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mb-2 row">
                                        <div class="col-md-9 offset-md-3">
                                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline"
                                                  onsubmit="return confirm('Are you sure you want to delete this company?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger" title="Delete">
                                                    Delete
                                                </button>
                                            </form>
                                            <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection