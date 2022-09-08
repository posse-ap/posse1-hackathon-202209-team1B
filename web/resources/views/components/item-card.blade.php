<section>
    <div class="text-left flex mx-4">
        @if ($item->rental_logs->first())
            <p class="h-4 font-bold">{{ $item->rental_logs->first()->user->name }}さんが利用中</p>
            <p class="h-4 font-bold">（〜{{ $item->rental_logs->first()->end_date->format('m/d') }}）</p>
        @else
            <p class="h-4"></p>
        @endif
    </div>
    <div class="mx-4 mt-2 text-left" style="width: 300px;">
        <div class="bg-slate-100">
            @if (Auth::check())
                <a href="{{ route('items.show', ['id' => $item->id]) }}">
                    <img class="object-contain h-48 w-96" src="{{ \Storage::url($item->image_path) }}">
                </a>
            @else
                <button name="open_modal_button_to_login">
                    <img class="object-contain h-48 w-96" src="{{ \Storage::url($item->image_path) }}">
                </button>
            @endif
        </div>
        <p class="font-bold py-2">{{ $item->category->name ?? '' }}</p>
        <p>{{ $item->name }}</p>
    </div>
</section>
