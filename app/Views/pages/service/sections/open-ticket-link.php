<?php
/** @var \App\ValueObjects\Service\OpenTicketLinkContent $openTicketLink */
if (!$openTicketLink->visible) {
  return;
} ?>
<div class="layout-container">
  <div class="flex justify-center my-20 md:my-35">
    <button class="btn-secondary btn-lg inline-block text-white text-sm md:text-xl" onclick="<?= esc(
      whatsapp_conversion_onclick(),
      'attr',
    ) ?>">Abrir um chamado agora</button>
  </div>
</div>
