@extends('layout.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Item</h1>
    </div>
    <div class="dark shadow">
        <div class="card-body">
                <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">  
                    @csrf  
                    <div class="form-group">
                      <input type="name" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Enter Item">
                      @error('nama')<div class="invalid-feedback">{{$message}}</div> @enderror
                    </div>
                    <div class="form-group">
                      <textarea name="description" rows="10" class="d-block w-100 form-control" placeholder="Enter Description"></textarea>   
                    </div>
                    <div class="form-group">
                        <label for="lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="date_created" id="Lahir"  placeholder="=Tanggal dibuat">
                      </div>
                    <div class="form-group">
                        <select name="artist_id" required class="form-control">
                            <option value="">Pilih Artist</option>
                            @foreach ($artists as $artist)
                                <option value="{{ $artist->id }}">
                                    {{ $artist->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="country_id" required class="form-control" id="country">
                            <option value="" disabled selected>== Pilih negara ==</option>
                            @foreach ($countries as $id => $country_name)
                                <option value="{{ $id }}">
                                    {{ $country_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    

                    <div class="form-group">
                        <select name="museum_id" required class="form-control" id="city">
                            <option value="" disabled selected>== Pilih museum ==</option>
                            @foreach ($museums as $museum)
                            <option value="{{ $museum->id }}">
                                {{ $museum->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="type_id" required class="form-control">
                            <option value="">== Pilih type ==</option>
                            <option value="">none</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">
                                    {{ $type->type }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="article_id" required class="form-control">
                            <option value="">== Pilih Article ==</option>
                            <option value="">none</option>
                            @foreach ($articles as $article)
                                <option value="{{ $article->id }}">
                                    {{ $article->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    
            

                    <div class="form-group">
                        <input type="file" name="photo" placeholder="gambar">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Submit
                    </button>

                    
                </form>
        </div>
    </div>


</div>


@endsection


{{-- @push('addon-script')
<script>
$(function () {
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('#country').on('change', function () {
        axios.post('{{ route('subCat.store') }}', {id: $(this).val()})
            .then(function (response) {
                $('#museum').empty();
                $.each(response.data, function (id, name) {
                    $('#museum').append(new Option(name, id))
                })
            });
    });
});
</script>
@endpush --}}
