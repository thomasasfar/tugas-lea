@extends('layouts.app')

@section('judul', 'Data Uang Masuk')

@section('custom-css')

<link rel="stylesheet" href="{{ asset('/assets/css/pages/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/pages/datatables.css') }}">

@endsection

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div> Data Uang Masuk</div>
                <a href="{{ route('data-masuk.create') }}" class="btn btn-outline-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Bulan Donasi</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->bulan }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('data-masuk.edit', ['data_masuk' => $item->id]) }}" class="me-2">
                                    <span class="btn btn-sm btn-success">Edit</span>
                                </a>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
            <br>

        </div>
    </div>

</section>

@endsection

@section('custom-js')

<script src="{{ asset('/assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('/assets/js/pages/datatables.js') }}"></script>

@endsection
