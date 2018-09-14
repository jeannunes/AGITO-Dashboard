<?php
/**
 * Created by PhpStorm.
 * User: jean.maciel
 * Date: 30/05/2018
 * Time: 16:06
 */

namespace App\Controller\Api;


class FoodsController extends ApiController
{

    public function add()
    {
        // Allows only PUT and POST methods
        $this->request->allowMethod(['put', 'post']);

        // Creates a new Glycemia entity
        $record = $this->Foods->newEntity();

        // Patches the entity
        $record = $this->Foods->patchEntity($record, [
            "food" => $this->request->getData("food")
        ]);

        // Sets the user ID
        $record->user_id = $this->Auth->user('id');

        // In case the record cannot be added to the database throws an exception
        if (!$this->Foods->save($record))
            throw new \InvalidArgumentException(__('Could not save the food record right now. Please, try again!'));

        // Shows results on screen
        $this->set('record', $record);
        $this->set('_serialize', ['record']);
    }

}