<x-app-layout>
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        @if ($errors)
            <div>
                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white overflow-hidden">
            <div class="my-10">
                <h2 class="text-2xl font-bold text-center mt-8 mb-12">ユーザー情報</h2>
                <form method="POST" action="{{ route('mypage.update') }}">
                    @csrf

                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">メールアドレス</label>
                        <input
                            class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight"
                            name="email" type="email" required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">お名前</label>
                        <input
                            class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight"
                            name="name" required>
                    </div>

                    <div class="flex items-center justify-end flex-col mt-8">
                        <button type="submit" class="PButton-primary w-full">ユーザー情報を更新</button>
                    </div>
                </form>
            </div>

            <div class="my-10">

                <h2 class="text-2xl font-bold text-center mt-8 mb-12">パスワード</h2>
                <form method="POST" action="{{ route('mypage.password_update') }}">
                    @csrf

                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">パスワード</label>
                        <input type="password"
                            class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight"
                            name="password" required />
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">パスワード（確認用）</label>
                        <input type="password"
                            class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight"
                            name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end flex-col mt-8">
                        <button type="submit" class="PButton-primary w-full">パスワードを変更</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="my-10">
            <h2 class="text-2xl font-bold text-center mt-8 mb-12">履歴</h2>
            <div class="border-t-2">
                @foreach ($rental_logs as $rental_log)
                    <div class="flex justify-center py-4 border-b-2 px-20 w-[1240px]">
                        @if (isset($rental_log->return_date))
                            <p class="mx-4 w-1/12 text-right font-bold my-auto">返却済み</p>
                        @else
                            <p class="mx-4 w-1/12 text-right font-bold my-auto"></p>
                        @endif
                        <p class="mx-4 w-3/12 text-center my-auto">
                            <span>
                                {{ $rental_log['start_date']->format('Y-m-d') }}
                            </span>
                            ~
                            <span>
                                {{ $rental_log['end_date']->format('Y-m-d') }}
                            </span>
                        </p>
                        <p class="mx-4 w-7/12 my-auto">{{ $rental_log->item->name }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="my-10">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="text-center">
                    <button type="submit" class="PButton-red w-full">ログアウト</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
