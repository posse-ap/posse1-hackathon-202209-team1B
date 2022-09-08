<section class="hidden" id="modal_to_login">
    <div class="w-screen h-screen bg-black opacity-10 fixed top-0 left-0 z-50" id="modal_outer"></div>
    <section
        class="w-[600px] h-[400px] bg-[#E5F1F8] fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50 rounded-md">
        <p class="text-[#4EACBA] font-bold text-2xl text-center mt-20">備品詳細を閲覧したい場合は<br />ログインしてください</p>
        <div class="flex justify-center pt-10">
            <a href="{{ route('login') }}"
                class="bg-[#4EACBA] font-bold text-2xl text-white rounded-md shadow-md px-4 py-3 hover:opacity-80">ログイン</a>
        </div>
    </section>
</section>
