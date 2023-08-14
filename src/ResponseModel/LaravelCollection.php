<?php

namespace Rakutentech\LaravelRequestDocs\ResponseModel;

class LaravelCollection
{
    /**
     * Convert data to an array representation with pagination.
     *
     * @param mixed $data The data to be converted.
     * @return array The array representation of the data with pagination.
     */
    public function toArray($data): array {
        return [
            "data" => [$data],
            "links" => [
                "first" => "string",
                "last" => "string",
                "prev" => "string",
                "next" => "string"
            ],
            "meta" => [
                "current_page" => "number",
                "from" => "numeber",
                "last_page" => "number",
                "links" => [
                    [
                        "url" => null,
                        "label" => "&laquo; Previous",
                        "active" => false
                    ],
                    [
                        "url" => "string",
                        "label" => "1",
                        "active" => true
                    ],
                    [
                        "url" => null,
                        "label" => "Next &raquo;",
                        "active" => false
                    ]
                ],
                "path" => "string",
                "per_page" => 1,
                "to" => null,
                "total" => 0
            ]
        ];
    }
}
