<x-app-layout>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('admin.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JUDUL</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title', $post->title) }}"
                                    placeholder="Masukkan Judul Post">

                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mt-3">
                                <div class="form-group col-6">
                                    <label class="font-weight-bold">TAG</label>
                                    <input class="form-control" type="text" data-role="tagsinput" name="tags">
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

                            <div class="form-group">
                                <label class="font-weight-bold">KONTEN</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                                    placeholder="Masukkan Konten Post">{{ old('content', $post->content) }}</textarea>

                                <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary bg-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning bg-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
