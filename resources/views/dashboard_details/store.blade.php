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
                            <th>Author</th>
                            <th>Author UID</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paginator as $user)
                            <tr>
                                <td>{{ $user->getObjectId() }}</td>
                                @if ($user->author)
                                    <td>{{ $user->author->first_name }}</td>
                                @else
                                    <td>-</td>
                                @endif
                                <td>{{ $user->authorUid }}</td>
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
