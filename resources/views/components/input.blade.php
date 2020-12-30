<div class="form-group">
    <label for="{{ $attributes['name'] }}">{{ $title }}</label>
    <input
        class="form-control {{ $errors->has($attributes['name']) ? 'is-invalid' : '' }}"
        value="{{ old($attributes['name']) }}"
        id="{{ $attributes['name'] }}"
        autocomplete="off"
        {{ $attributes }}
    >
    @error($attributes["name"])
        <small class="form-text invalid-feedback">{{ $message }}</small>
    @else
        <small class="form-text text-muted">{{ $text }}</small>
    @enderror
</div>