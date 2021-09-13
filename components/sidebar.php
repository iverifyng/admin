<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <div class="sidebar-brand">
            <img src="./img/logo_white.png" width="150">
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-item pt-4 <?php if($page=='Dashboard'){echo 'active';}?>">
                <a class="sidebar-link" href="dashboard">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item <?php if($page=='Users'){echo 'active';}?>">
                <a class="sidebar-link" href="users">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
                </a>
            </li>
            <li class="sidebar-item <?php if($page=='Messages'){echo 'active';}?>">
                <a class="sidebar-link" href="messages">
                    <i class="align-middle" data-feather="message-circle"></i> <span class="align-middle">Messages</span>
                </a>
            </li>
            <li class="sidebar-item <?php if($page=='Verification'){echo 'active';}?>">
                <a data-bs-target="#form-plugins" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Verifications</span>
                </a>
                <ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="corporate-employee">Corporate Employee</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Domestic Employee</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Employee Lite</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Guarantor</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Certificate</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Property</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Tenant</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Credit Check</a></li>
                </ul>
            </li>
            <li class="sidebar-item <?php if($page=='Topup'){echo 'active';}?>">
                <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Wallet Topup</span>
                </a>
                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="bank-topup">Bank Transfer</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="">Online Payment</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="notifications.html">
                    <i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Invoice</span>
                </a>
            </li>
            <li class="sidebar-item <?php if($page=='Pricelist'){echo 'active';}?>">
                <a class="sidebar-link" href="price-list">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Verification Prices</span>
                </a>
            </li>

            <li class="sidebar-header">
                Preferences
            </li>

            <li class="sidebar-item <?php if($page=='Staff'){echo 'active';}?>">
                <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">iVerify Staff</span>
                </a>
                <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="admins">Admins</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="agents">Agents</a></li>
                </ul>
            </li>

            <li class="sidebar-item <?php if($page=='Onboard'){echo 'active';}?>">
                <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Onboard App</span>
                </a>
                <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="admins">Admins</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="agents">Agents</a></li>
                </ul>
            </li>

            <li class="sidebar-item <?php if($page=='Promo'){echo 'active';}?>">
                <a class="sidebar-link" href="promo">
                    <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Promo Entries</span>
                </a>
            </li>

            <li class="sidebar-item pb-3">
                <a class="sidebar-link" href="./logout">
                    <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Log Out</span>
                </a>
            </li>

        </ul>

    </div>
</nav>