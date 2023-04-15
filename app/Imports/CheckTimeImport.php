<?php
namespace App\Imports;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class CheckTimeImport implements ToCollection
{
    use Importable;

    private $rows = 0;
    private $data = [];

    

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            if ($row[1] != 'CHECKTIME' && $row[0] != 'USERID') {
                $checkTime = Date::excelToDateTimeObject($row[1]);
    
                $this->data[] = [
                    'user_id' => $row[0],
                    'check_time' => $checkTime->format('Y-m-d H:i:s')
                ];
    
                $this->rows++;
            }
        }
    }

    public function getRowCount()
    {
        return $this->rows;
    }

    public function getData()
    {
        return $this->data;
    }
}