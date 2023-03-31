<div class="form-group">
    <label for="roles" class="fw-bold">Roles</label>
    <select name="roles[]" multiple id="roles" class="form-control select2-infinity-modal-post" data-placeholder="Roles">
        @foreach ($roles as $role)
        <option value="{{ $role->id }}">{{ $role->description }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback" id="feedback_roles"></div>
</div>