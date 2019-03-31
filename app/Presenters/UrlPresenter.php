<?php

namespace App\Presenters;

use App\Models\Designer;

class {Model}UrlPresenter {

    protected $designer;

    public function __construct(Designer $designer)
    {
        $this->designer = $designer;
    }

    public function __get($key)
    {
        if(method_exists($this, $key))
        {
            return $this->$key();
        }

        return $this->$key;
    }

    public function delete()
    {
        return route('designer.delete', $this->designer);
    }

    public function edit()
    {
        return route('designer.edit', $this->designer);
    }

    public function show()
    {
        return route('designer.show', $this->designer);
    }    

    public function update()
    {
        return route('designer.update', $this->designer);
    }
}
