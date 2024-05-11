@props(['data'])

<div class="bg-white p-8 shadow-md rounded-lg m-3">
    <a href="/profile/{{ $data->user?->username }}" class="flex items-center mb-2 space-x-2">
        <img src="https://icon2.cleanpng.com/20180523/wxj/kisspng-businessperson-computer-icons-avatar-clip-art-lattice-5b0508dc2ee812.2252011515270566041921.jpg"
            class="w-10 h-10 rounded-full">
        <div class="flex flex-col">
            <span class="text-gray-800 font-semibold">{{ $data->user?->name }}</span>
            <span class="text-gray-500 text-sm">Posted {{ $data->created_at->diffForHumans() }}</span>
        </div>
    </a>
    <div class="mb-4">
        <p class="text-gray-800">{{ $data->title }}</p>
        <p class="text-gray-800">{{ $data->body }}</p>
    </div>
    <div class="flex items-center justify-between text-gray-500">
        <div class="flex items-center space-x-3">
            @can('post-manage', $data)
                <a href="{{ route('post.edit', $data->id) }}" class="text-blue-500">Edit</a>
                <a href="{{ route('post.destroy', $data->id) }}" class="text-red-500">Delete</a>
            @endcan
        </div>
        <button class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
            <svg width="22px" height="22px" viewBox="0 0 24 24" class="w-5 h-5 fill-current"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z">
                    </path>
                </g>
            </svg>
            <span>2 Comments</span>
        </button>
    </div>
</div>
