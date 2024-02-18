<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImports implements ToCollection, WithHeadingRow
{
    protected $data = [];

    public function collection(Collection $rows)
    {
        try {
            foreach ($rows as $row) {
                $rowData = [
                    'customer_name' => $row['customer_name'],
                    'reg_no' => $row['reg_no'],
                    // Map other columns to their respective fields
                ];
                $this->data[] = $rowData;
            }
        } catch (\Exception $e) {
            // Handle exceptions, log errors, or throw custom exceptions
            // For example:
            // Log::error('Error occurred during import: ' . $e->getMessage());
            // throw new \Exception('Error occurred during import: ' . $e->getMessage());
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
