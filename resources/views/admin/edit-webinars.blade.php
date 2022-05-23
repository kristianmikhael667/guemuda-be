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
                                <form method="post" enctype="multipart/form-data" action="/administrator/webinars/{{$webinar->slug}}">
                                    @method('put')
                                    @csrf
                                    <div class="d-widget-title">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h3>Edit Webinars</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-text-center" uk-grid>
                                        <div class="uk-width-expand@m">

                                            <fieldset class="uk-fieldset mt-3">
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Title</span>
                                                    </div>
                                                    <input class="uk-input" name="title" id="title" type="text"
                                                        required value="{{old('title', $webinar->title)}}">
                                                    @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Slug</span>
                                                    </div>
                                                    <input class="uk-input" name="slug" id="slug" type="text"
                                                        required value="{{old('slug', $webinar->slug)}}">
                                                    @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Schedule Webinar</span>
                                                    </div>
                                                    <input min='1899-01-01' max='2000-13-13' class="uk-input"
                                                        name="schedule" id="schedule" type="date"
                                                        value="{{old('schedule', $webinar->schedule)}}">
                                                    @error('schedule')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Type Webinar</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="typewebinar" id="typewebinar1" value="0">
                                                        <label class="form-check-label" for="typewebinar1">
                                                            Umum
                                                        </label>
                                                        </div>
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="typewebinar" id="typewebinar2" value="1" checked>
                                                        <label class="form-check-label" for="typewebinar2">
                                                            Premium
                                                        </label>
                                                        </div>
                                                    @error('typewebinar')
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
                                                    <textarea class="uk-textarea" name="description" id="createnews"
                                                        rows="12"
                                                        >{{old('description', $webinar->description)}}</textarea>
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="uk-margin" id="imagepost">
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span>Image Poster</span>
                                                        </div>
                                                        <input type="file" name="avatar" id="avatar" class="dropify"
                                                            data-max-file-size="5M" value="{{old('avatar', $webinar->avatar)}}">
                                                    </div>
                                                </div>

                                                {{-- Question Input --}}
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 1</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question1" id="question1" type="text" value="{{old('question1', $webinar->survey_question1)}}"/>
                                                    @error('survey_question1')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 2</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question2" id="question2" type="text" value="{{old('question2', $webinar->survey_question2)}}
                                                    ">
                                                    @error('survey_question2')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 3</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question3" id="question3" type="text" value="{{old('question3', $webinar->survey_question3)}}
                                                    ">
                                                    @error('survey_question3')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 4</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question4" id="question4" type="text" value="{{old('question4', $webinar->survey_question4)}}
                                                    ">
                                                    @error('survey_question4')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 5</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question5" id="question5" type="text" value="{{old('question5', $webinar->survey_question5)}}
                                                    ">
                                                    @error('survey_question5')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 6</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question6" id="question6" type="text" value="{{old('question6', $webinar->survey_question6)}}
                                                    ">
                                                    @error('survey_question6')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 7</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question7" id="question7" type="text" value="{{old('question7', $webinar->survey_question7)}}
                                                    ">
                                                    @error('survey_question7')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 8</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question8" id="question8" type="text" value="{{old('question8', $webinar->survey_question8)}}
                                                    ">
                                                    @error('survey_question8')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 9</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question9" id="question9" type="text" value="{{old('question9', $webinar->survey_question9)}}
                                                    ">
                                                    @error('survey_question9')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Survey Question 10</span>
                                                    </div>
                                                    <input class="uk-input" name="survey_question10" id="question10" type="text" value="{{old('question10', $webinar->survey_question10)}}
                                                    ">
                                                    @error('survey_question10')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </fieldset>

                                        </div>

                                        <div class="uk-width-1-3@m">
                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Part Owner</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <input class="uk-input" name="organizer" id="organizer" type="text"
                                                         value="{{old('organizer', $webinar->organizer)}}">
                                                </div>

                                                <div class="uk-card uk-card-hover mt-2">
                                                    <input class="uk-input" name="moderator" id="moderator" type="text"
                                                         value="{{old('moderator', $webinar->moderator)}}">
                                                </div>

                                                <div class="uk-card uk-card-hover mt-2">
                                                    <input class="uk-input" name="speaker" id="speaker" type="text"
                                                    value="{{old('speaker', $webinar->speaker)}}">
                                                </div>

                                                <div class="uk-card uk-card-hover mt-2">
                                                    <input class="uk-input" name="speaker2" id="speaker2" type="text"
                                                        placeholder="Input Speakers 2" value="{{old('speaker_2', $webinar->speaker_2)}}">
                                                </div>
                                            </div>

                                            <div class="uk-card uk-card-default uk-card-body">
                                                <div class="d-widget-title">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h4>Part Location</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <input class="uk-input" name="address" id="address" type="text"
                                                    value="{{old('address', $webinar->address)}}">
                                                </div>

                                                <div class="uk-card uk-card-hover mt-2">
                                                    <input class="uk-input" name="links_maps" id="links_maps"
                                                        type="text" value="{{old('links_maps', $webinar->links_maps)}}">
                                                </div>
                                            </div>

                                            <div class=" uk-card uk-card-default uk-card-body">
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
                                                        <label class="mr-2"><input class="uk-radio"
                                                                name="category_event" value="{{ $item->id }}"
                                                                type="radio">
                                                            {{ $item->name }}</label>
                                                        @endforeach
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
                                                            <button uk-toggle="target: #createtagswebinars"
                                                                type="button" class="btn btn-outline-primary btn-sm">Add
                                                                Tags</button>
                                                            {{-- Modal --}}
                                                            @include('admin.modal-tags-webinar')
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-card uk-card-hover">
                                                    <select class="uk-input" multiple="multiple" style="width: 100%;"
                                                        name="tags_event[]" id="tagger" data-placeholder="tages" 
                                                        required>
                                                        @foreach ($tages as $tag)
                                                        <option value="{{ $tag->id }}">
                                                            {{ $tag->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Edit Webinars</button>
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