<?php

namespace OnlineshopOop\App;

class View extends \stdClass
{
    const VIEWS_TEMPLATES_HEAD_PHP = "/../Views/templates/head.php";
    const VIEWS_TEMPLATES_NAVIGATION_PHP = "/../Views/templates/navigation.php";
    const VIEWS_TEMPLATES_FOOTER_PHP = "/../Views/templates/footer.php";
    const VIEWS_TEMPLATES_BANNER_PHP = "/../Views/templates/banner.php";
    const VIEWS_TEMPLATES_CONTAINER_PHP = "/../Views/templates/container.php";
    const PROPERTY_NOT_FOUND_ALERT = "{{PROPERTY NOT FOUND!!!}}";
 private string $actionNameForViews;
 private string $classNameForViews;

 public function __get($name){
     if(property_exists($this,$name)){
         return $this->{$name};
     }
     else{
         return "{{PROPERTY NOT FOUND!!!}}";
     }
 }

 public function render(string $pathToview, array $datToRender):string{
     $this->storeDateToRender($datToRender);
     $fileNameWithFullPath = __DIR__.'/../views/'.$this->classNameForViews.'/'.$pathToview.php;
     if(file_exists($fileNameWithFullPath)){
         $data =$datToRender;
         $header =$this->getHeaderHtml();
         $content =$this->getContentHtml($fileNameWithFullPath);
         $header =$this->replacePlaceHolderWithContent($content,$header);
         $footer = $this->getFooterHtml();
         return $header .$footer;
     }
     return '';
 }

 private function getHeaderHtml():string|false
 {
     $data = $this;
     ob_start();
     require_once __DIR__ .self:: VIEWS_TEMPLATES_HEAD_PHP;
     require_once __DIR__ .self::VIEWS_TEMPLATES_NAVIGATION_PHP;
     require_once __DIR__ .self::VIEWS_TEMPLATES_BANNER_PHP;
     require_once __DIR__.self::VIEWS_TEMPLATES_CONTAINER_PHP;
     $header  =ob_get_contents();
     ob_end_clean();
     return $header;
 }

 public function storeDataToRender(array $dataToRender):void
 {
     foreach ($dataToRender as $key => $data){
         $this->{$key}=$data;
     }
 }

    /**
     * @return string
     */
    public function getClassNameForViews(): string
    {
        return $this->classNameForViews;
    }

    /**
     * @param string $classNameForViews
     */
    public function setClassNameForViews(string $classNameForViews): void
    {
        $this->classNameForViews = $classNameForViews;
    }

    /**
     * @return string
     */
    public function getActionNameForViews(): string
    {
        return $this->actionNameForViews;
    }

    /**
     * @param string $actionNameForViews
     */
    public function setActionNameForViews(string $actionNameForViews): void
    {
        $this->actionNameForViews = $actionNameForViews;
    }
}