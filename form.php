<form id='inputForm' method='post' action='commentpost.php'>
    <input type='hidden' name='articleid' value='<?php echo $articleNb ?>'/>
    <label id='username' for='username'>Your name :</label>
    <input name='username' id='usernameInput' type='text' autocomplete='off'/>
    <label id='commentBox' for='commentText '>Comment :</label>
    <input name='commentText' id='commentText' type='text' autocomplete="off"></input>
    <input type="submit" id='submitButton' value="Add comment" name="comment"/> 
</form>