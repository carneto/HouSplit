<?php
    include_once "config.php";

    // Set up MySQL connection
    $db_handler = mysql_connect($mysql_server, $mysql_username, $mysql_password);
    $db_found = mysql_select_db($mysql_db, $db_handler);
?>
<script language="javascript">
    function toggle(source) {
    checkboxes = document.getElementsByName('members[]');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }
    }
</script>
<div class="title"><?php echo $lang['new_bill_title']; ?></div>
<form id="new_payment" name="new_payment" method="post" action="?act=bill">
    <p><input type="text" name="name" placeholder="<?php echo $lang['name']; ?>" /></p>
    <p><input type="text" name="value" placeholder="<?php echo $lang['value']; ?>" /></p>
    <br />
    <div class="member_list">
        <p><input type="checkbox" onClick="toggle(this)" /> <strong><?php echo $lang['select_all_members']; ?></strong></p>
        <?php
            $db_info = mysql_query("SELECT * FROM members");
            while ($member = mysql_fetch_array($db_info))
                if ($member['username'] != $user)
                    echo '<p><input type="checkbox" name="members[]" value="' . $member['id'] . '" /> ' . $member['name'] . '</p>';
        ?>
    </div>
    <br />
    <p><input type="submit" name="new_payment" value="<?php echo $lang['add_bill']; ?>" /></p>
</form>