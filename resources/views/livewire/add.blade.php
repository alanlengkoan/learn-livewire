<div>
    <h3>Tambah</h3>
    <form wire:submit.prevent="save">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control form-sm @error('nama') is-invalid @enderror" wire:model="nama" name="nama" id="nama" />
            @error('nama') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control form-sm @error('email') is-invalid @enderror" wire:model="email" name="email" id="email" />
            @error('email') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control form-sm @error('telepon') is-invalid @enderror" wire:model="telepon" name="telepon" id="telepon" />
            @error('telepon') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control form-sm @error('alamat') is-invalid @enderror" wire:model="alamat" name="alamat" id="alamat" />
            @error('alamat') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>