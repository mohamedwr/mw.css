<!DOCTYPE html>
<html>
    <head><?php require("head.php"); ?></head>
    <body>
        <nav class="navbar-mini navbar-mini-w">
            <button class="btn btn-gray col-button" onclick="navdp('nav1');">+</button>
            <div class="brand h1">Brand</div>
            <div class="navcontent" data-id="nav1">
                <ul class="links">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="link"><a href="#">Link</a></li>
                    <li class="navdropdown">
                        <a href="#" onclick="dropdown('navdropdown-1');">Dropdown</a>
                        <ul class="dp-links" data-id="navdropdown-1">
                            <li class="dp-link"><a href="#">Link</a></li>
                            <li class="dp-link"><a href="#">Link</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="search">
                    <input class="input input-w">
                    <button class="btn btn-green">Search</button>
                </div>
                <div class="otherside">
                    <ul class="links">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="link"><a href="#">Link</a></li>
                        <li class="navdropdown">
                            <a href="#" onclick="dropdown('navdropdown-2');">Dropdown</a>
                            <ul class="dp-links" data-id="navdropdown-2">
                                <li class="dp-link"><a href="#">Link</a></li>
                                <li class="dp-link"><a href="#">Link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </nav>
        <nav class="navbar-mini navbar-mini-b">
            <button class="btn btn-white col-button" onclick="navdp('nav2');">+</button>
            <div class="brand h1">Brand</div>
            <div class="navcontent" data-id="nav2">
                <ul class="links">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="link"><a href="#">Link</a></li>
                    <li class="navdropdown">
                        <a href="#" onclick="dropdown('navdropdown-1');">Dropdown</a>
                        <ul class="dp-links" data-id="navdropdown-1">
                            <li class="dp-link"><a href="#">Link</a></li>
                            <li class="dp-link"><a href="#">Link</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="search">
                    <input class="input input-b">
                    <button class="btn btn-green">Search</button>
                </div>
                <div class="otherside">
                    <ul class="links">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="link"><a href="#">Link</a></li>
                        <li class="navdropdown">
                            <a href="#" onclick="dropdown('navdropdown-2');">Dropdown</a>
                            <ul class="dp-links" data-id="navdropdown-2">
                                <li class="dp-link"><a href="#">Link</a></li>
                                <li class="dp-link"><a href="#">Link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </nav>
    </body>
</html>