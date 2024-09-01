@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input data pemasukan</div>
                <form action="{{route('pemasukan.update', $data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="card-body">
                        <div class="form-group p-3">
                            <label>Sumber dana / pemasukan</label>
                            <input type="text" name="sumber_pemasukan" value="{{$data->sumber_pemasukan}}" required class="form-control">
                        </div>
                        <div class="form-group p-3">
                            <label>Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" value="{{$data->tanggal_masuk}}" required class="form-control">
                        </div>
                        <div class="form-group p-3">
                            <label>Nominal (IDR)</label>
                            <input type="number" name="nominal" value="{{$data->nominal}}" required class="form-control">
                        </div>
                        <div class="form-group p-3">
                            <label>Bukti Transaksi</label>
                            <input type="file" name="bukti_transaksi" value="{{$data->bukti_transaksi}}" class="form-control">
                        </div>
                        <div class="form-group p-3">
                            <label>Keterangan</label>
                            <textarea name="keterangan" id="content" class="form-control">
                                {!! ($data->keterangan) !!}
                            </textarea>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Ubah data</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
