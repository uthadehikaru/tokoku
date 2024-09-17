@extends('layouts.web')
@section('content')
<div class="min-h-screen bg-base-200">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4">Card 1</h2>
        <p class="text-gray-600">This is the content for card 1. You can add more details or statistics here.</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4">Card 2</h2>
        <p class="text-gray-600">This is the content for card 2. You can add more details or statistics here.</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-4">Card 3</h2>
        <p class="text-gray-600">This is the content for card 3. You can add more details or statistics here.</p>
    </div>
</div>
@endsection