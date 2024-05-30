<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_uz"
                               placeholder="Title uz" value="{{ old('title_uz') }}"/>
                        @error('title_uz')
                        <label for="if" class="text-danger">title_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_ru"
                               placeholder="Title ru" value="{{ old('title_ru') }}"/>
                        @error('title_ru')
                        <label for="if" class="text-danger">title_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_en"
                               placeholder="Title en" value="{{ old('title_en') }}"/>
                        @error('title_en')
                        <label for="if" class="text-danger">title_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_uz"
                               placeholder="Biz haqimizda qisqacha uz" value="{{ old('short_content_uz') }}"/>
                        @error('short_content_uz')
                        <label for="if" class="text-danger">Chuqurlashtirilgan short_content_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_ru"
                               placeholder="Biz haqimizda qisqacha ru" value="{{ old('short_content_ru') }}"/>
                        @error('short_content_ru')
                        <label for="if" class="text-danger">short_content_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_en"
                               placeholder="Biz haqimizda qisqacha en" value="{{ old('short_content_en') }}"/>
                        @error('short_content_en')
                        <label for="if" class="text-danger">short_content_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="content_uz"
                               placeholder="description uz" value="{{ old('content_uz') }}"/>
                        @error('content_uz')
                        <label for="if" class="text-danger">content_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="content_ru"
                               placeholder="description ru" value="{{ old('content_ru') }}"/>
                        @error('content_ru')
                        <label for="if" class="text-danger">content_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="content_en"
                               placeholder="description en" value="{{ old('content_en') }}"/>
                        @error('content_en')
                        <label for="if" class="text-danger">content_en</label>
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
