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

class Trie {
    /**
     * Root node for the Trie 
     */
    public $root ;

    /**
     */
    function __construct() {
        $this->root = new TrieNode ;
    }
  
    /**
     * @param String $word
     * @return NULL
     */
    function insert($word) {
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
    function search($word) {
        $current = $this->root ;

        for($i = 0; $i < strlen($word); $i++){
            if(!isset($current->children[$word[$i]])){
                return false ;
            }
            $current = $current->children[$word[$i]];
        }
        
        return $current->endOfWord ;
    }
  
    /**
     * @param String $prefix
     * @return Boolean
     */
    function startsWith($prefix) {
        
        $current = $this->root ;

        for($i = 0; $i < strlen($prefix); $i++){
            if(!isset($current->children[$prefix[$i]])){
                return false ;
            }
            $current = $current->children[$prefix[$i]];
        }

        return true ;

    }
}

/**
 * Your Trie object will be instantiated and called as such:
 * $obj = Trie();
 * $obj->insert($word);
 * $ret_2 = $obj->search($word);
 * $ret_3 = $obj->startsWith($prefix);
 */