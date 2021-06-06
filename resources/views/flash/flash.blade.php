@if(session('error'))
    <div class="rounded-md bg-blue-gray-900 border-2 border-red-400 p-4" data-flash>
        <div class="flex">
            <div >
                <p class="text-sm font-medium text-danger">
                    {{ session('error') }}
                </p>
            </div>
        </div>
    </div>
@endif

