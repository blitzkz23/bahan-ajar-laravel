<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('penerima_bantuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerima_manfaat_id')->constrained('penerima_manfaats')->onDelete('cascade');
            $table->foreignId('bantuan_id')->constrained('bantuans')->onDelete('cascade');
            $table->date('tanggal_terima');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerima_bantuans');
    }
}
;