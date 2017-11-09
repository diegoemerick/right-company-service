<?php

namespace App\Http\Controllers;

use App\Service\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function create(Request $request)
    {
        if ($request->get('form')) {
            $lawyer = $this->companyService->create($request->get('form'));
            return $lawyer;
        }
        return null;
    }

    public function update(Request $request, $id)
    {
        return $this->companyService->update($request->get('form'), $id);
    }

    public function delete($id)
    {
        return $this->companyService->delete($id);
    }

    public function get($id)
    {
        return $this->companyService->get($id);
    }

    public function index()
    {
        return $this->companyService->index();
    }
}
