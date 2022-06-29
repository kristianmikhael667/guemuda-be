@extends('layouts.main')
@section('container')
<div class="theme-layout">
    @include('partials_admin.responsiveheader')
    @include('partials_admin.header')
    @include('partials_admin.topsubbar')
    @include('partials_admin.sidebar')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-content">
                    {{-- <h4 class="main-title">Users Management</h4> --}}

                    <div class="row merged20 mb-4">
                        <div class="col-lg-12">
                            <div class="d-widget">
                                <div class="d-widget-title">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>{{ $title->title }}</h4>
                                        </div>
                                    </div>
                                </div>
                                @if(session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{session('success')}}
                                </div>
                                @endif
                                <div class="d-widget-title">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <form action="/administrator/comment/{{ $slug }}" method="get"
                                                role="search">
                                                <div class="input-group">
                                                    @if (request('user'))
                                                    <input type="text" class="form-control" name="user"
                                                        placeholder="Search Comment Post" value="{{ request('user') }}">
                                                    @endif
                                                    <input type="text" class="form-control" name="search"
                                                        placeholder="Search Comment Post"
                                                        value="{{ request('search') }}">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-outline-secondary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-search">
                                                                <circle cx="11" cy="11" r="8"></circle>
                                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table start -->
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>User</th>
                                            <th>Comment</th>
                                            <th>Status</th>
                                            <th>Created</th>
                                            <th>Updated</th>
                                            <th class="disableFilterBy">Approve Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($comments as $num => $comment)

                                        <tr>
                                            <td>{{ $comments->firstItem() + $num }}</td>
                                            <td>{{ $comment->user['username'] ?? null }}</td>

                                            <td>{{ $comment->body }}</td>

                                            <td>
                                                @if ($comment->status == "pending")
                                                <span class="text-warning">{{ $comment->status == "pending" ? "Pending"
                                                    : ""
                                                    }}</span>
                                                @elseif ($comment->status == "accept")
                                                <span class="text-success">{{ $comment->status == "accept" ? "Accept" :
                                                    "" }}</span>
                                                @else
                                                <span class="text-danger">{{ $comment->status == "reject" ? "Reject" :
                                                    "" }}</span>
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($comment->updated_at)->diffForHumans() }}</td>
                                            <td>
                                                @if ($comment->status == "accept")
                                                <form action="/administrator/comment/{{ $comment->id }}" method="post"
                                                    class="d-inline">
                                                    @method('put')
                                                    @csrf
                                                    <button value="reject" name="status"
                                                        style="display:inline-block; width:25%"
                                                        class="badge btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                        </svg></button>
                                                </form>

                                                @elseif ($comment->status == "reject")
                                                <form action="/administrator/comment/{{ $comment->id }}" method="post"
                                                    class="d-inline">
                                                    @method('put')
                                                    @csrf
                                                    <button value="accept" name="status"
                                                        style="display:inline-block; width:25%"
                                                        class="badge btn-success"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg></button>
                                                </form>

                                                @else
                                                <form action="/administrator/comment/{{ $comment->id }}" method="post"
                                                    class="d-inline">
                                                    @method('put')
                                                    @csrf
                                                    <button value="accept" name="status"
                                                        style="display:inline-block; width:25%"
                                                        class="badge btn-success"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg></button>
                                                </form>

                                                <form action="/administrator/comment/{{ $comment->id }}" method="post"
                                                    class="d-inline">
                                                    @method('put')
                                                    @csrf
                                                    <button value="reject" name="status"
                                                        style="display:inline-block; width:25%"
                                                        class="badge btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                        </svg></button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>

                                        @empty
                                        <tr>
                                            <td colspan="8" class="prova">
                                                Data Table Empty
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $comments->links('vendor.pagination.default') }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content -->

    <div class="popup-wraper">
        <div class="popup">
            <span class="popup-closed"><i class="icofont-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5><i class="icofont-envelope"></i> Send Message</h5>
                </div>
                <div class="send-message">
                    <form method="post" class="c-form">
                        <input type="text" placeholder="Enter Name..">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Write Message"></textarea>
                        <div class="uploadimage">
                            <i class="icofont-file-jpg"></i>
                            <label class="fileContainer">
                                <input type="file">Attach file
                            </label>
                        </div>
                        <button type="submit" class="main-btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- send message popup -->

    <div class="side-slide">
        <span class="popup-closed"><i class="icofont-close"></i></span>
        <div class="slide-meta">
            <ul class="nav nav-tabs slide-btns">
                <li class="nav-item"><a class="active" href="#messages" data-toggle="tab">Messages</a></li>
                <li class="nav-item"><a class="" href="#notifications" data-toggle="tab">Notifications</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active fade show" id="messages">
                    <h4><i class="icofont-envelope"></i> messages</h4>
                    <a href="#" class="send-mesg" title="New Message" data-toggle="tooltip"><i
                            class="icofont-edit"></i></a>
                    <ul class="new-messages">
                        <li>
                            <figure><img src="images/resources/user1.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Ibrahim Ahmed</span>
                                <a href="#" title="">Helo dear i wanna talk to you</a>
                            </div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user2.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Fatima J.</span>
                                <a href="#" title="">Helo dear i wanna talk to you</a>
                            </div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user3.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Fawad Ahmed</span>
                                <a href="#" title="">Helo dear i wanna talk to you</a>
                            </div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user4.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Saim Turan</span>
                                <a href="#" title="">Helo dear i wanna talk to you</a>
                            </div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user5.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Alis wells</span>
                                <a href="#" title="">Helo dear i wanna talk to you</a>
                            </div>
                        </li>
                    </ul>
                    <a href="#" title="" class="main-btn" data-ripple="">view all</a>
                </div>
                <div class="tab-pane fade" id="notifications">
                    <h4><i class="icofont-bell-alt"></i> notifications</h4>
                    <ul class="notificationz">
                        <li>
                            <figure><img src="images/resources/user5.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Alis wells</span>
                                <a href="#" title="">recommend your post</a>
                            </div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user4.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Alis wells</span>
                                <a href="#" title="">share your post <strong>a good time today!</strong></a>
                            </div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user2.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Alis wells</span>
                                <a href="#" title="">recommend your post</a>
                            </div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user1.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Alis wells</span>
                                <a href="#" title="">share your post <strong>a good time today!</strong></a>
                            </div>
                        </li>
                        <li>
                            <figure><img src="images/resources/user3.jpg" alt=""></figure>
                            <div class="mesg-info">
                                <span>Alis wells</span>
                                <a href="#" title="">recommend your post</a>
                            </div>
                        </li>
                    </ul>
                    <a href="#" title="" class="main-btn" data-ripple="">view all</a>
                </div>
            </div>
        </div>
    </div>
    <!-- side slide message & popup -->
</div>
@endsection