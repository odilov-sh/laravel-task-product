<?php

namespace App\View\Components\Forms;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

abstract class BaseActiveInput extends Component
{

    /**
     * @var Model
     */
    public $model;

    /**
     * @var string
     */
    public $attribute;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string|null
     */
    public $errorAttribute;


    public function __construct($model, $attribute, $label = null, $errorAttribute = null)
    {
        $this->model = $model;
        $this->attribute = $attribute;
        $this->label = $label ?? ucfirst($this->attribute);
        $this->errorAttribute = $errorAttribute ?? $attribute;
    }

}
