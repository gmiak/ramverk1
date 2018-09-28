<h1>Comments</h1>

<?php foreach ($comments as $comment) : ?>

    <div class="w3-container comment-text">
        <ul class="w3-ul w3-card-4">
          <li class="w3-bar">
            <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">
                <a href=<?= $app->url->create("comment/delete/". $comment["id"]); ?>>×</a></span>
            <img src="img/avatar2.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
              <span><?= $comment["text"] ?></span><br>
              From : <span class="w3-large"><i><?= $comment["email"] ?></i></span><br>
              <span><a href=<?= $app->url->create("comment/edit/". $comment["id"]); ?>>Edit </a></span>
            </div>

          </li>
      </ul>
   </div>
<?php endforeach; ?>


<div class="w3-container w3-teal comment-formular">
    <h2>Du kan skriva här!</h2>
</div>
<div>
<form action="comment" method="post" class="w3-container w3-card-4">
    <br>
    <p>
        <label class="w3-text-grey">Name</label>
        <input class="w3-input w3-border comment-border" type="text" name="name" required>
    </p>

    <p>
        <label class="w3-text-grey">Email</label>
        <input class="w3-input w3-border comment-border" type="email" name="email" required>
    </p>
    <p>
        <label class="w3-text-grey">Subject</label>
        <textarea class="w3-input w3-border comment-border" name="text" cols="30" rows="10"></textarea>
    </p>
    <p>
        <button class="w3-btn w3-padding w3-teal" style="width:120px" type="submit"> Send &nbsp; &#10095; </button>
    </p>
</form>
