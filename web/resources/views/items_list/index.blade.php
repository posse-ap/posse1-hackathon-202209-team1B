<x-guest-layout>
    <section>
        <h2>「」の備品一覧</h2>
        <form method="GET" action="{{ route('items_list.search') }}" class="flex items-center shadow">
            <p>カテゴリ：</p>
            <div class="container flex mx-auto">
                <div class="flex relative">
                    <button class="PButton-primary w-full" type="submit" value="全て" name="category_id">全て</button>
                    @foreach ($categories as $category)
                        <button class="PButton-primary w-full" type="submit" value="{{ $category->id }}"
                            name="category_id">{{ $category->name }}</button>
                    @endforeach
                </div>
            </div>
        </form>
        <form method="GET" action="{{ route('items_list.search') }}" class="flex items-center shadow">
            <p>状態：</p>
            <div class="container flex mx-auto">
                <div class="flex relative">
                        <button class="PButton-primary w-full" type="submit" value="全て" name="status">全て</button>
                        <button class="PButton-primary w-full" type="submit" value="利用可能" name="status">利用可能</button>
                        <button class="PButton-primary w-full" type="submit" value="利用中" name="status">利用中</button>
                </div>
            </div>
        </form>
        <form method="GET" action="{{ route('items_list.search') }}" class="flex items-center shadow">
            <p>並び順：</p>
            <div class="container flex mx-auto">
                <div class="flex relative">
                    <button type="submit" value="新着順" name="sort">新着順</button>
                    <button type="submit" value="人気順" name="sort">人気順</button>
                </div>
            </div>
        </form>
    </section>

    <section class="w-[1240px] mx-auto mt-10">
        <p><span class="font-bold text-lg mx-2">{{ $items_amount }}</span>件見つかりました</p>

        <div class="grid grid-cols-4 gap-y-10 mt-10">
            @foreach ($items as $item)
                <x-item-card :item="$item" />
            @endforeach
        </div>
    </section>
</x-guest-layout>
