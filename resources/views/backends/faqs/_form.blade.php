@csrf
<div class="mb-3">
    <label for="question" class="form-label">Question</label>
    <input type="text" class="form-control" id="question" name="question" placeholder="Question..."
           value="{{ old('question',@$model->question) }}">
    @error('question')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="answer" class="form-label">Answer</label>
    <textarea class="form-control" id="answer" name="answer" rows="3"
              placeholder="Answer...">{{ old('message',@$model->answer) }}</textarea>
    @error('answer')
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
