<?php

namespace Tests\Unit;

use App\Infrasctructure\Repository\CompanyRepository;
use App\Service\CompanyService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyTest extends TestCase
{
    public function testCreateCompany()
    {
        $companyService = new CompanyService(
            $this->getRepositoryMock()
        );

        $company = $companyService->create($this->getCompanyMock());
        $this->assertEquals($company, $this->getCompanyMock());
    }

    public function testUpdateCompany()
    {
        $companyService = new CompanyService(
            $this->getRepositoryMock()
        );

        $company = $companyService->update($this->getCompanyMock(), 1);
        $this->assertEquals($company['id'], 1);
    }

    public function testDeleteCompany()
    {
        $companyService = new CompanyService(
            $this->getRepositoryMock()
        );

        $company = $companyService->delete(1);
        $this->assertTrue($company === 1, "success");
    }

    public function testIndexCompany()
    {
        $companyService = new CompanyService(
            $this->getRepositoryMock()
        );

        $company = $companyService->index();
        $this->assertTrue($company === [], "success");
    }

    private function getRepositoryMock()
    {
        $client = $this->getMockBuilder(CompanyRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $client->method('index')
            ->willReturn([]);

        $client->method('create')
            ->willReturn($this->getCompanyMock());

        $client->method('update')
            ->willReturn($this->getCompanyMock());

        $client->method('delete')
            ->willReturn(1);

        return $client;
    }

    private function getCompanyMock()
    {
        return [
            "id" => 1,
            "name" => "Company Test",
            "activity" => "Tech",
        ];
    }
}
