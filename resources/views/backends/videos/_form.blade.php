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
    <label for="video_link" class="form-label">Title</label>
    <input type="text" class="form-control" id="video_link" name="video_link" placeholder="Video link"
           value="{{ old('video_link',@$model->video_link) }}">
    @error('video_link')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="video_code" class="form-label">Video Code</label>
    <textarea class="form-control" id="video_code" name="video_code" rows="3"
              placeholder="Code here...">{{ old('video_code',@$model->video_code) }}</textarea>
    @error('video_code')
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
<button class="btn btn-primary btn-sm">Save</button>
