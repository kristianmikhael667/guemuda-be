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
                                <form method="post" enctype="multipart/form-data" action="/administrator/post">
                                    @csrf
                                    <div class="d-widget-title">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4>Create Post</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-text-center" uk-grid>
                                        <div class="uk-width-expand@m">

                                            <fieldset class="uk-fieldset mt-3">
                                                <div class="uk-margin">
                                                    <input class="uk-input" value="{{ old('title') }}" name="title"
                                                        id="title" type="text" placeholder="Title Post">
                                                    @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Date Post</span>
                                                    </div>
                                                    <input min='1899-01-01' max='2000-13-13' class="uk-input"
                                                        name="created_at" id="created_at" type="date"
                                                        placeholder="Date Post">
                                                    @error('schedule')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    @error('body')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                    <textarea class="uk-textarea" name="description" id="createnews"
                                                        rows="12"
                                                        placeholder="Textarea">{{ old('description') }}</textarea>
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="uk-margin">
                                                        <select class="uk-select" onchange="yesnoCheck(this)">
                                                            <option disabled="disabled" selected>-- Choose Type File
                                                                Upload --
                                                            </option>
                                                            <option value="on">Upload Image</option>
                                                            <option value="off">Embed Video</option>
                                                            <option value="onof">Embed Audio</option>
                                                        </select>
                                                    </div>
                                                    <div class="uk-margin" id="imagepost" style="display: none">
                                                        <input class="uk-input mb-2 captions" name="captions"
                                                            id="captions" type="text" placeholder="Caption Image Post">
                                                        <input type="file" name="image" id="image" class="dropify"
                                                            data-max-file-size="5M">
                                                    </div>
                                                    <div class="uk-margin" id="videopost" style="display: none">
                                                        {{-- <input class="uk-input mb-2" name="captions" id="captions"
                                                            type="text" placeholder="Caption"> --}}
                                                        <input class="uk-input mb-2 captions" name="link" id="link"
                                                            type="text" placeholder="Input Link Video">
                                                        <input type="file" name="thumbnails" id="thumbnail"
                                                            class="dropify" data-max-file-size="2M">
                                                        {{-- <div class="d-flex">
                                                            <div uk-form-custom="target: true">
                                                                <label for="" class="mr-2">Upload Video</label>
                                                                <input type="file" name="video" id="video">
                                                                <input class="uk-input uk-form-width-medium" type="text"
                                                                    placeholder="Select file video" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div uk-form-custom="target: true">
                                                                <label for="" class="mr-2 mt-2">Upload
                                                                    Thumbnails</label>
                                                                <input type="file" name="thumbnail" id="thumbnail"
                                                                    class="dropify" data-max-file-size="5M">
                                                            </div>

                                                        </div> --}}
                                                    </div>
                                                    <div class="uk-margin" id="audiopost" style="display: none">
                                                        <input class="uk-input mb-2 captions" name="audios" id="audios"
                                                            type="text" placeholder="Input Link Audio">
                                                        <input type="file" name="thumbnailt" id="thumbnail"
                                                            class="dropify" data-max-file-size="2M">
                                                    </div>
                                                </div>
                                            </fieldset>

                                        </div>

                                        <div class="uk-width-1-3@m">
                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Category</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                                    <div class="row">
                                                        @foreach ($categories as $item)
                                                        <label class="mr-2"><input onchange="ganti(this)"
                                                                class="uk-radio" id="category_id" name="category_id"
                                                                value="{{ $item->id }}" type="radio">
                                                            {{ $item->name }}</label>
                                                        @endforeach
                                                    </div>
                                                    <p>Sub Category ------</p>
                                                    <div class="row">
                                                        <div id="subid" name="subid" style="display: none">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Tags</h4>
                                                        </div>
                                                        <div>
                                                            <button uk-toggle="target: #createtags" type="button"
                                                                class="btn btn-outline-primary btn-sm">Add Tags</button>
                                                            {{-- Modal --}}
                                                            @include('admin.modal')
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <select class="uk-input" multiple="multiple" style="width: 100%;"
                                                        name="tags_id[]" id="tagger" data-placeholder="Input Tags"
                                                        required>
                                                        @foreach ($tags as $tag)
                                                        <option value="{{ $tag->id }}">
                                                            {{ $tag->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Tags</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <input multiple="multiple" class="uk-input" name="tags" id="tags"
                                                        type="text" placeholder="Tags News">
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Post</button>
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
            document.getElementById("imagepost").style.display = "block";
            document.getElementById("videopost").style.display = "none";
            document.getElementById("audiopost").style.display = "none";
        } else if (that.value == "off") {
            $(".captions").val(null);
            $(".dropify").next(".dropify-clear").trigger("click");
            document.getElementById("imagepost").style.display = "none";
            document.getElementById("videopost").style.display = "block";
            document.getElementById("audiopost").style.display = "none";
        } else{
            $(".captions").val(null);
            document.getElementById("imagepost").style.display = "none";
            document.getElementById("videopost").style.display = "none";
            document.getElementById("audiopost").style.display = "block";
        }
    }
    </script>
    {{-- Ajax --}}
    @include('admin.ajax')

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