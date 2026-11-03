<?php

namespace App\Content\Service;

final class EmergencyColdRoomRentalContent
{
  /**
   * @return array<string, mixed>
   */
  public function data(): array
  {
    $models = [
      [
        'line' => 'resfriados',
        'code' => 'RF-08',
        'name' => 'Resfriados Compacta',
        'featured' => false,
        'image' => [
          'path' => 'services/emergency-cold-room-rental/RF-08.png',
          'width' => 1374,
          'height' => 1145,
        ],
        'specs' => [
          ['label' => 'Dimensões', 'value' => '2,00 x 2,00 x 2,20 m'],
          ['label' => 'Volume interno aproximado', 'value' => '8,8 m³'],
          ['label' => 'Capacidade', 'value' => 'aprox. 500 a 800 kg de produtos'],
          [
            'label' => 'Painel',
            'value' => 'isotérmico PU/PIR, 80 a 100 mm, piso isolado recomendado',
          ],
          ['label' => 'Equipamento', 'value' => '1,5 a 2 HP, evaporador de médio perfil'],
          ['label' => 'Alimentação', 'value' => 'preferencialmente 220 V'],
        ],
        'note' =>
          'Capacidade conforme o tipo de mercadoria, embalagens e utilização de prateleiras.',
        'indication_label' => 'Ideal para',
        'indication' =>
          'restaurante, padaria, pequena cozinha industrial, minimercado, farmácia, lancheria, pequeno estoque de bebidas/alimentos.',
        'prices' => [
          ['Diária emergencial', 'R$ 450'],
          ['7 dias', 'R$ 2.200'],
          ['15 dias', 'R$ 3.700'],
          ['30 dias', 'R$ 5.900'],
        ],
        'summary' => ['Resfriados', '2x2 m', '8,8 m³', '500–800 kg', '1,5–2 HP'],
      ],
      [
        'line' => 'resfriados',
        'code' => 'RF-13',
        'name' => 'Resfriados Média',
        'featured' => true,
        'image' => [
          'path' => 'services/emergency-cold-room-rental/RF-13.png',
          'width' => 1374,
          'height' => 1145,
        ],
        'specs' => [
          ['label' => 'Dimensões', 'value' => '2,00 x 3,00 x 2,20 m'],
          ['label' => 'Volume', 'value' => '13,2 m³'],
          ['label' => 'Capacidade', 'value' => 'aprox. 800 a 1.300 kg'],
          ['label' => 'Painel', 'value' => '100 mm PU/PIR'],
          ['label' => 'Equipamento', 'value' => '2 a 3 HP'],
          ['label' => 'Alimentação', 'value' => 'preferencialmente 220 V'],
        ],
        'note' => null,
        'indication_label' => 'Atende bem',
        'indication' =>
          'açougues, restaurantes, mercados, cozinhas industriais, hotéis, hospitais, escolas, supermercados pequenos.',
        'prices' => [
          ['Diária', 'R$ 650'],
          ['7 dias', 'R$ 3.100'],
          ['15 dias', 'R$ 5.100'],
          ['30 dias', 'R$ 7.900'],
        ],
        'summary' => ['Resfriados', '2x3 m', '13,2 m³', '800–1.300 kg', '2–3 HP'],
      ],
      [
        'line' => 'resfriados',
        'code' => 'RF-22',
        'name' => 'Resfriados Grande',
        'featured' => false,
        'image' => [
          'path' => 'services/emergency-cold-room-rental/RF-22.png',
          'width' => 1536,
          'height' => 1024,
        ],
        'specs' => [
          ['label' => 'Dimensões', 'value' => '2,50 x 4,00 x 2,20 m'],
          ['label' => 'Volume', 'value' => '22 m³'],
          ['label' => 'Capacidade', 'value' => 'aprox. 1.500 a 2.500 kg'],
          ['label' => 'Painel', 'value' => '100 mm PU/PIR'],
          ['label' => 'Equipamento', 'value' => '3 a 5 HP'],
          ['label' => 'Alimentação', 'value' => '220/380 V, conforme equipamento utilizado'],
        ],
        'note' => null,
        'indication_label' => 'Ideal para',
        'indication' =>
          'supermercado, frigorífico, açougue, indústria, grandes restaurantes, cozinhas industriais, eventos, centros de distribuição.',
        'prices' => [
          ['Diária', 'R$ 950'],
          ['7 dias', 'R$ 4.500'],
          ['15 dias', 'R$ 7.500'],
          ['30 dias', 'R$ 11.900'],
        ],
        'summary' => ['Resfriados', '2,5x4 m', '22 m³', '1.500–2.500 kg', '3–5 HP'],
      ],
      [
        'line' => 'congelados',
        'code' => 'CF-08',
        'name' => 'Congelados Compacta',
        'featured' => false,
        'image' => [
          'path' => 'services/emergency-cold-room-rental/CF-08.png',
          'width' => 1374,
          'height' => 1145,
        ],
        'specs' => [
          ['label' => 'Dimensões', 'value' => '2,00 x 2,00 x 2,20 m'],
          ['label' => 'Volume', 'value' => '8,8 m³'],
          ['label' => 'Capacidade', 'value' => 'aprox. 400 a 700 kg'],
          ['label' => 'Painel', 'value' => '120 a 150 mm, piso obrigatoriamente isolado'],
          ['label' => 'Equipamento', 'value' => '2 a 3 HP – baixa temperatura'],
        ],
        'note' => null,
        'indication_label' => 'Sistema',
        'indication' =>
          'controlador eletrônico, degelo automático, resistência de dreno quando necessária, controle de temperatura, proteção elétrica.',
        'prices' => [
          ['Diária', 'R$ 550'],
          ['7 dias', 'R$ 2.700'],
          ['15 dias', 'R$ 4.500'],
          ['30 dias', 'R$ 6.900'],
        ],
        'summary' => ['Congelados', '2x2 m', '8,8 m³', '400–700 kg', '2–3 HP'],
      ],
      [
        'line' => 'congelados',
        'code' => 'CF-13',
        'name' => 'Congelados Média',
        'featured' => false,
        'image' => [
          'path' => 'services/emergency-cold-room-rental/CF-13.png',
          'width' => 1374,
          'height' => 1145,
        ],
        'specs' => [
          ['label' => 'Dimensões', 'value' => '2,00 x 3,00 x 2,20 m'],
          ['label' => 'Volume', 'value' => '13,2 m³'],
          ['label' => 'Capacidade', 'value' => 'aprox. 700 a 1.200 kg'],
          ['label' => 'Painel', 'value' => '120 a 150 mm'],
          ['label' => 'Equipamento', 'value' => '3 a 4 HP – baixa temperatura'],
        ],
        'note' => null,
        'indication_label' => null,
        'indication' => null,
        'prices' => [
          ['Diária', 'R$ 790'],
          ['7 dias', 'R$ 3.800'],
          ['15 dias', 'R$ 6.300'],
          ['30 dias', 'R$ 9.900'],
        ],
        'summary' => ['Congelados', '2x3 m', '13,2 m³', '700–1.200 kg', '3–4 HP'],
      ],
      [
        'line' => 'congelados',
        'code' => 'CF-22',
        'name' => 'Congelados Grande',
        'featured' => false,
        'image' => [
          'path' => 'services/emergency-cold-room-rental/CF-22.png',
          'width' => 1536,
          'height' => 1024,
        ],
        'specs' => [
          ['label' => 'Dimensões', 'value' => '2,50 x 4,00 x 2,20 m'],
          ['label' => 'Volume', 'value' => '22 m³'],
          ['label' => 'Capacidade', 'value' => 'aprox. 1.300 a 2.200 kg'],
          ['label' => 'Painel', 'value' => '150 mm recomendado'],
          ['label' => 'Equipamento', 'value' => '5 a 7,5 HP – baixa temperatura'],
          ['label' => 'Alimentação', 'value' => 'preferencialmente 380 V trifásico'],
        ],
        'note' => 'Dimensionamento final conforme temperatura externa e utilização.',
        'indication_label' => null,
        'indication' => null,
        'prices' => [
          ['Diária', 'R$ 1.190'],
          ['7 dias', 'R$ 5.700'],
          ['15 dias', 'R$ 9.500'],
          ['30 dias', 'R$ 14.900'],
        ],
        'summary' => ['Congelados', '2,5x4 m', '22 m³', '1.300–2.200 kg', '5–7,5 HP'],
      ],
    ];

    $lines = [
      [
        'id' => 'resfriados',
        'title' => 'Linha 1 – Resfriados',
        'temperature' => '0 °C a +8 °C',
        'regulation' => '+2 °C a +5 °C',
        'description' => null,
      ],
      [
        'id' => 'congelados',
        'title' => 'Linha 2 – Congelados',
        'temperature' => '-18 °C a -22 °C',
        'regulation' => '-18 °C',
        'description' =>
          'As câmaras de congelados possuem maior isolamento e equipamento frigorífico específico para baixa temperatura.',
      ],
    ];

    $situations = [
      ['icon' => 'breakdown', 'label' => 'Quebra da câmara fria'],
      ['icon' => 'equipment-failure', 'label' => 'Defeito no equipamento frigorífico'],
      ['icon' => 'clock', 'label' => 'Manutenção prolongada'],
      ['icon' => 'freezer', 'label' => 'Perda temporária de freezer/refrigerador'],
      ['icon' => 'renovation', 'label' => 'Reforma da câmara existente'],
      [
        'icon' => 'temporary-stock',
        'label' => 'Necessidade temporária de aumento de estoque',
      ],
    ];

    $monitoringAlerts = [
      ['icon' => 'temperature-up', 'label' => 'A temperatura subir'],
      ['icon' => 'temperature-down', 'label' => 'A temperatura cair demais'],
      ['icon' => 'power', 'label' => 'Faltar energia'],
      ['icon' => 'door-open', 'label' => 'A porta ficar aberta'],
      ['icon' => 'equipment-stopped', 'label' => 'O equipamento parar'],
      [
        'icon' => 'clock',
        'label' => 'A câmara ficar muito tempo fora da temperatura programada',
      ],
    ];

    $includedItems = [
      'Controlador digital de temperatura',
      'Visor externo',
      'Alarme de alta temperatura',
      'Registro de temperatura',
      'Monitoramento remoto por internet',
      'Iluminação LED interna',
      'Porta com abertura interna de segurança',
      'Cortina de PVC ou ventilação',
      'Piso reforçado e lavável',
      'Proteção elétrica',
      'Disjuntor próprio',
      'Cabo elétrico de ligação',
      'Número individual da câmara',
      'QR Code para acessar manual e solicitar assistência',
    ];

    $freightItems = [
      'Transporte de ida',
      'Instalação/montagem',
      'Transporte de retorno',
      'Eventual utilização de munck',
      'Adequação elétrica, se necessária',
    ];

    return [
      'sameDayService' => [
        'highlight' => 'Sua refrigeração parou? Seu estoque não precisa parar.',
        'label' => 'Atendimento para:',
        'items' => [
          'Resfriados',
          'Congelados',
          'Emergências',
          'Manutenção',
          'Eventos',
          'Estoque temporário',
        ],
        'icon' => null,
      ],
      'openTicketLink' => [
        'visible' => false,
      ],
      'models' => $models,
      'lines' => $lines,
      'situations' => $situations,
      'monitoringAlerts' => $monitoringAlerts,
      'includedItems' => $includedItems,
      'freightItems' => $freightItems,
    ];
  }
}
