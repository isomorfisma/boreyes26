<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SqlFileSeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('seeders/boreyes26.sql'); // sesuaikan nama file
        $sql  = file_get_contents($path);

        // Bersihin comment phpmyadmin
        $sql = preg_replace('/^\s*--.*$/m', '', $sql);
        $sql = preg_replace('/\/\*![\s\S]*?\*\//', '', $sql);

        // Split statements
        $statements = array_filter(array_map('trim', preg_split('/;\s*\n/', $sql)));

        // 1) Kosongin tabel data dulu biar tidak duplicate + FK aman
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // child dulu, parent terakhir
        DB::table('submissions')->truncate();
        DB::table('selections')->truncate();
        DB::table('users')->truncate();
        DB::table('faqs')->truncate();
        DB::table('competitions')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 2) Ambil hanya INSERT untuk tabel yang kita mau
        $bucket = [
            'competitions' => [],
            'users'        => [],
            'selections'   => [],
            'submissions'  => [],
            'faqs'         => [],
        ];

        foreach ($statements as $stmt) {
            if ($stmt === '') continue;

            // Skip struktur / transaksi / set
            if (preg_match('/^\s*(CREATE|ALTER|DROP)\s+/i', $stmt)) continue;
            if (preg_match('/^\s*(START TRANSACTION|COMMIT)\b/i', $stmt)) continue;
            if (preg_match('/^\s*SET\b/i', $stmt)) continue;
            if (preg_match('/^\s*USE\s+/i', $stmt)) continue;

            // Skip insert tabel sistem
            if (preg_match('/^\s*INSERT\s+INTO\s+`?(migrations|failed_jobs|password_reset_tokens|personal_access_tokens)`?/i', $stmt)) {
                continue;
            }

            // Masukin ke bucket berdasarkan tabel
            foreach (array_keys($bucket) as $table) {
                if (preg_match('/^\s*INSERT\s+INTO\s+`?' . preg_quote($table, '/') . '`?/i', $stmt)) {
                    $bucket[$table][] = $stmt . ';';
                    continue 2;
                }
            }
        }

        // 3) Eksekusi sesuai urutan FK
        DB::beginTransaction();
        try {
            $order = ['competitions', 'users', 'selections', 'submissions', 'faqs'];
            foreach ($order as $table) {
                foreach ($bucket[$table] as $query) {
                    DB::unprepared($query);
                }
            }
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
