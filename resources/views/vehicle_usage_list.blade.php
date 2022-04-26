@extends('layout/app')
@section('content')
<a class="btn btn-primary" href="{{route('CreateOrderVehicleView') }}" role="button">Pemesanan Kendaraan</a>
<a class="btn btn-primary" href="{{route('export') }}" role="button">Laporan</a>

<br>
<br>
<div class="table-responsive">
    <table class="table" id="dataTable">
        <thead class="thead-light">


            <h4>Daftar Pemakaian Kendaraan</h4>
            <tr>

                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Driver</th>
                <th scope="col">Penggunaan BBM</th>
                <th scope="col">Disetujui Head Manager</th>
                <th scope="col">Disetujui Branch Manager</th>
                <th scope="col">Status</th>

                <th scope="col">

                </th>
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
                <td>{{$data->liter_per_day}} Liter</td>
                <td>{{$data->head_office_agreement}}</td>
                <td>{{$data->branch_office_agreement}}</td>
                @if($data->head_office_agreement== true && $data->branch_office_agreement==true)
                <td>Disetujui</td>
                @else
                <td>Belum disetujui</td>
                @endif
                  @if($data->liter_per_day== false )
                <td>
                    <a href="{{route('gas_usageView',[$data->id ])}}"  class="btn btn-primary btn-sm">BBM</a>
                </td>
                @endif

 
            @if(Auth::guard('web')->user()->role == "head manager" || Auth::guard('web')->user()->role == "branch manager")
                <td>
<form method="POST" action="{{route('approveUsage')}}">
                @csrf
                <input class="form-control" type="hidden" name="id" id="id" value="{{$data->id}}">
                <button class="btn btn-outline-primary" type="submit">Setujui</button>
            </form>
            </td>

@endif

            @endforeach
            </tr>
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
