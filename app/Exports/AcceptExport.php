<?php

namespace App\Exports;

use App\Models\accept;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AcceptExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return accept::all();
    }
    public function headings() : array
    {
        return [
            'Id',
            'CaseId',
            'ผู้แจ้ง',
            'ตำแหน่ง',
            'หน่วยงาน/สังกัด',
            'สถานที่',
            'เจ้าของ',
            'เรื่อง',
            'สถานะ',
            'ผู้รับแจ้ง',
            'กลุ่มปัญหา',
            'ชนิดของอุปกรณ์',
            'SapId',
            'Result',
            'ResultDetail',
            'ส่งงานต่อ/ร่วมงาน',
            'ชื่อผู้ร่วมงาน',
            'เดือน',
            'ปี',
            'Approve',
            'Created_at',
            'Updated_at'
        ];
    }
}
