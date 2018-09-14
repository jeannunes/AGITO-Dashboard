<?php
/**
 * Created by PhpStorm.
 * User: jean.maciel
 * Date: 27/02/2018
 * Time: 15:51
 */

namespace App\Controller\Api;


class GlycemiaController extends ApiController
{
    public function index()
    {
        $g = $this->Glycemia->findByUserId($this->Auth->user('id'))->order(['date DESC']);
        $this->set('records', $g);
        $this->set('_serialize', ['records']);
    }

    public function add()
    {
        // Allows only PUT and POST methods
        $this->request->allowMethod(['put', 'post']);

        // Creates a new Glycemia entity
        $record = $this->Glycemia->newEntity();
        // Patches the entity
        $record = $this->Glycemia->patchEntity($record, [
            "level" => $this->request->getData("level")
        ]);

        // Sets the user ID
        $record->user_id = $this->Auth->user('id');

        // In case the record cannot be added to the database throws an exception
        if (!$this->Glycemia->save($record))
            throw new \InvalidArgumentException(__('Could not sva e the glycemia record right now. Please, try again!'));

        // Shows results on screen
        $this->set('record', $record);
        $this->set('_serialize', ['record']);
    }
}