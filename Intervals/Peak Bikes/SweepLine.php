<?php


class Solution {
	
	/**
	 * In this concept we will use the two pointer method
     * @param Integer[][] $intervals
     * @return Integer
     */
	public function peakBikes($intervals){
		$sizeOfIntervals = count($intervals);
		if($sizeOfIntervals == 0) return 0;
		
        // this will correctly sort the matrix
		sort($intervals);
		
		$starts = $ends = $bikes = [];
		$peak = $count = 0  ;
		
		foreach($intervals as $interval){
			$starts[] = $interval[0];	
			$ends[] = $interval[1];
			$bikes[] = $interval[2];
		}
		
		$startPointer = $endPointer = 0  ;
		
		while($startPointer < $sizeOfIntervals){
			$startValue = $starts[$startPointer];
			$endValue = $ends[$endPointer];
			
			if($startValue < $endValue){
				$count += $bikes[$startPointer];
				$startPointer++;
			}
			else {
				$count -= $bikes[$startPointer];
				$endPointer++;
			}
			
			$peak = max($peak, $count);
		}
		
		return $peak;
	}

}