<x-guest-layout>
    <section class="w-[1280px] mx-auto mt-10">
        <h2 class="text-2xl font-bold border-l-4 py-2 pl-2 border-[#0071BC]">「」の備品一覧</h2>
        <form method="GET" action="{{ route('items_list.search') }}" class="flex items-center mt-10">
            <p class="w-20 text-right font-bold text-black opacity-50 mr-4">カテゴリ：</p>
            <div class="container flex mx-auto">
                <div class="flex relative gap-3">
                    <button class="PButton-primary px-3 py-1" type="submit" value="" name="category_id">全て</button>
                    @foreach ($categories as $category)
                        <button class="PButton-primary px-3 py-1" type="submit" value="{{ $category->id }}"
                            name="category_id">{{ $category->name }}</button>
                    @endforeach
                </div>
            </div>
        </form>
        <form method="GET" action="{{ route('items_list.search') }}" class="flex items-center mt-5">
            <p class="w-20 text-right font-bold text-black opacity-50 mr-4">状態：</p>
            <div class="container flex mx-auto">
                <div class="flex relative gap-3">
                    <button class="PButton-primary px-3 py-1" type="submit" value="" name="status">全て</button>
                    <button class="PButton-primary px-3 py-1" type="submit" value="利用可能" name="status">利用可能</button>
                    <button class="PButton-primary px-3 py-1" type="submit" value="利用中" name="status">利用中</button>
                </div>
            </div>
        </form>
        <form method="GET" action="{{ route('items_list.search') }}" class="flex items-center mt-5">
            <p class="w-20 text-right font-bold text-black opacity-50 mr-4">並び順：</p>
            <div class="container flex mx-auto">
                <div class="flex relative gap-3">
                    <button class="PButton-primary px-3 py-1" type="submit" value="新着順" name="sort">新着順</button>
                    <button class="PButton-primary px-3 py-1" type="submit" value="人気順" name="sort">人気順</button>
                </div>
            </div>
        </form>
    </section>

    <section class="w-[1280px] mx-auto mt-10">
        <p><span class="font-bold text-lg mx-2">{{ $items_amount }}</span>件見つかりました</p>

        <div class="grid grid-cols-4 gap-y-10 mt-10">
            @foreach ($items as $item)
                <x-item-card :item="$item" />
            @endforeach
        </div>
    </section>
</x-guest-layout>
