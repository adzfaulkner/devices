<?php
namespace Arjf\Devices\Handheld\Apple;
use Arjf\Devices\AbstractScreen;

class Screen extends AbstractScreen {
    /**
     *
     * @var bool
     */
    protected $retina;
    
    /**
     * 
     * @param int $width
     * @param int $height
     * @param bool $retina
     */
    public function __construct($width, $height, $retina = true) {
        parent::__construct($width, $height);
        $this->setRetina($retina);
    }

        /**
     * 
     * @param bool $retina
     */
    public function setRetina($retina)
    {
        $this->retina = (bool)$retina;
    }
    
    /**
     * 
     * @return bool
     */
    public function isRetina()
    {
        return $this->retina === true;
    }
}
