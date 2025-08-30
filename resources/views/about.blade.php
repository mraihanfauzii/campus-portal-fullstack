@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mb-4">Tentang Campus Portal</h1>
            <div class="text-center mb-5">
                <img src="{{ asset('images/logo_campus.png') }}" alt="Logo Kampus" class="img-fluid" style="max-height: 150px;">
            </div>
            
            <h3 class="mt-5">Visi</h3>
            <p>Menjadi perguruan tinggi riset berstandar internasional yang berperan aktif dalam pengembangan ilmu pengetahuan dan teknologi melalui pendidikan, penelitian, dan pengabdian kepada masyarakat yang inovatif.</p>

            <h3 class="mt-4">Misi</h3>
            <ul>
                <li>Menyelenggarakan pendidikan tinggi yang berkualitas dan relevan dengan perkembangan zaman untuk menghasilkan lulusan yang kompeten dan berkarakter.</li>
                <li>Melaksanakan kegiatan penelitian yang inovatif dan berdampak untuk kemajuan ilmu pengetahuan dan kesejahteraan masyarakat.</li>
                <li>Menjalin kemitraan strategis dengan berbagai pihak di tingkat nasional maupun internasional untuk meningkatkan kualitas tridharma perguruan tinggi.</li>
                <li>Menciptakan lingkungan akademik yang kondusif yang mendorong tumbuhnya kreativitas dan inovasi.</li>
            </ul>

            <h3 class="mt-5 text-center">Sejarah Singkat</h3>
            <p class="text-center">Didirikan pada tahun 1990, Campus Portal berawal dari sebuah sekolah tinggi sederhana dengan dua program studi. Berkat dedikasi dan komitmen yang kuat terhadap kualitas, kami bertransformasi menjadi sebuah universitas ternama dengan 8 fakultas dan lebih dari 30 program studi. Kami bangga telah melahirkan ribuan alumni yang sukses berkarya di berbagai bidang.</p>
        </div>
    </div>
</div>
@endsection