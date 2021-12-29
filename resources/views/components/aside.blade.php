<aside>
    <div class="contain-menu" id="searchbar">
        <div class="menu search-menu">
            <h1>{{__('search.header')}}</h1>
        </div>
        <div class="search-png"><span></span></div>

            <form action="{{route('search')}}" method="post">
                @csrf
                <input class="form-input" type="search" name="search" id="search" value="{{old('search')}}" placeholder="{{__('search.placeholder')}}" title="{{__('search.title')}}">
            </form>
    </div>
    <div class="contain-menu" id="navbar">
        <div class="menu">
            <h1>{{__('layout.asidemenu')}}</h1>
        </div>
        <ul class="sidebar-nav-list">
            <li class="sidebar-nav-item"><a href="{{route('landings.index')}}">{{__('layout.asidemain')}}</a></li>
            <li class="sidebar-nav-item"><a href="{{route('posts.index')}}">{{__('layout.asidenews')}}</a></li>
            <li class="sidebar-nav-item"><a href="{{route('bios.index')}}">{{__('layout.asidecv')}}</a></li>
            <li class="sidebar-nav-item"><a href="{{route('reviews.index')}}">{{__('layout.asidereviews')}}</a></li>
            <li class="sidebar-nav-item"><a href="{{route('feedback')}}">{{__('layout.asidefeedback')}}</a></li>
            <li class="sidebar-nav-item"><a href="{{route('publs.index')}}">{{__('layout.asidepublications')}}</a></li>
            <li class="sidebar-nav-item"><a href="{{route('confs.index')}}">{{__('layout.asideconferences')}}</a></li>
            @auth()
                <li class="sidebar-nav-item"><a href="{{route('admin')}}">{{__('layout.asideadmin')}}</a></li>
            @endauth
        </ul>
    </div>
    <div class="contain-menu" id="links">
        <div class="menu">
            <h1>{{__('layout.asideresources')}}</h1>
        </div>
        <ul class="sidebar-nav-list" id="links-list">
            <li class="sidebar-nav-item"><a href="https://msth.by/" target="_blank">{{__('layout.asidemnpc')}}</a></li>
            <li class="sidebar-nav-item"><a href="https://belmapo.by/" target="_blank">{{__('layout.asidebelmapo')}}</a></li>
            <li class="sidebar-nav-item"><a href="https://www.bsmu.by/page/8/3649/" target="_blank">{{__('layout.asidebah')}}</a></li>
            <li class="sidebar-nav-item"><a href="http://minzdrav.gov.by/ru/dlya-spetsialistov/standarty-obsledovaniya-i-lecheniya/khirurgiya.php" target="_blank">{{__('layout.asidestandart')}}</a></li>
            <li class="sidebar-nav-item"><a href="https://www.ifso.com/" target="_blank">IFSO</a></li>
        </ul>
    </div>
    <div class="patent">
        <a href="{{route('patent')}}" target="_self" class="pat"></a>
    </div>
</aside>