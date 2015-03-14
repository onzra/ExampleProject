<?php

namespace Example\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Recipes controller.
 *
 * @author David Mertl <dave@onzra.com>
 */
class RecipesController {
    /**
     * Index action.
     *
     * Lists all recipes.
     *
     * @param Request  $request  HTTP request.
     * @param Response $response HTTP response.
     *
     * @return Response
     */
    public function index(Request $request, Response $response) {
        $response->setContent('Recipes index.');
        return $response;
    }

    /**
     * View action.
     *
     * Views a recipe.
     *
     * @param Request  $request  HTTP request.
     * @param Response $response HTTP response.
     * @param array    $args     Request arguments.
     *
     * @return Response
     */
    public function view(Request $request, Response $response, array $args) {
        $response->setContent('Recipes view #' . $args['id'] . '.');
        return $response;
    }

    /**
     * Add action.
     *
     * Adds a recipe.
     *
     * @param Request  $request  HTTP request.
     * @param Response $response HTTP response.
     *
     * @return Response
     */
    public function add(Request $request, Response $response) {
        $response->setContent('Recipes add.');
        return $response;
    }

    /**
     * Edit action.
     *
     * Edits a recipe.
     *
     * @param Request  $request  HTTP request.
     * @param Response $response HTTP response.
     * @param array    $args     Request arguments.
     *
     * @return Response
     */
    public function edit(Request $request, Response $response, array $args) {
        $response->setContent('Recipes edit #' . $args['id'] . '.');
        return $response;
    }
}
