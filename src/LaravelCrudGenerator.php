<?php

namespace Salabun;

user Salabun\DataSets\WebRoutes;

/**
 *  Генератор крудів:
 */
class LaravelCrudGenerator 
{
	public function __construct($project) 
	{
		$this->project = $project;
		$this->webRoutes = new WebRoutes;
	}
    
    
	public function generateRoutes()
	{
		// TODO: 
        // взяти всі сутності
        // які потрібні веб-роути? назви
        // які потрібні апі-роути? назви
	}
    
    public function generateViews()
	{
		// TODO:
	}
    
    public function generateModels()
	{
		// TODO:
	}
    
    public function generateControllers()
	{
		// TODO:
	}
}