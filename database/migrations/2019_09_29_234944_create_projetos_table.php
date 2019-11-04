<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoprojetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo', 20);
        });
        DB::table('tipoprojetos')->insert(
            ['tipo' => 'Impressao 3D']
        );
        DB::table('tipoprojetos')->insert(
            ['tipo' => 'Corte Lazer']
        );

        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->string('descricao', 1000);
            $table->string('infoAdicional', 200)->nullable();
            $table->integer('codTipo')->unsigned();
            $table->foreign('codTipo')->references('id')->on('tipoprojetos');
            $table->timestamps();
        });
        DB::table('projetos')->insert(
            ['nome' => 'Motor Toyota - 4 cilindros','descricao'=>'Motor com engenharia totalmente reversa. Modelo totalmente rotativo. Manivela de trabalho, pistões e trem de válvulas. As válvulas abrem e fecham !!!. Ótimo se você
            quiser aprender sobre motores e como as partes móveis deles funcionam. Todas as peças são impressas, exceto alguns rolamentos e elementos de fixação.','infoAdicional'=>'Tempo total de impressão:Mais de 3 dias', 'codTipo'=>1]
        );
        DB::table('projetos')->insert(
            ['nome' => 'Tangran', 'descricao'=>'Seu objetivo é bem simples: formar as figuras pedidas usando todas as sete peças (conhecidas originalmente como tans). As peças são 2 triângulos grandes, 1 triângulo médio, 2 triângulos pequenos, 1 quadrado e 1 paralelogramo.','infoAdicional' => 'Quebra-cabeça chinês, inventado há quase mil anos atrás', 'codTipo'=>2]
        );
        DB::table('projetos')->insert(
            ['nome' => 'Outros', 'descricao'=>'Objetos impressos no Senai Lab, com finalidades de teste ou decoração','infoAdicional' => '', 'codTipo'=>1]
        );

        Schema::create('arquivoprojetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->integer('codprojeto')->unsigned();
            $table->foreign('codProjeto')->references('id')->on('projetos')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('imgprojetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 50);
            $table->integer('codprojeto')->unsigned();
            $table->foreign('codProjeto')->references('id')->on('projetos')->onDelete('cascade');
            $table->timestamps();
        });
        //tangram
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20191002_075517.jpg', 'codprojeto'=>2]
        );
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20190917_142541.jpg', 'codprojeto'=>2]
        );
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20191001_083413.jpg', 'codprojeto'=>2]
        );
       

        //impressao
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20191002_080204.jpg', 'codprojeto'=>1]
        );
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20190924_165344.jpg', 'codprojeto'=>1]
        );
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20190924_171930.jpg', 'codprojeto'=>1]
        );
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20190921_230744.jpg', 'codprojeto'=>1]
        );
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20191002_080755.jpg', 'codprojeto'=>1]
        );
      
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20191001_083559.jpg', 'codprojeto'=>1]
        );

        //outros
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20190917_143152.jpg', 'codprojeto'=>3]
        );
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20190924_131426.jpg', 'codprojeto'=>3]
        );
      
        DB::table('imgprojetos')->insert(
            ['nome' => 'IMG_20191002_075956.jpg', 'codprojeto'=>3]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
        Schema::dropIfExists('arquivoprojetos');
        Schema::dropIfExists('imgprojetos');
        Schema::dropIfExists(' tipoprojetos');
       
    }
}
