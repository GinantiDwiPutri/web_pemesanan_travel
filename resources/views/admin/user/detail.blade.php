@extends('admin.template.base')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Detail Pengguna
                    </h2>
                </div>
                <div class="col">
                    <a href="{{ url()->previous() }}" class="btn btn-dark float-end">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <p><strong>UID:</strong> {{ $user['uid'] }}</p>
                    <p><strong>Nama:</strong> {{ $user['displayName'] }}</p>
                    <p><strong>No. Handphone:</strong> {{ $user['phoneNumber'] }}</p>
                    <p><strong>Email:</strong> {{ $user['email'] }}</p>
                    <p><strong>Terakhir Kali Login:</strong>
                        {{ Carbon\Carbon::parse($user['lastSignInTime'])->diffForHumans() }}</p>
                    <p><strong>Terdaftar Sejak:</strong> {{ Carbon\Carbon::parse($user['creationTime'])->diffForHumans() }}
                    </p>
                    <p><strong>Memperbaharui Data Pada:</strong>
                        {{ Carbon\Carbon::parse($user['updatedTime'])->diffForHumans() }}</p>
                    <p><strong>Status:</strong> {{ $user['status'] == 'active' ? 'Aktif': 'Diblokir' }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
