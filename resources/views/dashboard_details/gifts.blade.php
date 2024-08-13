@extends('dashboard.index')

@section('content')
<div class="tab-pane fade show active" id="v-pills-Gifts" role="tabpanel" aria-labelledby="v-pills-Gifts-tab">
    <section id="div3" class="gift-section">
        <div class="gift-table mt-4">
            <div class="gift-top-nav">
                <div class="g-tp-1">
                    {{-- <div class="gp-b-1">
                        <span>show</span>
                        <select aria-label="Default select example">
                            <!-- <option selected>Open this select menu</option> -->
                            <option value="1">10</option>
                            <option value="2">20</option>
                            <option value="3">50</option>
                        </select>
                        <span>Entries</span>
                    </div> --}}
                    <div class="gp-b-2">
                        <input type="search" placeholder="Search">
                        <img src="./img/new-search-icon.png" alt="">
                    </div>
                </div>
                <div class="gift-button-div">
                    <a class="gift-button" id="toggle-Button" href="#">+ Gift</a>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Object id</th>
                        <th>Gift</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Coin</th>
                        <th>Created At</th>
                        <th>Ation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paginator as $gift)
                    <tr>
                        <td>{{ $gift->getObjectId() }}</td>
                        <td><img src="{{ $gift->image->geturl() }}" alt=""></td>
                        <td>{{ $gift->name }}</td>
                        <td><a class="all-gift-button" href="">{{ $gift->categories }}</a></td>
                        <td><img src="./img/coin-icon.png" alt="">{{ $gift->coins }}</td>
                        <td>{{$gift->created_at}}</td>
                        <td>
                            <form action="{{ route('delete_gift', $gift->getObjectId()) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this Gift?')"
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
            <p>Add New gift</p><img src="./img/close-icon.png" alt="">
        </div>
        <form action="{{ url('insert/gifts') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="gift-details">
                <div class="fin">
                    <label for="name"><span class="color-red">*</span>Name</label>
                    <input type="text" name="name" placeholder="Give a name to a gift">
                </div>
                <div class="fse">
                    <label for="category"><span class="color-red">*</span>Category</label>
                    <select name="category">
                        <option value="All Gifts">All Gifts</option>
                        <option value="New">New</option>
                        <option value="Store">Store</option>
                    </select>
                </div>
                <div class="fin">
                    <label for="lname"><span class="color-red">*</span>Coins</label>
                    <input type="text" name="coins" placeholder="Coins Needed to send the gift">
                </div>
            </div>
            <h6>Upload Files</h6>
            <div class="gift-darg-drop">
                <div class="gdd-upload-1">
                    <div class="gup-box-1">
                        <label style="display: contents;">
                            <img src="./img/png-uploader-icon.png" alt="">
                            <span>Upload PNG</span>
                            <input type="file" accept=".png" name="image" style="display: none;">
                        </label>
                    </div>
                    <div class="gup-box-2" >
                        <label style="display: contents;">
                            <img src="./img/svga-uploader-icon.png" alt="">
                            <span>Upload SVGA</span>
                            <input type="file" accept=".svga" name="file" style="display: none;">
                        </label>
                    </div>
                </div>
                <div class="gdd-upload-2">.
                    <label>
                        <img src="./img/music-icon-lr.png" alt="">
                        <p><img src="./img/cloud-icon.png" alt="">Upload Music</p>
                        <input type="file" accept=".mp3" name="music" style="display: none;">
                    </label>
                </div>
            </div>
            <div class="add-cancel-button">
                <button class="add-button" type="submit">Add</a>
            </div>
        </form>
    </div>

</div>
@endsection
