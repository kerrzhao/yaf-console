<?php

$str = <<< TEMPLATE
<?php 

use Yaf\Controller_Abstract;

class %sController extends Controller_Abstract
{
	/**
     * Display a listing of the resource.
     *
     */
    public function indexAction()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function createAction()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function storeAction()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function showAction($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function editAction($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function updateAction($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroyAction($id)
    {
        //
    }
}

TEMPLATE;

return $str;