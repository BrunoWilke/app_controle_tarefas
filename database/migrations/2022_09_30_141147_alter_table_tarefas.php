<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableTarefas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tarefas', function (Blueprint $table) {
            $table->date('data_limite_conclusao');
        
        //passa os registros da coluna antiga para a nova
        //DB::statement('update tarefas set data_limite_conclusao = data_limite_conclusão');

            $table->dropColumn('data_limite_conclusão');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tarefas', function (Blueprint $table) {
            $table->date('data_limite_conclusão');
            $table->dropColumn('data_limite_conclusao');
        });
    }
}
