<?php

class LearnTrackController extends Controller
{
	public function init()
	{
		parent::init();
		Yii::app()->theme = 'charisma';
	}
}