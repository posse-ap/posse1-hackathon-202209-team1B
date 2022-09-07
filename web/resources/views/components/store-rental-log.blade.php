@props(['item', 'current_user'])

<div>
    <form action="{{ route('items.store', ['id' => $item->id]) }}" method="POST" class="border-b-2 py-4">
        @csrf
        <div class="w-80 mx-auto">
            <div class="py-4">
                <label class="text-gray-700 text-xs">利用期間</label>
                <div class="flex items-center">
                    <input
                        class="inlin-block text-sm rounded-lg border border-gray-300 cursor-pointer focus:outline-none"
                        name="start_date" type="date" value="{{ date('Y-m-d') }}" disabled>
                    <span class="px-2">〜</span>
                    <input
                        class="inlin-block text-sm rounded-lg border border-gray-300 cursor-pointer focus:outline-none"
                        name="end_date" type="date" min="{{ date('Y-m-d', strtotime('+1 day')) }}" required>
                </div>
            </div>
            <div class="py-4">
                @if (is_null($current_user))
                    <button type="submit" class="PButton-primary w-full">利用申請を行う</button>
                @else
                    <button type="button" class="PButton-gray w-full">現在利用できません</button>
                @endif
            </div>
        </div>
    </form>
</div>
