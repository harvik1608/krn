<?php

namespace App\Imports;

use App\Models\Site;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Site([
            'project_no'         => $row['project_no'] ?? '',
            'project_type'       => $row['project_type'] ?? '',
            'project_start_date' => $this->formatDate($row['project_start_date'] ?? null),
            'project_status'     => $row['project_status'] ?? '',
            'invoice_status'     => $row['invoice_status'] ?? '',
            'address'            => $row['address'] ?? '',
            'lat'                => $row['lat'] ?? 0,
            'lng'                => $row['lng'] ?? 0,
            'is_active'          => 1,
            'created_at'         => now(),
        ]);
    }

    private function formatDate($date)
    {
        if (empty($date)) {
            return null;
        }

        try {
            // Handle both "15/6/2024" and "15-6-2024"
            return Carbon::createFromFormat('d/m/Y', str_replace('-', '/', trim($date)))->format('Y-m-d');
        } catch (\Exception $e) {
            // Fallback: try to parse automatically
            return Carbon::parse($date)->format('Y-m-d');
        }
    }

    public function headingRow(): int
    {
        return 1; // Header is on the first line of your CSV
    }
}
