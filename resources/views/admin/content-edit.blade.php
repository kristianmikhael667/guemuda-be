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
                                    action="/administrator/post/{{ $contents->slug }}">
                                    @method('put')
                                    @csrf
                                    <div class="d-widget-title">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4>Edit Post</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-text-center" uk-grid>
                                        <div class="uk-width-expand@m">

                                            <fieldset class="uk-fieldset mt-3">
                                                {{-- <div class="uk-margin">
                                                    <input class="uk-input" value="{{ old('title', $contents->title) }}"
                                                        name="title" id="title" type="text" placeholder="Title Post">
                                                    @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div> --}}
                                                <div class="uk-margin">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Date Post</span>
                                                    </div>
                                                    <input value="{{old('created_at', date(" m/d/Y",
                                                        $contents->created_at))
                                                    }}" class="uk-input" name="created_at"
                                                    id="created_at" type="text" placeholder="Date Post">
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
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Description</span>
                                                    </div>
                                                    <textarea class="uk-textarea" name="description" id="createnews"
                                                        rows="12"
                                                        placeholder="Textarea">{{ old('description', $contents->description) }}</textarea>
                                                </div>
                                                <div class="uk-margin">
                                                    @if ($contents->type == "image")
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Captions</span>
                                                    </div>
                                                    <input class="uk-input mb-2"
                                                        value="{{ old('title', $contents->captions) }}" name="captions"
                                                        id="captions" type="text" placeholder="Caption Post">
                                                    @error('title')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Image</span>
                                                    </div>
                                                    <input type="hidden" name="oldImage" value="{{ $contents->image }}">
                                                    @if ($contents->image)
                                                    <img src="{{ url('/api/image/' . $images) }}"
                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                    @else
                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    @endif
                                                    <input class="form-control @error('image') is-invalid @enderror"
                                                        type="file" id="image" name="image" onchange="previewImage()">
                                                    @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    @endif

                                                    @if ($contents->type == "video")
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Link Embed</span>
                                                    </div>
                                                    <input class="uk-input mb-2"
                                                        value="{{ old('link', $contents->link) }}" name="link" id="link"
                                                        type="text" placeholder="Link Post">
                                                    @error('link')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Thumbnail</span>
                                                    </div>
                                                    <input type="hidden" name="oldThumbnail"
                                                        value="{{ $contents->thumbnail }}">
                                                    @if ($contents->thumbnail)
                                                    <img src="{{ url('/api/image/' . $thumbnail) }}"
                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                    @else
                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    @endif
                                                    <input class="form-control @error('image') is-invalid @enderror"
                                                        type="file" id="thumbnail" name="thumbnail"
                                                        onchange="previewThumbnail()">
                                                    @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    @endif

                                                    @if ($contents->type == "audio")
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Link Audio Embed</span>
                                                    </div>
                                                    <input class="uk-input mb-2"
                                                        value="{{ old('link_audio', $contents->link_audio) }}"
                                                        name="link_audio" id="link_audio" type="text"
                                                        placeholder="Link Audio Post">
                                                    @error('link_audio')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Thumbnail</span>
                                                    </div>
                                                    <input type="hidden" name="oldThumbnail"
                                                        value="{{ $contents->thumbnail }}">
                                                    @if ($contents->thumbnail)
                                                    <img src="{{ url('/api/image/' . $thumbnail) }}"
                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                    @else
                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    @endif
                                                    <input class="form-control @error('image') is-invalid @enderror"
                                                        type="file" id="thumbnail" name="thumbnail"
                                                        onchange="previewThumbnail()">
                                                    @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    @endif
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
                                                        <label class="mr-2"><input onchange="edit(this)"
                                                                class="uk-radio" id="pas" name="pas"
                                                                value="{{ $item->id }}" {{is_array($parents) &&
                                                                in_array($item->id, $parents) ? 'checked' : '' }}
                                                            type="radio">
                                                            {{ $item->name }}</label>
                                                        @endforeach
                                                    </div>

                                                    <div class="row">
                                                        <p>Sub Category ---------------------------------</p>
                                                        <div id="subid" name="subid" style="display: none">

                                                        </div>
                                                        <p id="cats" style="display: block">{{ $category[0]->name }}</p>

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
                                                        @foreach($tags as $tag)
                                                        <option value="{{$tag->id }}" {{is_array($tagsme) &&
                                                            in_array($tag->id, $tagsme) ? 'selected' : '' }}>
                                                            {{$tag->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Post</button>
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
        function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFReader){
            imgPreview.src = oFReader.target.result;
        }
    }
    </script>

    <script>
        function previewThumbnail(){
            const image = document.querySelector('#thumbnail');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function (oFReader){
                imgPreview.src = oFReader.target.result;
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