<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landmark extends Model
{
    public function up()
{
    Schema::create('landmarks', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('description');
        $table->float('x_coordinate');
        $table->float('y_coordinate');
        $table->timestamps();
    });
}
}
