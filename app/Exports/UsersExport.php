<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $users = User::join("contents", "contents.uid_user", "=", "users.id")
            // ->where("users.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("users.username")
            ->groupBy("users.first_name")
            ->groupBy("users.last_name")
            ->groupBy("users.address")
            ->groupBy("users.city")
            ->groupBy("users.job")
            ->groupBy("users.rolesname")
            ->groupBy("users.bio")
            ->groupBy("users.phone_number")
            ->groupBy("users.date_birth")
            ->groupBy("users.status")
            ->groupBy("users.email")
            ->groupBy("users.email_verified_at")
            ->groupBy("users.password")
            ->groupBy("users.two_factor_secret")
            ->groupBy("users.two_factor_recovery_codes")
            ->groupBy("users.remember_token")
            ->groupBy("users.current_team_id")
            ->groupBy("users.avatar")
            ->groupBy("users.google_id")
            ->groupBy("users.facebook_id")
            ->groupBy("users.roles")
            ->groupBy("users.deleted_at")
            ->groupBy("users.created_at")
            ->groupBy("users.updated_at")
            ->groupBy("users.id")
            ->groupBy("users.userId")
            ->orderBy(DB::raw('COUNT(users.id)', 'desc'), 'desc')
            ->get(array(DB::raw('COUNT(users.id) as tops'), 'users.*'));

        $authors = $users->map(function ($item) {
            return [
                'Username' => $item->first_name . ' ' . $item->last_name,
                'Tops' => $item->tops
            ];
        });

        return collect($authors->all());
    }

    public function headings(): array
    {
        return ["Authors", "Top Article"];
    }
}
