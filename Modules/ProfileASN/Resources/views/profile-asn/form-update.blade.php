<div class="form-group">
    <select name="kedudukan_hukum_id" id="kedudukan_hukum_id" class="form-control select2-modal-update" data-placeholder="NIP ASN">
        <option></option>
        @foreach ($data['kedudukan_hukums'] as $kedudukan_hukum)
        <option value="{{ $kedudukan_hukum->id }}">{{ $kedudukan_hukum->nama }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback" id="feedback_nip"></div>
</div>