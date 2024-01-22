@extends('layouts.app')

@section('title', 'New User')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>EDIT DATA GUDANG</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">GUDANG</a></div>
                <div class="breadcrumb-item">Edit Data Gudang</div>
            </div>
        </div>

        <div class="section-body">

            <div class="card">
                <form action="{{ route('gudang.update', $gudang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4>DATA GUDANG</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>GUDANG</label>
                            <input type="text" class="form-control" name="gudang" value="{{$gudang->gudang}}">
                        </div>
                        <div class="form-group">
                <label for="jenis_gudang" class="bold-text">JENIS GUDANG</label>
                <select id="jenis_gudang" name="jenis_gudang" class="form-control" value="{{$gudang->jenis_gudang}}">
                    <option value="Gudang A">Gudang A</option>
                    <option value="Gudang B">Gudang B</option>
                </select>
            </div>
                        <div class="form-group">
                            <label>LUAS (m²)</label>
                            <input type="text" class="form-control" name="luas" value="{{$gudang->luas}}">
 
                        </div>
                        <div class="form-group">
                            <label>VOLUME (m3)</label>
                            <input type="text" class="form-control" name="volume"value="{{$gudang->volume}}">
                        </div>
                        <div class="form-group">
                            <label>KETERANGAN</label>
                            <textarea class="form-control" data-height="150" name="keterangan" >{{$gudang->keterangan}}</textarea>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush