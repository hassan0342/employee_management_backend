<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\GroupByOwnersService;

class GroupByOwnersServiceTest extends TestCase
{
    public function testGroupFilesByOwners()
    {
        $groupByOwnersService = new GroupByOwnersService();

        $files = [
            "insurance.txt" => "Company A",
            "letter.docx" => "Company A",
            "Contract.docx" => "Company B",
        ];

        $expectedResult = [
            "Company A" => ["insurance.txt", "letter.docx"],
            "Company B" => ["Contract.docx"],
        ];

        $result = $groupByOwnersService->groupFilesByOwners($files);

        $this->assertEquals($expectedResult, $result);
    }

}
