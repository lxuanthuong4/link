@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-4 pr-80">
    <!-- pr-80 leaves room for fixed sidebar on the right -->
    <div class="space-y-6">
        <div>
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">User Dashboard</h1>
                <p class="text-sm text-gray-600">Welcome. This is your dashboard with personalized content.</p>

                <div class="mt-6">
                    <a href="/" class="text-blue-600 hover:underline">Back to site</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection