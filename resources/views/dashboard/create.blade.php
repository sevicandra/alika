@extends('dashboard.layout.index')
@section('main')
<div class="flex grow flex-col gap-5 sm:p-5 max-h-full">
    <div class="shrink flex sm:flex-col">
        <div class="py-5 flex justify-center sm:justify-start grow flex-col sm:flex-row">
            <form action="/client/create" method="post">
                @csrf
                <div>
                    <div class="mx-4 pt-2">
                        <input class="focus:ring-0 @error('redirect') border-red-500 @enderror focus:outline-none border rounded-lg px-4 py-3 sm:w-80 w-full bg-white" placeholder="Name" type="text" name="name" value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <div class="ml-6 text-red-500 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mx-4 pt-2">
                        <input class="focus:ring-0 @error('redirect') border-red-500 @enderror focus:outline-none border rounded-lg px-4 py-3 sm:w-80 w-full bg-white" type="text" placeholder="Redirect URI" name="redirect" value="{{ old('redirect') }}">
                    </div>
                    
                    @error('redirect')
                    <div class="ml-6 text-red-500 text-xs">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="mx-4 py-2">
                        <button type="submit" class="rounded-lg hover:bg-blue-500 py-2 px-5 text-blue-500 border border-blue-500 hover:text-neutral-50">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
 