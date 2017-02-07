<?php $imageUploadPath = UPLOADS . '/images'; ?>
<section>
    <div class="layout-row layout-xs-column">
        <div class="flex-25 flex-xs-100 layout-column video-section">
            <?php foreach ($songs_data as $song) { ?>
            <div>
                <img src="<?php echo base_url('uploads/images').'/'.$song['Image'] ?>">
            </div>
                <?php
            }
            ?>
        </div>
        <div class="layout-column flex-45 flex-xs-100 ">
            <div class="layout-column comment-section">
                <audio controls>
                    <source src="horse.ogg" type="audio/ogg">
                </audio>
                <div class="layout-row action-wrapper">
                    <div class="layout-row layout-align-start-center flex-20"><i class="fa fa-thumbs-up"></i> Like</div>
                    <div class="layout-row layout-align-start-center flex-20"><i class="fa fa-comment"></i> Comments</div>
                    <div class="layout-row layout-align-end-center flex-20"><i class="fa fa-share"></i> Share</div>
                </div>
                <div class="layout-row comment-count">
                    <span><i class="fa fa-thumbs-up"></i></span>
                    <span class="heart"> <i class="fa fa-heart"></i></span>
                    <a href="#">Anuska , neha and 22 more</a>
                </div>
                <div class="layout-row comment-wrap">
                    <span class="flex-75">View Previous Comments</span>
                    <span class="flex-50 no-count">4 out 9</span>
                </div>
                <div class="layout-row user-comments">
                    <img src="img/no_picture.png" alt="user-image"/>
                    <div class="layout-column user-detail">
                        <div class="layout-row">
                            <span class="user-name">Lokesdh tiwari</span>
                            <span>Congret bhai shaib</span>
                        </div>
                        <div class="layout-row">
                            <span class="user-name">Like</span>
                            <span class="user-name">Reply</span>
                            <span>28 min agao</span>
                        </div>
                    </div>

                </div>
                <div class="layout-row user-comments">
                    <img src="img/no_picture.png" alt="user-image"/>
                    <div class="layout-column user-detail">
                        <div class="layout-row">
                            <span class="user-name">Lokesdh tiwari</span>
                            <span>Congret bhai shaib</span>
                        </div>
                        <div class="layout-row">
                            <span class="user-name">Like</span>
                            <span class="user-name">Reply</span>
                            <span>28 min</span>
                        </div>
                    </div>

                </div>
                <div class="layout-column comment-wrap">
                    <span>View more Comments</span>
                </div>
                <div class="layout-row user-comments">
                    <img src="img/no_picture.png" alt="user-image"/>
                    <div class="input-area"><input placeholder="Write a Comments"/>
                        <i class="fa fa-camera"></i>
                        <i class="fa fa-smile-o"></i>
                    </div>
                </div>

            </div>
            <div class="layout-column comment-section">
                <div class="layout-column layout-align-center-center">
                    <video height="170" controls>
                        <source src="https://www.youtube.com/" type="video/mp4">
                    </video>
                </div>
                <div class="layout-row action-wrapper">
                    <div class="layout-row layout-align-start-center flex-20"><i class="fa fa-thumbs-up"></i> Like</div>
                    <div class="layout-row layout-align-start-center flex-20"><i class="fa fa-comment"></i> Comments</div>
                    <div class="layout-row layout-align-end-center flex-20"><i class="fa fa-share"></i> Share</div>
                </div>
                <div class="layout-row comment-count">
                    <span><i class="fa fa-thumbs-up"></i></span>
                    <span class="heart"> <i class="fa fa-heart"></i></span>
                    <a href="#">Anuska , neha and 22 more</a>
                </div>
                <div class="layout-row comment-wrap">
                    <span class="flex-75">View Previous Comments</span>
                    <span class="flex-50 no-count">4 out 9</span>
                </div>
                <div class="layout-row user-comments">
                    <img src="img/no_picture.png" alt="user-image"/>
                    <div class="layout-column user-detail">
                        <div class="layout-row">
                            <span class="user-name">Lokesdh tiwari</span>
                            <span>Congret bhai shaib</span>
                        </div>
                        <div class="layout-row">
                            <span class="user-name">Like</span>
                            <span class="user-name">Reply</span>
                            <span>28 min agao</span>
                        </div>
                    </div>

                </div>
                <div class="layout-row user-comments">
                    <img src="img/no_picture.png" alt="user-image"/>
                    <div class="layout-column user-detail">
                        <div class="layout-row">
                            <span class="user-name">Lokesdh tiwari</span>
                            <span>Congret bhai shaib</span>
                        </div>
                        <div class="layout-row">
                            <span class="user-name">Like</span>
                            <span class="user-name">Reply</span>
                            <span>28 min agao</span>
                        </div>
                    </div>

                </div>
                <div class="layout-column comment-wrap">
                    <span>View more Comments</span>
                </div>
                <div class="layout-row user-comments">
                    <img src="img/no_picture.png" alt="user-image"/>
                    <div class="input-area"><input placeholder="Write a Comments"/>
                        <i class="fa fa-camera"></i>
                        <i class="fa fa-smile-o"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex-30 flex-xs-100 layout-column profile-section" >
            <div class="layout-column profile-picture">
                <img src="img/user-image.png" alt="user-image"/>
                <span class="user-name1">Rohit settity</span>
                <span class="user-status">I am so glad to have to aal here ,to me and may family :) :).So glad to seee you all here.</span>
            </div>
            <div class="layout-column unknown-comment">
                <span>Mahish Mahtota <a>@coccolo</a></span>
                <span>I am so glad to have to aal here ,to me and may family,I am so glad to have to aal here ,to me and may family,I am so glad to have to aal here ,to me and may family</span>

            </div>
            <div class="layout-row">
                <video height="170"  controls>
                    <source src="https://www.youtube.com/" type="video/mp4">
                </video>
            </div>
            <div class="layout-column  profile-picture">
                <div class="layout-row">
                    <img src="img/user-image.png" alt="user-image"/>
                    <span class="flex-80 layout-row layout-align-end-end hour-count">14h</span></div>
                <span class="user-name1">mohit settity</span>
                <span class="user-status">I am so glad to have to aal here ,to me and may family :) :).So glad to seee you all here.</span>
            </div>
            <div class="layout-row  share-it">
                <span class="layout-row flex-20 layout-align-start-center"><i class="fa fa-reply"></i></span>
                <span class="layout-row flex-30 layout-align-start-center"><i class="fa fa-retweet"></i> 66</span>
                <span class="layout-row flex-30 layout-align-start-center"><i class="fa fa-heart"></i> 40</span>
                <span class="layout-row flex-20 layout-align-start-center"><i class="fa fa-ellipsis-h"></i></span>

            </div>
        </div>
        <!--            <div class="flex-30 layout-align-center-center layout-row">
                        <div class="login-part layout-column layout-align-center-center" id="hexagon">
                            <i class="fa fa-user"></i>
                            <span>USER LOGIN</span>
                            <span>Sample Text</span>
                            <div><input placeholder="username"/><i class="fa fa-user"></i></div>
                            <div><input placeholder="password"/><i class="fa fa-lock"></i></div>
                            <div><input type="checkbox" />Remember Me</div>
                            <a>Forget Password</a>
                            <button class="login-btn" id="small-hoxa">login</button>
                            <button class="btn-sign">sign up</button>
                        </div>
                    </div>-->
    </div>
</section>