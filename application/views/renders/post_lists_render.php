<?php foreach ($posts as $post) {?>

<div class="col-md-12 card bg-light mb-3" style="margin-top:3%;">
  <p><?php echo $post->title; ?></p>
  <div class="thumbs_container">
    <button class="btn <?php echo ($post->vote_status==1) ? "btn-success" : "btn-default"; ?> likeBtn " type="button" name="button" data-id="<?php echo $post->id; ?>">
      <i class="fas fa-thumbs-up"></i><span class="like_count">(<?php echo $post->like_count; ?>)</span>
    </button>
    <button class="btn <?php echo ($post->vote_status==-1) ? "btn-danger" : "btn-default"; ?> dislikeBtn" type="button" name="button"   data-id="<?php echo $post->id; ?>">
      <i class="fas fa-thumbs-down"></i><span class="dislike_count">(<?php echo $post->dislike_count; ?>)</span>
    </button>
  </div>
</div>
<?php   } ?>
