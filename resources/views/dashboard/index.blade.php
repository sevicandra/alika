@extends('dashboard.layout.index')
@section('main')
<div class="flex shrink flex-col gap-5 p-5 max-h-full">
    <div class="shrink">
            <a href="/client/create">
                <button class="rounded-lg hover:bg-blue-500 py-2 px-4 text-blue-500 border border-blue-500 hover:text-neutral-50">
                    Tambah
                </button>
            </a>
    </div>
    <div class="scroll-auto overflow-scroll">
            <table class="border-collapse border border-white table-auto w-full">
                <tr style="">
                    <th class="border border-slate-600 px-1">No.</th>
                    <th class="border border-slate-600 px-1">Name</th>
                    <th class="border border-slate-600 px-1">Client Id</th>
                    <th class="border border-slate-600 px-1">Redirect URI</th>
                    <th class="border border-slate-600 px-1">Aksi</th>
                </tr>
                @php
                    $i=1
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td class="border p-2 border-slate-600 text-center">{{ $i++ }}</td>
                    <td class="border p-2 border-slate-600 text-center">{{ $item->name }}</td>
                    <td class="border p-2 border-slate-600">{{ $item->id }}</td>
                    <td class="border p-2 border-slate-600">{{ $item->redirect }}</td>
                    <td class="border p-2 border-slate-600">
                        <div class="flex gap-2 justify-center">
                            {{-- <div class="border border-yellow-500 px-2 text-yellow-500 hover:bg-yellow-500 hover:text-white rounded-lg">
                                <a href="/client/{{ $item->id }}/edit" class="">Ubah</a>
                            </div> --}}
                            <div>
                                <form action="/client/{{ $item->id }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="border border-red-500 px-2 text-red-500 hover:bg-red-500 hover:text-white rounded-lg">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
    </div>
</div>
@endsection
 