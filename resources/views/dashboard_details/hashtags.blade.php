@extends('dashboard.index')

@section('content')
    <div class="tab-pane fade show active" id="v-pills-hashtag" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div id="div1" class="hashtag-table mt-4">
            <div class="hash-top-nav">
                <div class="h-tp-1">
                    <div class="tp-b-1">
                        {{-- <span>show</span>
                        <select aria-label="Default select example">
                            <!-- <option selected>Open this select menu</option> -->
                            <option value="1">10</option>
                            <option value="2">20</option>
                            <option value="3">50</option>
                        </select>
                        <span>Entries</span> --}}
                    </div>
                    <div class="tp-b-2">
                        <input type="search" placeholder="Search">
                        <img src="./img/new-search-icon.png" alt="">
                    </div>
                </div>
                <div class="hash-button-div">
                    <a class="hashtag-button" id="toggleButton" href="#">+ Hashtag</a>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th colspan="2">Hashtag</th>
                        <th>Post</th>
                        <th>Video</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paginator as $ht)
                        <tr>
                            <td>{{ $ht->getObjectId() }}</td>
                            <td colspan="2">{{ $ht->hashtag }}</td>
                            <td>--</td>
                            <td>--</td>
                            <td>
                                <a href="{{ route('edit_hashtag',['id'=>$ht->getObjectId()]) }}"><img src="./img/Lr-edit-icon.png" alt=""></a>
                                <form action="{{ route('delete_hashtag', $ht->getObjectId()) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this hashtag?')"
                                        style="    background: none;
                                                    border: none;"><img src="./img/Lr-delete-icon.png"
                                            alt=""></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <nav class="all-navigation mt-3" aria-label="Page navigation example">
                <ul class="pagination">
                    {{ $paginator->links('pagination::bootstrap-4') }}
                </ul>
            </nav>

        </div>

        <div class="hashtag-edit" id="div2" style="display: none;">
            <form action="{{ url('insert/hashtags') }}" method="POST">
                @csrf
                <div class="hte-1 mb-4" onclick="history.back()">
                    <p>Add New Hashtag</p><span><img src="./img/close-icon.png" alt=""></span>
                </div>
                <div class="hte-2 mb-4"><label for="*Hashtag">Hashtag</label>
                    <textarea name="hashtags" id="hedit-text" rows="4" placeholder="add multiple hashtag separate by comma(),"></textarea>
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
