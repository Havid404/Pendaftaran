@extends('admin.utama')
@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Data Request Member</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive">
                <table class="table table-bordered table-md" border="1" id="member_request">
                  <thead>
                    <tr>
                      <th class="text-center">No.</th>
                      <th class="text-center">Keterangan</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Alamat</th>
                      <th class="text-center">Pendidikan</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($members as $key => $member)  
                      
                      <tr>
                          <td class="text-center">
                            {{ $key+1 }}
                          </td>
                          <td class="text-center">
                            <button class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-sm btn-info" href="{{url('admin/request/detail')}}"><i class="fa fa-search"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                          </td>
                          <td class="text-center">{{ $member->name }}</td>
                          <td class="text-center">{{ $member->address }}</td> 
                          <td class="text-center">{{ $member->education->education }}</td>  
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
 <script>
   $(document).ready(function() {
    $('#member_request').DataTable();
      
  });
 </script>   
@endsection