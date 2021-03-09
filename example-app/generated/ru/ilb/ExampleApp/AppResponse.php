<?php

namespace ru\ilb\ExampleApp;

class AppResponse extends \Happymeal\Port\Adaptor\Data\XML\Schema\AnyComplexType {

    const NS = "urn:ru:ilb:ExampleApp:AppResponse";
    const ROOT = "AppResponse";
    const PREF = NULL;

    /**
     * @maxOccurs 1 .
     * @var \String
     */
    protected $Phpversion = null;

    /**
     * @maxOccurs 1 .
     * @var \Boolean
     */
    protected $Dbconnect = null;

    public function __construct() {
        parent::__construct();
        $this->_properties["phpversion"] = array(
            "prop" => "Phpversion",
            "ns" => "",
            "minOccurs" => 0,
            "text" => $this->Phpversion
        );
        $this->_properties["dbconnect"] = array(
            "prop" => "Dbconnect",
            "ns" => "",
            "minOccurs" => 0,
            "text" => $this->Dbconnect
        );
    }

    /**
     * @param \String $val
     */
    public function setPhpversion($val) {
        $this->Phpversion = $val;
        $this->_properties["phpversion"]["text"] = $val;
        return $this;
    }

    /**
     * @param \Boolean $val
     */
    public function setDbconnect($val) {
        $this->Dbconnect = $val;
        $this->_properties["dbconnect"]["text"] = $val;
        return $this;
    }

    /**
     * @return \String
     */
    public function getPhpversion() {
        return $this->Phpversion;
    }

    /**
     * @return \Boolean
     */
    public function getDbconnect() {
        return $this->Dbconnect;
    }

    public function toXmlStr($xmlns = self::NS, $xmlname = self::ROOT) {
        return parent::toXmlStr($xmlns, $xmlname);
    }

    /**
     * Вывод в XMLWriter
     * @param XMLWriter $xw
     * @param string $xmlname Имя корневого узла
     * @param string $xmlns Пространство имен
     * @param int $mode
     */
    public function toXmlWriter(\XMLWriter &$xw, $xmlname = self::ROOT, $xmlns = self::NS, $mode = \Adaptor_XML::ELEMENT) {
        if ($mode & \Adaptor_XML::STARTELEMENT) {
            $xw->startElementNS(NULL, $xmlname, $xmlns);
        }
        $this->attributesToXmlWriter($xw, $xmlname, $xmlns);
        $this->elementsToXmlWriter($xw, $xmlname, $xmlns);
        if ($mode & \Adaptor_XML::ENDELEMENT) {
            $xw->endElement();
        }
    }

    /**
     * Вывод атрибутов в \XMLWriter
     * @param \XMLWriter $xw
     * @param string $xmlname Имя корневого узла
     * @param string $xmlns Пространство имен
     */
    protected function attributesToXmlWriter(\XMLWriter &$xw, $xmlname = self::ROOT, $xmlns = self::NS) {
        parent::attributesToXmlWriter($xw, $xmlname, $xmlns);
    }

    /**
     * Вывод элементов в \XMLWriter
     * @param \XMLWriter $xw
     * @param string $xmlname Имя корневого узла
     * @param string $xmlns Пространство имен
     */
    protected function elementsToXmlWriter(\XMLWriter &$xw, $xmlname = self::ROOT, $xmlns = self::NS) {
        parent::elementsToXmlWriter($xw, $xmlname, $xmlns);
        $prop = $this->getPhpversion();
        if ($prop !== NULL) {
            $xw->writeElement('phpversion', $prop);
        }
        $prop = $this->getDbconnect();
        if ($prop !== NULL) {
            $xw->writeElement('dbconnect', $prop);
        }
    }

    /**
     * Чтение атрибутов из \XMLReader
     * @param \XMLReader $xr
     */
    public function attributesFromXmlReader(\XMLReader &$xr) {
        parent::attributesFromXmlReader($xr);
    }

    /**
     * Чтение элементов из \XMLReader
     * @param \XMLReader $xr
     */
    public function elementsFromXmlReader(\XMLReader &$xr) {
        switch ($xr->localName) {
            case "phpversion":
                $this->setPhpversion($xr->readString());
                break;
            case "dbconnect":
                $this->setDbconnect($xr->readString());
                break;
            default:
                parent::elementsFromXmlReader($xr);
        }
    }

    /**
     * Чтение данных JSON объекта, результата работы json_decode,
     * в объект
     * @param mixed array | stdObject
     *
     */
    public function fromJSON($arg) {
        parent::fromJSON($arg);
        $props = [];
        if (is_array($arg)) {
            $props = $arg;
        } elseif (is_object($arg)) {
            foreach ($arg as $k => $v) {
                $props[$k] = $v;
            }
        }
        if (isset($props["phpversion"])) {
            $this->setPhpversion($props["phpversion"]);
        }
        if (isset($props["dbconnect"])) {
            $this->setDbconnect($props["dbconnect"]);
        }
    }

    /**
     * Чтение данных массива
     * в объект
     * @param Array $row
     *
     */
    public function fromArray($row) {
        if (isset($row["phpversion"])) {
            $this->setPhpversion($row["phpversion"]);
        }
        if (isset($row["dbconnect"])) {
            $this->setDbconnect($row["dbconnect"]);
        }
    }

}
