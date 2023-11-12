<x-app-layout>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="input-group border border-dark rounded">
                                <label class="fw-bold  input-group-text border me-1">GAMBAR</label>
                                <input type="file" class="form-control p-2  @error('image') is-invalid @enderror"
                                    name="image">

                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label class="fw-bold mb-2">JUDUL</label>
                                <input type="text" class="form-control rounded @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mt-3">
                                <div class="form-group col-6">
                                    <label class="fw-bold mb-2">TAG <span class="text-success"> (Opsional)
                                        </span></label>
                                    <input class="form-control rounded" type="text" data-role="tagsinput"
                                        name="tags">
                                    @if ($errors->has('tags'))
                                        <span class="text-danger">{{ $errors->first('tags') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-6">
                                    <label class="fw-bold mb-2">CATEGORY</label>
                                    <br>
                                    <select name="category" class="btn border w-100 pb-2 pt-2 border border-dark"
                                        id="">
                                        <option value="">Pilih Category</option>
                                        <option value="Laravel">Laravel</option>
                                        <option value="Flutter">Flutter</option>
                                        <option value="Bootstrap">Bootstrap</option>
                                        <option value="React">React</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label class="fw-bold">KONTEN</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                                    placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                                <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-md btn-primary bg-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning bg-warning">RESET</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
