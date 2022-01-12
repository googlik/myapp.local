<?php

use App\Models\Menu;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->text('menu');
            $table->timestamps();
        });

        DB::table('menus')->insert([
            ['menu' => "Книги"],
            ['menu' => "Канцтовары"],
            ['menu' => "Сувениры"],
            ['menu' => "Игры и игрушки"],
            ['menu' => "Творчество"],
            ['menu' => "Распродажа"],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
