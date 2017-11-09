<?php

namespace App\Domain\Service;

interface CompanyServiceInterface
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
     * @return mixed
     */
    public function index();

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}