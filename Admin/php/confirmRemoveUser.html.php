<!-- Confirmation User Delete -->
<form class="confirmation" style="display:none" action="deleteUser.php" method="post">

        <div>
            <input type="text" id="idUser" name="idUser">
            <input type="text" id="isAuthor" name="isAuthor">
            <p> Are you sure ? you want to delete this article</p> <br>
            <button type="submit" name="confirmation">Sure</button>
            <button type="button" onClick="hideConfirm()">Not Sure</button>
        </div>

</form>