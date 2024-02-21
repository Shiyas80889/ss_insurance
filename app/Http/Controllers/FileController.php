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
use App\Models\insurance;

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
                    'date' =>  $rowData[0],
                    'customer_name' => $rowData[1],
                    'reg_no' => $rowData[2],
                    'company_id' =>  $rowData[3],
                    'make' =>  $rowData[4],
                    'model' =>  $rowData[5],
                    'fuel' =>  $rowData[6],
                    'seating' =>  $rowData[7],
                    'gvm_or_cc' =>  $rowData[8],
                    'manufacturing_year' =>  $rowData[9],
                    'segment_id' =>  $rowData[10],
                    'coverage_id' =>  $rowData[11],
                    'od' =>  $rowData[12],
                    'tp' =>  $rowData[13],
                    'net_premium' =>  $rowData[14],
                    'gst' =>  $rowData[15],
                    'final_premium' =>  $rowData[16],
                    'payment_status' =>  $rowData[17],
                    'collected_prm' =>  $rowData[18],
                    'policy_number' =>  $rowData[19],
                    'risk_start_date' =>  $rowData[20],
                    'ref_name_id' =>  $rowData[21],
                    'mobile_number' =>  $rowData[22],
                    'issued_by_id' =>  $rowData[23],
                    'issued_code' =>  $rowData[24],
                    'email' =>  $rowData[25],
                    'payment_mode_id' =>  $rowData[26],
                    'agent_commission' =>  $rowData[27],
                    'payment_given_to_account' =>  $rowData[28],
                    'company_payout' =>  $rowData[29],
                ];
            }

            // Save data to database
            foreach ($data as $row) {
                // Assuming you have a 'customers' table
                insurance::create($row);
            }

            return redirect()->route('insurance');
        }

        return redirect()->back()->with('error', 'No file uploaded.');
    }
}