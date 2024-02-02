<!-- _guest_table.blade.php -->

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
                    <td>{{ $guest->kelompok_tamu }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
