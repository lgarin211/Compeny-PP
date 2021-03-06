{{-- @dd($data); --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<div class="modal-body">
    @foreach ($data['menu'] as $key=>$item)
    @if ($key==1)
    <? break ?>
    @endif
    <form method="POST" action="pas" class="">
        @csrf
        <input type="hidden" name="tabel" value="menu">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <div id="holder">
                        <i class="fas fa-laugh-wink fa-7x"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="100%" height="500px"></i>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Silahkan Edit menu</h5>
                        <div class="mb-3">
                            <div class="row">
                                @foreach ($item as $key=>$itm)
                                @if ($key=='id')
                                <input type="hidden" name="{{$key}}" value="{{$item->id}}">
                                @elseif ($key=='created_at')
                                <input type="hidden" name="{{$key}}" value="{{$item->created_at}}">
                                @elseif ($key=='updated_at')
                                <input type="hidden" name="{{$key}}" value="@php
                                    date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                @endphp">
                                @elseif ($key=='Deskripsi')
                                <div class="col-md-12">
                                    <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <textarea type="text" class="form-control" placeholder="{{$key}}"
                                                    name="{{$key}}" aria-label="{{$key}}"
                                                    aria-describedby="button-addon2"
                                                    rows="10">{{$item->Deskripsi}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-5">
                                    <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="{{$key}}"
                                                    name="{{$key}}" aria-label="{{$key}}"
                                                    aria-describedby="button-addon2" value="{{$itm}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="col-md-12 btn btn-primary">Edit</button>
            </div>
        </div>

</div>
<br>
@endforeach

</form>

@endsection
