@extends('layout/app')
@section('content')
<div class="center">
    <br>
    <div>
        <div class="card " style="margin-bottom:1rem">
            <div class="card-header center" style="width:50rem; height:auto;">
                BBM Kendaraan
            </div>
            <div class="card-body">
                <form id="form" role="form" method="POST" enctype="multipart/form-data"
                    action="{{route('gas_usage') }}">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="form-group ">
                            <input type="hidden" class="form-control" id="id" name="id" value="{{$id}}">
                                <label >Pemakaian BBM Liter Perhari </label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div style="margin-left:1.5rem; margin-bottom:1rem;">
                <button type="submit" class="btn btn-primary">Submit</button>
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
