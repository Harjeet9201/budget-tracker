    {{-- <div class="layout-wrapper">
        <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="">
                <span><img src="{{ asset('admin/logo.png') }}" alt="logo" style="width: 100px;"></span>
            </a>
            <div class="menu-wrapper py-4">
                <a href="{{ Route('incomes.index') }}" class="menu-item ">Income</a>
                <a href="{{ Route('expenses.index') }}" class="menu-item ">Expence</a>
            </div>
        </div>
        <div class="profile-wrapper">

                <span style="color: white ; font-size:18px ; font-weight : 500" class="align-middle">Hi,
                    {{ auth()->user()->name }} </span> 
                    <a class="logoutBtn" style="" href="{{ url('/logout') }}"><span>Log
                        Out</span>
                </a>
        </div>
    </div> --}}


    <div class="layout-wrapper">
        <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="">
                <span><img src="{{ asset('admin/logo.png') }}" alt="logo" style="width: 100px;"></span>
            </a>
            <div class="menu-wrapper py-4">
                <a href="{{ route('incomes.index') }}" class="menu-item {{ request()->routeIs('incomes.*') ? 'active' : '' }}">Income</a>
                <a href="{{ route('expenses.index') }}" class="menu-item {{ request()->routeIs('expenses.*') ? 'active' : '' }}">Expense</a>
            </div>
        </div>
        <div class="profile-wrapper">
            <span style="color: white ; font-size:18px ; font-weight : 500" class="align-middle">Hi, {{ auth()->user()->name }} </span> 
            <a class="logoutBtn" href="{{ url('/logout') }}"><span>Log Out</span></a>
        </div>
    </div>
    