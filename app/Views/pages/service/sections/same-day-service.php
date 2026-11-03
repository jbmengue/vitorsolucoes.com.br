<?php
/** @var \App\ValueObjects\Service\SameDayServiceContent $sameDayService */
?>
<div class="mb-30">
  <div class="bg-[var(--service-color)] text-center py-8 uppercase text-4xl text-white font-semibold">
    <?= esc($sameDayService->highlight) ?>
  </div>
  <div class="flex flex-col md:flex-row justify-center items-center gap-x-10 text-2xl py-8">
    <div class="<?= $sameDayService->hasIcon() ? 'relative ps-10' : '' ?>">
      <?php if ($sameDayService->hasIcon()): ?>
        <div class="absolute left-0 top-0">
          <i class="flaticon-<?= esc(
            $sameDayService->icon,
            'attr',
          ) ?> before:text-3xl before:text-[var(--service-color)]"></i>
        </div>
      <?php endif; ?>
      <strong class="font-semibold"><?= esc($sameDayService->label) ?></strong>
    </div>
    <?php foreach ($sameDayService->items as $item): ?>
      <div><?= esc($item) ?></div>
    <?php endforeach; ?>
  </div>
</div>
