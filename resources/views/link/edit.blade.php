<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('link.update', ['link' => $links->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="link"
                               placeholder="video uchun link" value="{{ $links->link }}"/>
                        @error('link')
                        <label for="if" class="text-danger">link</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="telegram"
                               placeholder="telegram uchun link" value="{{ $links->telegram }}"/>
                        @error('telegram')
                        <label for="if" class="text-danger">telegram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="instagram"
                               placeholder="instagram uchun link" value="{{ $links->instagram }}"/>
                        @error('instagram')
                        <label for="if" class="text-danger">instagram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="facebook"
                               placeholder="facebook uchun link" value="{{ $links->facebook }}"/>
                        @error('facebook')
                        <label for="if" class="text-danger">facebook</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="twitter"
                               placeholder="twitter uchun link" value="{{ $links->twitter }}"/>
                        @error('twitter')
                        <label for="if" class="text-danger">twitter</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="youtube"
                               placeholder="youtube uchun link" value="{{ $links->youtube }}"/>
                        @error('youtube')
                        <label for="if" class="text-danger">youtube</label>
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
