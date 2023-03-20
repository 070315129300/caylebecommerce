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
                            <th> Product Name </th>
                            <th> Brand Name </th>
                            <th> Amount Bought </th>
                            <th> amount </th>
                            <th> image1 </th>
                            <th> image2 </th>
                            <th> image3 </th>
                            <th> image4 </th>

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
                                <td> {{$users->productname}} </td>
                                <td> {{$users->brandname}} </td>
                                <td> {{$users->amountbought}} </td>
                                <td> {{$users->amount}} </td>
                                <td> <img  height="120px" src="featuredimage/{{$users->image1}}" width="120px" alt=""></td>
                                <td> <img  height="120px" src="featuredimage/{{$users->image2}}" width="120px" alt=""></td>
                                <td> <img  height="120px" src="featuredimage/{{$users->image3}}" width="120px" alt=""></td>
                                <td> <img  height="120px" src="featuredimage/{{$users->image4}}" width="120px" alt=""></td>


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
