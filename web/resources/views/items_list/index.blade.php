<x-guest-layout>
    <section>
        <form method="GET" action="{{ route('items_list.sort') }}" class="flex items-center shadow">
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
