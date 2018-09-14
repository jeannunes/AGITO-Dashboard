<?php
/**
 * Created by PhpStorm.
 * User: jean.maciel
 * Date: 30/05/2018
 * Time: 16:07
 */

namespace App\Controller\Api;


class MoodsController extends ApiController
{
    public function add()
    {
        // Allows only PUT and POST methods
        $this->request->allowMethod(['put', 'post']);

        // Creates a new Glycemia entity
        $record = $this->Moods->newEntity();

        // Patches the entity
        $record = $this->Moods->patchEntity($record, [
            "mood" => $this->request->getData("mood")
        ]);

        // Sets the user ID
        $record->user_id = $this->Auth->user('id');

        // In case the record cannot be added to the database throws an exception
        if (!$this->Moods->save($record))
            throw new \InvalidArgumentException(__('Could not save the mood record right now. Please, try again!'));

        // Shows results on screen
        $this->set('record', $record);
        $this->set('_serialize', ['record']);
    }
}