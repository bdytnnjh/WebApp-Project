public function up()
{
    Schema::create('landmarks', function (Blueprint $table) {
        $table->id();
        $table->string('landmark_name');
        $table->string('short_term_name');
        $table->string('name');
        $table->decimal('latitude', 10, 7);
        $table->decimal('longitude', 10, 7);
        $table->timestamps();
    });
}
