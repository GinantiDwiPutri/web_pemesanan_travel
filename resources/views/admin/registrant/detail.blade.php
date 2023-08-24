@extends('admin.template.base')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Detail Calon Driver
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
                    <p><strong>UID:</strong> {{ $driver['uid'] }}</p>
                    <p><strong>Nama :</strong> {{ $driver['displayName'] }}</p>
                    <p><strong>No. Handphone :</strong> {{ $driver['phoneNumber'] }}</p>
                    <p><strong>Tipe dan Plat Mobil:</strong> {{ $driver['carType'] }} ({{ $driver['carNumber'] }})</p>
                    <p><strong>Email:</strong> {{ $driver['email'] }}</p>
                    <p><strong>Terakhir Kali Login:</strong>
                        {{ Carbon\Carbon::parse($driver['lastSignInTime'])->diffForHumans() }}</p>
                    <p><strong>Terdaftar Sejak:</strong>
                        {{ Carbon\Carbon::parse($driver['creationTime'])->diffForHumans() }}
                    </p>
                    <p><strong>Memperbaharui Data Pada:</strong>
                        {{ Carbon\Carbon::parse($driver['updatedTime'])->diffForHumans() }}</p>
                    <p><strong>Status:</strong> {{ $driver['status'] == 'active' ? 'Aktif' : 'Diblokir' }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
