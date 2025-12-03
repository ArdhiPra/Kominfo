<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AnakPkl;
use Carbon\Carbon;

class UpdatePklStatus extends Command
{
    /**
     * Nama command yang dipanggil di terminal / scheduler.
     */
    protected $signature = 'pkl:update-status';

    /**
     * Deskripsi command.
     */
    protected $description = 'Update status anak PKL dari Aktif menjadi Selesai berdasarkan tanggal selesai';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today();

        $count = AnakPkl::where('status', 'Aktif')
            ->whereDate('tanggal_selesai', '<=', $today)
            ->update(['status' => 'Selesai']);

        $this->info("Status berhasil diperbarui untuk {$count} peserta PKL.");

        return self::SUCCESS;
    }
}
