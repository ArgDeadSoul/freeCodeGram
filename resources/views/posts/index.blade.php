@extends('layouts.app')  

@section('content')
<div class="container">
    @foreach ($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/freeCodeGram/public/p/{{ $post->id }}"><img src="{{ asset('storage/' . $post->image) }}" class="w-100"></a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-4 offset-2">
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{$post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/freeCodeGram/public/profile/{{ $post->user->id}}"><span class="text-dark">{{ $post->user->username }}</span></a>
                            </div>
                        </div>
                    </div>
                <p class="offset-3">{{ $post->caption }}</p>
                <hr>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
