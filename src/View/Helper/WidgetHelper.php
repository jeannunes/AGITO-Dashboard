<?php
/**
 * Created by PhpStorm.
 * User: Jean Nunes
 * Date: 04/10/2018
 * Time: 15:09
 */

namespace App\View\Helper;


use Cake\Utility\Inflector;
use Cake\View\Helper;

class WidgetHelper extends Helper
{

    public $helpers = ['HTML'];

    public function graphFromQuery(string $title, string $query, array $options = [])
    {
        $_id = Inflector::underscore(Inflector::variable($title));

        $_title = $this->HTML->div('card-title', $title);
        $_header = $this->HTML->div('card-header', $_title, []);

        $_canvas = "<canvas id=\"${_id}_canvas\" width=\"100%\"></canvas>";
        $_script = $this->HTML->scriptBlock("window.addEventListener('load', ()=>{\nwidget.GraphQuery('#${_id}', '${query}', " . json_encode($options) . ");\n});");
        $_content = $this->HTML->div('card-content', $_canvas . $_script, ['id' => $_id]);

        return $this->HTML->div('card', $_header . $_content);
    }

    public function indicator(string $title, string $query, array $options = [])
    {
        $_id = Inflector::underscore(Inflector::variable($title));

        $_wrapper = "<div class=\"card-content\">
	                                <div class=\"row\">
	                                    <div class=\"col-xs-5\">
	                                        <div class=\"icon-big icon-warning text-center\">

	                                            <i class=\"ti-${options['icon']}\"></i>
	                                        </div>
	                                    </div>
	                                    <div class=\"col-xs-7\">
	                                        <div class=\"numbers\">
	                                            <p>${title}</p>
	                                            <span id='${_id}_text'></span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>";
        $_script = $this->HTML->scriptBlock("window.addEventListener('load', ()=>{\nwidget.Indicator('#${_id}', '${query}', " . json_encode($options) . ");\n});");
        $_content = $this->HTML->div('card-content', $_wrapper . $_script, ['id' => $_id]);

        return $this->HTML->div('card', $_content);
    }

}