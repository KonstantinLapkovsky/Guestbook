<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            @if (auth()->check())
                <a class="nav-link mr-auto" href="/messages/create">Publish message</a>
                <a class="nav-link text-center" href="/home">Nice to see you {{ auth()->user()->name }}!</a>
                <a class="nav-link ml-auto" href="/logout">Logout</a>
            @endif
        </nav>
    </div>
</div>

