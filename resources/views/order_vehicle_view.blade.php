@extends('layout/app')
@section('content')
<div class="center">
    <br>
    <div>
        <div class="card " style="margin-bottom:1rem">
            <div class="card-header center" style="width:50rem; height:auto;">
                Pemesanan Kendaraan
            </div>
            <div class="card-body">
                <form id="form" role="form" method="POST" enctype="multipart/form-data"
                    action="{{ route('orderVehicle') }}">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="form-group ">
                                <label >Tanggal </label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="form-group ">
                                <label >Driver</label>
                                <select id="driver" name="driver">
                                @foreach($employee as $data => $employee)
                                        <option value={{$employee->id}}>{{$employee->name}}</option>
                                @endforeach

                                    </select>

                            </div>
                            <div class="form-group ">
                                <label >Head Manager</label>
                                <select id="hmanager" name="hmanager">
                                @foreach($head as $data => $head)
                                        <option value={{$head->id}}>{{$head->name}}</option>
                                @endforeach
                                    </select>

                            </div>
                            <div class="form-group ">
                                <label >Branch Manager</label>
                                <select id="bmanager" name="bmanager">
                                @foreach($branch as $data => $branch)
                                        <option value={{$branch->id}}>{{$branch->name}}</option>
                                @endforeach
                                    </select>

                            </div>
                            <div class="form-group ">
                                <label >Kendaraan</label>
                                <select id="vehicle" name="vehicle">
                                @foreach($vehicle as $data => $vehicle)
                                        <option value={{$vehicle->id}}>{{$vehicle->name}} Tipe {{$vehicle->type}}</option>
                                @endforeach
                                    </select>

                            </div>
                        </div>
                    </div>
            </div>
            <div style="margin-left:1.5rem; margin-bottom:1rem;">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>



<style>
    .center {
        justify-content: center;
        display: flex;
        align-items: center;
    }

    .margin {
        padding-top: 50px;
        padding-bottom: 20px;
    }

</style>

@endsection
