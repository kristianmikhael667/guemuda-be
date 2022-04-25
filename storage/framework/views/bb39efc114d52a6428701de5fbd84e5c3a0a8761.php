<div class="post-new-popup">
    <div class="popup" style="width: 800px;">
        <span class="popup-closed"><i class="icofont-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <h5><i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg></i>Create
                    New Post</h5>
            </div>
            <div class="post-new">
                <div class="post-newmeta">
                    <ul class="post-categoroes">
                        <li><i class="icofont-camera"></i> Photo / Video</li>
                        <li><i class="icofont-google-map"></i> Post Location</li>
                        <li><i class="icofont-file-gif"></i> Post Gif</li>
                        <li><i class="icofont-ui-tag"></i> Tag to Friend</li>
                        <li><i class="icofont-users"></i> Share in Group</li>
                        <li><i class="icofont-link"></i> Share Link</li>
                        <li><i class="icofont-video-cam"></i> Go Live</li>
                        <li><i class="icofont-sale-discount"></i> Post Online Course</li>
                        <li><i class="icofont-read-book"></i> Post A Book</li>
                        <li><i class="icofont-globe"></i> Post an Ad</li>
                    </ul>
                    <form method="post" class="dropzone" action="/upload-target">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                    </form>
                </div>
                <form method="post" class="c-form">
                    <textarea id="emojionearea1" placeholder="What's On Your Mind?"></textarea>
                    <div class="activity-post">
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox" checked>
                            <label for="checkbox"><span>Activity Feed</span></label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox2" checked>
                            <label for="checkbox2"><span>My Story</span></label>
                        </div>
                    </div>
                    <div class="select-box">
                        <div class="select-box__current" tabindex="1">
                            <div class="select-box__value"><input class="select-box__input" type="radio" id="0"
                                    value="1" name="Ben" checked="checked" />
                                <p class="select-box__input-text"><i class="icofont-globe-alt"></i> Public</p>
                            </div>
                            <div class="select-box__value"><input class="select-box__input" type="radio" id="1"
                                    value="2" name="Ben" checked="checked" />
                                <p class="select-box__input-text"><i class="icofont-lock"></i> Private</p>
                            </div>
                            <div class="select-box__value"><input class="select-box__input" type="radio" id="2"
                                    value="3" name="Ben" checked="checked" />
                                <p class="select-box__input-text"><i class="icofont-user"></i> Specific Friend</p>
                            </div>
                            <div class="select-box__value"><input class="select-box__input" type="radio" id="3"
                                    value="4" name="Ben" checked="checked" />
                                <p class="select-box__input-text"><i class="icofont-star"></i> Only Friends</p>
                            </div>
                            <div class="select-box__value"><input class="select-box__input" type="radio" id="4"
                                    value="5" name="Ben" checked="checked" />
                                <p class="select-box__input-text"><i class="icofont-users-alt-3"></i> Joined Groups</p>
                            </div>
                            <img class="select-box__icon" src="images/arrow-down.svg" alt="Arrow Icon"
                                aria-hidden="true" />
                        </div>
                        <ul class="select-box__list">
                            <li><label class="select-box__option" for="0"><i class="icofont-globe-alt"></i>
                                    Public</label></li>
                            <li><label class="select-box__option" for="1"><i class="icofont-lock"></i> Private</label>
                            </li>
                            <li><label class="select-box__option" for="2"><i class="icofont-user"></i> Specific
                                    Friend</label></li>
                            <li><label class="select-box__option" for="3"><i class="icofont-star"></i> Only
                                    Friends</label></li>
                            <li><label class="select-box__option" for="4"><i class="icofont-users-alt-3"></i> Joined
                                    Groups</label></li>
                        </ul>
                    </div>
                    <input class="schedule-btn" type="text" id="datetimepicker" readonly>
                    <input type="text" placeholder="https://www.youtube.com/watch?v=vgvsuiFlA-Y&t=56s">
                    <button type="submit" class="main-btn">Publish</button>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH /Users/mike/laravel/Gue-Muda/resources/views/admin/modal-create-post.blade.php ENDPATH**/ ?>