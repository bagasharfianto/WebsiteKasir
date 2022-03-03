<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="http://127.0.0.1:8000/" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa bi-shop me-2"></i>SHOP</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="http://127.0.0.1:8000/" class="nav-item nav-link {{ ($title == 'Dashboard')? 'active': ' ' }}"><i
                    class="fa fa-tachometer-alt me-2 "></i>Dashboard</a>
            <a href="http://127.0.0.1:8000/Order" class="nav-item nav-link {{ ($title == 'Order')? 'active': ' ' }}"><i class="fa bi-cart4 me-2"></i>Order</a>
            <a href="http://127.0.0.1:8000/Inventory" class="nav-item nav-link {{ ($title == 'Inventory')? 'active': ' ' }}"><i class="fa bi-box-seam me-2"></i>Inventory</a>
            <a href="http://127.0.0.1:8000/History" class="nav-item nav-link {{ ($title == 'History')? 'active': ' ' }}"><i class="fa bi-clipboard-data me-2"></i>History</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->