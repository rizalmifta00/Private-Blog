@extends('base')
@section('kontent')



<div class="container">
<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Tambah Artikel</div>
                      <div class="card-body">
                              @include('validasi')
                              {!! Form::model($artikel,['route'=>['artikel.update',$artikel->id],'method'=>'PUT']) !!}

                          <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"> Judul  </label>

                                 <div class="col-md-6">
                                 {!! Form::text('judul',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                          <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"> Konten </label>
                            <div class="col-md-6">
                                 {!! Form::text('konten',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                          <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"> Nama kategori </i></label>
                            <div class="col-md-6">
                                 {!! Form::select('kategori_id',\App\Kategori::pluck('nama_kategori','id'),NULL,['class'=>'form-control']) !!}
                                </div>
                           </div>

                        

                               <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Edit Data</button>
                                       <a href="{{ route('artikel.index') }}" class="btn btn-info">Kembali</a>
                                    </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
