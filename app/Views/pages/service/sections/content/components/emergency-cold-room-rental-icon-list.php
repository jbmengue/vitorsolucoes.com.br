<?php
/** @var list<array{icon: string, label: string}> $items */
?>
<div class="mt-12 flex flex-wrap justify-center gap-x-7 gap-y-10">
  <?php foreach ($items as $item): ?>
    <div class="flex w-[150px] flex-col items-center gap-3 text-sm font-semibold">
      <svg class="size-14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
        <use href="#emergency-cold-room-rental-icon-<?= esc($item['icon'], 'attr') ?>"></use>
      </svg>
      <?= esc($item['label']) ?>
    </div>
  <?php endforeach; ?>
</div>
