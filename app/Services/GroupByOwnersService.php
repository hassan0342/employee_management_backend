<?php

namespace App\Services;

class GroupByOwnersService
{
    public function groupFilesByOwners(array $files)
    {
        $groupedFiles = [];

        foreach ($files as $file => $owner) {
            $groupedFiles[$owner][] = $file;
        }

        return $groupedFiles;
    }
}
