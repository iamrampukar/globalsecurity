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
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
           value="{{ old('slug',@$model->slug) }}">
    @error('slug')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="short_description" class="form-label">Short Description</label>
    <textarea class="form-control" id="short_description" name="short_description" rows="3"
              placeholder="Message...">{{ old('message',@$model->short_description) }}</textarea>
    @error('short_description')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="visible" class="form-label">Visible</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="visible_status" id="status_yes"
               value="1" {{ @$model->visible_status == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="status_yes"><i class="bi bi-check-circle"></i></label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="visible_status" id="status_no"
               value="0" {{ @$model->visible_status == 0 ? 'checked' : '' }}>
        <label class="form-check-label" for="status_no"><i class="bi bi-x-circle"></i></label>
    </div>
</div>

<div class="mb-3">
    <label for="page_type" class="form-label">Page Type</label>
    <select class="form-select" name="page_type" id="page_type" aria-label="Default page type">
        <option value="" selected>--Page Type--</option>
        @foreach($pageType as $key => $val)
            <option value="{{$key}}" {{ $key==@$model->page_type ? 'selected' : '' }}>{{$val}}</option>
        @endforeach
    </select>
    @error('page_type')
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
