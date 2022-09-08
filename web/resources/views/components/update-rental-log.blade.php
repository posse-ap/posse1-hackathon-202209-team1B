@props(['item', 'current_user'])

<div>
    <form action="{{ route('items.update', ['id' => $item->getLatestRentalLog()->id]) }}" method="POST" class="pt-4">
        @csrf
        @method('PUT')
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
                        name="end_date" type="date" min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                        value="{{ date('Y-m-d', strtotime($item->getLatestRentalLog()->end_date)) }}" required>
                </div>
            </div>
            <div class="pt-4">
                <button type="submit" class="PButton-primary w-full">利用期間を変更する</button>
            </div>
        </div>
    </form>
    <form action="" class="border-b-2 pb-8">
        <div class="w-80 mx-auto mt-8">
            <button type="submit" class="PButton-red w-full">返却する</button>
        </div>
    </form>
</div>
