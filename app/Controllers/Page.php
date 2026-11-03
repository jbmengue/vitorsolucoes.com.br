<?php

namespace App\Controllers;

use App\Content\Service\EmergencyColdRoomRentalContent;
use App\Entities\PostsServices;
use App\Models\PostsServicesModel;
use App\ValueObjects\Service\OpenTicketLinkContent;
use App\ValueObjects\Service\SameDayServiceContent;
use App\ValueObjects\Service\ServiceRequestContent;
use CodeIgniter\Exceptions\PageNotFoundException;

class Page extends BaseController
{
  private ?PostsServicesModel $postsServicesModel = null;

  public function service(string $group, string $slug): string
  {
    $service = $this->getServiceOrFail($group, $slug);
    $serviceContentData = $this->buildServiceContentData($service);
    $sameDayService = SameDayServiceContent::fromConfig(
      $serviceContentData['sameDayService'] ?? null,
    );
    $serviceRequest = ServiceRequestContent::fromConfig(
      $serviceContentData['serviceRequest'] ?? null,
    );
    $openTicketLink = OpenTicketLinkContent::fromConfig(
      $serviceContentData['openTicketLink'] ?? null,
    );

    return $this->render(
      array_merge(
        [
          'page' => 'service',
          'group' => $group,
          'post' => $service,
          'service' => $service,
          'serviceContentData' => $serviceContentData,
          'sameDayService' => $sameDayService,
          'serviceRequest' => $serviceRequest,
          'openTicketLink' => $openTicketLink,
        ],
        $this->buildMetaTagsFromService($service),
      ),
    );
  }

  private function buildServiceContentData(PostsServices $service): array
  {
    return match (trim((string) ($service->content ?? ''))) {
      'view:service:emergency-cold-room-rental' => (new EmergencyColdRoomRentalContent())->data(),
      default => [],
    };
  }

  private function getServiceOrFail(string $group, string $slug): PostsServices
  {
    $service = $this->postsServicesModel()->findBySlug(
      slug: $slug,
      group: $this->mapRouteGroupToDbGroup($group),
    );

    if ($service === null) {
      throw PageNotFoundException::forPageNotFound();
    }

    return $service;
  }

  private function mapRouteGroupToDbGroup(string $group): string
  {
    return match ($group) {
      'assistencia-tecnica' => 'technical-assistance',
      'autorizada' => 'authorized',
      default => throw PageNotFoundException::forPageNotFound(),
    };
  }

  private function buildMetaTagsFromService(PostsServices $service): array
  {
    $meta = [
      'metaTitle' => (string) ($service->title ?? '') . ' | ' . $this->appConfig->name,
      'metaDescription' => (string) ($service->subtitle ?? ''),
    ];

    $imageName = trim((string) ($service->imageName ?? ''));

    if ($imageName !== '') {
      $image = rtrim($this->appConfig->upload, '/') . '/images/thumb/' . $imageName;

      $meta['metaImage'] = $image;

      if (is_file($image)) {
        $imageSize = @getimagesize($image);

        if ($imageSize !== false) {
          [$imageWidth, $imageHeight, $imageType] = $imageSize;
          $meta['metaImageWidth'] = $imageWidth;
          $meta['metaImageWidht'] = $imageWidth;
          $meta['metaImageHeight'] = $imageHeight;
          $meta['metaImageType'] = image_type_to_mime_type($imageType);
        }
      }
    }

    return $meta;
  }

  private function postsServicesModel(): PostsServicesModel
  {
    if ($this->postsServicesModel === null) {
      $this->postsServicesModel = new PostsServicesModel();
    }

    return $this->postsServicesModel;
  }
}
