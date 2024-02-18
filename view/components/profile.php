<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta tags -->
    <meta property="og:title" content="CHREATE app">
    <meta property="og:description" content="Social media app for sharing tasks, pranks, dares and challenges">
    <meta property="og:url" content="www.chreateapp.com">
    <meta property="og:image" content="www.chreateapp.com/main-image">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-8c8d788ad0ee06dbc9619ff907c22651.css?vsn=d" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css" />
    <!-- style sheet -->
    <link rel="stylesheet" href="public/css/style.css">
    <title>Profile</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto sidebar col-md-3 col-xl-2 px-sm-2 px-0 ">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-4 min-vh-100">
                    <a href="index.php" class="d-flex align-items-center pb-4">
                        <span class="d-none d-sm-inline"><img id="home-logo" src="public/images/chreatelogo1.png" alt="chreate app logo"></span>
                    </a>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link align-middle px-0">
                                <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>

                        <li class="exploreButton">
                            <a href="./index.php?action=explore" class="nav-link px-0 align-middle">
                                <i class="fa-solid fa-magnifying-glass"></i> <span class="ms-1 d-none d-sm-inline">Explore</span></a>
                        </li>

                        <li class="challengeButton">
                            <a href="./index.php?action=challenge" class="nav-link px-0 align-middle">
                                <i class="fa-solid fa-bullhorn"></i> <span class="ms-1 d-none d-sm-inline">
                                    Challenge</span></a>
                        </li>

                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fa-regular fa-messages"></i> <span class="ms-1 d-none d-sm-inline">
                                    Messages</span> </a>
                        </li>

                        <li class="profileButton active">
                            <a href="./index.php?action=viewProfile" class="nav-link px-0 align-middle active">
                                <i class="fa-regular fa-user"></i> <span class="ms-1 d-none d-sm-inline">Profile</span>
                            </a>
                        </li>

                        <div class="btn add-btn addPostButton">
                            <a href="./index.php?action=newPostForm" class="d-flex align-items-center">
                                <span class="d-none d-sm-inline mx-1"><i class="fa-regular fa-square-plus"></i></span>
                                <span class="d-none d-sm-inline mx-1">New Post</span>
                            </a>
                        </div>
                    </ul>
                    <div class="user-display">
                        <?php
                        if (session_status() === PHP_SESSION_ACTIVE and isset($_SESSION['id'])) {
                        ?>
                            <p>
                                TESTING id:
                                <?= htmlspecialchars($_SESSION['id']) ?>
                            </p>
                            <p>TESTING username:
                                <?= htmlspecialchars($_SESSION['username']) ?>
                            </p>

                        <?php
                        } else {
                        ?>
                            <a href="index.php?action=signin">
                                <h2> Sign in</h2>
                            </a>
                            <a href="index.php?action=newUser">
                                <h2> Sign up</h2>
                            </a>
                        <?php
                        }
                        ?>
                    </div>


                </div>
            </div>
            <div class="col col-md-9 col-xl-10 py-4 gallery profile-container">
                <div class="username-title">
                    <span><i class="fa-regular fa-square-arrow-left"></i></span>
                    <h2>@<?= $profile->username ?></h2>
                    <span><i class="fa-regular fa-square-ellipsis"></i></span>


                </div>
                <div class="userpicfollowers">
                    <img src="public/images/girlsmiling.png" alt="user profile picture">
                    <div class="followers-container">
                        <div class="totalfollowings">
                            <?php if ($following === 0) { ?> <h2> <?= $following ?> </h2>
                            <?php } else {
                            ?> <h2><?= $following->following ?></h2> <?php } ?>
                            <p>following</p>
                        </div>
                        <div class="totalfollowers">
                            <?php if ($followers === 0) { ?> <h2> <?= $followers ?> </h2>
                            <?php } else {
                            ?> <h2><?= $followers->followers ?></h2> <?php } ?>
                            <p>followers</p>
                        </div>
                        <div class="totalpostss">
                            <h2><?= $totalposts->totalposts ?></h2>
                            <p>posts</p>
                        </div>

                    </div>
                </div>
                <div class="userbio-container">
                    <h2>User Name</h2>
                    <p><?= $profile->bio ?>
                    </p>
                    <div class="btn follow-btn">FOLLOW</div>
                </div>
                <hr>
                <div class="highlight-challenges-container">
                    <p>Highlights</p>
                    <div class="highlight-challenges">
                        <img src="public/images/laughinggirls.png" alt="user highlight post">
                        <img src="public/images/laughingcouple.png" alt="user highlight post">
                        <img src="public/images/laughingfriends.png" alt="user highlight post">
                        <img src="public/images/friendshangingout.png" alt="user highlight post">
                    </div>
                </div>
                <hr>
                <div class="sendtipprofile-container">
                    <div class="sendtipprofile">
                        <span><i class="fa-regular fa-circle-c"></i></span>
                        <p>Send Tip</p>
                    </div>
                    <div class="shareprofile">
                        <span><i class="fa-regular fa-share-from-square"></i></span>
                        <p>Share Profile</p>
                    </div>
                    <div class="messageuserprofile">
                        <span><i class="fa-regular fa-message-smile"></i></span>
                        <p>Message Profile</p>

                    </div>
                </div>
                <hr>
            </div>
            <div class="col col-md-9 col-xl-10 py-4 profile-posts-container">
                <h2>Challenges</h2>
                <div class="feed">
                    <?php
                    foreach ($posts as $post) {
                        include "./view/components/postFeedDisplay.php";
                    };
                    ?>
                </div>

            </div>
        </div>
    </div>

    <footer>

    </footer>

</body>

</html>