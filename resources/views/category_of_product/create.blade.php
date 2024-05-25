<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('category_of_product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_uz"
                               placeholder="mahsulot nomi uz" value="{{ old('title_uz') }}"/>
                        @error('title_uz')
                        <label for="if" class="text-danger">title_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_ru"
                               placeholder="Mahsulot nomi ru" value="{{ old('title_ru') }}"/>
                        @error('title_ru')
                        <label for="if" class="text-danger">title_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_en"
                               placeholder="mahsulot nomi en" value="{{ old('title_en') }}"/>
                        @error('title_en')
                        <label for="if" class="text-danger">title_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <select name="type_id" class="form-control mt-3 mb-3">
                        @foreach($populars as $popular)
                            <option value="{{ $popular->id }}">{{ $popular->type }}</option>
                        @endforeach
                    </select>
                    <select name="category_id" class="form-control mt-3 mb-3" multiple>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name_ru }}</option>
                        @endforeach
                    </select>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_uz"
                               placeholder="Mahsulot haqida qisqacha uz" value="{{ old('short_content_uz') }}"/>
                        @error('short_content_uz')
                        <label for="if" class="text-danger">short_content_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_ru"
                               placeholder="mahsulot haqida qisqacha ru" value="{{ old('short_content_ru') }}"/>
                        @error('short_content_ru')
                        <label for="if" class="text-danger">short_content_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_en"
                               placeholder="mahsulot haqida qisqacha en" value="{{ old('short_content_en') }}"/>
                        @error('short_content_en')
                        <label for="if" class="text-danger">short_content_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name_uz"
                               placeholder="mahsulot nomi uz" value="{{ old('name_uz') }}"/>
                        @error('name_uz')
                        <label for="if" class="text-danger">name_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name_ru"
                               placeholder="mahsulot nomi ru" value="{{ old('name_ru') }}"/>
                        @error('name_ru')
                        <label for="if" class="text-danger">name_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name_en"
                               placeholder="nahsulot nomi en" value="{{ old('name_en') }}"/>
                        @error('name_en')
                        <label for="if" class="text-danger">name_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('photo')
                    <label for="if" class="text-danger">faylni yuklashni unutdingiz3</label>
                    @enderror
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
