<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-header">Navigation</div>
            <div class="menu-item active">
                <a href="/admin/dashboard" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </div>
            <div class="menu-item has-sub">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-folder"></i>
                    </span>
                    <span class="menu-text">Data</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="/admin/transactions" class="menu-link">
                            <span class="menu-text">Transactions (TRX)</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="/admin/inventories" class="menu-link">
                            <span class="menu-text">Inventories</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="/admin/cashier" class="menu-link">
                            <span class="menu-text">Cashier</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- END menu -->
        <div class="p-3 px-4 mt-auto">
            <form action="/logout" method="POST" class="d-block">
                @csrf
                <button type="submit" class="btn d-block btn-outline-theme w-100">
                    <i class="fa fa-sign-out branch me-2 ms-n2 opacity-5"></i> Logout
                </button>
            </form>
        </div>
    </div>
    <!-- END scrollbar -->
</div>
<!-- END #sidebar -->
