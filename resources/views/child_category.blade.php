<li class="py-4 ml-6 space-y-2 bg-white shadow">
    <input type="radio" wire:model="selectedParentCategory.{{ $category->id }}" value="{{ $category->id }}"> {{ $child_category->name }}

</li>

@if ($child_category->categories)
    <ul class="ml-6 space-y-2 ">
        @foreach ($child_category->categories as $childCategory)
            @include('child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif
