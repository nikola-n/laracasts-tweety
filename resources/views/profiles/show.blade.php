<x-app>

    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="/images/default-profile-banner.jpg"
                alt="banner"
                class="mb-2"
            >
            <img
                src="{{ $user->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left:50%;"
            >
        </div>
        <div class="flex justify-between items-center mb-6">
            <div style="max-width:270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                <a href="{{ $user->path('edit') }}"
                   class="rounded-full border border-gray-400 py-2 px-2 text-black text-xs"
                >
                    Edit Profile
                </a>
                @endcan
               <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="text-sm"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dicta doloribus itaque iure optio quod tempore ut, vel voluptatibus. Delectus exercitationem facilis illo incidunt possimus quia sequi sunt veniam voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus neque possimus recusandae. Aliquid aperiam asperiores assumenda cum quo. Illum quae repellat vitae. Beatae eos maiores perferendis praesentium, rerum tempora voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequatur dignissimos dolor dolorem eaque eligendi fugiat harum id inventore ipsam ipsum laboriosam odio officia pariatur provident, quidem, quisquam quo saepe?</p>
    </header>

    @include('_timeline', ['tweets'=> $tweets])
</x-app>

