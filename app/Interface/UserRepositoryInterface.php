<?php
namespace App\Interface;

interface UserRepositoryInterface {
    public function getAll(
        ?string $search,
        ?int $limit,
        bool $excute
    );

    public function getAllPaginated(
        ?string $search,
        ?int $rowPerPage,
    );
}
