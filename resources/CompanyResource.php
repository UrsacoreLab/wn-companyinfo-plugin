<?php

namespace UrsacoreLab\CompanyInfo\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            "company_name"     => $this['companyName'] ?? null,
            'site_name'        => $this['siteName'],
            "phone"            => $this['phone'] ?? null,
            "email"            => $this['email'] ?? null,
            "slogan"           => $this['slogan'] ?? null,
            "postal_code"      => $this['postalCode'] ?? null,
            "address_country"  => $this['addressCountry'] ?? null,
            "address_region"   => $this['addressRegion'] ?? null,
            "address_locality" => $this['addressLocality'] ?? null,
            "street_address"   => $this['streetAddress'] ?? null,
            "logotype"         => $this->getImage($this['logo']),

            "phones"    => $this->getLists($this['phones'], 'phone'),
            "addresses" => $this->getLists($this['addresses'], 'address'),

            "working_time" => $this->grouping(),
        ];
    }

    public function getImage($image): string|null
    {
        if (empty($image)) {
            return null;
        }

        return url(media_path($this['logo']));
    }

    public function getLists($values, $field): ?array
    {
        $items = $values['list'];

        if (! empty($items)) {
            $arr = [];

            foreach ($items as $item) {
                if (! empty($item[$field])) {
                    $arr[] = $item[$field];
                }
            }

            return $arr;
        }

        return null;
    }

    protected function grouping(): array
    {
        $days = [
            "monday",
            "tuesday",
            "wednesday",
            "thursday",
            "friday",
            "saturday",
            "sunday",
        ];

        $week     = [];
        $holidays = [];

        foreach ($days as $day) {
            $day_active = (int) $this[$day . '_active'];

            if ($day_active === 0) {
                $holidays[$day] = [
                    'active' => $day_active,
                ];
            }

            $week[$day] = [
                'active' => $day_active,
                'min'    => Carbon::parse($this[$day][0]['min'])->format("H:i"),
                'max'    => Carbon::parse($this[$day][0]['max'])->format("H:i"),
            ];
        }

        $holidays['holidays'] = [
            'active' => (int) $this['holidays_active'],
        ];

        return [
            'week'     => $week,
            'holidays' => $holidays,
        ];
    }
}
