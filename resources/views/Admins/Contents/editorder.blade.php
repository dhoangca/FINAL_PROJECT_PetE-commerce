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
            <h1 class="mt-4">Manage Order</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Order</li>
            </ol>
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for=""> Id </label>
                    <input type="text" class="form-control" value ="{{$cate->order_id}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="">Code orders</label>
                    <input type="text" class="form-control" value ="{{$cate->code}}" disabled>
                </div>
                <div class="mb-3">
                    <label for=""> Order Date </label>
                    <input type="text" class="form-control" value ="{{$cate->order_date}}" disabled>
                </div>
                <div class="mb-3">
                    <label for=""> Total Amount </label>
                    <input type="text" class="form-control" value ="{{$cate->total_amount}}" disabled>
                </div>
                <div class="mb-3">
                    @if($statuss != null)
                    <label for=""> Status </label>
                    <select id="inputStatus" class="form-control" name="status_id">
                        @foreach($statuss as $status)
                            <option value="{{$status->status_id}}">{{$status->name}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
                <button type="submit" class="btn btn-info"> Edit </button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
                <a href="{{asset('Admins/Orders/manageorders')}}" class="btn btn-warning">Back</a>

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