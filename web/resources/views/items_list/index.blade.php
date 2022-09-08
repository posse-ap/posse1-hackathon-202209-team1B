<x-guest-layout>
    <section>
        {{-- #6 --}}
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
