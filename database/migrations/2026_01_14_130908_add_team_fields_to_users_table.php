<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('team_name')->after('id');
            $table->string('team_leader')->after('team_name');
            $table->string('team_member_1')->nullable();
            $table->string('team_member_2')->nullable();

            $table->string('contact_number');
            $table->string('university');

            $table->foreignId('competition_id')
                ->after('id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->text('link_drive_payment');

            $table->enum('payment_status', ['pending', 'verified', 'rejected'])
                ->default('pending');

            $table->enum('role', ['admin', 'team'])
                ->default('team');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['competition_id']);

            $table->dropColumn([
                'team_name',
                'team_leader',
                'team_member_1',
                'team_member_2',
                'contact_number',
                'university',
                'competition_id',
                'link_drive_payment',
                'payment_status',
                'role',
            ]);
        });
    }
};

