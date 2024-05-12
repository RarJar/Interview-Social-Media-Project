<nav
    class="sticky top-0 z-10 block w-full max-w-full px-4 py-2 text-black bg-white border rounded-none shadow-md h-max border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
    <div class="flex items-center justify-between text-blue-gray-900">
        <a href="/"
            class="mr-4 block cursor-pointer py-1.5 font-sans text-xl font-medium leading-relaxed text-inherit antialiased">
            Social Media
        </a>
        <div class="flex items-center gap-x-1">
            @auth
                <a href="{{ route('profile.index', auth()->user()?->id) }}"><img
                        src="https://icon2.cleanpng.com/20180523/wxj/kisspng-businessperson-computer-icons-avatar-clip-art-lattice-5b0508dc2ee812.2252011515270566041921.jpg"
                        class="w-10 h-10 rounded-full">
                </a>
                <x-atoms.link route="{{ route('post.create') }}" class="bg-gray-800 uppercase" content="Create Post" />
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-atoms.button type="submit" class="bg-red-500 uppercase" content="Log Out" />
                </form>
            @else
                <x-atoms.link route="/login" class="bg-gray-800 uppercase" content="Login" />
            @endauth
        </div>
    </div>
</nav>
