<?php

namespace Salabun\Views;

/**
 *  Секції видів:
 */
class ViewSectionController
{
	public function __construct() 
	{
        $this->sm = 12;
        $this->md = 6;
        $this->lg = 6;
        $this->xl = 6;
        
        $this->items = [];
    }
   
	public function sm($col) 
	{
        $this->sm = $col;
        return $this;
    }
    
	public function md($col) 
	{
        $this->md = $col;
        return $this;
    }
    
	public function lg($col) 
	{
        $this->lg = $col;
        return $this;
    }
    
	public function xl($col) 
	{
        $this->xl = $col;
        return $this;
    }
    
	public function add($item) 
	{
        $this->items[] = $item;
        return $this;
    }
    
	public function getHTML() 
	{
        $string = '<!--- Begin section: --->' . PHP_EOL;
        $string .= '<div class="col-sm-'.$this->sm.' col-md-'.$this->md.' col-lg-'.$this->lg.' col-xl-'.$this->xl.'">' . PHP_EOL;
        
        foreach($this->items as $item) {
            $string .= PHP_EOL . $item . PHP_EOL;
        }
        
        
        $string .= PHP_EOL . '</div>' . PHP_EOL;
        $string .= '<!--- /End section --->' . PHP_EOL;
        
        return $string;
    }
    
    
    
}