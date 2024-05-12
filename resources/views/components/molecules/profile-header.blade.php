@props(['data'])

<a href="/profile/{{ $data->user?->username }}" class="flex items-center mb-2 space-x-2">
    <img src="https://icon2.cleanpng.com/20180523/wxj/kisspng-businessperson-computer-icons-avatar-clip-art-lattice-5b0508dc2ee812.2252011515270566041921.jpg"
        class="w-10 h-10 rounded-full">
    <div class="flex flex-col">
        <span class="text-gray-800 font-semibold">{{ $data->user?->name }}</span>
        <span class="text-gray-600 text-sm">{{ $data->created_at->diffForHumans() }}</span>
    </div>
</a>
