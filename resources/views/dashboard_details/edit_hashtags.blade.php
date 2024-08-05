@extends('dashboard.index')

@section('content')
    <div class="tab-pane fade show active" id="v-pills-hashtag" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="hashtag-edit" id="div2">
            <form action="{{ url('insert/hashtags') }}" method="POST">
                @csrf
                <div class="hte-1 mb-4" onclick="history.back()">
                    <p>Add New Hashtag</p><span><img src="./img/close-icon.png" alt=""></span>
                </div>
                <div class="hte-2 mb-4"><label for="*Hashtag">Hashtag</label>
                    <textarea name="hashtags" id="hedit-text" rows="4" placeholder="add multiple hashtag separate by comma(),">{{ $hashtags[0]->hashtag }}</textarea>
                </div>
                <div class="hte-3">
                    <button class="cancel-button" onclick="history.back()" type="button">Cancel</button>
                    <button class="add-button" type="submit">Add</button>
                    {{-- <a class="cancel-button" href="">Cancel</a>
                    <a class="add-button" href="">Add</a> --}}
                </div>
            </form>
        </div>
    </div>
@endsection
