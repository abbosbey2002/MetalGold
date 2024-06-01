<x-layouts.admin>
    <div class="card">
        <div class="py-4 mx-3">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('home.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Title fields -->
                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Title uz</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Title uz" value="{{ old('title_uz', $item->title_uz) }}">
                                @error('title_uz')
                                    <div class="text-danger">title_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Title ru</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Title ru" value="{{ old('title_ru', $item->title_ru) }}">
                                @error('title_ru')
                                    <div class="text-danger">title_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Title en</label>
                                <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Title en" value="{{ old('title_en', $item->title_en) }}">
                                @error('title_en')
                                    <div class="text-danger">title_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Short content fields -->
                            <div class="mb-3">
                                <label for="short_content_uz" class="form-label">Description uz</label>
                                <input type="text" id="short_content_uz" class="form-control" name="short_content_uz" placeholder="Description uz" value="{{ old('short_content_uz', $item->short_content_uz) }}">
                                @error('short_content_uz')
                                    <div class="text-danger">short_content_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_ru" class="form-label">Description ru</label>
                                <input type="text" id="short_content_ru" class="form-control" name="short_content_ru" placeholder="Description ru" value="{{ old('short_content_ru', $item->short_content_ru) }}">
                                @error('short_content_ru')
                                    <div class="text-danger">short_content_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_en" class="form-label">Description en</label>
                                <input type="text" id="short_content_en" class="form-control" name="short_content_en" placeholder="Description en" value="{{ old('short_content_en', $item->short_content_en) }}">
                                @error('short_content_en')
                                    <div class="text-danger">short_content_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Image upload fields with current image display -->
                            <div class="mb-3">
                                <label for="first_photo" class="form-label">Rasm hajmi: 760x556</label>
                                @if($item->first_photo)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $item->first_photo) }}" class="img-fluid" alt="Current Image">
                                    </div>
                                @endif
                                <input name="first_photo" type="file" class="form-control" id="first_photo">
                                @error('first_photo')
                                    <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="second_photo" class="form-label">Rasm hajmi: 238x147</label>
                                @if($item->second_photo)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $item->second_photo) }}" class="img-fluid" alt="Current Image">
                                    </div>
                                @endif
                                <input name="second_photo" type="file" class="form-control" id="second_photo">
                                @error('second_photo')
                                    <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="third_photo" class="form-label">Rasm hajmi: 64x77</label>
                                @if($item->third_photo)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $item->third_photo) }}" class="img-fluid" alt="Current Image">
                                    </div>
                                @endif
                                <input name="third_photo" type="file" class="form-control" id="third_photo">
                                @error('third_photo')
                                    <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="fourth_photo" class="form-label">Rasm hajmi: 116x61</label>
                                @if($item->fourth_photo)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $item->fourth_photo) }}" class="img-fluid" alt="Current Image">
                                    </div>
                                @endif
                                <input name="fourth_photo" type="file" class="form-control" id="fourth_photo">
                                @error('fourth_photo')
                                    <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="fifth_photo" class="form-label">Rasm hajmi: 106x76</label>
                                @if($item->fifth_photo)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $item->fifth_photo) }}" class="img-fluid" alt="Current Image">
                                    </div>
                                @endif
                                <input name="fifth_photo" type="file" class="form-control" id="fifth_photo">
                                @error('fifth_photo')
                                    <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('home.index') }}" class="btn btn-outline-danger">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
