<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImports;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory;

class FileController extends Controller
{
    public function uploadqw(Request $request)
    {
        

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Load the Excel file and specify the import class
            $import = new ExcelImports(); // Create a custom import class
            Excel::import($import, $file);

            // Get the data from the import class
            $data = $import->getData();

            dd($data);
            // Now you can access specific fields from the imported data
            foreach ($data as $row) {
                $customerName = $row['customer_name'];
                $regNo = $row['reg_no'];
                // Fetch other fields similarly
            }

            // You can perform further processing or database operations with the fetched data

            return response()->json(['message' => 'File uploaded and processed successfully']);
        } else {
            return response()->json(['message' => 'No file uploaded'], 400);
        }
    }


    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->getRealPath();

            $spreadsheet = IOFactory::load($filePath);
            $worksheet = $spreadsheet->getActiveSheet();

            $data = [];
            foreach ($worksheet->getRowIterator() as $row) {
                $rowData = [];
                foreach ($row->getCellIterator() as $cell) {
                    $rowData[] = $cell->getValue();
                }
                // Assuming the first column contains 'customer_name' and the second column contains 'reg_no'
                $data[] = [
                    'customer_name' => $rowData[0],
                    'reg_no' => $rowData[1],
                ];
            }

            // Save data to database
            foreach ($data as $row) {
                // Assuming you have a 'customers' table
                Customer::create($row);
            }

            return redirect()->back()->with('success', 'Data imported successfully.');
        }

        return redirect()->back()->with('error', 'No file uploaded.');
    }
}