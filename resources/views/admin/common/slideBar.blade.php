{{-- @extends('admin.layouts.base')

@section('content') --}}
<div class="navbar-inner">
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="examples/dashboard.html">
                    <i class="ni ni-tv-2 text-primary"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="examples/tables.html">
                    <i class="ni ni-bullet-list-67 text-default"></i>
                    <span class="nav-link-text">MENU</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.books.list') }}" class="nav-link">
                    <i class="ni ni-book-bookmark"></i>
                    <span class="nav-link-text">Products</span>
                </a>
            </li>
            <li class="nav-item">
                    <a href="{{ route('admin.users.list')}}" class="nav-link">
                    <i class="ni ni-single-02 text-yellow"></i>
                    <span class="nav-link-text">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="ni ni-book-bookmark"></i>
                    <span class="nav-link-text">Order</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="examples/upgrade.html">
                    <i class="ni ni-send text-dark"></i>
                    <span class="nav-link-text">Upgrade</span>
                </a>
            </li> --}}
        </ul>
    
    </div>
</div>
{{-- @endsection --}}
