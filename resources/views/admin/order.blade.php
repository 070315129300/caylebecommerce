@include('admin.admincss')
@include('admin.adminsidebar')
@include('admin.adminnavbar')

<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All User</h4>
                <div class="table-responsive">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                            </th>
                            <th> User id </th>
                            <th> Product Name </th>
                            <th> Amount </th>
                            <th> No Of Product </th>
                            <th> Product id </th>
                            <th> size </th>
                            <th> image </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $users)
                            <tr>
                                <td>
                                    <div class="form-check form-check-muted m-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                        </label>
                                    </div>
                                </td>
                                <td> {{$users->user_id}} </td>
                                <td> {{$users->productname}} </td>
                                <td> {{$users->amount}} </td>
                                <td> {{$users->no_of_product}} </td>
                                <td> {{$users->product_id}} </td>
                                <td> {{$users->size}} </td>
                                <td> <img  height="120px" src="orderimage/{{$users->image1}}" width="120px" alt=""></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.adminfooter')
