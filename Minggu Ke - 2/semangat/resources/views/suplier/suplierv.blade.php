@extends('layouts.biasa')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <div class="container">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1 style="text-align: center;">Suplier</h1>
            <hr>
            <a href="/suplier/add" class="btn btn-success" style="margin-bottom: 10px;">Tambah</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>name</th>
                    <th>address</th>
                    <th>Phone</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->address }}</td>
                        <td>{{ $datas->contact_phone }}</td>
                        <td>
                            <form action="" method="post">
                                {{ csrf_field() }}
                                <a href='{{url("/suplier/edit/{$datas->id}")}}' class=" btn btn-sm btn-primary">Edit</a>
                                <a href='{{url("/suplier/delete/{$datas->id}")}}' class="btn btn-sm btn-danger">Delete</a></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
        </div>
    </section>
    <!-- /.main-section -->
@endsection
