<?php
    include_once "config.php";

    // Set up MySQL connection
    $db_handler = mysql_connect($mysql_server, $mysql_username, $mysql_password);
    $db_found = mysql_select_db($mysql_db, $db_handler);
?>
<div class="title">New Payment</div>
<form id="new_payment" name="new_payment" method="post" action="?act=pay">
    <p><input type="text" name="name" placeholder="Name" /></p>
    <p><input type="text" name="value" placeholder="Value" /></p>
    <br />
    <p>
        <select name="member">
        <?php
            $db_info = mysql_query("SELECT * FROM members");
            while ($member = mysql_fetch_array($db_info))
                if ($member['username'] != $user)
                    echo '<option value="' . $member['id'] . '">' . $member['name'] . '</option>';
        ?>
        </select>
    </p>
    <br />
    <p><input type="submit" name="new_payment" value="Add Payment" /></p>
</form>