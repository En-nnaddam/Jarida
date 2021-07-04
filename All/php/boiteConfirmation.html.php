    <form class="confirmation" style="display: none;" action="/Jarida/Articles/php/deleteArticle.php" method="post">

        <div>
            <input type="text" id="idArticle" name="idArticle">
            <p> Are you sure ? you want to delete this article</p> <br>
            <button type="submit" name="confirmation">Sure</button>
            <button type="button" onClick="hideConfirm()">Not Sure</button>
        </div>

    </form>