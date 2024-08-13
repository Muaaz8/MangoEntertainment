@extends('dashboard.index')

@section('content')
<div class="tab-pane fade show active" id="v-pills-Gifts" role="tabpanel" aria-labelledby="v-pills-Gifts-tab">
    <section id="div3" class="gift-section">
        <div class="gift-table mt-4">
            <div class="gift-top-nav">
                <div class="g-tp-1">
                    <div class="gp-b-2">
                        <input type="search" placeholder="Search">
                        <img src="./img/new-search-icon.png" alt="">
                    </div>
                </div>
                <div class="gift-button-div">
                    <a class="gift-button" id="toggle-Button" href="#">+ Music</a>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Object id</th>
                        <th>Name</th>
                        <th>Url</th>
                        <th>Singer Name</th>
                        <th>ThumbnailURL</th>
                        <th>Ation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paginator as $music)
                    <tr>
                        <td>{{ $music->getObjectId() }}</td>
                        <td>{{ $music->audioName }}</td>
                        <td>{{ $music->audioURL->getName() }}</td>
                        <td>{{ $music->singerName }}</td>
                        <td>{{ $music->thumbnailURL->getName() }}</td>
                        <td>
                            <a href="{{ $music->audioURL->geturl() }}" target="_blank"><img src="./img/play-button.png" width="20px" alt=""></a>
                            <form action="{{ route('delete_music', $music->getObjectId()) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this music?')"
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
    </section>

    <div id="div4" style="display: none;" class="Add-new-gift">
        <div class="gift-box-1">
            <p>Add New Music</p><img src="./img/close-icon.png" alt="">
        </div>
        <form action="{{ url('insert/music') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="gift-details">
                <div class="fin">
                    <label for="name"><span class="color-red">*</span>Name</label>
                    <input type="text" name="audioName" placeholder="Music Name">
                </div>
                <div class="fin">
                    <label for="lname"><span class="color-red">*</span>Singer Name</label>
                    <input type="text" name="singerName" placeholder="Singer Name">
                </div>
            </div>
            <h6>Upload Files</h6>
            <div class="gift-darg-drop">
                <div class="gdd-upload-1" style="width: 100%;">
                    <div class="gup-box-1">
                        <label style="display: contents;">
                            <img src="./img/png-uploader-icon.png" alt="">
                            <span>Upload PNG</span>
                            <input type="file" accept=".png" name="image" style="display: none;">
                        </label>
                    </div>
                    <div class="gup-box-2">
                        <label>
                            <img src="./img/music-icon-lr.png" alt="">
                            <p><img src="./img/cloud-icon.png" alt="">Upload Music</p>
                            <input type="file" accept=".mp3" name="music" style="display: none;">
                        </label>
                    </div>
                </div>
            </div>
            <div class="add-cancel-button">
                <button class="add-button" style="width: 100%" type="submit">Add</a>
            </div>
        </form>
    </div>

</div>
@endsection
