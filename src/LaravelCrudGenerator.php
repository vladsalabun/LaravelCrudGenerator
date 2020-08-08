<?php

namespace Salabun;

use Salabun\DataSets\WebRoutes;
use Salabun\DB\MySQLParser;

/**
 *  Генератор крудів:
 */
class LaravelCrudGenerator 
{
	protected $project = [];
	protected $driver = 'MySQL';
    
    public function __construct() 
	{
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
    
    /** 
     *  Визначити драйвер бази даних:
     */
    public function driver($driver = 'MySQL')
	{
		if($driver == 'MySQL') {
            $this->driver = new MySQLParser;
        }
        return $this->driver;
	}
}