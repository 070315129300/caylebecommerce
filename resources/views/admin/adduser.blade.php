@include('admin.admincss')
@include('admin.adminsidebar')
@include('admin.adminnavbar')


    <section class="header">
        <h2>Add User</h2>
    </section>
    <section class="form-container">
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        <form action="{{url('insertuser')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid">
                <input
                    type="text"
                    name="name"
                    id="name"
                    required
                    placeholder="username"

                />

                <input
                    type="email"
                    name="email"
                    id="email"
                    required
                    placeholder="Email Address"
                />
                <input
                    type="text"
                    name="phone"
                    id="phone"
                    required
                    placeholder="Phone"
                />
            </div>

            <div class="submit"><button type="submit">Submit</button></div>
        </form>
    </section>


@include('admin.adminfooter')
