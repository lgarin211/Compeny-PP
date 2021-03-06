@extends('admin.index')
@section('pasing')

<section class="container">
    <div class="row">
        <div class="col-md-4 mb-2">
            @include('admin.modal')
            @yield('modalTestimony')
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            @yield('modaldevelopersrc')
        </div>
    </div>

    <div class="bg-light">
        <table class="table table-responsive ">
            <thead>
                <tr class="bg-secondary">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody id="pas">
                @foreach ($data['testimonies'] as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Nama}}</td>
                    <td>{{$item->compeny}}</td>
                    <td>{{$item->Deskripsi}}</td>
                    <td>
                        <a href="{{$item->Gambar}}">
                            <img src="{{$item->Gambar}}" class="w-50" style="max-height: 200px; width: fit-content">
                        </a>
                    </td>
                    <td>
                        <div class="row">
                            <a href="pas?tabel=testimonies&id={{$item->id}}&view=edittestimoni" type="button" class="btn btn-danger col-md-6">
                                <i class="fas fa-user-edit" aria-hidden="true"></i>
                            </a>
                            <a href="del?tabel=testimonies&id={{$item->id}}" type="button" class="btn btn-success col-md-6">
                                <i class="fas fa-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> Hapus</i>
    </button>
</section>
<input type="hidden" id="nosi" value="{{asset('')}}admin/like?tabel=testimonies&key=">
<script>
    // const as=document.querySelector('.fint_JUDUL_BUKU');
    var base_url = document.getElementById('nosi').value;
    //event add
    function domdom() {
        var keywpr = document.getElementById('key');
        var contain = document.getElementById('pas');
        var link_query = base_url + keywpr.value
        fetch(link_query)
            .then((response) => response.text())
            .then((response) => (contain.innerHTML = response));
        // val ajax Kurian WPU Eps13

    }
</script>
@endsection
