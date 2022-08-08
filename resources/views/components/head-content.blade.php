<div class="flex flex-row items-center justify-between mb-4">
    <div>
        <input type="text" class="input input-bordered w-full max-w-xs"
            value="{{ \Carbon\Carbon::now()->format('d F Y / H:i:s'); }}" disabled />
    </div>

    <div>
        <a href="{{ route('dashboard') }}" class="btn btn-xs">Back to Dashboard</a>
    </div>
</div>