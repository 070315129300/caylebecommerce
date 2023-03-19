@include('admin.admincss')
@include('admin.adminsidebar')
@include('admin.adminnavbar')

<section class="header">
    <h2>Add Freeshipping</h2>
</section>
<section class="form-container">
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <form action="{{url('insertfreeshipping')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid">
            <input
                type="text"
                name="productname"
                id="username"
                required
                placeholder="productname"
                maxlength="10"
            />

            <label class="label" for="inputTag">
                Select Product Image <br />
                <i class="fa fa-camera"></i>
                <input  name="file" type="file" required />

                <br />
                <span id="imageName"></span>
            </label>
        </div>

        <div class="submit"><button type="submit">Submit</button></div>
    </form>
</section>


@include('admin.adminfooter')
