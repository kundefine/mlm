<?php
class Tree {
    protected $tree = array();
    protected $prev_parent = array();
    protected $new_parent = array();


    public function make($users, $level = NULL) {
        if(!is_array($users)) {
            $users = array($users);
        }
        $this->prev_parent = $users;

        $this->tree[] = $this->getChild($users);

        $this->new_parent = $this->makeNewParent($this->prev_parent, $this->tree);


        while(!empty($this->new_parent[0])) {
            if(count($this->tree) == $level) {
                return $this->tree;
            }
            $this->make($this->new_parent, $level);
        }

        return $this->tree;
/*        return [
            ["previous_parent" => $this->prev_parent],
            ["new_tree" => $this->tree],
            ["new_parent" => $this->new_parent]
        ];*/
    }

    public function makeTree($tree) {
        $output = [];
        foreach ($tree as $parent => $child) {
            foreach ($child as $key => $value) {
                $output[$parent]["$key"] = explode(",", $value);
            }
        }
        return $output;
    }

    public function buidTree($tree) {
        $output = '<ul class="list-group">';
        for($loop = 0; $loop < count($tree); $loop++) {
            foreach ($tree[$loop] as $parent => $child) {
                $output .= '<ul class="list-group parent">'.$parent;
                foreach ($child as $value) {
                    $output .= '<li class="list-group-item child">'. str_replace(",", " ", $value)  .'</li>';

                }

                $output .='</ul>';
            }
        }
        $output .= '</ul>';

        return $output;
    }




    protected function makeNewParent($prev_parents, $lastTree) {
        $new_parent = array();
        $lastTreeCount = count($lastTree) - 1;
        foreach ($prev_parents as $parent) {
            $new_parent[] = $lastTree[$lastTreeCount][$parent];
        }

        return explode(",", trim(implode(",", $new_parent), ","));
    }

    public function getChild($parentUsers) {
        $child_output = array();
        $trim_output = array();
        foreach ($parentUsers as $parent) {
            if($childList = $this->hasChild($parent)) {
                foreach ($childList as $child) {
                    $child_output[$child["DirectReferralName"]] .= $child["ChildName"] . ',';
                }
            }
        }
        foreach ($child_output as $childKey => $childValue) {
            $trim_output[$childKey] = trim($childValue, ",");
        }
        return $trim_output;
    }
    public function hasChild($parentUser) {
        $child = SQL_Select("Usertree", "DirectReferralName = '{$parentUser}'", "UsertreeId ASC");
        if(count($child)) {
            return $child;
        }
        return false;
    }
}


/*$tree = array(
    [0] => array(
        ["name"] => 'admin',
        "children" => array(
            [1] => array(
                ["name"] => "A",
                "children" =>
            ),
            [2] => array(
                ["name"] => "B",
                "children" =>
            )
        )
    )
)*/

$tree = array(
    "admin" => array(
        "A" => array(
            "C" => array(
                "G" => array(),
                "H" => array()
            ),
            "D" => array(
                "I" => array(),
                "J" => array()
            ),
        ),
        "B" => array(
            "E" => array(
                "K" => array(),
                "L" => array()
            ),
            "F" => array(
                "M" => array(),
                "N" => array()
            )
        )
    )
);