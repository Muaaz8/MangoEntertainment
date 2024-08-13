@extends('dashboard.index')

@section('content')
    <div class="tab-pane fade show active" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
        <section class="user-section mt-4">
            <div class="user-top-nav">
                <div class="tp-b-1">
                </div>
                <div class="tp-b-2">
                    <input type="search" placeholder="Search">
                    <img src="./img/new-search-icon.png" alt="">
                </div>

            </div>
            <div class="user-table">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Login</th>
                            <th>Device</th>
                            <th>Country</th>
                            <th>Coin</th>
                            <th>Level</th>
                            <th>Gender</th>
                            <th>Verification</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paginator as $user)
                            <tr>
                                <td>{{ $user->getObjectId() }}</td>
                                <td><img src="./img/profile-image.png" alt=""></td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if($user->authData)
                                        <img src="./img/gogle-icon.png" alt="">Google
                                    @else
                                        Platform
                                    @endif
                                </td>
                                <td>{{ $user->device?$user->device:"Web" }}</td>
                                <td>{{ $user->country }}</td>
                                <td><img src="./img/coin-icon.png" alt="">{{ $user->coins }}</td>
                                <td>{{ $user->level }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>
                                    @if ($user->emailVerified)
                                        <a class="Verified-button" href="#">Verified</a>
                                    @else
                                        <a class="Verified-button" href="#">Unverified</a>
                                    @endif
                                </td>
                                {{-- <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                        href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
                                </td> --}}
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
    </div>
@endsection
