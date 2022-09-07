<x-guest-layout>
    <p>{{ $items_amount }}件見つかりました</p>

    @foreach ($items as $item)
        <div>
            <p class="font-bold">{{ $item->category->name }}</p>
            <p class="font-bold">{{ $item->name }}</p>
        </div>
    @endforeach
</x-guest-layout>
