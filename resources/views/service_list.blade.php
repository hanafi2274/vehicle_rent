@extends('layout/app')
@section('content')
<a class="btn btn-primary" href="{{route('CreateServiceView') }}" role="button">Service Kendaraan</a>
<br>
<br>
<div class="table-responsive">
    <table class="table" id="dataTable">
        <thead class="thead-light">


            <h4>Daftar Service Kendaraan</h4>
            <tr>

                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Driver</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Disetujui Head Manager</th>
                <th scope="col">Disetujui Branch Manager</th>
                <th scope="col">Status</th>

            
           
@if(Auth::guard('web')->user()->role == "head manager")
<th scope="col">Action</th>


@endif
</tr>
        </thead>
        <tbody>
        @foreach($data as $index => $data)
            <tr>
                <th scope="row">{{$index +1}}</th>
                <td>{{$data->date}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->head_office_agreement}}</td>
                <td>{{$data->branch_office_agreement}}</td>
                @if($data->head_office_agreement== true && $data->branch_office_agreement==true)
                <td>Disetujui</td>
                @else
                <td>Belum disetujui</td>
                @endif
                @if(Auth::guard('web')->user()->role == "head manager")
                <td>
<form method="POST" action="{{route('approveService')}}">
                @csrf
                <input class="form-control" type="hidden" name="id" id="id" value="{{ $data->id}}">

                <button class="btn btn-outline-primary" type="submit">Setujui</button>
            </form>
            </td>

@endif

            </tr>
           

            @endforeach
           
        </tbody>
    </table>
</div>
<script>
  $(function () {
        $('#dataTable').DataTable({
            "pageLength": 5,
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });
    });
</script>
@endsection
