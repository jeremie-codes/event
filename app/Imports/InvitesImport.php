<?php

namespace App\Imports;

use App\Models\Invite;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow; // si ton Excel a une ligne d'entête

class InvitesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Invite([
            'nom'       => $row['nom'] ?? null,
            'phone'     => $row['phone'] ?? null,
            'entreprise'   => $row['entreprise'] ?? null,
        ]);
    }
}
