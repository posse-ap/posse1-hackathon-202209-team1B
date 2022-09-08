<x-app-layout>
    @if ($current_user == Auth::id())
        <div class="w-screen leading-[65px] text-xl text-center bg-[#D6E6DD] text-[#264F34] font-bold">利用申請済みです</div>
    @endif
    <div class="grid grid-cols-2 gap-8 mt-8 px-0 md:px-32">
        <div>
            <div class="text-left flex mb-2 text-lg">
                @if ($item->rental_logs->first())
                    <p class="h-7 font-bold">{{ $item->rental_logs->first()->user->name }}さんが利用中</p>
                    <p class="h-7 font-bold">（〜{{ $item->rental_logs->first()->end_date->format('m/d') }}）</p>
                @endif
            </div>
            <div class="bg-slate-100 text-center">
                <img class="inline-block object-contain h-96 w-96" src="{{ \Storage::url($item->image_path) }}">
            </div>
        </div>
        <div>
            <h3 class="PHeading3 border-b-2 py-6">{{ $item->name }}</h3>
            @if ($current_user != Auth::id())
                <x-store-rental-log :item="$item" :current_user="$current_user" />
            @else
                <x-update-rental-log :item="$item" :current_user="$current_user" />
            @endif
        </div>
        <div>
            <h3 class="PHeading3 border-l-4 p-2 border-blue-500">履歴</h3>

            <table class="table-fixed w-full mt-3">
                <thead>
                    <tr>
                        <th class="px-4 text-left w-20"></th>
                        <th class="px-4 text-left w-40"></th>
                        <th class="px-4 text-left w-40"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($item->rental_logs->reverse()->values() as $key => $rental_log)
                        @if ($key < 5)
                            <tr class="border-y-2">
                                <td class="px-4 py-6 font-bold">{{ $rental_log->return_date ? '返却済み' : '' }}</td>
                                <td class="px-4 py-6">{{ $rental_log->start_date->format('Y-m-d') }} ~
                                    {{ $rental_log->end_date->format('Y-m-d') }}
                                </td>
                                <td class="px-4 py-6">{{ $rental_log->user->name }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <h3 class="PHeading3 border-l-4 p-2 border-blue-500">情報</h3>
            <div class="bg-gray-100 mt-4">
                <table class="table-auto">
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 font-bold">備品ID</td>
                            <td class="px-4 py-2">{{ $item->id }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">カテゴリ</td>
                            <td class="px-4 py-2">{{ $item->category->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">登録日時</td>
                            <td class="px-4 py-2">{{ $item->created_at }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">提供</td>
                            <td class="px-4 py-2">{{ $item->provider }}</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 font-bold">利用目安</td>
                            <td class="px-4 py-2">{{ $item->available_days }}日</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
