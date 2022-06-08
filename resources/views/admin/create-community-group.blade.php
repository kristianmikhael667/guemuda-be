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
                                <form method="post" enctype="multipart/form-data"
                                    action="/administrator/communitiesgroup">
                                    @csrf
                                    <div class="d-widget-title">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h3>Create Community Group</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-text-center" uk-grid>

                                        <div class="uk-width-1-1@m">
                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Name Group</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card">
                                                    {{-- <fieldset class="uk-fieldset mt-3"> --}}
                                                        <div class="uk-margin">

                                                            <input class="uk-input" name="namegroup" id="namegroup"
                                                                type="text" placeholder="Name Group">
                                                            @error('title')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>

                                                        <div class="uk-margin">
                                                            @error('description')
                                                            <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span>Description</span>
                                                            </div>
                                                            <textarea class="uk-textarea" name="desc" id="createnews"
                                                                rows="12"
                                                                placeholder="Textarea">{{ old('description') }}</textarea>
                                                        </div>

                                                        {{--
                                                    </fieldset> --}}
                                                </div>

                                            </div>
                                        </div>


                                        <div class="uk-width-1-2@m">
                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Social Media Group</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <div class="input-group flex-nowrap">
                                                        <span class="input-group-text" id="addon-wrapping"><i
                                                                class="fa fa-whatsapp" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="text" name="linkwa" class="uk-input"
                                                            placeholder="Input Whatsapp" aria-label="Username"
                                                            aria-describedby="addon-wrapping">
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover mt-2">
                                                    <div class="input-group flex-nowrap">
                                                        <span class="input-group-text" id="addon-wrapping"><i
                                                                class="fa fa-telegram" aria-hidden="true"></i>
                                                        </span>
                                                        <input name="linktele" type="text" class="uk-input"
                                                            placeholder="Input Telegram" aria-label="Username"
                                                            aria-describedby="addon-wrapping">
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover mt-2">
                                                    <div class="input-group flex-nowrap">
                                                        <span class="input-group-text" id="addon-wrapping"><i
                                                                class="fa fa-twitter" aria-hidden="true"></i>
                                                        </span>
                                                        <input name="linktwit" type="text" class="uk-input"
                                                            placeholder="Input Twitter" aria-label="Username"
                                                            aria-describedby="addon-wrapping">
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover mt-2">
                                                    <div class="input-group flex-nowrap">
                                                        <span class="input-group-text" id="addon-wrapping"><i
                                                                class="fa fa-instagram" aria-hidden="true"></i>
                                                        </span>
                                                        <input name="linkig" type="text" class="uk-input"
                                                            placeholder="Input Instagram" aria-label="Username"
                                                            aria-describedby="addon-wrapping">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="uk-width-1-2@m">
                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Profile Group</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <input type="file" name="profile" id="profile" class="dropify"
                                                        data-max-file-size="2M">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Community Group</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content -->
    {{-- Ajax --}}
    @include('admin.ajax-webinar')

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