<?php

namespace App\Controller\Dashboard;

use App\Controller\AppController;
use Cake\I18n\Date;
use Cake\I18n\Time;

class PagesController extends DashboardController
{
    public function index()
    {
        $this->loadModel('Glycemia');
        $gly = $this->Glycemia->find()->order('id DESC')->limit(5);
        $med = $this->Glycemia->find();
        $med->select(['media' => $med->func()->avg('Glycemia.level')])->enableAutoFields(true)->first();

        $sem = $this->Glycemia->find();
        $seven_days_ago = (Time::now())->subDays(7);
        $sem->select(['media' => $sem->func()->avg('Glycemia.level')])->where(['date >=' => $seven_days_ago])->enableAutoFields(true)->first();

        $dia = $this->Glycemia->find();
        $dia->select(['media' => $dia->func()->avg('Glycemia.level')])->where(['date =' => Date::now()])->enableAutoFields(true)->first();

        $use = $this->Glycemia->find();
        $use->select([
            'media' => $use->func()->avg('Glycemia.level'),
            'max' => $use->func()->max('Glycemia.level'),
            'min' => $use->func()->min('Glycemia.level')
        ])->group(['user_id'])->enableAutoFields(true);

        $this->loadModel('Moods');
        $moods = $this->Moods->find()->order('id DESC')->limit(5);

        $this->loadModel('Foods');
        $foods = $this->Foods->find()->order('id DESC')->limit(5);

        $this->set([
            'gly' => $gly,
            'med' => $med->toArray()[0],
            'sem' => $sem->toArray()[0],
            'dia' => $dia->toArray()[0],
            'use' => $use,
            'moods' => $moods,
            'foods' => $foods
        ]);
    }
}
