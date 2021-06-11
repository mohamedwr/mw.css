<!DOCTYPE html>
<html>
    <head><?php require("head.php"); ?></head>
    <body>
        <div class="dropdown dropdown-w">
            <button class="btn btn-green" onclick="dropdown('dropdown-1');">Dropdown</button>
            <ul class="dp-links" data-id="dropdown-1">
                <li class="dp-link"><a href="#">Link</a></li>
                <li class="dp-link"><a href="#">Link</a></li>
            </ul>
        </div>
        <div class="dropdown dropdown-b">
            <button class="btn btn-green" onclick="dropdown('dropdown-2');">Dropdown</button>
            <ul class="dp-links" data-id="dropdown-2">
                <li class="dp-link"><a href="#">Link</a></li>
                <li class="dp-link"><a href="#">Link</a></li>
            </ul>
        </div>
    </body>
</html>