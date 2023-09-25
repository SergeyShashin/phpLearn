<div class="container">
  <h1>ReviewsList</h1>


  <form method="post">
    <ul>
      <?php foreach ($data as $key => $value) : ?>
        <?php if ($value['author']) : ?>
          <li class="mb-3">
            <?php echo $value['author'] . ": " . $value['text']; ?>
            <button type="submit" class="btn btn-primary" name="update<?=$value['idreviews']?>">update</button>
            <button type="submit" class="btn btn-primary" name="delete<?=$value['idreviews']?>">delete</button>
          </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <div class="mb-3">
      <label for="author_review" class="form-label">Author</label> <br>
      <input name="author_review" id="author_review" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
      <label for="review" class="form-label">Review</label> <br>
      <textarea name="review" id="review" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">AddReviews</button>
  </form>

</div>