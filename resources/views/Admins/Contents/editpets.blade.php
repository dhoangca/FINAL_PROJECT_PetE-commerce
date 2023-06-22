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
            <h1 class="mt-4">Manage Pets</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Pets</li>
            </ol>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for=""> Name Pets </label>
                    <input type="text" class="form-control" name="name" value ="{{$cate->name}}" placeholder="Name Pets">
                </div>
                <div class="mb-3">
                    <label for="">Breed</label>
                    <input type="text" class="form-control" name="breed" value ="{{$cate->breed}}" placeholder="Breed ..." >
                </div>
                <div class="mb-3">
                    <label for=""> Gender </label>
                    <input type="text" class="form-control" name="gender" value ="{{$cate->gender}}" placeholder="Gender ...">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" value ="{{$cate->description}}" placeholder="Description ..." >
                </div>
                <div class="mb-3">
                    <label for=""> Quantity  </label>
                    <input type="text" class="form-control" name="quantity" value ="{{$cate->quantity}}" placeholder="Quantity ...">
                </div>
                <div class="mb-3">
                    <label for=""> User ID  </label>
                    <input type="text" class="form-control" name="user_id" value ="{{$cate->user_id}}" placeholder="User ID ...">
                </div>
                <button type="submit" class="btn btn-info"> Edit </button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
                <a href="{{asset('Admins/Pets/managepets')}}" class="btn btn-warning">Back</a>

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