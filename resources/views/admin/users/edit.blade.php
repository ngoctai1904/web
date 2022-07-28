@extends('admin.layouts.base')

@section('content')
<div class="row mx-0 mt-3">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Edit User</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.update', $user->id) }}" method="post">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">User name</label>
                                    <input type="text" id="input-username"
                                    class="form-control form-control-alternative" name="name" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email</label>
                                    <input type="text" id="input-email" class="form-control form-control-alternative" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="input-address">Role</label>
                                    <select class="custom-select" name="role_id">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="card-header border-0 d-flex align-items-center justify-content-end">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection