<?php

namespace App\Domain\Repository;

interface CompanyRepositoryInterface
{
    /**
     * @param $company
     * @return mixed
     */
    public function create($company);

    /**
     * @param $company
     * @param $id
     * @return mixed
     */
    public function update($company, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @return mixed
     */
    public function index();

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);
}