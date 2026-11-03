<?php
$contentViewData = is_array($serviceContentData ?? null) ? $serviceContentData : [];
$contentViewData['group'] = $group ?? null;
$contentViewData['post'] = $post;

if (render_content_if_exists($post->content ?? null, 'service', $contentViewData, 'content')) {
  return;
}
?>
<section class="mb-25">
  <div class="layout-container commercial-content">
    <?= $post->content ?>
  </div>
</section>
