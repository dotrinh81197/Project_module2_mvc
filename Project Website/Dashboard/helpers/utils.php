<?php
class Utils
{
    public static function showMessage()
    {
        if (isset($_SESSION["message"])) {
            echo "<div class='alert alert-success' role='alert'>
              " . $_SESSION["message"] . "
            </div>";
            unset($_SESSION["message"]);
        }
    }
}
