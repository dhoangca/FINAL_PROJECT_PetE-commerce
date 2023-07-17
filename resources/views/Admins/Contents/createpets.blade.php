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
                <li class="breadcrumb-item active">Create Pets</li>
            </ol>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for=""> Name Pets </label>
                    <input type="text" class="form-control" name="name" placeholder="Name Pets ...">
                </div>
                <div class="mb-3">
                    <label for="">Breed</label>
                    <input type="text" class="form-control" name="breed" placeholder="Breed ..." >
                </div>
                <div class="mb-3">
                    <label for=""> Gender </label>
                    <input type="text" class="form-control" name="gender" placeholder="Gender ...">
                </div>
                <div class="mb-3">
                    <label for=""> Price </label>
                    <input type="text" class="form-control" name="price" placeholder="Price ...">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description ..." >
                </div>
                <div class="mb-3">
                    <label for=""> Quantity </label>
                    <input type="text" class="form-control" name="quantity" placeholder="Quantity ...">
                </div>
                <div class="mb-3">
                    <label for="imageInput">Image</label>
                    <div class="input-group">
                        <label class="input-group-text" for="imageInput"><input type="file" id="imageInput" name="image" accept="image/*"></label>
                    </div>
                </div> 
                <div class="mb-3">
                    <label for=""> Status </label>
                    <input type="text" class="form-control" name="status" placeholder="Status ...">
                </div>
                <div class="mb-3">
                    @if($categories != null)
                    <label for=""> Categori </label>
                    <select id="inputCategori" class="form-control" name="category_id">
                        @foreach($categories as $categori)
                            <option value="{{$categori->category_id}}">{{$categori->name}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
                <button type="submit" class="btn btn-info"> Create </button>
                <a href="{{asset('Admins/Pets/managepets')}}" class="btn btn-warning">back</a>

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