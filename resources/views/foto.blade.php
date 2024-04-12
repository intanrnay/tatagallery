@extends('main')
@section('content')
            {{-- <P>{{$item->tanggal_unggah}}</P> --}}
<style>
.grid-container-01 {
    display: grid;
    grid-template: auto / 12rem 12rem 12rem 12rem;
    grid-gap: 13px;
    grid-column: auto;
    grid-template-areas: 'myArea myArea . . .';
    align-items: start;
}

.modal-body {
}

.detail-foto {
    max-width: auto;
    max-height: 280px;
}

.card-02 {
    display: flex;
    align-items: flex-start;
}

.col-md-4 {
    flex: 0 0 auto;
}

.col-md-5 {
    flex: 1 1 auto;
}

</style>

<div class="grid-container-01">
@foreach ($foto as $item)
    <div class="card-03">
        <div class="card-foto"><img src="{{ asset('storage/foto/'.$item->lokasi_file)}}" style="width: 160px; height:150px"></div>
            <div class="card-inform">
            <p class="text-judul"> {{$item->judul_foto}} </p>
            <p class="text-dalem-01"> {{$item->deskripsi_foto}} </p>
        </div>
        <div class="card-akhir-01">
            <span class="text-dalem-01">
                @php
                $users = App\Models\User::where('id', $item->foto_id)->get();
                @endphp
                @foreach($users as $user)
                <b>@auth {{ $user->username }} @endauth</b>
                @endforeach</span>
            <div class="card-tombol-01">
                    <button type="button" class="tombol-modal" data-bs-toggle="modal" data-bs-target="#ContohModal{{$item->id}}">Details</button>
            </div>
        </div>
    </div>
  
  <!-- Modal -->
  <div class="modal fade" id="ContohModal{{$item->id}}" tabindex="-1" aria-labelledby="contohModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content" style="width: 670px">
            <div class="modal-header">
            <h5 class="modal-title" id="contohModalLabel">Detail Post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="card-02">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/foto/'.$item->lokasi_file)}}" class="detail-foto">
                    </div>
                </div>
                <form id="like-form-{{$photo->id}}" method="POST" action="{{ route('likes.toggle', $photo->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm card-text float-end">❤</button>
                    </form>
                    <a href="{{route('photos.show' , $photo->id)}}" class="btn btn-primary float-start">View</a>
                </div>
                <!-- Form Komentar -->
                <form class="card-footer" method="POST" action="{{ route('comments.store', $photo->id) }}">
                    @csrf
                    <div class="input-group">
                        <textarea name="content" class="form-control" rows="3" placeholder="Add a comment"></textarea>
                        <button type="submit" class="btn btn-success">Comment</button>
                    </div>
                </form>
                <!-- Daftar Komentar -->
                <div class="list-group list-group-flush">
                    @foreach ($photo->photoComments as $comment)
                        <div class="list-group-item">
                            <h6 class="list-group-item-heading"><strong>{{ $comment->user->name }}</strong> <span class="text-muted ms-2">{{ $comment->created_at->diffForHumans() }}</span></h6>
                            <p class="list-group-item-text">{{ $comment->content }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
      </div>
    </div>
  </div>
    @endforeach
</div>


@endsection
