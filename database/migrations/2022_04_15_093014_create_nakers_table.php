<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nakers', function (Blueprint $table) {
            $table->id();
            $table->string('nik',15)->nullable();
            $table->string('nama',200);
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin',1);
            $table->text('alamat');
            $table->string('no_ktp', 16);
            $table->string('no_kk', 16);
            $table->string('no_kartu_bpjs', 25)->nullable();
            $table->string('no_npwp', 25)->nullable();
            $table->string('no_hp',15);
            $table->string('no_hp_keluarga',15);
            $table->string('nama_keluarga',200);
            $table->string('email', 50);
            $table->string('witel', 30);
            $table->boolean('status_naker')->default(3);
            
            $table->foreignId('pendidikan_id')->constrained('pendidikans')->onDelete('cascade');
            $table->foreignId('direktorat_id')->constrained('direktorats')->onDelete('cascade');
            $table->foreignId('posisi_id')->constrained('posisi_mitras')->onDelete('cascade');
            $table->foreignId('mitra_id')->constrained('mitras')->onDelete('cascade');

            $table->date('tgl_pengajuan');
            $table->string('nik_waspang', 15);
            $table->string('regional', 30);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nakers');
    }
}
