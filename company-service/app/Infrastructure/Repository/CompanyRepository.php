<?php

namespace App\Infrasctructure\Repository;

use App\Domain\Model\Company;
use App\Domain\Repository\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function create($company)
    {
        return Company::create($company);
    }

    public function update($lawyer, $id)
    {
        $find = $this->get($id);
        $find->name = $lawyer['name'];
        $find->phone = $lawyer['activity'];
        $find->save();

        return $find;
    }

    public function delete($id)
    {
        return Company::destroy($id);
    }

    public function index()
    {
        return Company::orderBy('id', 'desc')->get();
    }

    public function get($id)
    {
        return Company::find($id);
    }
}