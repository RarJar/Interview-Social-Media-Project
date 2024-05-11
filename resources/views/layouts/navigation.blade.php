<nav
    class="sticky top-0 z-10 block w-full max-w-full px-4 py-2 text-black bg-white border rounded-none shadow-md h-max border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
    <div class="flex items-center justify-between text-blue-gray-900">
        <a href="/"
            class="mr-4 block cursor-pointer py-1.5 font-sans text-xl font-medium leading-relaxed text-inherit antialiased">
            Social-Media
        </a>
        <div class="flex items-center gap-x-1">
            @auth
                <a class="rounded-lg bg-gray-800 py-2 px-4 text-center font-sans text-xs font-bold uppercase text-white"
                    href="{{ route('post.create') }}">
                    <button>Create Post</button>
                </a>
                <a><img src="https://icon2.cleanpng.com/20180523/wxj/kisspng-businessperson-computer-icons-avatar-clip-art-lattice-5b0508dc2ee812.2252011515270566041921.jpg"
                        class="w-10 h-10 rounded-full">
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="rounded-lg bg-red-500 py-2 px-4 text-center font-sans text-xs font-bold uppercase text-white">
                        Log Out
                    </button>
                </form>
            @else
                <a href="/login"
                    class="rounded-lg bg-black py-2 px-4 text-center font-sans text-xs font-bold uppercase text-white">
                    <span>Login</span>
                </a>
            @endauth
        </div>
    </div>
</nav>
