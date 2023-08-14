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
                "current_page" => "int",
                "from" => "int",
                "last_page" => "int",
                "links" => [
                    [
                        "url" => "string",
                        "label" => "string",
                        "active" => "boolean"
                    ],
                    [
                        "url" => "string",
                        "label" => "int",
                        "active" => "boolean"
                    ],
                    [
                        "url" => "string",
                        "label" => "string",
                        "active" => "boolean"
                    ]
                ],
                "path" => "string",
                "per_page" => "int",
                "to" => "int",
                "total" => "int"
            ]
        ];
    }
}
