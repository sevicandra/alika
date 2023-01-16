@extends('dashboard.layout.index')

@section('main')
    <div class="flex grow justify-center">
        <div class="flex flex-col w-80 sm:w-9/12 md:w-1/2 lg:w-1/3 justify-center">
            <div class="bg-white rounded-lg p-5 flex flex-col gap-5">
                <div class="text-center">
                    OAuth2 Secret
                </div>
                <div class="text-center break-all bg-neutral-500 text-white p-5 rounded">
                    {{ $plainSecret }}
                </div>
                <div class="flex justify-center">
                    <a href="/" class="px-4 py-2 border border-red-500 rounded text-red-500">
                        Close
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection