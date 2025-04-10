@extends('layout.app-menu-login')

@section('title', 'mengaji')

@section('content')
    <div class="isi">
        <div class="form min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="judul">
                <h1 class="text-center text-3xl font-bold text-gray-900 uppercase py-2">Mengaji</h1>
            </div>
            <div class="waktu text-center">
                <div id="masehi-date"></div>
                <div id="hijri-date"></div>
            </div>
            <form action="{{ route('ngaji.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama_user" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas_user" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <div class="mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan_user" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <div class="mb-3">
                    <label>Nama Surat</label>
                    <select name="nama_surat" id="nama_surat" class="form-control blocks w-full rounded-xl mt-1" required>
                        <option disabled hidden selected>-- Pilih Surat --</option>
                        <option value="al-fatihah">Al-Fatihah</option>
                        <option value="al-baqarah">Al-Baqarah</option>
                        <option value="ali-imran">Ali-Imran</option>
                        <option value="an-nisa">An-Nisa</option>
                        <option value="al-maidah">Al-Maidah</option>
                        <option value="al-anam">Al-Anam</option>
                        <option value="al-araf">Al-Araf</option>
                        <option value="al-anfal">Al-Anfal</option>
                        <option value="at-taubah">At-Taubah</option>
                        <option value="yunus">Yunus</option>
                        <option value="hud">Hud</option>
                        <option value="yusuf">Yusuf</option>
                        <option value="ar-rad">Ar-Rad</option>
                        <option value="ibrahim">Ibrahim</option>
                        <option value="al-hijr">Al-Hijr</option>
                        <option value="an-nahl">An-Nahl</option>
                        <option value="al-isra">Al-Isra</option>
                        <option value="al-kahf">Al-Kahf</option>
                        <option value="maryam">Maryam</option>
                        <option value="ta-ha">Ta-Ha</option>
                        <option value="al-anbiya">Al-Anbiya</option>
                        <option value="al-hajj">Al-Hajj</option>
                        <option value="al-mu'minun">Al-Mu'minun</option>
                        <option value="an-nur">An-Nur</option>
                        <option value="al-furqan">Al-Furqan</option>
                        <option value="ash-shu'ara">Ash-Shu'ara</option>
                        <option value="an-naml">An-Naml</option>
                        <option value="al-qasas">Al-Qasas</option>
                        <option value="al-ankabut">Al-Ankabut</option>
                        <option value="ar-rum">Ar-Rum</option>
                        <option value="luqman">Luqman</option>
                        <option value="as-sajdah">As-Sajdah</option>
                        <option value="al-ahzab">Al-Ahzab</option>
                        <option value="saba">Saba</option>
                        <option value="fatir">Fatir</option>
                        <option value="yasin">Yasin</option>
                        <option value="as-saffat">As-Saffat</option>
                        <option value="sad">Sad</option>
                        <option value="az-zumar">Az-Zumar</option>
                        <option value="ghafir">Ghafir</option>
                        <option value="fussilat">Fussilat</option>
                        <option value="ash-shura">Ash-Shura</option>
                        <option value="az-zukhruf">Az-Zukhruf</option>
                        <option value="ad-dukhan">Ad-Dukhan</option>
                        <option value="al-jathiyah">Al-Jathiyah</option>
                        <option value="al-ahqaf">Al-Ahqaf</option>
                        <option value="muhammad">Muhammad</option>
                        <option value="al-fath">Al-Fath</option>
                        <option value="al-hujurat">Al-Hujurat</option>
                        <option value="qaf">Qaf</option>
                        <option value="adz-dzariyat">Adz-Dzariyat</option>
                        <option value="at-tur">At-Tur</option>
                        <option value="an-najm">An-Najm</option>
                        <option value="al-qamar">Al-Qamar</option>
                        <option value="ar-rahman">Ar-Rahman</option>
                        <option value="al-waqiah">Al-Waqiah</option>
                        <option value="al-hadid">Al-Hadid</option>
                        <option value="al-mujadilah">Al-Mujadilah</option>
                        <option value="al-hasyr">Al-Hashr</option>
                        <option value="al-mumtahanah">Al-Mumtahanah</option>
                        <option value="as-saff">As-Saff</option>
                        <option value="al-jumuah">Al-Jumuah</option>
                        <option value="al-munafiqun">Al-Munafiqun</option>
                        <option value="at-taghabun">At-Taghabun</option>
                        <option value="at-talaq">At-Talaq</option>
                        <option value="at-tahrim">At-Tahrim</option>
                        <option value="al-mulk">Al-Mulk</option>
                        <option value="al-qalam">Al-Qalam</option>
                        <option value="al-haqqah">Al-Haqqah</option>
                        <option value="al-ma'arij">Al-Ma'arij</option>
                        <option value="nuh">Nuh</option>
                        <option value="al-jinn">Al-Jinn</option>
                        <option value="al-muzzammil">Al-Muzzammil</option>
                        <option value="al-muddassir">Al-Muddassir</option>
                        <option value="al-qiyamah">Al-Qiyamah</option>
                        <option value="al-insan">Al-Insan</option>
                        <option value="al-mursalat">Al-Mursalat</option>
                        <option value="an-naba">An-Naba</option>
                        <option value="an-naziat">An-Naziat</option>
                        <option value="abasa">Abasa</option>
                        <option value="at-takwir">At-Takwir</option>
                        <option value="al-infitar">Al-Infitar</option>
                        <option value="al-mutaffifin">Al-Mutaffifin</option>
                        <option value="al-insyiqaq">Al-Insyiqaq</option>
                        <option value="al-buruj">Al-Buruj</option>
                        <option value="at-tariq">At-Tariq</option>
                        <option value="al-ala">Al-A'la</option>
                        <option value="al-ghasyiyah">Al-Ghasyiyah</option>
                        <option value="al-fajr">Al-Fajr</option>
                        <option value="al-balad">Al-Balad</option>
                        <option value="asy-syams">Asy-Syams</option>
                        <option value="al-lail">Al-Lail</option>
                        <option value="ad-duha">Ad-Duha</option>
                        <option value="ash-sharh">Ash-Sharh</option>
                        <option value="at-tin">At-Tin</option>
                        <option value="al-alaq">Al-Alaq</option>
                        <option value="al-qadr">Al-Qadr</option>
                        <option value="al-bayyinah">Al-Bayyinah</option>
                        <option value="az-zalzalah">Az-Zalzalah</option>
                        <option value="al-adiyat">Al-Adiyat</option>
                        <option value="al-qariah">Al-Qariah</option>
                        <option value="at-takasur">At-Takasur</option>
                        <option value="al-asr">Al-Asr</option>
                        <option value="al-humazah">Al-Humazah</option>
                        <option value="al-fil">Al-Fil</option>
                        <option value="quraisy">Quraisy</option>
                        <option value="al-ma'un">Al-Ma'un</option>
                        <option value="al-kawthar">Al-Kawthar</option>
                        <option value="al-kafirun">Al-Kafirun</option>
                        <option value="an-nasr">An-Nasr</option>
                        <option value="al-lahab">Al-Lahab</option>
                        <option value="al-ikhlas">Al-Ikhlas</option>
                        <option value="al-falaq">Al-Falaq</option>
                        <option value="an-nas">An-Nas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Juz</label>
                    <select name="juz" id="juz" class="form-control blocks w-full rounded-xl mt-1" required>
                        <option disabled hidden selected>-- Pilih Juz --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Ayat</label>
                    <input type="text" name="ayat_quran" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <button type="submit"
                    class="btn btn-primary bg-green-400 px-6 py-3 rounded-xl mt-2 border border-black hover:bg-green-200 transition delay-100 duration-300 ease-in-out">Simpan</button>
            </form>

        </div>
    </div>
@endsection
