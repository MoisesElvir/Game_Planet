<div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-planet' style='color:#ffffff' ></i>
        <div class="logo_name">Game <br>Planet</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Search...">
            <span class="tooltip">Search</span>
        </li>
        <li class="toggle-products">
            <a href="#">
                <i class='bx bxs-box'></i>
                <span class="links_name">Product</span>
            </a>
            <span class="tooltip">Product</span>
        </li>
        <li class="hidden2">
            <a href="{{ url ('/Product_Type_List') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Product Type</span>
            </a>
            <span class="tooltip">Product Type</span>
        </li>
        <li class="hidden2">
            <a href="{{ url ('/Brands_List') }}">
                <i class='bx bx-game'></i>
                <span class="links_name">Brands</span>
            </a>
            <span class="tooltip">Brands</span>
        </li>
        <li class="hidden2">
            <a href="{{ url ('/Supplier_List') }}">
                <i class='bx bxs-truck'></i>
                <span class="links_name">Supplier</span>
            </a>
            <span class="tooltip">Supplier</span>
        </li>
        <li class="hidden2">
            <a href="{{ url ('/Product_List') }}">
                <i class='bx bxs-joystick-button'></i>
                <span class="links_name">Product</span>
            </a>
            <span class="tooltip">Product</span>
        </li>        
        <li>
            <a href="#" class="toggle-users">
                <i class='bx bxs-user-circle'></i>
                <span class="links_name">Users</span>
            </a>
            <span class="tooltip">Users</span>
        </li>
        <li class="hidden">
            <a href="{{ url ('/Employees_List') }}">
                <i class='bx bxs-user-account'></i>
                <span class="links_name">Employee</span>
            </a>
            <span class="tooltip">Employee</span>
        </li>
        <li class="hidden">
            <a href="{{ url ('/Customers_List') }}">
                <i class='bx bx-user'></i>
                <span class="links_name">Customer</span>
            </a>
            <span class="tooltip">Customer</span>
        </li>                    
        <li>
            <a href="{{ url ('/Branch_List') }}">
                <i class='bx bx-git-branch'></i>
                <span class="links_name">Branch</span>
            </a>
            <span class="tooltip">Branch</span>
        </li>
        <li>
            <a href="{{ url ('/Buy_List') }}">
                <i class='bx bxs-credit-card'></i>
                <span class="links_name">Buy</span>
            </a>
            <span class="tooltip">Buy</span>
        </li>
        <li>
            <a href="{{ url ('/Bill_List') }}">
                <i class='bx bxs-receipt'></i>
                <span class="links_name">Bill</span>
            </a>
            <span class="tooltip">Bill</span>
        </li>
        <li>
            <a href="">
                <i class="bx bx-cog"></i>
                <span class="links_name">Setting</span>
            </a>
            <span class="tooltip">Setting</span>
        </li>
        <li class="profile">
            <div class="profile-details"></div>
            <img src="profile.jpg" alt="profileImg">
            <div class="name_job">
                <div class="name">Team Kodigo</div>
                <div class="job">Full Stack</div>
            </div>
            <i class="bx bx-log-out" id="log_out"></i>
        </li>
    </ul>
</div>