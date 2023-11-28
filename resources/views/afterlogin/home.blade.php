@extends('template.template')

@section('title')
    Home
@endsection

@section('content')
    <div class="flex flex-row text-[#97A6BB] gap-4">
        <p class="active text-black">Memilih Ruangan dan Waktu Peminjaman</p>
        <div class="line my-auto"></div>
        <p>Mengisi Form</p>
        <div class="line my-auto"></div>
        <p>Permintaan Diajukan</p>
    </div>
    <form action="" method="post" class="flex flex-col gap-5">
        <div class="horizontal-scroll-flexbox gap-3">
            <input type="radio" name="ruangan" id="ruangan1" class="ruangan">
            <label for="ruangan1" class="label card p-4 flex flex-col gap-3 rounded-xl w-[25%] bg-[#FAF9F9]">
                <img src="Frame 330.png" alt="" class="rounded-md">
                <p class="text-center text-black font-semibold">Ruangan 1</p>
            </label>

            <input type="radio" name="ruangan" id="ruangan2" class="ruangan">
            <label for="ruangan2" class="label card p-4 flex flex-col gap-3 rounded-xl w-[25%] bg-[#FAF9F9]">
                <img src="Frame 330.png" alt="" class="rounded-md">
                <p class="text-center text-black font-semibold">Ruangan 1</p>
            </label>

            <input type="radio" name="ruangan" id="ruangan3" class="ruangan">
            <label for="ruangan3" class="label card p-4 flex flex-col gap-3 rounded-xl w-[25%] bg-[#FAF9F9]">
                <img src="Frame 330.png" alt="" class="rounded-md">
                <p class="text-center text-black font-semibold">Ruangan 1</p>
            </label>

            <input type="radio" name="ruangan" id="ruangan4" class="ruangan">
            <label for="ruangan4" class="label card p-4 flex flex-col gap-3 rounded-xl w-[25%] bg-[#FAF9F9]">
                <img src="Frame 330.png" alt="" class="rounded-md">
                <p class="text-center text-black font-semibold">Ruangan 1</p>
            </label>

            <input type="radio" name="ruangan" id="ruangan5" class="ruangan">
            <label for="ruangan5" class="label card p-4 flex flex-col gap-3 rounded-xl w-[25%] bg-[#FAF9F9]">
                <img src="Frame 330.png" alt="" class="rounded-md">
                <p class="text-center text-black font-semibold">Ruangan 1</p>
            </label>
        </div>
        <div class="flex flex-col gap-2">
            <label for="tgl_pinjam" class="text-black font-semibold">Tanggal Peminjaman</label>
            <input type="date" name="tgl_pinjam" id="tgl_pinjam"
                class="p-2 border-black border-[1px] rounded-xl w-[100%]">
        </div>
        <div class="flex flex-col gap-2">
            <label for="tgl_pinjam" class="text-black font-semibold">Waktu Mulai</label>
            <div class="flex-container gap-2">
                <input type="radio" name="time" id="time1" class="time">
                <label for="time1"
                    class="label text-center border-black border-[1px] py-2 w-[30%] rounded-lg flex-item">09.00</label>
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <label for="tgl_pinjam" class="text-black font-semibold">Waktu Selesai</label>
            <div class="flex-container gap-2">
                <input type="radio" name="time" id="time1" class="time">
                <label for="time1"
                    class="label text-center border-black border-[1px] py-2 w-[30%] rounded-lg flex-item">09.00</label>
            </div>
        </div>
        <button type="submit"
            class="bg-[#E65D2E] rounded-xl px-7 py-2 text-center text-stone-50 text-xl font-bold leading-normal">Selanjutnya</button>
    </form>
@endsection
