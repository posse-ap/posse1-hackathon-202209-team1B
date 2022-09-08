<x-admin-layout>
    <h2 class="text-2xl font-bold text-center mt-8 mb-12">利用履歴</h2>

    <table class="table-fixed w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left w-20">ID</th>
                <th class="px-4 py-2 text-left w-40">返却済み</th>
                <th class="px-4 py-2 text-left w-60">利用期間</th>
                <th class="px-4 py-2 text-left w-40">利用者</th>
                <th class="px-4 py-2 text-left">備品名</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rental_logs as $rental_log)
                <tr class="border-y-2">
                    <td class="px-4 py-6">{{ $rental_log->id }}</td>
                    <td class="px-4 py-6">{{ $rental_log->return_date ? 'はい' : 'いいえ' }}</td>
                    <td class="px-4 py-6">{{ $rental_log->start_date->format('Y-m-d') }} ~
                        {{ $rental_log->end_date->format('Y-m-d') }}
                    </td>
                    <td class="px-4 py-6">{{ $rental_log->user->name }}</td>
                    <td class="px-4 py-6">
                        <div class="flex items-center">
                            @if (isset($rental_log->item->image_path))
                                <div class="mr-4 w-20">
                                    <img src="{{ \Storage::url($rental_log->item->image_path) }}">
                                </div>
                            @endif
                            @if (mb_strlen($rental_log->item->name) > 20)
                                <span class="w-full">{{ mb_substr($rental_log->item->name, 0, 20) }}…</span>
                            @else
                                <span class="w-full">{{ $rental_log->item->name }}</span>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin-layout>
