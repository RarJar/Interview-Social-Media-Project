@props(['data'])

<div class="bg-white p-8 shadow-md rounded-lg m-3">
    <x-molecules.profile-header :data="$data" />
    <div class="mb-4">
        <p class="text-gray-800">{{ $data->title }}</p>
        <p class="text-gray-800">{{ $data->body }}</p>
    </div>
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <x-atoms.link route="{{ route('post.show', $data->id) }}" class="bg-gray-800" content="Read more" />
            @can('post-manage', $data)
                <x-atoms.link route="{{ route('post.edit', $data->id) }}" class="bg-blue-500" content="Edit" />
                <form action="{{ route('post.destroy', $data->id) }}" method="POST" class="text-red-500 cursor-pointer">
                    @csrf
                    @method('DELETE')
                    <x-atoms.button type="submit" class="bg-red-500" content="Delete" />
                </form>
            @endcan
        </div>
        <button class="flex justify-center items-center gap-2 px-2 rounded-full p-1">
            <svg width="22px" height="22px" viewBox="0 0 24 24" class="w-5 h-5 fill-current text-gray-600"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z">
                    </path>
                </g>
            </svg>
            <span>{{ $data->comments->count() }} {{ $data->comments->count() > 1 ? 'Comments' : 'Comment' }}</span>
        </button>
    </div>
</div>
