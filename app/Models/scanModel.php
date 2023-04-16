<?php

namespace App\Models;

use CodeIgniter\Model;

class scanModel extends Model
{
    protected $table = 'scan_qc';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'pic', 'shift',
        'jam_mulai', 'jam_selesai', 'part_number', 'lot_number', 'qty_check', 'qty_oke', 'qty_ng',
        'scratch', 'dented', 'dimens', 'pin_g', 'cg', 'piptil', 'chip', 'spiral', 'shortcut', 'burry_t1', 'burry_t2', 'rusty_bp', 'm_proses',
        'pin_hole', 'bending',
        'rusty', 'color', 'burn_mark', 'part_off', 'blister',
        'keterangan'
    ];
}
