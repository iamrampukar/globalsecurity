@csrf
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Title"
           value="{{ old('title',@$model->title) }}">
    @error('title')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <input type="text" class="form-control" id="message" name="message" placeholder="Message..."
           value="{{ old('message',@$model->message) }}">
    @error('message')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="imageFile" class="form-label">Image File</label>
    <input class="form-control form-control-sm" type="file" name="image_name" id="imageFile">
    @error('image_name')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<button class="btn btn-primary btn-sm">Save</button>
