<?php
// Routes

$app->get('/bureau/[{lecon}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
    });

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'inscription.phtml', $args);
});




$app->get('/install}]', function ($request, $response, $args) {
	$this->db;
    	$capsule = new \Illuminate\Database\Capsule\Manager;
    	$capsule::schema()->create('articles', function (\Illuminate\Database\Schema\Blueprint $table) {
        	$table->increments('id');
        	$table->string('name');
        	// Include created_at and updated_at
        	$table->timestamps();
    	});
    	});
// Delete table if needed
// $capsule::schema()->dropIfExists('articles');
