<?php

namespace App\Service;

use App\Domain\Model\Company;
use App\Domain\Service\CompanyServiceInterface;
use App\Infrasctructure\Repository\CompanyRepository;
use Validator;

class CompanyService implements CompanyServiceInterface
{
    private $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($company)
    {
        try {

            $valid = Validator::make(
                $company,
                Company::RULES);

            if ($valid->fails()) {
                throw new \Exception($valid->errors());
            }
            return $this->repository->create($company);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function update($company, $id)
    {
        try {
            return $this->repository->update($company, $id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function index()
    {
        try {
            return $this->repository->index();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function get($id)
    {
        try {
            return $this->repository->get($id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            return $this->repository->delete($id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}