<?php

class Solution {
    /**
     * hash map already visiting nodes
     */
    private $visiting = [];

    /**
     * hash map course pre requisites
     */
    private $coursePrerequisites = [];

    /**
     * @param Integer $numCourses
     * @param Integer[][] $prerequisites
     * @return Boolean
     */
    function canFinish($numCourses, $prerequisites) {
        // reset all pre requisites list
        for($course = 0; $course < $numCourses ; $course++){
            $this->coursePrerequisites[$course] = [];
        }

        // set all course pre requisites
        foreach($prerequisites as $course => $prerequisite){
            $this->coursePrerequisites[$prerequisite[0]][] = $prerequisite[1];
        }

        // iterate over all courses and check
        for($course = 0; $course < $numCourses ; $course++){
            if(!$this->checkCourse($course)) return false ;
        }

        return true ;
    }

    /**
     * @param Integer $course
     * @return Boolean
     */
    function checkCourse($course) {
        // check if has loop
        if(isset($this->visiting[$course])) return false ;

        // check if is completed
        if($this->coursePrerequisites[$course] == []) return true ;
        
        // mark as visiting
        $this->visiting[$course] =  true ;

        // iterate over pre requisite courses
        foreach($this->coursePrerequisites[$course] as $preCourse){
            if(!$this->checkCourse($preCourse)) return false ;
        }

        // unmark as visiting
        unset($this->visiting[$course]);

        // if get to the end, so we can clean the pre requisites , and it means that course can be completed
        $this->coursePrerequisites[$course] = [];

        return true ;
    }
}