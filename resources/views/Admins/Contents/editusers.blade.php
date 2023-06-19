<!-- header -->
@INCLUDE('Admins.Layouts.header')

<!-- Sidebar -->
@INCLUDE('Admins.Layouts.sidebar')

<!-- Topbar -->
@INCLUDE('Admins.Layouts.topbar')

{{-- @section('content_index') --}}
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Manage Users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Users</li>
            </ol>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for=""> ID </label>
                    <input type="text" class="form-control" name="user_id" value ="{{$cate->user_id}}" placeholder="ID">
                </div>
                <div class="mb-3">
                    <label for="">User Name</label>
                    <input type="text" class="form-control" name="username" value ="{{$cate->username}}" placeholder="user name của bạn..." >
                </div>
                <div class="mb-3">
                    <label for=""> Name </label>
                    <input type="text" class="form-control" name="name" value ="{{$cate->name}}" placeholder="Name của bạn...">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value ="{{$cate->email}}" placeholder="Email của bạn..." >
                </div>
                <div class="mb-3">
                    <label for=""> Phone Number  </label>
                    <input type="text" class="form-control" name="phone_number" value ="{{$cate->phone_number}}" placeholder="số đt...">
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" value ="{{$cate->address}}" placeholder="địa chỉ ..." >
                </div>
                <button type="submit" class="btn btn-info"> Edit </button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
                <a href="{{asset('Admins/users/manageusers')}}" class="btn btn-warning">Back</a>

            </form>
        </div>
    </main>
</div>
{{-- @endsection --}}

<!-- footer -->
@INCLUDE('Admins.Layouts.footer')

<!-- back to top -->
@INCLUDE('Admins.Layouts.back_to_top')

<!-- logout -->
@INCLUDE('Admins.Layouts.logout')

<!-- JS -->
@INCLUDE('Admins.Layouts.js')