<div class="card sub-menu">
    <div class="card-body">
        <ul class="d-flex">
            <li class="nav-item">
                <a href="{{ route('deposits.index') }}" class="nav-link">
                    <i class="mdi mdi-bullseye"></i>
                    <span>Overview</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('deposits.create') }}" class="nav-link">
                    <i class="mdi mdi-heart"></i>
                    <span>Deposit</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('withdrawals.create') }}" class="nav-link">
                    <i class="mdi mdi-pentagon"></i>
                    <span>Withdraw</span>
                </a>
            </li>
        </ul>
    </div>
</div>
