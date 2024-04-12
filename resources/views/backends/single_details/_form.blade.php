@csrf
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Title"
           value="{{ old('title',@$model->title) }}" readonly>
    @error('title')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="Title"
           value="{{ old('slug',@$model->slug) }}" readonly>
    @error('slug')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="short_description" class="form-label">Short Description</label>
    <textarea class="form-control" id="short_description" name="short_description" rows="3"
              placeholder="Message..." readonly>{{ old('message',@$model->short_description) }}</textarea>
    @error('short_description')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="full_description_editor" class="form-label">Full Description</label>
    <div id="full_description_editor" style="height: 250px">{!! old('message',@$model->full_description)  !!} </div>
</div>
<div class="mb-3">
    <textarea class="form-control" id="full_description" name="full_description" rows="3"
              placeholder="Full Description..."
              style="display: none">{{ old('message',@$model->full_description) }}</textarea>
    @error('full_description')
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
@push('scripts')
    <script>
        let quill = new Quill('#full_description_editor', {
            theme: 'snow'
        });
        quill.on('text-change', function (delta, oldDelta, source) {
            document.getElementById("full_description").value = quill.root.innerHTML;
        });
    </script>
@endpush
