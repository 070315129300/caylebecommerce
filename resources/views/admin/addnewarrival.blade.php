@include('admin.admincss')
@include('admin.adminsidebar')
@include('admin.adminnavbar')


<section class="header">
    <h2>Add New Arrival</h2>
</section>
<section class="form-container">
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <form action="{{url('insertnewarrival')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid">
            <input
                type="text"
                name="productname"
                id="productname"
                required
                placeholder="productname"

            />

            <input
                type="text"
                name="brandname"
                id="brandname"
                required
                placeholder="Brand Name"
            />
            <input
                type="text"
                name="amountbought"
                id="amount"
                required
                placeholder="Amountbought"
            />
            <input
                type="text"
                name="amount"
                id="amount"
                required
                placeholder="Amount"
            />
            <label class="label" for="inputTag">
                Select Product Image 1 <br />
                <i class="fa fa-camera"></i>
                <input  name="file1" type="file" required />

                <br />
                <span id="imageName"></span>
            </label>

            <label class="label" for="inputTag">
                Select Product Image 2 <br />
                <i class="fa fa-camera"></i>
                <input  name="file2" type="file" required />

                <br />
                <span id="imageName"></span>
            </label>

            <label class="label" for="inputTag">
                Select Product Image 3 <br />
                <i class="fa fa-camera"></i>
                <input  name="file3" type="file" required />

                <br />
                <span id="imageName"></span>
            </label>
            <label class="label" for="inputTag">
                Select Product Image 4 <br />
                <i class="fa fa-camera"></i>
                <input  name="file4" type="file" required />

                <br />
                <span id="imageName"></span>
            </label>
        </div>

        <div class="submit"><button type="submit">Submit</button></div>
    </form>
</section>


@include('admin.adminfooter')
