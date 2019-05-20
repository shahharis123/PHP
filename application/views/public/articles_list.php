<?php include('public_header.php'); ?>
<div class="container">
<h1>All Articles</h1>
<hr>
  <table class="table">
    <thead>
        <th>Sr. No.</th>
        <th>Title</th>
        <th>Published On</th>
    </thead>
    <tbody>
    <?php if(count($articles)): ?>
        <?php $count = $this->uri->segment(3, 0); ?>
        <?php foreach($articles as $article): ?>
        <tr>
            <td><?php echo ++$count; ?></td>
            <td><?php echo anchor("user/article/$article->id", $article->title); ?></td>
            <td><?php echo $article->created_at; ?></td>

        </tr>
<?php endforeach; ?>
<?php else: ?>
<tr></tr>
    <td colspan="3"> No Records Found.</td>
</tr>
<?php endif; ?>
    </tbody>
  </table>
  <ul class="pagination pagination-md justify-content-center">
   <?php echo $this->pagination->create_links(); ?>
   </ul>
</div>
<?php include('public_footer.php'); ?>

