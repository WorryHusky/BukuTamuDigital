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

    .side-by-side {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .card {
        width: calc(50% - 15px); /* Adjust the width based on your preference and gap */
    }

    @media (max-width: 768px) {
        .card {
            width: 100%; /* Full width on small screens */
        }
    }
</style>

<div class="side-by-side">
    <div class="card shadow">
        <div class="card-header border-0" style="background-color: #ffffff; color: #000000;">
            <h5 class="card-title mb-0">Souvenir Information</h5>
        </div>
        <div class="card-body">
            <div>
                <strong>Total Souvenirs:</strong> {{ $souvenirs->sum('total') }}
            </div>
        </div>
        <div class="card-body">
            <div>
                <strong>Souvenir Keluar:</strong> {{ $souvenirs->sum('given') }}
            </div>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-header border-0" style="background-color: #ffffff; color: #000000;">
            <h5 class="card-title mb-0">Souvenir Information</h5>
        </div>
        <div class="card-body">
            <div>
                <strong>Souvenir Umum:</strong> {{ $souvenirs->sum('umum') }}
            </div>
        </div>
        <div class="card-body">
            <div>
                <strong>Souvenir Keluarga:</strong> {{ $souvenirs->sum('keluarga') }}
            </div>
        </div>
    </div>
</div>

<div class="card shadow mt-4" style="width: 100%;">
    <div class="card-header border-0" style="background-color: #ffffff; color: #000000;">
        <h5 class="card-title mb-0">Absen Tamu</h5>
    </div>
    <div class="card-body">
        @include('layouts._guest_table', ['guests' => $guests])
    </div>
</div>

@endsection
