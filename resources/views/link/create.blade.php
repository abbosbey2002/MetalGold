<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('link.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="link"
                               placeholder="video uchun link" value="{{ old('link') }}"/>
                        @error('link')
                        <label for="if" class="text-danger">link</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="telegram"
                               placeholder="telegram uchunlink" value="{{ old('telegram') }}"/>
                        @error('telegram')
                        <label for="if" class="text-danger">telegram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="instagram"
                               placeholder="instagram uchun link" value="{{ old('instagram') }}"/>
                        @error('instagram')
                        <label for="if" class="text-danger">instagram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="facebook"
                               placeholder="facebook uchun link" value="{{ old('facebook') }}"/>
                        @error('facebook')
                        <label for="if" class="text-danger">facebook</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="twitter"
                               placeholder="twitter uchun link" value="{{ old('twitter') }}"/>
                        @error('twitter')
                        <label for="if" class="text-danger">twitter</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="youtube"
                               placeholder="youtube uchun link" value="{{ old('youtube') }}"/>
                        @error('youtube')
                        <label for="if" class="text-danger">youtube</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
