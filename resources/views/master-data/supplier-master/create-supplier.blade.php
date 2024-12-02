<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto mt-5">
                        <h2 class="mb-5 text-2xl font-bold">Create New Supplier</h2>

                        <!-- Display session success message -->
                        <x-auth-session-status class="mb-4" :status="session('success')" />

                        <!-- Form for creating new supplier -->
                        <form action="{{ route('supplier-store') }}" method="POST" class="space-y-4">
                            @csrf <!-- Laravel CSRF protection -->

                            <!-- Supplier Name -->
                            <div class="form-group">
                                <label for="supplier_name" class="block text-sm font-medium text-gray-700">Supplier Name</label>
                                <input type="text" id="supplier_name" name="supplier_name" class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>

                            <!-- Supplier Address -->
                            <div class="form-group">
                                <label for="supplier_address" class="block text-sm font-medium text-gray-700">Supplier Address</label>
                                <textarea id="supplier_address" name="supplier_address" rows="3" class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                <input type="text" id="phone" name="phone" class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            </div>

                            <!-- Comment (Optional) -->
                            <div class="form-group">
                                <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
                                <textarea id="comment" name="comment" rows="3" class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                        </form>
                    </div>

                    <!-- Include Vite's JS assets -->
                    @vite('resources/js/app.js')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>