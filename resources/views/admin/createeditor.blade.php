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
                                    action="/administrator/editor/posteditor">
                                    @csrf
                                    <div class="d-widget-title">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h3>Create Editor</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-text-center" uk-grid>
                                        <div class="uk-width-expand@m">

                                            <fieldset class="uk-fieldset mt-3">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="uk-margin">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span>First Name</span>
                                                            </div>
                                                            <input class="uk-input" name="first_name" id="first_name"
                                                                type="text" placeholder="Input Firstname">
                                                            @error('first_name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="uk-margin">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span>Last Name</span>
                                                            </div>
                                                            <input class="uk-input" name="last_name" id="last_name"
                                                                type="text" placeholder="Input Last Name">
                                                            @error('last_name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="uk-margin">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span>Username</span>
                                                            </div>
                                                            <input class="uk-input" name="username" id="username"
                                                                type="text" placeholder="Input Username">
                                                            @error('username')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="uk-margin">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span>Phone Number</span>
                                                            </div>
                                                            <input class="uk-input" name="phone_number"
                                                                id="phone_number" type="number"
                                                                placeholder="Input Number">
                                                            @error('phone_number')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="uk-margin">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span>Email</span>
                                                            </div>
                                                            <input class="uk-input" name="email" id="email" type="email"
                                                                placeholder="Input Email">
                                                            @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="uk-margin">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span>Password</span>
                                                            </div>
                                                            <input class="uk-input" name="password" id="password" type="password"
                                                                placeholder="Input Password">
                                                            @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="uk-margin">
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <span>Password Confirm</span>
                                                            </div>
                                                            <input class="uk-input" name="password_confirmation"
                                                                id="password_confirmation" type="password"
                                                                placeholder="Input Password Confirm">
                                                            @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <input class="uk-input" value="{{ $roles['name'] }}"
                                                        name="rolesname" id="rolesname" type="hidden"
                                                        placeholder="Input Number">
                                                    <input class="uk-input" value="{{ $roles['id'] }}" name="roles"
                                                        id="roles" type="hidden" placeholder="Input Number">
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Admin</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content -->
    <script>
        function yesnoCheck(that) {
        if (that.value == "on") {
            $(".captions").val(null);
            document.getElementById("survey-question").style.display = "block";
            // document.getElementById("videopost").style.display = "none";
            // document.getElementById("audiopost").style.display = "none";
        } else if (that.value == "off") {
            $(".captions").val(null);
            $(".dropify").next(".dropify-clear").trigger("click");
            document.getElementById("survey-question").style.display = "none";
            // document.getElementById("videopost").style.display = "block";
            // document.getElementById("audiopost").style.display = "none";
        } else{
            $(".captions").val(null);
            document.getElementById("survey-question").style.display = "none";
            // document.getElementById("videopost").style.display = "none";
            // document.getElementById("audiopost").style.display = "block";
        }
    }
    </script>
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