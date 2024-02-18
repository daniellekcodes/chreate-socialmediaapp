<!-- <div class="post">
    <div>challenge: <?= $post->tag ?></div>
    <div>media: <?= htmlspecialchars($post->media_src) ?></div>
    <div>caption: <?= htmlspecialchars($post->captions) ?></div>
    <div>date: <?= htmlspecialchars($post->date_created) ?></div>
    <div>user: <?= htmlspecialchars($post->username) ?></div>
    <br>
    <br>
</div> -->

<div class="post col-sm-2 col-md-3 col-lg-3">
    <div class="userpicname-container">
        <div class="userpicname">
            <img class="img-fluid" src="public/images/girlsmiling.png" alt="user account picture">
            <div class="usernames">
                <h2>User Name</h2>
                <p>@<?= htmlspecialchars($post->username) ?></p>
            </div>
        </div>

        <div class="moreicon">
            <i class="fa-solid fa-ellipsis"></i>
        </div>
    </div>

    <div class="image-container">
        <img class="img-fluid" src="public/images/laughingfriends.png" alt="user posted picture">
    </div>

    <div class="postdata-container">
        <div class="reactions-container">
            <div class="reactions">
                <div class="likesnum">
                    <span>
                        <i class="fa-regular fa-heart"></i>
                    </span>
                    <p>340</p>
                </div>
                <div class="commentsnum">
                    <span><i class="fa-regular fa-comment-dots"></i></span>
                    <p>50</p>
                </div>
                <div class="sendtiprequest">
                    <span><i class="fa-regular fa-circle-c"></i></span>
                    <p>send tip</p>
                </div>

            </div>
            <div class="share">
                <i class="fa-regular fa-share-from-square"></i>
            </div>
        </div>
        <div class="postdata">
            <p>500 views</p>
            <p class="tag-highlight"><?= $post->tag ?></p>
            <p class="caption"><?= htmlspecialchars($post->captions) ?></p>
            <p class="postdate"><?= htmlspecialchars($post->date_created) ?></p>
        </div>
    </div>

</div>