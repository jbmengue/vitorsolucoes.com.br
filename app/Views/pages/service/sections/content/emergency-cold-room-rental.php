<div class="overflow-hidden text-[#1A1A1A]">
  <?= view('pages/service/sections/content/components/emergency-cold-room-rental-icon-sprite') ?>
  <section class="px-6 py-20 md:py-24" aria-labelledby="situacoes-atendidas">
    <div class="layout-container flex flex-col items-center text-center">
      <h2 id="situacoes-atendidas" class="mb-4 text-3xl leading-tight font-bold text-[#0A4D8C] uppercase md:text-5xl">
        Situações que atendemos
      </h2>
      <p class="mb-0 max-w-3xl text-[#55595F]">Câmaras frias para atendimento emergencial de clientes que tiveram:</p>
      <?= view('pages/service/sections/content/components/emergency-cold-room-rental-icon-list', [
        'items' => $situations,
      ]) ?>
      <p class="mt-8 mb-0 max-w-3xl text-lg text-[#33373C]">Uma solução rápida para você não perder mercadoria enquanto o equipamento principal está parado.</p>
    </div>
  </section>

  <?php foreach ($lines as $line): ?>
    <section class="px-6 py-20 <?= $line['id'] === 'resfriados'
      ? 'bg-[#F4F5F7]'
      : 'bg-white' ?>" aria-labelledby="linha-<?= esc($line['id'], 'attr') ?>">
      <div class="layout-container flex flex-col items-center">
        <h2 id="linha-<?= esc($line['id'], 'attr',) ?>" class="mb-4 text-center text-3xl leading-tight font-bold text-[#0A4D8C] uppercase md:text-5xl"><?= esc($line['title'],) ?></h2>
        <p class="mb-0 text-center text-lg text-[#33373C]">
          Temperatura de trabalho: <strong><?= esc($line['temperature'], ) ?></strong><span aria-hidden="true"> · </span>
          Regulagem padrão: <strong><?= esc($line['regulation']) ?></strong>
        </p>
        <?php if ($line['description']): ?>
          <p class="mt-2 mb-0 max-w-3xl text-center text-[#55595F]"><?= esc(
            $line['description'],
          ) ?></p>
        <?php endif; ?>

        <div class="mt-9 grid w-full grid-cols-1 items-stretch gap-7 md:grid-cols-2 xl:grid-cols-3">
          <?php foreach ($models as $model): ?>
            <?php if ($model['line'] !== $line['id']) {
              continue;
            } ?>
            <article class="flex flex-col gap-4 rounded-xl p-3 pb-7 text-center <?= $line['id'] ===
            'resfriados'
              ? 'bg-white'
              : 'bg-[#F4F5F7]' ?>">
              <div class="relative h-[220px] overflow-hidden rounded-lg bg-white">
                <img
                  src="<?= esc(assets('images', $model['image']['path']), 'attr') ?>"
                  alt="Câmara fria <?= esc($model['code'], 'attr') ?> – <?= esc($model['name'],'attr',) ?>"
                  width="<?= esc($model['image']['width'], 'attr') ?>"
                  height="<?= esc($model['image']['height'], 'attr') ?>"
                  loading="lazy"
                  decoding="async"
                  class="h-full w-full object-contain" />
                <?php if ($model['featured']): ?>
                  <span class="absolute top-3 left-3 rounded bg-[#F7941D] px-3 py-1 text-xs font-bold text-[#1A1A1A] uppercase">Principal modelo da frota</span>
                <?php endif; ?>
              </div>
              <h3 class="mt-1 mb-0 text-2xl leading-tight font-bold text-[#0A4D8C] uppercase"><?= esc(
                $model['code'],
              ) ?> – <?= esc($model['name']) ?></h3>
              <div class="flex flex-col gap-1.5 px-2 text-[15px] text-[#33373C] sm:px-3">
                <?php foreach ($model['specs'] as $spec): ?>
                  <div><strong class="text-[#1A1A1A]"><?= esc($spec['label']) ?>:</strong> <?= esc($spec['value'],) ?></div>
                <?php endforeach; ?>
                <?php if ($model['note']): ?><div class="mt-2 text-sm text-[#55595F]"><?= esc($model['note'],) ?></div><?php endif; ?>
                <?php if ($model['indication']): ?>
                  <div class="mt-2"><strong class="text-[#1A1A1A]"><?= esc(
                    $model['indication_label'],
                  ) ?>:</strong> <?= esc($model['indication']) ?></div>
                <?php endif; ?>
              </div>
              <div class="mt-auto grid grid-cols-2 gap-2 px-2 pt-2 sm:px-3">
                <?php foreach ($model['prices'] as [$priceLabel, $priceValue]): ?>
                  <div class="rounded-md p-2.5 <?= $line['id'] === 'resfriados'
                    ? 'bg-[#F4F5F7]'
                    : 'bg-white' ?>">
                    <div class="text-[13px] text-[#55595F]"><?= esc($priceLabel) ?></div>
                    <div class="text-xl font-bold sm:text-[22px]"><?= esc($priceValue) ?></div>
                  </div>
                <?php endforeach; ?>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
        <button  class="btn-secondary btn-md mt-9 inline-flex" onclick="<?= esc(
            whatsapp_conversion_onclick(),
            'attr',
            ) ?>">Abrir um chamado agora</button>
      </div>
    </section>
  <?php endforeach; ?>

  <section class="bg-[#F4F5F7] px-6 py-20" aria-labelledby="resumo-modelos">
    <div class="layout-container">
      <h2 id="resumo-modelos" class="mb-9 text-center text-3xl leading-tight font-bold text-[#0A4D8C] uppercase md:text-5xl">Resumo dos modelos</h2>
      <div class="overflow-x-auto rounded-xl bg-white">
        <table class="w-full min-w-[760px] border-collapse text-center text-base">
          <thead>
            <tr class="bg-[#0A4D8C] text-sm text-white uppercase">
              <th scope="col" class="px-3.5 py-4">Modelo</th>
              <th scope="col" class="px-3.5 py-4">Aplicação</th>
              <th scope="col" class="px-3.5 py-4">Medida</th>
              <th scope="col" class="px-3.5 py-4">Volume</th>
              <th scope="col" class="px-3.5 py-4">Capacidade aprox.</th>
              <th scope="col" class="px-3.5 py-4">Equipamento</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($models as $model): ?>
              <tr class="border-t border-[#E3E6EA]">
                <th scope="row" class="px-3.5 py-3.5 font-bold"><?= esc($model['code']) ?></th>
                <?php foreach ($model['summary'] as $summaryValue): ?>
                  <td class="px-3.5 py-3.5"><?= esc($summaryValue) ?></td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="px-6 py-20 md:py-24" aria-labelledby="itens-inclusos">
    <div class="layout-container flex flex-col items-center text-center">
      <h2 id="itens-inclusos" class="mb-4 text-3xl leading-tight font-bold text-[#0A4D8C] uppercase md:text-5xl">Todas as câmaras incluem</h2>
      <p class="mb-0 text-[#55595F]">Todas as unidades são padronizadas com:</p>
      <ul class="mt-7 grid w-full list-none grid-cols-1 gap-3 p-0 text-base font-semibold sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <?php foreach ($includedItems as $item): ?>
          <li class="flex items-center justify-center rounded-lg bg-[#F4F5F7] p-4"><?= esc(
            $item,
          ) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="bg-[#F4F5F7] px-6 py-20" aria-labelledby="monitoramento-remoto">
    <div class="layout-container flex flex-col items-center text-center">
      <h2 id="monitoramento-remoto" class="mb-4 text-3xl leading-tight font-bold text-[#0A4D8C] uppercase md:text-5xl">Monitoramento remoto</h2>
      <p class="mb-0 text-[#55595F]">O sistema avisa quando:</p>
      <?= view('pages/service/sections/content/components/emergency-cold-room-rental-icon-list', [
        'items' => $monitoringAlerts,
      ]) ?>
    </div>
  </section>

  <section class="px-6 py-20" aria-labelledby="regra-utilizacao">
    <div class="mx-auto flex max-w-4xl flex-col items-center gap-4 text-center">
      <h2 id="regra-utilizacao" class="mb-0 text-3xl leading-tight font-bold text-[#0A4D8C] uppercase md:text-5xl">Regra importante de utilização</h2>
      <div class="text-xl font-bold uppercase md:text-2xl">Manutenção da temperatura dos produtos</div>
      <p class="mb-0 text-[#33373C]">A câmara de locação é oferecida principalmente para manter a temperatura. O ideal é receber produtos que já estejam <strong>resfriados</strong> ou <strong>congelados</strong>.</p>
      <p class="mb-0 text-[#33373C]">Uma câmara dimensionada para armazenar 1.000 kg de congelados não tem, automaticamente, capacidade para receber 1.000 kg de produto a +20 °C e congelar até -18 °C rapidamente.</p>
      <p class="mb-0 font-semibold">Caso você necessite de congelamento ou resfriamento rápido de grande quantidade de produto, fazemos um dimensionamento específico.</p>
    </div>
  </section>

  <section class="bg-[#F4F5F7] px-6 py-20" aria-label="Condições de frete, instalação e caução">
    <div class="mx-auto grid max-w-5xl grid-cols-1 gap-7 lg:grid-cols-2">
      <div class="flex flex-col gap-4 rounded-xl bg-white px-6 py-9 text-center md:px-8">
        <h3 class="mb-0 text-2xl font-bold text-[#0A4D8C] uppercase">Frete e instalação</h3>
        <p class="mb-0 text-[#55595F]">Cobrados separadamente:</p>
        <ol class="m-0 flex list-none flex-col p-0 text-left font-semibold">
          <?php foreach ($freightItems as $index => $item): ?>
            <li class="flex justify-between gap-4 border-t border-[#E3E6EA] py-3"><span><?= $index + 1 ?>. <?= esc($item,) ?></span><span class="shrink-0 font-normal text-[#55595F]">a combinar</span></li>
          <?php endforeach; ?>
        </ol>
      </div>
      <div class="flex flex-col justify-start gap-4 rounded-xl bg-white px-6 py-9 text-center md:px-8">
        <h3 class="mb-0 text-2xl font-bold text-[#0A4D8C] uppercase">Caução</h3>
        <p class="mb-0 text-[#33373C]">Para clientes novos, é cobrado caução ou pré-autorização equivalente a aproximadamente:</p>
        <div class="rounded-lg bg-[#F4F5F7] p-5 text-2xl leading-tight font-bold uppercase">1 mensalidade da locação</div>
        <p class="mb-0 text-[#55595F]">Para clientes empresariais cadastrados e aprovados, poderá ser dispensada conforme análise.</p>
      </div>
    </div>
  </section>
</div>
