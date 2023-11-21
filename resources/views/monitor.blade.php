@extends("layouts.main")

@section('content')
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped-columns border border-black">
        <thead>
        <tr>
            <th scope="col" class="bg-primary">Nomor </th>
            <th scope="col" class="bg-primary">Nomor SERI</th>
            <th scope="col" class="bg-primary">Nama</th>
            <th scope="col" class="bg-primary">Harga</th>
            <th scope="col" class="bg-primary">Deskripsi</th>
            <th scope="col" class="bg-primary center-buttons">Action</th>
        </tr>
        </thead>
        <tbody>
        @php
            $nomor = 1;
        @endphp
        @foreach($monitor as $mtr)
            <tr>
                <th scope="row" class="bg-light">{{ $nomor++ }}</th>
                <td class="bg-light fw-bolder text-danger">{{ $mtr ->SERI }}</td>
                <td class="bg-light fw-bolder text-danger">{{ $mtr->Nama }}</td>
                <td class="bg-light fw-bolder text-danger"> Rp. {{ $mtr->Harga }}</td>
                <td class="bg-light fw-bolder text-danger"> {{ $mtr->Deskripsi }}</td>
                <td class="bg-light center-buttons fw-bolder text-danger">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $mtr->id }}">
                        Detail
                    </button>
                    <a type="button" class="btn btn-secondary" href="/monitor/detail/{{$mtr->id}}">Detail Keyboard</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $mtr->id }}">
                        Hapus
                    </button>

                </td>
            </tr>

            <div class="modal fade" id="staticBackdrop{{ $mtr->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{ $mtr->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel{{ $mtr->id }}">Detail Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">Buatan Dari Pabrik: {{ $mtr->Pembuat }}</p>
                            <p class="text-center">Tanggal Perilisan: {{ $mtr->tanggalrilis }}</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            @php
                $modalTitle = "Konfirmasi Hapus";
            @endphp

            <div class="modal fade" id="deleteModal{{ $mtr->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel{{ $mtr->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deleteModalLabel{{ $mtr->id }}">{{ $modalTitle }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">Are you sure you want to delete the keyboard with Serial Number: <strong>{{ $mtr->SERI }}</strong>?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form action="/monitor/{{ $mtr->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
        </tbody>
    </table>
@endsection

