<?php

class TrieNode {
    /**
     * Children hash map of chars
     */
    public $children = [];

    /**
     * If is the end of the word
     */
    public $endOfWord = false;
}

class WordDictionary {
    /**
     * Root node for the Trie 
     */
    public $root ;

    /**
     * Searched words
     */
    public $searched = [] ;

    /**
     */
    function __construct() {
        $this->root = new TrieNode ;
    }
  
    /**
     * @param String $word
     * @return NULL
     */
    function addWord($word) {
        //echo "\n addWord: $word";
        $current = $this->root ;

        for($i = 0; $i < strlen($word); $i++){
            if(!isset($current->children[$word[$i]])){
                $current->children[$word[$i]] = new TrieNode ;
            }

            $current = $current->children[$word[$i]];
        }

        $current->endOfWord = true ;
    }
  
    /**
     * @param String $word
     * @return Boolean
     */
    function search($word, $current = null) {
        if(!$current)  {
            $current = $this->root ;
        }

        for($i = 0; $i < strlen($word); $i++){

            if($word[$i] == '.'){

                foreach(array_keys($current->children) as $char){
                    $hasWord = $this->search(substr($word, $i + 1), $current->children[$char]);

                    if($hasWord) return true;
                }

                return false ;
            }
            else {
                if(!isset($current->children[$word[$i]])){
                    return false ;
                }
                $current = $current->children[$word[$i]];
            }
        }
        
        return $current->endOfWord ;
    }
}

/**
 * Your WordDictionary object will be instantiated and called as such:
 * $obj = WordDictionary();
 * $obj->addWord($word);
 * $ret_2 = $obj->search($word);
 */