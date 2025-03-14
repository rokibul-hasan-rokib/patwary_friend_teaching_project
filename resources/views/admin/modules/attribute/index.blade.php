@foreach ($attributes as $attribute)
    <ul>
        <li>{{ $attribute->name }}</li>
        <li>{{ $attribute->sort_order }}</li>
    </ul>
@endforeach