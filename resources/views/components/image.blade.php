@if ($image)
    <img
        style="object-fit: cover"
        alt="{{ $title }} banner"
        src="{{ $image }}"
        {{ $attributes }}
    >
@else
    <img
        src="https://ui-avatars.com/api/?name={{ $title }}&background=random&size=350"
        style="object-fit: cover"
        {{ $attributes }}
    >
@endif