<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            @if (auth()->check())
                <a class="nav-link mr-auto" href="/home">Nice to see you {{ auth()->user()->name }}!</a>
                @if ( auth()->guard('admin')->check() )
                	<a class="nav-link ml-auto" href="/admin/logout">Logout</a>
                @else
                	<a class="nav-link ml-auto" href="/logout">Logout</a>
                @endif
            @endif
        </nav>
    </div>
</div>

