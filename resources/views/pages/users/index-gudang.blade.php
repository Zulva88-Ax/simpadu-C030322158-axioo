@extends('layouts.app')

@section('title', 'New User')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Gudang</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Data Gudang</a></div>
            </div>
        </div>
        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="{{route('gudang.create')}}" class="btn btn-success">Tambah Gudang <i class="fas fa-plus-square"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div style="overflow-x: auto;">
                        <table class="table table-bordered">
                            <tr>
                                <th>GUDANG</th>                              
                                <th>Jenis Gudang</th>                       
                                <th>Luas (m²)</th>                      
                                <th>Volume (m3)</th>                      
                                <th>Keterangan</th>                  
 
                            </tr>
                            
                            <!-- masuk datanya -->
                            @foreach ($gudang as $item)
                            <tr>
                                <td>{{ $item->gudang}}</td>
                                <td>{{ $item->jenis_gudang }}</td>
                                <td>{{ $item->luas }}</td>
                                <td>{{ $item->volume }}</td>
                                <td>{{ $item->keterangan}}</td>
                                <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('gudang.edit', $item->id)}}"
                                                    class="btn btn-sm btn-info btn-icon">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </a>

                                                <form action="{{ route('gudang.destroy', $item->id) }}" method="post"
                                                    class="ml-2">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                        <i class="fas fa-times"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
