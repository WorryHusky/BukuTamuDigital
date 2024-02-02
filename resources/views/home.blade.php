@extends('layouts.app')

@section('content')
<style>
    #page-content-wrapper {
    width: 100%;
    padding: 15px; /* Adjust the padding as needed */
}

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
        transition: margin 0.3s;
    }

    #sidebar.toggled {
        margin-left: 0;
    }

    #page-content-wrapper {
        width: 100%; /* Ensure full width when sidebar is not toggled */
        transition: width 0.3s;
    }

    #wrapper.toggled #page-content-wrapper {
        width: calc(100% - 250px); /* Adjust the width based on your sidebar width */
    }
}

</style>
<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4" style="width: 100%;">
            <div class="card-header border-0" style="background-color: #ffffff; color: #000000;">
                <h5 class="card-title mb-0">Daftar Tamu</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="width: 100%;">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Tamu</th>
                                <th scope="col">Kelompok Tamu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guests as $guest)
                                <tr>
                                    <td>{{ $guest->nama }}</td>
                                    <td>{{ $guest->jenis_tamu }}</td>
                                    <td>
                                        @if($guest->kelompok_tamu === 'umum')
                                            Umum
                                        @elseif($guest->kelompok_tamu === 'keluarga')
                                            Keluarga
                                        @else
                                            <!-- Handle other roles if needed -->
                                            {{ $guest->kelompok_tamu }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow mb-4" style="width: 100%;">
            <div class="card-header border-0" style="background-color: #ffffff; color: #000000;">
                <h5 class="card-title mb-0">Jumlah Tamu</h5>
            </div>
            <div class="card-body">
                <ul>
                    <li>Keluarga: {{ $guests->where('jenis_tamu', 'keluarga')->count() }}</li>
                    <li>Umum: {{ $guests->where('jenis_tamu', 'umum')->count() }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
