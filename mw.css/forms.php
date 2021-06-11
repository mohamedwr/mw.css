<!DOCTYPE html>
<html>
    <head><?php require("head.php"); ?></head>
    <body>
        <form>
            <input class="input input-w" />
            <input class="input input-b" />
            <textarea class="input input-w"></textarea>
            <textarea class="input input-b"></textarea>
            <select class="dropdown dropdown-w">
                <option class="dp-item">Hello</option>
                <option class="dp-item">Hello</option>
            </select>
            <select class="dropdown dropdown-b">
                <option class="dp-item">Hello</option>
                <option class="dp-item">Hello</option>
            </select>
        </form>
        <br>
        <form style="margin: 10px;">
            <label>Username: </label><input class="input input-w" />
            <br>
            <label>Password: </label><input class="input input-w" />
            <br>
            <input type="checkbox" /><label>Remember this account</label>
            <br>
            <button class="btn btn-blue">Log in</button>
        </form>
    </body>
</html>