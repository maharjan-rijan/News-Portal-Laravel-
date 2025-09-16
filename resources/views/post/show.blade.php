<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">{{ $post->title }}</h1>

                <!-- User Avatar -->
                <div class="flex gap-4">
                    <x-user-avatar :user="$post->user" />

                    <div>
                        <x-follow-ctr :user="$post->user" class="flex gap-2">
                            <a href="{{ route('profile.show', $post->user) }}" class="hover:underline">
                                {{ $post->user->name }}
                            </a>      
                            @auth
                                &middot;
                                <button x-text="following ? 'Unfollow' : 'Follow'" 
                                :class="following ? 'text-red-600' : 'text-emerald-600'"
                                @click="follow()">
                                </button>
                            @endauth
                        </x-follow-ctr>

                        <div class="flex gap-2 text-sm text-gray-500">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>

                </div>
                <!-- Clap Section -->
                <x-clap-button :post="$post" />
                <!-- Clap Section -->
                <!-- Content Section -->
                <div class="mt-1 border-t">
                    <div class="mt-4 border-b">
                        {{ $post->content }}
                    </div>
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full border-b">
                </div>

                <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-200 rounded-2xl">
                        {{ $post->category->name }}
                    </span>
                </div>

                 <!-- User Avatar -->
                @if ($post->user_id === Auth::id())
                    <div class="py-4 mt-8 border-gray-200">
                        <x-primary-button href="{{ route('post.edit', $post->slug) }}">
                            Edit Post
                        </x-primary-button>
                        <form class="inline-block" action="{{ route('post.destroy', $post) }}" method="post">
                            @csrf
                            @method('delete')
                            <x-danger-button>
                                Delete Post
                            </x-danger-button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>