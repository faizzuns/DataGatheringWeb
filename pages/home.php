<?php
    require 'templates/header.php';
?>

<div class="bg">
</div>

<div class="backdrop"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
               <div class"row align-items-center">
                <form style="border-style: solid; background-color: #ffffff;" action="/action_page.php">
                    <h2 >HALO EVERYBODY</h2>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                </div>
        </div>
    </div>
</div>

<?php
    require 'templates/footer.php';
?>