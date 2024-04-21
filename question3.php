<?php
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getLocations();
   
    // Common method
    public function printOut()
    {
        echo  $this->hierarchieRecursion($this->getLocations());
    }

    function hierarchieRecursion($locations, $parent = 0)
    {
        $tree = "<ul>";
        $count = 0;
        foreach ($locations as $key => $location) {
            if ($location[1] == $parent) {
                $tree .= "<li>";
                $tree .= $location[0];
                $tree .= $this->hierarchieRecursion($locations, $key);
                $tree .= "</li>";
            }
        }
        $tree .= "</ul>";
        return $tree;
    }
}


class Locations extends AbstractClass
{
    public function getLocations()
    {
        return [
            3 => ["Building1", 2],
            2 => ["Area1", 1],
            5 => ["Floor1", 3],
            1 => ["City1"],
            4 => ["Room1", 5],
            13 => ["Building2", 12],
            12 => ["Area2", 11],
            14 => ["Room2", 10],
            10 => ["Floor2", 13],
            11 => ["City2"],
        ];
    }  
}
$onLocations = new Locations;
$data = $onLocations->printOut();
?>  