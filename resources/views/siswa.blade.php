@extends('fitur.navbar')

@section('content')
    <div class="row text-center py-5 mt-5">
        <h3 class="text-light text-center">Siswa Berprestasi dari <b>Seirin High School<b></h3>
            <p class="font-weight-light text-light mt-3" style="font-weight: 250">
                    Merupakan hasil pembinaan yang baik dari tim pengajar kami
            </p>
        <div class="d-flex gap-2 justify-content-center mt-4">
            <a class="btn btn-primary primer text-center" href="#" style="margin-top: auto; margin-bottom: auto">Ayo Bergabung!!</a>
            <a class="btn btn-secondary seken text-center" href="#" style="margin-top: auto; margin-bottom: auto">Tentang Kami</a>
        </div>
    </div>
@endsection

@section('content_2')
    <h3 class="text-center mt-4 mb-3">Daftar Siswa Berprestasi dari Seirin School</h3>
    <?php $i = 1; ?>
    <div class="table-responsive">
        <table class="table-hover table-striped table table-bordered mt-4 mb-5" id="list_siswa">
            <thead class="text-center">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nilai</th>
            </thead>
            @foreach ($siswas as $siswa)
            <tr class="fw-light" style="font-size: 14px">
                <td class="text-center">{{ $i++ }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td class="text-center">{{ $siswa->nilai }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
