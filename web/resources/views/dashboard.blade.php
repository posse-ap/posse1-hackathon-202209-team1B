<x-guest-layout>
    <div class="bg-hero-pattern bg-cover w-full flex flex-col items-center">
        <h1 class="text-white font-bold text-3xl py-8 mt-4">コミュニティで作る、POSSEのライブラリ</h1>
        <div class="grow py-4 mb-8">
            <form class="flex items-center shadow">
                <div class="container flex mx-auto">
                    <div class="flex relative">
                        <input type="text" class="px-8 py-2 w-80 border-slate-300 rounded" placeholder="キーワードで検索">
                        <svg class="w-6 h-6 text-gray-600 absolute top-2 left-2" fill="#C6C9CC" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                            </path>
                        </svg>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="h-full px-8 sm:px-12 lg:px-24">
        <div class="py-12 text-center">
            <h2 class="text-2xl font-bold py-6">新着</h2>
            <div class="flex justify-center py-4">
                @foreach ($latestItems as $key => $item)
                    @if ($key < $displayLimit)
                        <x-item-card :item="$item"></x-item-card>
                    @endif
                @endforeach
            </div>
            <div>
                <a href="/" class="inline-block bg-transparent hover:bg-gray-100 text-gray-500 font-semibold py-2 px-6 border border-gray-500 rounded">
                    <div class="flex items-center">
                        <span class="px-2">すべて見る</span>
                        <x-codicon-triangle-down class="inline-block w-5 h-5" />
                    </div>
                </a>
            </div>
        </div>

        @foreach ($categoryItems as $category)
            <div class="py-12 text-center">
                <h2 class="text-2xl font-bold py-6">{{ $category->name }}</h2>
                <div class="flex justify-center py-4">
                    @foreach ($category->items as $key => $item)
                        @if ($key < $displayLimit)
                            <x-item-card :item="$item"></x-item-card>
                        @endif
                    @endforeach
                </div>
                <div>
                    <a href="/" class="inline-block bg-transparent hover:bg-gray-100 text-gray-500 font-semibold py-2 px-6 border border-gray-500 rounded">
                        <div class="flex items-center">
                            <span class="px-2">すべて見る</span>
                            <x-codicon-triangle-down class="inline-block w-5 h-5" />
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</x-guest-layout>
