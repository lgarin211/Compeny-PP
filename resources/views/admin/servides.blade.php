{{-- @dd($data) --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<div class="row">
    <div class="col-md-4 mb-2">
        @include('admin.modal')
        @yield('modalService')
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        @yield('modaldevelopersrc')
    </div>
</div>
<div id="pas" class="container shodow-sm">
    <div class="container marketing">
        <!-- START THE FEATURETTES -->
        @foreach ($data['servides'] as $key=>$item)
        @if ($key%2==1)
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{$item->Title}}<br><span
                        class="text-muted"><small>{{$item->Desc}}</small></span></h2>
                <p class="lead fs-6">
                    <a href="pas?tabel=servides&id={{$item->id}}&view=editservides" class="btn btn-primary">
                        <i class="fas fa-user-edit" aria-hidden="true"> Edit</i></a>
                    <a href="del?tabel=servides&id={{$item->id}}" href="" class="btn btn-danger"><i class="fas fa-trash"
                            aria-hidden="true"> Hapus</i></a>
                </p>
            </div>
            <div class="col-md-5">
                <i class="fa-7x fa-fw {{$item->icon}} ">
                </i>
            </div>
        </div>
        @else
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">{{$item->Title}}<br><span
                        class="text-muted"><small>{{$item->Desc}}</small></span></h2>
                <p class="lead fs-6">
                    <a href="pas?tabel=servides&id={{$item->id}}&view=editservides" class="btn btn-primary">
                        <i class="fas fa-user-edit" aria-hidden="true"> Edit</i></a>
                    <a href="del?tabel=servides&id={{$item->id}}" class="btn btn-danger"><i class="fas fa-trash"
                            aria-hidden="true"> Hapus</i></a>
                </p>
            </div>
            <div class="col-md-5">
                <i class="fa-7x fas fa-fw {{$item->icon}}">
                </i>
            </div>
        </div>
        @endif
        @endforeach

        <!-- /END THE FEATURETTES -->

    </div>
</div>

<input type="hidden" id="nosi" value="{{asset('')}}admin/like?tabel=servides&key=">
<script>
    // const as=document.querySelector('.fint_JUDUL_BUKU');
    var base_url = document.getElementById('nosi').value;
    //event add
    function domdom() {
        var keywpr = document.getElementById('key');
        var contain = document.getElementById('pas');
        var link_query = base_url + keywpr.value
        // alert(link_query)
        fetch(link_query)
            .then((response) => response.text())
            .then((response) => (contain.innerHTML = response));
        // val ajax Kurian WPU Eps13

    }
</script>
@endsection
