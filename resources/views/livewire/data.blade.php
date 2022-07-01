<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tampil as $row)
            <tr>
                <td>{{ $loop->index }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->telepon }}</td>
                <td>{{ $row->alamat }}</td>
                <td>
                    <button wire:click="getData({{ $row->id }})" type="button" class="btn btn-sm btn-primary">Ubah</button>
                    <button wire:click="delData({{ $row->id }})" type="button" class="btn btn-sm btn-danger">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>