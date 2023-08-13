<!-- header -->
@INCLUDE('Front_end.Layouts.header')

<!-- Topbar -->
@INCLUDE('Front_end.Layouts.topbar')

<!-- navbar -->
@INCLUDE('Front_end.Layouts.navbar')

{{-- @section('content_index') --}}

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item active">Profile</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="container">
    <div class="row flex-lg-nowrap">
        <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
            <div class="card p-3">
                <div class="e-navlist e-navlist--active-bg">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link px-2" href="{{ route('Clients.profile.edit') }}"
                                target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @if (session('profile_success'))
            <div id="floating-message-profile" style="position: fixed; bottom: 20px; right: 20px; padding: 10px 20px; background-color: #4caf50; color: white; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                {{ session('profile_success') }}
            </div>
        @endif
        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                    <div class="col-12 col-sm-auto mb-3">
                                        <div class="mx-auto" style="width: 140px;">
                                            <div class="d-flex justify-content-center align-items-center rounded"
                                                style="height: 140px; background-color: rgb(233, 236, 239);">

                                                @if (auth()->user()->image)
                                                    <img src="{{ asset('Admin/img/' . auth()->user()->image) }}"
                                                        style="object-fit: cover; width: 100%; height: 100%;"
                                                        alt="Image">
                                                @else
                                                    <span
                                                        style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('Clients.profile.update') }}" method="POST" class="form"
                                        novalidate="">
                                        @csrf
                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ auth()->user()->name }}
                                                </h4>
                                                <p class="mb-0">{{ auth()->user()->email }}</p>
                                                <div class="mt-2">
                                                    <button class="btn btn-primary" type="button"
                                                        id="change-photo-button">
                                                        <i class="fa fa-fw fa-camera"></i>
                                                        <span>Change Photo</span>
                                                    </button>
                                                    <input type="file" name="image" id="image"
                                                        style="display: none;" value="{{ auth()->user()->image }}">
                                                </div>
                                            </div>

                                        </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                </ul>
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                @error('phone_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">

                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <input class="form-control" type="text" name="name"
                                                                placeholder="Name..."
                                                                value="{{ auth()->user()->name }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input class="form-control" type="text" name="username"
                                                                placeholder="Username..."
                                                                value="{{ auth()->user()->username }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" type="text" name="email"
                                                                placeholder="Email..."
                                                                value="{{ auth()->user()->email }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input class="form-control" type="text" name="address"
                                                                placeholder="Address..."
                                                                value="{{ auth()->user()->address }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Phone number</label>
                                                            <input class="form-control" type="text"
                                                                name="phone_number" placeholder="Phone number..."
                                                                value="{{ auth()->user()->phone_number }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex justify-content-end">
                                                <button class="btn btn-primary" type="submit">Save
                                                    Changes</button>
                                            </div>
                                        </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 mb-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="px-xl-3">

                                <form method="POST" action="{{ route('Clients.logout') }}">
                                    @csrf
                                    <a href="" onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="text-decoration-none">
                                        <button class="btn btn-block btn-secondary">
                                            <i class="fa fa-sign-out"></i>
                                            <span>Logout</span>
                                        </button>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">Support</h6>
                            <p class="card-text">Get fast, free help from our friendly assistants.</p>
                            <a href="{{ asset('Clients/Contents/contact') }}" class="text-decoration-none">
                                <button type="button" class="btn btn-primary">Contact Us</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- @endsection --}}

<!-- footer -->
@INCLUDE('Front_end.Layouts.footer')

<!-- back to top -->
@INCLUDE('Front_end.Layouts.back_to_top')

<!-- JS -->
@INCLUDE('Front_end.Layouts.js')
