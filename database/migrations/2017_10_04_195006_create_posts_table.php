<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->string('name', 128);
            $table->string('slug', 128);

            $table->mediumText('excerpt')->nullable();
            $table->text('body');
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');

            $table->string('file', 128)->nullable();

            //inscripcion

            $table->string('tipo_documento');
            $table->string('nro_documento');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('fecha_nacimiento');
            $table->string('edad');
            $table->string('sexo');
            $table->string('peso');
            $table->string('talla');
            $table->string('hijos');
            $table->string('civil');
            $table->string('instruccion');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('empresa_trans');
            $table->string('tipo_vehiculo');
            $table->string('numero_placa');
            $table->string('pasajeros');
            $table->string('brevete');
            $table->string('mayor_65');
            $table->string('embarazo');
            $table->string('cardiovascular');
            $table->string('diabetes');
            $table->string('hepatica');
            $table->string('neurologica');
            $table->string('inmunodeficiencia');
            $table->string('renal');
            $table->string('d_hepatico');
            $table->string('pulmonar');
            $table->string('cancer');
            $table->string('ninguno');
            $table->timestamps();

            
            
            //relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
