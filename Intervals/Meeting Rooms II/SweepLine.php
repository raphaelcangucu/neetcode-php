<?php

class Solution {
	
	/**
	 * In this concept we will use the two pointer method
     * @param Integer[][] $intervals
     * @return Integer
     */
	public function minMeetingRooms($intervals){
		$sizeOfIntervals = count($intervals);
		if($sizeOfIntervals == 0) return 0;
		
		$starts = $ends = [];
		$minMeetingRooms = $count = 0  ;
		
		foreach($intervals as $interval){
			$starts[] = $interval[0];	
			$ends[] = $interval[1];
		}
		
		// sort arrays
		sort($starts);
		sort($ends);
		
		$startPointer = $endPointer = 0  ;
		
		while($startPointer < $sizeOfIntervals){
			$startValue = $starts[$startPointer];
			$endValue = $ends[$endPointer];
			
			if($startValue < $endValue){
				$startPointer++;
				$count++;
			}
			else {
				$endPointer++;
				$count--;
			}
			
			$minMeetingRooms = max($minMeetingRooms, $count);
		}
		
		return $minMeetingRooms;
	}

}