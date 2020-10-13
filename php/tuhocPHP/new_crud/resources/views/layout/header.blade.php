<div class="container text-center mt-5">
    <div class="row">
        <div class="col-1">
            <form action="{{route('users.index')}}" method="get">
                <button class="btn btn-primary rounded-0 font-weight-bold">Home</button>
              </form>
        </div>

        <div class="col-10">
            <h1 class="font-weight-bold text-uppercase">
                CRUD DATABASE
            </h1>
        </div>

        <div class="col-1">
            <i class="fas fa-hockey-puck fa-4x" style="color:red;"></i>
        </div>
    </div>
</div>

<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-6">
            <form action="{{route('users.search')}}" method="GET" id="searchForm" class="d-flex" role="search">
                <input type="text" placeholder="Nhập từ khóa cần tìm người" class="form-control rounded-0" name="search">
                <button class="btn btn-danger" type="submit" id="searchSubmit">Search</button>
            </form>
        </div>

        <div class="col-3"></div>

        <div class="col-3"></div>
    </div>
</div>