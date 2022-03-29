<div class="page-title dashboard">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-content">
                    <p>Welcome Back,
                        <span>{{ auth()->user()->fullname }}</span>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <ul class="text-right breadcrumbs list-unstyle">
                    <li><a href="{{ route('account-settings') }}">Account Settings </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
