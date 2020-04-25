<?php

declare(strict_types=1);

namespace app\Behavioral\Visitor\Visitors;

use app\Behavioral\Visitor\Models\Company;
use app\Behavioral\Visitor\Models\Department;
use app\Behavioral\Visitor\Models\Employee;

interface Visitor
{
    public function visitCompany(Company $company): string;

    public function visitDepartment(Department $department): string;

    public function visitEmployee(Employee $employee): string;
}