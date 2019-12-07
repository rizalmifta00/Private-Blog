@extends('base')

<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@section('kontent')

<div class="col-lg-12">
              <div class="card mb-4">
              @include('notifikasi')
                <div class="card-header py-3 d-flex flex-row align-items-right justify-content-between">
                <a href="{{route('artikel.create')}}" class="float-right btn btn-primary">Tambah</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Nama Kategori</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                  @foreach($artikel as $a)
                      <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->judul}}</td>
                        <td>{{$a->konten}}</td>
                        <td>{{$a->kategori->nama_kategori}}</td>
                        <td>
                                    
                            <div class= "form-horizontal">
                                    <div class="btn-group" >          
                                   
                                   <a href="{{route('artikel.edit',$a->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                   </div>
                                   </td>
                        <td>
                                <div class="btn-group">
                                   <form action="{{ route('artikel.destroy', $a->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')

                                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                                    </form>
                                 
                                </form> 
                                </div>
                                 </td>
                                 @endforeach
                      
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection
@push('js')

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

@endpush