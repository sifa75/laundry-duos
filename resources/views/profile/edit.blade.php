@extends('adminlte::page')

@section('title', 'Profil')

@section('content_header')
    <h1>
        <i class="fas fa-user-circle text-primary"></i>
        Profil Pengguna
    </h1>
@stop

@section('content')

<div class="row justify-content-center">

    <div class="col-md-4">

        <div class="card card-primary card-outline">

            <div class="card-body box-profile">

                <div class="text-center">

                    <img class="profile-user-img img-fluid img-circle elevation-3"
                        src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=4e73df&color=ffffff&size=256">

                </div>

                <h3 class="profile-username text-center mt-3">
                    {{ Auth::user()->name }}
                </h3>

                <p class="text-muted text-center">
                    Administrator
                </p>

                <hr>

                <strong>
                    <i class="fas fa-envelope mr-1 text-primary"></i>
                    Email
                </strong>

                <p class="text-muted">
                    {{ Auth::user()->email }}
                </p>

                <hr>

                <strong>
                    <i class="fas fa-calendar-alt mr-1 text-success"></i>
                    Bergabung
                </strong>

                <p class="text-muted">
                    {{ Auth::user()->created_at->format('d F Y') }}
                </p>

            </div>

        </div>

    </div>





    <div class="col-md-8">

        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-user-edit"></i>
                    Edit Profil
                </h3>
            </div>

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PATCH')

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Lengkap</label>

                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            value="{{ old('name', Auth::user()->name) }}"
                            required>

                    </div>

                    <div class="form-group">
                        <label>Email</label>

                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="{{ old('email', Auth::user()->email) }}"
                            required>

                    </div>

                </div>

                <div class="card-footer">

                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Simpan Perubahan
                    </button>

                    <button type="button"
                            class="btn btn-warning float-right"
                            data-toggle="modal"
                            data-target="#passwordModal">
                        <i class="fas fa-key"></i>
                        Ganti Password
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<!-- Modal Ganti Password -->
<div class="modal fade" id="passwordModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                @method('PUT')

                <div class="modal-header bg-warning">
                    <h5 class="modal-title">
                        <i class="fas fa-key"></i> Ganti Password
                    </h5>

                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label>Password Lama</label>
                        <input type="password"
                               name="current_password"
                               class="form-control"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Konfirmasi Password Baru</label>
                        <input type="password"
                               name="password_confirmation"
                               class="form-control"
                               required>
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">
                        Batal
                    </button>

                    <button type="submit"
                            class="btn btn-warning">
                        Simpan Password
                    </button>

                </div>

            </form>

        </div>
    </div>
</div>
@stop
