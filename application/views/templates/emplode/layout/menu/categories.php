<div class="box">
	<div class="box_title"><?php echo lang('categories'); ?></div>
	<div class="box_content">
		<ul>
			<?php if ($this->categories_library->get_categories()): ?>
				<?php foreach ($this->categories_library->get_categories() as $category): ?>
					<li><a href="<?php echo site_url('/blog/category/' . $category['url_name']); ?>"> <?php echo $category['name']; ?> (<?php echo $category['posts_count']; ?>)</a></li>
				<?php endforeach; ?>
			<?php endif; ?>
		</ul>
	</div>
</div>