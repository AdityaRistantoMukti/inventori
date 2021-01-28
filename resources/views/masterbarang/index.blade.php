@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card border-0 shadow">
        <div class="card-body">
            <div class="d-flex mb-2p">
                <div class="mr-auto mb-2">
                    
                    <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Data Barang Baru</a>
                </div>
                <div class="d-flex">
                    <input type="date" name="" id="" class="form-control mr-2">
                    <button type="submit" class="btn btn-info primary mb-2">Cari Data</button>
                </div>
            </div>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            
                            <th>Kode Barang</th>       
                            <th>Nama Barang</th>
                            <th>Quantity</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)
                            
                        
                        <tr>
                            
                            <td>{{$barang->kode_barang}}</td>
                            <td>{{$barang->nama_barang}}</td>
                            <td>{{$barang->quantity}}</td>
                           
                            <td>
                                <form action="{{route('master-barang.delete', $barang->id)}}" method="post">
                                @csrf 
                                @method('DELETE')
                            <a href="{{ route('master-barang.edit', $barang->id) }}" class="btn btn-outline-warning" btn-sm>Edit</a>
                            <a href="{{ route('master-barang.show', $barang->id ) }}" class="btn btn-outline-info" btn-sm>Detail</a>
                            <button class="btn btn-outline-danger" btn-sm>Delete</button>
                                </form>       
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
          
        </div>
    </div>
</div>

@endsection