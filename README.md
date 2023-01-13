# neetcode-php

Solving the Blind list of [neetcode.io](https://neetcode.io/practice) with 75 chalenges using PHP.

# Problems

## Array and Hashing

### Contains Duplicate

[LeetCode Url](https://leetcode.com/problems/contains-duplicate/)

Given an integer array nums, return true if any value appears at least twice in the array, and return false if every element is distinct.

Example 1:

    Input: nums = [1,2,3,1]
    Output: true

Example 2:

    Input: nums = [1,2,3,4]
    Output: false

Example 3:

    Input: nums = [1,1,1,3,3,4,3,2,4,2]
    Output: true

#### Solutions

1. [Hash](/Array%20and%20Hashing/Contains%20Duplicate/Hash.php)
2. [Sorting](/Array%20and%20Hashing/Contains%20Duplicate/Sorting.php)

### Valid Anagram

[LeetCode Url](https://leetcode.com/problems/valid-anagram/)

Given two strings s and t, return true if t is an anagram of s, and false otherwise.

An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.


Example 1:

    Input: s = "anagram", t = "nagaram"
    Output: true

Example 2:

    Input: s = "rat", t = "car"
    Output: false

#### Solutions

1. [Using PHP Function](/Array%20and%20Hashing/Valid%20Anagram/CountCharsFunction.php)
2. [Using Loop](/Array%20and%20Hashing/Valid%20Anagram/CountCharsLoop.php)

### Two Sum

[LeetCode Url](https://leetcode.com/problems/two-sum)

Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.

Example 1:

    Input: nums = [2,7,11,15], target = 9
    Output: [0,1]
    Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

Example 2:

    Input: nums = [3,2,4], target = 6
    Output: [1,2]

Example 3:

    Input: nums = [3,3], target = 6
    Output: [0,1]

#### Solutions

1. [Using Hash](/Array%20and%20Hashing/Two%20Sum/Hash.php)

### Group Anagrams

[LeetCode Url](https://leetcode.com/problems/group-anagrams)

Given an array of strings strs, group the anagrams together. You can return the answer in any order.

An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, typically using all the original letters exactly once.

 

Example 1:

    Input: strs = ["eat","tea","tan","ate","nat","bat"]
    Output: [["bat"],["nat","tan"],["ate","eat","tea"]]

Example 2:

    Input: strs = [""]
    Output: [[""]]

Example 3:

    Input: strs = ["a"]
    Output: [["a"]]

#### Solutions

1. [Using count_chars and serialize functions](/Array%20and%20Hashing/Group%20Anagrams/HashSerialize.php)

### Top K Frequent Elements

[LeetCode Url](https://leetcode.com/problems/top-k-frequent-elements/)

Given an integer array nums and an integer k, return the k most frequent elements. You may return the answer in any order.

Example 1:

    Input: nums = [1,1,1,2,2,3], k = 2
    Output: [1,2]

Example 2:

    Input: nums = [1], k = 1
    Output: [1]

#### Solutions

1. [Using hash and sorting](/Array%20and%20Hashing/Top%20K%20Frequent%20Elements/HashArsort.php)

### Product of Array Except Self

[LeetCode Url](https://leetcode.com/problems/product-of-array-except-self/)

Given an integer array nums, return an array answer such that answer[i] is equal to the product of all the elements of nums except nums[i].

The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer.

You must write an algorithm that runs in O(n) time and without using the division operation.

 

Example 1:

    Input: nums = [1,2,3,4]
    Output: [24,12,8,6]

Example 2:

    Input: nums = [-1,1,0,-3,3]
    Output: [0,0,9,0,0]

#### Solutions

1. [Using prefix and sufix arrays](/Array%20and%20Hashing/Product%20of%20Array%20Except%20Self/PrefixSufix.php)

### Longest Consecutive Sequence

[LeetCode Url](https://leetcode.com/problems/longest-consecutive-sequence/)

Given an unsorted array of integers nums, return the length of the longest consecutive elements sequence.

You must write an algorithm that runs in O(n) time.


Example 1:

    Input: nums = [100,4,200,1,3,2]
    Output: 4
    Explanation: The longest consecutive elements sequence is [1, 2, 3, 4]. Therefore its length is 4.

Example 2:

    Input: nums = [0,3,7,2,5,8,4,6,0,1]
    Output: 9

#### Solutions

1. [Using PHP Function](/Array%20and%20Hashing/Longest%20Consecutive%20Sequence/HashUniques.php)

## Two Pointers

### Valid Palindrome

[LeetCode Url](https://leetcode.com/problems/valid-palindrome/)

A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include letters and numbers.

Given a string s, return true if it is a palindrome, or false otherwise.

Example 1:

    Input: s = "A man, a plan, a canal: Panama"
    Output: true
    Explanation: "amanaplanacanalpanama" is a palindrome.

Example 2:

    Input: s = "race a car"
    Output: false
    Explanation: "raceacar" is not a palindrome.

Example 3:

    Input: s = " "
    Output: true
    Explanation: s is an empty string "" after removing non-alphanumeric characters.
    Since an empty string reads the same forward and backward, it is a palindrome.

#### Solutions

1. [Using Two Pointers algorithm](/Two%20Pointers/Valid%20Palindrome/TwoPointers.php)
1. [Using strrev function](/Two%20Pointers/Valid%20Palindrome/TwoPointers.php)

### 3Sum

[LeetCode Url](https://leetcode.com/problems/3sum/)

Given an integer array nums, return all the triplets [nums[i], nums[j], nums[k]] such that i != j, i != k, and j != k, and nums[i] + nums[j] + nums[k] == 0.

Notice that the solution set must not contain duplicate triplets.

 
Example 1:

    Input: nums = [-1,0,1,2,-1,-4]
    Output: [[-1,-1,2],[-1,0,1]]
    Explanation: 
    nums[0] + nums[1] + nums[2] = (-1) + 0 + 1 = 0.
    nums[1] + nums[2] + nums[4] = 0 + 1 + (-1) = 0.
    nums[0] + nums[3] + nums[4] = (-1) + 2 + (-1) = 0.
    The distinct triplets are [-1,0,1] and [-1,-1,2].
    Notice that the order of the output and the order of the triplets does not matter.

Example 2:

    Input: nums = [0,1,1]
    Output: []
    Explanation: The only possible triplet does not sum up to 0.

Example 3:

    Input: nums = [0,0,0]
    Output: [[0,0,0]]
    Explanation: The only possible triplet sums up to 0.

#### Solutions

1. [Using fixed and twoSum algorithm](/Two%20Pointers/3Sum/TreeSum.php)

## Sliding Window

### Best Time to Buy And Sell Stock

[LeetCode Url](https://leetcode.com/problems/best-time-to-buy-and-sell-stock/)

You are given an array prices where prices[i] is the price of a given stock on the ith day.

You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock.

Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.

 
Example 1:

    Input: prices = [7,1,5,3,6,4]
    Output: 5
    Explanation: Buy on day 2 (price = 1) and sell on day 5 (price = 6), profit = 6-1 = 5.
    Note that buying on day 2 and selling on day 1 is not allowed because you must buy before you sell.

Example 2:

    Input: prices = [7,6,4,3,1]
    Output: 0
    Explanation: In this case, no transactions are done and the max profit = 0.

#### Solutions

1. [Using Two Pointers](/Sliding%20Window/Best%20Time%20to%20Buy%20and%20Sell%20Stock/TwoPointers.php)

### Longest Substring Without Repeating Characters

[LeetCode Url](https://leetcode.com/problems/longest-substring-without-repeating-characters/)

Given a string s, find the length of the longest 
substring
 without repeating characters.

 
Example 1:

    Input: s = "abcabcbb"
    Output: 3
    Explanation: The answer is "abc", with the length of 3.

Example 2:

    Input: s = "bbbbb"
    Output: 1
    Explanation: The answer is "b", with the length of 1.

Example 3:

    Input: s = "pwwkew"
    Output: 3
    Explanation: The answer is "wke", with the length of 3.
    Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.

#### Solutions

1. [Two Pointers](/Sliding%20Window/Longest%20Substring%20Without%20Repeating%20Characters/TwoPointers.php)

### Longest Repeating Character Replacement

[LeetCode Url](https://leetcode.com/problems/longest-repeating-character-replacement/)

You are given a string s and an integer k. You can choose any character of the string and change it to any other uppercase English character. You can perform this operation at most k times.

Return the length of the longest substring containing the same letter you can get after performing the above operations.

 

Example 1:

    Input: s = "ABAB", k = 2
    Output: 4
    Explanation: Replace the two 'A's with two 'B's or vice versa.

Example 2:

    Input: s = "AABABBA", k = 1
    Output: 4
    Explanation: Replace the one 'A' in the middle with 'B' and form "AABBBBA".
    The substring "BBBB" has the longest repeating letters, which is 4.

#### Solutions

1. [Using](/Sliding%20Window/Longest%20Repeating%20Character%20Replacement/TwoPointers.php)

## Stack

### Valid Parentheses

[LeetCode Url](https://leetcode.com/problems/valid-parentheses/)

Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Every close bracket has a corresponding open bracket of the same type.
 
Example 1:

    Input: s = "()"
    Output: true

Example 2:

    Input: s = "()[]{}"
    Output: true

Example 3:

    Input: s = "(]"
    Output: false

#### Solutions

1. [Stack](/Stack/Valid%20Parentheses/Stack.php)

## Binary Search

### Find Minimum in Rotated Sorted Array

[LeetCode Url](https://leetcode.com/problems/find-minimum-in-rotated-sorted-array/)

Suppose an array of length n sorted in ascending order is rotated between 1 and n times. For example, the array nums = [0,1,2,4,5,6,7] might become:

[4,5,6,7,0,1,2] if it was rotated 4 times.
[0,1,2,4,5,6,7] if it was rotated 7 times.
Notice that rotating an array [a[0], a[1], a[2], ..., a[n-1]] 1 time results in the array [a[n-1], a[0], a[1], a[2], ..., a[n-2]].

Given the sorted rotated array nums of unique elements, return the minimum element of this array.

You must write an algorithm that runs in O(log n) time.


Example 1:

    Input: nums = [3,4,5,1,2]
    Output: 1
    Explanation: The original array was [1,2,3,4,5] rotated 3 times.

Example 2:

    Input: nums = [4,5,6,7,0,1,2]
    Output: 0
    Explanation: The original array was [0,1,2,4,5,6,7] and it was rotated 4 times.

Example 3:

    Input: nums = [11,13,15,17]
    Output: 11
    Explanation: The original array was [11,13,15,17] and it was rotated 4 times. 

#### Solutions

1. [Min PHP Function](/Binary%20Search/Find%20Minimum%20in%20Rotated%20Sorted%20Array/Min.php)
2. [Left and Right pointer](/Binary%20Search/Find%20Minimum%20in%20Rotated%20Sorted%20Array/TwoPointers.php)


### Search in Rotated Sorted Array

[LeetCode Url](https://leetcode.com/problems/search-in-rotated-sorted-array/)

There is an integer array nums sorted in ascending order (with distinct values).

Prior to being passed to your function, nums is possibly rotated at an unknown pivot index k (1 <= k < nums.length) such that the resulting array is [nums[k], nums[k+1], ..., nums[n-1], nums[0], nums[1], ..., nums[k-1]] (0-indexed). For example, [0,1,2,4,5,6,7] might be rotated at pivot index 3 and become [4,5,6,7,0,1,2].

Given the array nums after the possible rotation and an integer target, return the index of target if it is in nums, or -1 if it is not in nums.

You must write an algorithm with O(log n) runtime complexity.


Example 1:

    Input: nums = [4,5,6,7,0,1,2], target = 0
    Output: 4

Example 2:

    Input: nums = [4,5,6,7,0,1,2], target = 3
    Output: -1

Example 3:

    Input: nums = [1], target = 0
    Output: -1

#### Solutions

1. [Array Search PHP Function](/Binary%20Search/Search%20in%20Rotated%20Sorted%20Array/ArraySearch.php)
2. [Left and Right pointer](/Binary%20Search/Search%20in%20Rotated%20Sorted%20Array/TwoPointers.php)

## Linked List

### Reverse Linked List

[LeetCode Url](https://leetcode.com/problems/reverse-linked-list/)

Given the head of a singly linked list, reverse the list, and return the reversed list.

Example 1:

    Input: head = [1,2,3,4,5]
    Output: [5,4,3,2,1]

Example 2:

    Input: head = [1,2]
    Output: [2,1]

Example 3:

    Input: head = []
    Output: []

#### Solutions

1. [Using recursion](/Linked%20List/Reverse%20Linked%20List/Recursion.php)
2. [Iteration method](/Linked%20List/Reverse%20Linked%20List/Iteration.php)

### Merge Two Sorted Lists

[LeetCode Url](https://leetcode.com/problems/merge-two-sorted-lists/)

You are given the heads of two sorted linked lists list1 and list2.

Merge the two lists in a one sorted list. The list should be made by splicing together the nodes of the first two lists.

Return the head of the merged linked list.


Example 1:

    Input: list1 = [1,2,4], list2 = [1,3,4]
    Output: [1,1,2,3,4,4]

Example 2:

    Input: list1 = [], list2 = []
    Output: []

Example 3:

    Input: list1 = [], list2 = [0]
    Output: [0]

#### Solutions

1. [Iterative method](/Linked%20List/Merge%20Two%20Sorted%20Lists/Iterative.php)

### Reorder List

[LeetCode Url](https://leetcode.com/problems/reorder-list/)

You are given the head of a singly linked-list. The list can be represented as:

    L0 → L1 → … → Ln - 1 → Ln

Reorder the list to be on the following form:

    L0 → Ln → L1 → Ln - 1 → L2 → Ln - 2 → …

You may not modify the values in the list's nodes. Only nodes themselves may be changed.

Example 1:

    Input: head = [1,2,3,4]
    Output: [1,4,2,3]

Example 2:

    Input: head = [1,2,3,4,5]
    Output: [1,5,2,4,3]

#### Solutions

1. [Fast and slow and reverse iterative](/Linked%20List/Reorder%20List/MiddleAndReverse.php)

### Remove Nth Node From End of List

[LeetCode Url](https://leetcode.com/problems/remove-nth-node-from-end-of-list/)

Given the head of a linked list, remove the nth node from the end of the list and return its head.

Example 1:

    Input: head = [1,2,3,4,5], n = 2
    Output: [1,2,3,5]

Example 2:

    Input: head = [1], n = 1
    Output: []

Example 3:

    Input: head = [1,2], n = 1
    Output: [1]

#### Solutions

1. [Reverse and remove linear](/Linked%20List/Remove%20Nth%20Node%20From%20End%20of%20List/ReverseAndRemove.php)
2. [Transforming into array and remove](/Linked%20List/Remove%20Nth%20Node%20From%20End%20of%20List/Array.php)

### Linked List Cycle

[LeetCode Url](https://leetcode.com/problems/linked-list-cycle)

Given head, the head of a linked list, determine if the linked list has a cycle in it.

There is a cycle in a linked list if there is some node in the list that can be reached again by continuously following the next pointer. Internally, pos is used to denote the index of the node that tail's next pointer is connected to. Note that pos is not passed as a parameter.

Return true if there is a cycle in the linked list. Otherwise, return false.

Example 1:

    Input: head = [3,2,0,-4], pos = 1
    Output: true
    Explanation: There is a cycle in the linked list, where the tail connects to the 1st node (0-indexed).

Example 2:

    Input: head = [1,2], pos = 0
    Output: true
    Explanation: There is a cycle in the linked list, where the tail connects to the 0th node.

Example 3:

    Input: head = [1], pos = -1
    Output: false
    Explanation: There is no cycle in the linked list.

#### Solutions

1. [Hash and Object Id](/Linked%20List/Linked%20List%20Cycle/HashObjectId.php)
1. [Slow and Fast Approach](/Linked%20List/Linked%20List%20Cycle/SlowAndFast.php)

## Trees

### Invert Binary Tree

[LeetCode Url](https://leetcode.com/problems/invert-binary-tree)

Given the root of a binary tree, invert the tree, and return its root.

Example 1:

    Input: root = [4,2,7,1,3,6,9]
    Output: [4,7,2,9,6,3,1]

Example 2:

    Input: root = [2,1,3]
    Output: [2,3,1]

Example 3:

    Input: root = []
    Output: []

#### Solutions

1. [Recursion](/Trees/Invert%20Binary%20Tree/Recursion.php)

### Maximum Depth of Binary Tree

[LeetCode Url](https://leetcode.com/problems/maximum-depth-of-binary-tree/)

Given the root of a binary tree, return its maximum depth.

A binary tree's maximum depth is the number of nodes along the longest path from the root node down to the farthest leaf node. 

Example 1:

    Input: root = [3,9,20,null,null,15,7]
    Output: 3

Example 2:

    Input: root = [1,null,2]
    Output: 2

#### Solutions

1. [Recursion](/Trees/Maximum%20Depth%20of%20Binary%20Tree/Recursion.php)

### Same Tree

[LeetCode Url](https://leetcode.com/problems/same-tree/)

Given the roots of two binary trees p and q, write a function to check if they are the same or not.

Two binary trees are considered the same if they are structurally identical, and the nodes have the same value.

Example 1:

    Input: p = [1,2,3], q = [1,2,3]
    Output: true

Example 2:

    Input: p = [1,2], q = [1,null,2]
    Output: false

Example 3:

    Input: p = [1,2,1], q = [1,1,2]
    Output: false

#### Solutions

1. [Recursion](/Trees/Same%20Tree/Recursion.php)

### Subtree of Another Tree

[LeetCode Url](https://leetcode.com/problems/subtree-of-another-tree/)

Given the roots of two binary trees root and subRoot, return true if there is a subtree of root with the same structure and node values of subRoot and false otherwise.

A subtree of a binary tree tree is a tree that consists of a node in tree and all of this node's descendants. The tree tree could also be considered as a subtree of itself. 

Example 1:

    Input: root = [3,4,5,1,2], subRoot = [4,1,2]
    Output: true

Example 2:

    Input: root = [3,4,5,1,2,null,null,null,null,0], subRoot = [4,1,2]
    Output: false

#### Solutions

1. [Recursion](/Trees/Subtree%20of%20Another%20Tree/RecursionAndReuse.php)

### Lowest Common Ancestor of a Binary Search Tree

[LeetCode Url](https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-search-tree/)

Given a binary search tree (BST), find the lowest common ancestor (LCA) node of two given nodes in the BST.

According to the definition of LCA on Wikipedia: “The lowest common ancestor is defined between two nodes p and q as the lowest node in T that has both p and q as descendants (where we allow a node to be a descendant of itself).”

Example 1:

    Input: root = [6,2,8,0,4,7,9,null,null,3,5], p = 2, q = 8
    Output: 6
    Explanation: The LCA of nodes 2 and 8 is 6.

Example 2:

    Input: root = [6,2,8,0,4,7,9,null,null,3,5], p = 2, q = 4
    Output: 2
    Explanation: The LCA of nodes 2 and 4 is 2, since a node can be a descendant of itself according to the LCA definition.

Example 3:

    Input: root = [2,1], p = 2, q = 1
    Output: 2

#### Solutions

1. [Iterative](/Trees/Lowest%20Common%20Ancestor%20of%20a%20Binary%20Search%20Tree/Iterative.php)

### Binary Tree Level Order Traversal

[LeetCode Url](https://leetcode.com/problems/binary-tree-level-order-traversal/)

Given the root of a binary tree, return the level order traversal of its nodes' values. (i.e., from left to right, level by level).

Example 1:

    Input: root = [3,9,20,null,null,15,7]
    Output: [[3],[9,20],[15,7]]

Example 2:

    Input: root = [1]
    Output: [[1]]

Example 3:

    Input: root = []
    Output: []

#### Solutions

1. [Queue](/Trees/Binary%20Tree%20Level%20Order%20Traversal/Queue.php)
2. [Recursion](/Trees/Binary%20Tree%20Level%20Order%20Traversal/Recursion.php)

### Validate Binary Search Tree

[LeetCode Url](https://leetcode.com/problems/validate-binary-search-tree/)

Given the root of a binary tree, determine if it is a valid binary search tree (BST).

A valid BST is defined as follows:

The left 
subtree
 of a node contains only nodes with keys less than the node's key.
The right subtree of a node contains only nodes with keys greater than the node's key.
Both the left and right subtrees must also be binary search trees.
 

Example 1:

    Input: root = [2,1,3]
    Output: true

Example 2:

    Input: root = [5,1,4,null,null,3,6]
    Output: false
    Explanation: The root node's value is 5 but its right child's value is 4.

#### Solutions

1. [Recursion](/Trees/Binary%20Tree%20Level%20Order%20Traversal/Queue.php)

### Kth Smallest Element in a BST

[LeetCode Url](https://leetcode.com/problems/kth-smallest-element-in-a-bst/)

Given the root of a binary search tree, and an integer k, return the kth smallest value (1-indexed) of all the values of the nodes in the tree.

Example 1:

    Input: root = [3,1,4,null,2], k = 1
    Output: 1

Example 2:

    Input: root = [5,3,6,2,4,null,null,1], k = 3
    Output: 3

#### Solutions

1. [Sort and Recursion](/Trees/%20Kth%20Smallest%20Element%20in%20a%20BST/SortAndRecursion.php)
2. [Iterative](/Trees/%20Kth%20Smallest%20Element%20in%20a%20BST/StackIterative.php)


## Tries

###  Implement Trie (Prefix Tree)

[LeetCode Url](https://leetcode.com/problems/implement-trie-prefix-tree/)

A trie (pronounced as "try") or prefix tree is a tree data structure used to efficiently store and retrieve keys in a dataset of strings. There are various applications of this data structure, such as autocomplete and spellchecker.

Implement the Trie class:

Trie() Initializes the trie object.
void insert(String word) Inserts the string word into the trie.
boolean search(String word) Returns true if the string word is in the trie (i.e., was inserted before), and false otherwise.
boolean startsWith(String prefix) Returns true if there is a previously inserted string word that has the prefix prefix, and false otherwise.
 

Example 1:

    Input
    ["Trie", "insert", "search", "search", "startsWith", "insert", "search"]
    [[], ["apple"], ["apple"], ["app"], ["app"], ["app"], ["app"]]
    Output
    [null, null, true, false, true, null, true]

    Explanation
    Trie trie = new Trie();
    trie.insert("apple");
    trie.search("apple");   // return True
    trie.search("app");     // return False
    trie.startsWith("app"); // return True
    trie.insert("app");
    trie.search("app");     // return True

#### Solutions

1. [Prefix Tree Class](/Tries/Implement%20Trie/PrefixTree.php)

###  Design Add and Search Words Data Structure

[LeetCode Url](https://leetcode.com/problems/design-add-and-search-words-data-structure/)

Design a data structure that supports adding new words and finding if a string matches any previously added string.

Implement the WordDictionary class:

WordDictionary() Initializes the object.
void addWord(word) Adds word to the data structure, it can be matched later.
bool search(word) Returns true if there is any string in the data structure that matches word or false otherwise. word may contain dots '.' where dots can be matched with any letter.
 

Example:

    Input
    ["WordDictionary","addWord","addWord","addWord","search","search","search","search"]
    [[],["bad"],["dad"],["mad"],["pad"],["bad"],[".ad"],["b.."]]
    Output
    [null,null,null,null,false,true,true,true]

    Explanation
    WordDictionary wordDictionary = new WordDictionary();
    wordDictionary.addWord("bad");
    wordDictionary.addWord("dad");
    wordDictionary.addWord("mad");
    wordDictionary.search("pad"); // return False
    wordDictionary.search("bad"); // return True
    wordDictionary.search(".ad"); // return True
    wordDictionary.search("b.."); // return True

#### Solutions

1. [WordDictionary](Tries/Design%20Add%20and%20Search%20Words%20Data%20Structure/WordDictionary.php)

## Heap - Priority Queue

###  None yet

[LeetCode Url]()

#### Solutions

1. [None]()

## Backtracking

###  Combination Sum

[LeetCode Url](https://leetcode.com/problems/combination-sum/)

Given an array of distinct integers candidates and a target integer target, return a list of all unique combinations of candidates where the chosen numbers sum to target. You may return the combinations in any order.

The same number may be chosen from candidates an unlimited number of times. Two combinations are unique if the 
frequency
 of at least one of the chosen numbers is different.

The test cases are generated such that the number of unique combinations that sum up to target is less than 150 combinations for the given input.

 
Example 1:

    Input: candidates = [2,3,6,7], target = 7
    Output: [[2,2,3],[7]]
    Explanation:
    2 and 3 are candidates, and 2 + 2 + 3 = 7. Note that 2 can be used multiple times.
    7 is a candidate, and 7 = 7.
    These are the only two combinations.

Example 2:

    Input: candidates = [2,3,5], target = 8
    Output: [[2,2,2,2],[2,3,3],[3,5]]
    Example 3:

    Input: candidates = [2], target = 1
    Output: []

#### Solutions

1. [Recursion Sum](/Backtracking/Combination%20Sum/RecursionCarrySum.php)

###  Word Search

[LeetCode Url](https://leetcode.com/problems/word-search/)

Given an m x n grid of characters board and a string word, return true if word exists in the grid.

The word can be constructed from letters of sequentially adjacent cells, where adjacent cells are horizontally or vertically neighboring. The same letter cell may not be used more than once.


Example 1:

    Input: board = [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], word = "ABCCED"
    Output: true

Example 2:

    Input: board = [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], word = "SEE"
    Output: true

Example 3:

    Input: board = [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], word = "ABCB"
    Output: false

#### Solutions

1. [Backtracking](/Backtracking/Word%20Search/Backtracking.php)

## Graphs

###  Number of Islands

[LeetCode Url](https://leetcode.com/problems/number-of-islands/)

Given an m x n 2D binary grid grid which represents a map of '1's (land) and '0's (water), return the number of islands.

An island is surrounded by water and is formed by connecting adjacent lands horizontally or vertically. You may assume all four edges of the grid are all surrounded by water.

 

Example 1:

    Input: grid = [
    ["1","1","1","1","0"],
    ["1","1","0","1","0"],
    ["1","1","0","0","0"],
    ["0","0","0","0","0"]
    ]
    Output: 1

Example 2:

    Input: grid = [
    ["1","1","0","0","0"],
    ["1","1","0","0","0"],
    ["0","0","1","0","0"],
    ["0","0","0","1","1"]
    ]
    Output: 3

#### Solutions

1. [Backtracking](/Graphs/Number%20of%20Islands/Backtracking.php)

###  Clone Graph

[LeetCode Url](https://leetcode.com/problems/clone-graph/)

Given a reference of a node in a connected undirected graph.

Return a deep copy (clone) of the graph.

Each node in the graph contains a value (int) and a list (List[Node]) of its neighbors.

class Node {
    public int val;
    public List<Node> neighbors;
}
 

Test case format:

For simplicity, each node's value is the same as the node's index (1-indexed). For example, the first node with val == 1, the second node with val == 2, and so on. The graph is represented in the test case using an adjacency list.

An adjacency list is a collection of unordered lists used to represent a finite graph. Each list describes the set of neighbors of a node in the graph.

The given node will always be the first node with val = 1. You must return the copy of the given node as a reference to the cloned graph.


Example 1:

    Input: adjList = [[2,4],[1,3],[2,4],[1,3]]
    Output: [[2,4],[1,3],[2,4],[1,3]]
    Explanation: There are 4 nodes in the graph.
    1st node (val = 1)'s neighbors are 2nd node (val = 2) and 4th node (val = 4).
    2nd node (val = 2)'s neighbors are 1st node (val = 1) and 3rd node (val = 3).
    3rd node (val = 3)'s neighbors are 2nd node (val = 2) and 4th node (val = 4).
    4th node (val = 4)'s neighbors are 1st node (val = 1) and 3rd node (val = 3).

Example 2:

    Input: adjList = [[]]
    Output: [[]]
    Explanation: Note that the input contains one empty list. The graph consists of only one node with val = 1 and it does not have any neighbors.

Example 3:

    Input: adjList = []
    Output: []
    Explanation: This an empty graph, it does not have any nodes.

#### Solutions

1. [Serialize / Unserialize PHP Function](/Graphs/Clone%20Graph/SerializeUnserialize.php)
2. [Deep Copy with Recursion](/Graphs/Clone%20Graph/DeepCopy.php)

###  Pacific Atlantic Water Flow

[LeetCode Url](https://leetcode.com/problems/pacific-atlantic-water-flow/)

There is an m x n rectangular island that borders both the Pacific Ocean and Atlantic Ocean. The Pacific Ocean touches the island's left and top edges, and the Atlantic Ocean touches the island's right and bottom edges.

The island is partitioned into a grid of square cells. You are given an m x n integer matrix heights where heights[r][c] represents the height above sea level of the cell at coordinate (r, c).

The island receives a lot of rain, and the rain water can flow to neighboring cells directly north, south, east, and west if the neighboring cell's height is less than or equal to the current cell's height. Water can flow from any cell adjacent to an ocean into the ocean.

Return a 2D list of grid coordinates result where result[i] = [ri, ci] denotes that rain water can flow from cell (ri, ci) to both the Pacific and Atlantic oceans.

 
Example 1:


    Input: heights = [[1,2,2,3,5],[3,2,3,4,4],[2,4,5,3,1],[6,7,1,4,5],[5,1,1,2,4]]
    Output: [[0,4],[1,3],[1,4],[2,2],[3,0],[3,1],[4,0]]
    Explanation: The following cells can flow to the Pacific and Atlantic oceans, as shown below:
    [0,4]: [0,4] -> Pacific Ocean 
        [0,4] -> Atlantic Ocean
    [1,3]: [1,3] -> [0,3] -> Pacific Ocean 
        [1,3] -> [1,4] -> Atlantic Ocean
    [1,4]: [1,4] -> [1,3] -> [0,3] -> Pacific Ocean 
        [1,4] -> Atlantic Ocean
    [2,2]: [2,2] -> [1,2] -> [0,2] -> Pacific Ocean 
        [2,2] -> [2,3] -> [2,4] -> Atlantic Ocean
    [3,0]: [3,0] -> Pacific Ocean 
        [3,0] -> [4,0] -> Atlantic Ocean
    [3,1]: [3,1] -> [3,0] -> Pacific Ocean 
        [3,1] -> [4,1] -> Atlantic Ocean
    [4,0]: [4,0] -> Pacific Ocean 
        [4,0] -> Atlantic Ocean
    Note that there are other possible paths for these cells to flow to the Pacific and Atlantic oceans.

Example 2:

    Input: heights = [[1]]
    Output: [[0,0]]
    Explanation: The water can flow from the only cell to the Pacific and Atlantic oceans.

#### Solutions

1. [Backtracking](/Graphs/Pacific%20Atlantic%20Water%20Flow/Backtracking.php)

###  Course Schedule

[LeetCode Url](https://leetcode.com/problems/course-schedule/)

There are a total of numCourses courses you have to take, labeled from 0 to numCourses - 1. You are given an array prerequisites where prerequisites[i] = [ai, bi] indicates that you must take course bi first if you want to take course ai.

For example, the pair [0, 1], indicates that to take course 0 you have to first take course 1.
Return true if you can finish all courses. Otherwise, return false.

Example 1:

    Input: numCourses = 2, prerequisites = [[1,0]]
    Output: true
    Explanation: There are a total of 2 courses to take. 
    To take course 1 you should have finished course 0. So it is possible.

Example 2:

    Input: numCourses = 2, prerequisites = [[1,0],[0,1]]
    Output: false
    Explanation: There are a total of 2 courses to take. 
    To take course 1 you should have finished course 0, and to take course 0 you should also have finished course 1. So it is impossible.

#### Solutions

1. [Hash and recursion](/Graphs/Course%20Schedule/HashAndRecursion.php)

## 1-D Dynamic programming

###  Climbing Stairs

[LeetCode Url](https://leetcode.com/problems/climbing-stairs/)

You are climbing a staircase. It takes n steps to reach the top.

Each time you can either climb 1 or 2 steps. In how many distinct ways can you climb to the top?

Example 1:

    Input: n = 2
    Output: 2
    Explanation: There are two ways to climb to the top.
    1. 1 step + 1 step
    2. 2 steps
    
Example 2:

    Input: n = 3
    Output: 3
    Explanation: There are three ways to climb to the top.
    1. 1 step + 1 step + 1 step
    2. 1 step + 2 steps
    3. 2 steps + 1 step

#### Solutions

1. [Fibbonaci](/Dynamic%20Programming/Climbing%20Stairs/Fibonacci.php)

## Greedy

###  Maximum Subarray

[LeetCode Url](https://leetcode.com/problems/maximum-subarray/)

Given an integer array nums, find the 
subarray
 with the largest sum, and return its sum.


Example 1:

    Input: nums = [-2,1,-3,4,-1,2,1,-5,4]
    Output: 6
    Explanation: The subarray [4,-1,2,1] has the largest sum 6.

Example 2:

    Input: nums = [1]
    Output: 1
    Explanation: The subarray [1] has the largest sum 1.

Example 3:

    Input: nums = [5,4,-1,7,8]
    Output: 23
    Explanation: The subarray [5,4,-1,7,8] has the largest sum 23.

#### Solutions

1. [Iterative and Greedy](/Greedy/Maximum%20Subarray/Iterative.php)

###  Jump Game

[LeetCode Url](https://leetcode.com/problems/jump-game/)

You are given an integer array nums. You are initially positioned at the array's first index, and each element in the array represents your maximum jump length at that position.

Return true if you can reach the last index, or false otherwise.

Example 1:

    Input: nums = [2,3,1,1,4]
    Output: true
    Explanation: Jump 1 step from index 0 to 1, then 3 steps to the last index.

Example 2:

    Input: nums = [3,2,1,0,4]
    Output: false
    Explanation: You will always arrive at index 3 no matter what. Its maximum jump length is 0, which makes it impossible to reach the last index.

#### Solutions

1. [Fibbonaci]()

## Intervals

### Insert Interval

[LeetCode Url](https://leetcode.com/problems/insert-interval/)

You are given an array of non-overlapping intervals intervals where intervals[i] = [starti, endi] represent the start and the end of the ith interval and intervals is sorted in ascending order by starti. You are also given an interval newInterval = [start, end] that represents the start and end of another interval.

Insert newInterval into intervals such that intervals is still sorted in ascending order by starti and intervals still does not have any overlapping intervals (merge overlapping intervals if necessary).

Return intervals after the insertion.


Example 1:

    Input: intervals = [[1,3],[6,9]], newInterval = [2,5]
    Output: [[1,5],[6,9]]

Example 2:

    Input: intervals = [[1,2],[3,5],[6,7],[8,10],[12,16]], newInterval = [4,8]
    Output: [[1,2],[3,10],[12,16]]
    Explanation: Because the new interval [4,8] overlaps with [3,5],[6,7],[8,10].

#### Solutions

1. [Interative](/Intervals/Insert%20Interval/Interative.php)

### Merge Intervals

[LeetCode Url](https://leetcode.com/problems/merge-intervals/)

Given an array of intervals where intervals[i] = [starti, endi], merge all overlapping intervals, and return an array of the non-overlapping intervals that cover all the intervals in the input.

Example 1:

    Input: intervals = [[1,3],[2,6],[8,10],[15,18]]
    Output: [[1,6],[8,10],[15,18]]
    Explanation: Since intervals [1,3] and [2,6] overlap, merge them into [1,6].

Example 2:

    Input: intervals = [[1,4],[4,5]]
    Output: [[1,5]]
    Explanation: Intervals [1,4] and [4,5] are considered overlapping.

#### Solutions

1. [Sorting first](/Intervals/Merge%20Intervals/Sort.php)

### Non Overlapping Intervals

[LeetCode Url](https://leetcode.com/problems/non-overlapping-intervals/)

Given an array of intervals intervals where intervals[i] = [starti, endi], return the minimum number of intervals you need to remove to make the rest of the intervals non-overlapping.

Example 1:

    Input: intervals = [[1,2],[2,3],[3,4],[1,3]]
    Output: 1
    Explanation: [1,3] can be removed and the rest of the intervals are non-overlapping.

Example 2:

    Input: intervals = [[1,2],[1,2],[1,2]]
    Output: 2
    Explanation: You need to remove two [1,2] to make the rest of the intervals non-overlapping.

Example 3:

    Input: intervals = [[1,2],[2,3]]
    Output: 0
    Explanation: You don't need to remove any of the intervals since they're already non-overlapping.

#### Solutions

1. [Sorting first](/Intervals/Non%20Overlapping%20Intervals/Sort.php)

### Meeting Rooms II

[LeetCode Url](https://leetcode.com/problems/meeting-rooms-ii/)


Given an array of meeting time intervals consisting of start and end times[[s1,e1],[s2,e2],...](si< ei), find the minimum number of conference rooms required.

Example 1:

    Input: [[0, 30],[5, 10],[15, 20]]
    Output: 2

Example 2:

    Input:    [[7,10],[2,4]]

    Output: 1

#### Solutions

1. [Sweep Line](/Intervals/Meeting%20Rooms%20II/SweepLine.php)

### Booking Bikes

This is not a Leetcode or neetcode problem. But its here for my study.

#### Solutions

1. [Sweep Line](/Intervals/Peak%20Bikes/SweepLine.php)
