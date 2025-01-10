public function up()
{
    Schema::create('landmarks', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->float('latitude', 10, 6);
        $table->float('longitude', 10, 6);
        $table->timestamps();
    });
}
