<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('category_of_product.update', ['category_of_product' => $products->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_uz" placeholder="mahsulot nomi uz" value="{{ $products->title_uz }}" />
                        @error('title_uz')
                        <label for="if" class="text-danger">title_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_ru" placeholder="Mahsulot nomi ru" value="{{ $products->title_ru }}" />
                        @error('title_ru')
                        <label for="if" class="text-danger">title_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_en" placeholder="mahsulot nomi en" value="{{ $products->title_en }}" />
                        @error('title_en')
                        <label for="if" class="text-danger">title_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_uz" placeholder="Mahsulot haqida qisqacha uz" value="{{ $products->short_content_uz }}" />
                        @error('short_content_uz')
                        <label for="if" class="text-danger">Chuqurlashtirilgan short_content_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_ru" placeholder="mahsulot haqida qisqacha ru" value="{{ $products->short_content_ru }}" />
                        @error('short_content_ru')
                        <label for="if" class="text-danger">short_content_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_en" placeholder="mahsulot haqida qisqacha en" value="{{ $products->short_content_en }}" />
                        @error('short_content_en')
                        <label for="if" class="text-danger">short_content_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name_uz" placeholder="mahsulot nomi uz" value="{{ $products->name_uz }}" />
                        @error('name_uz')
                        <label for="if" class="text-danger">name_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name_ru" placeholder="mahsulot nomi ru" value="{{ $products->name_ru }}" />
                        @error('name_ru')
                        <label for="if" class="text-danger">name_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name_en" placeholder="mahsulot nomi en" value="{{ $products->name_en }}" />
                        @error('name_en')
                        <label for="if" class="text-danger">name_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <select name="type_id" class="form-control mt-3 mb-3">
                        @foreach($populars as $popular)
                        <option value="{{ $popular->id }}" @if($popular->id == $products->type_id) selected @endif>{{ $popular->type }}</option>
                        @endforeach
                    </select>
                    <select name="category_id[]" class="form-control mt-3 mb-3" multiple>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if(in_array($category->id, json_decode($products->category_id, true) ?? [])) selected @endif>{{ $category->name_ru }}</option>
                        @endforeach
                    </select>
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="photo" type="file" class="input-group m-2" id="subject" />
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