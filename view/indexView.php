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
    <title>Home</title>
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
                            <a href="index.php" class="nav-link align-middle px-0 active">
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

                        <li class="profileButton">
                            <a href="./index.php?action=viewProfile" class="nav-link px-0 align-middle">
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
            <div class="col col-md-9 col-xl-10 py-4 gallery">
                <h1>Gallery</h1>
                <div class="feed">
                    <div class="post col-sm-2 col-md-3 col-lg-3">
                        <div class="userpicname-container">
                            <div class="userpicname">
                                <img class="img-fluid" src="public/images/girlsmiling.png" alt="user account picture">
                                <div class="usernames">
                                    <h2>Dorothy Mclovin</h2>
                                    <p>@dorothylovesyou</p>
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
                                <p class="tag-highlight">#laughoutloud.challenge</p>
                                <p class="caption">loving this challenge to grab a friend and smile</p>
                                <p class="postdate">8 hours ago</p>
                            </div>
                        </div>
                        <!-- challenge, media src, caption, date, user -->

                    </div>
                </div>


            </div>
        </div>
    </div>


    <footer>

    </footer>

</body>

</html>