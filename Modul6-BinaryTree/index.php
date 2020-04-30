<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head> 
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/bootstrap/js/bootstrap.min.js"> </script>
    <script src="vendor/jquery/jquery.min.js"> </script>  
</head>
<body>
    <br>
    <p class="display-3 text-center">Pemrograman <span class="display-4 text-center">Deklaratif </span> </p>

    <hr>
    
    <div class="container">
        <p class="display-4 text-left">No. 1: </p>
        <p class="display-5 text-left"> Test the Validity of Binary Tree Representations </p>
        <?php
                $BTnodes = []; 
                $BTnodes[] = "Final <br/>"; 
                $BTnodes[] = "Semi Final 1 <br/>"; 
                $BTnodes[] = "Semi Final 2 <br/>"; 
                $BTnodes[] = "Quarter Final 1 <br/>"; 
                $BTnodes[] = "Quarter Final 2 <br/>"; 
                $BTnodes[] = "Quarter Final 3 <br/>"; 
                $BTnodes[] = "Quarter Final 4 <br/>";
                
                class BinaryTree { 

                public $BTnodes = []; 

                public function __construct(Array $BTnodes) { 
                  $this->BTnodes = $BTnodes; 
                } 

                public function traverse(int $num = 0, int $level = 0) { 

                  if (isset($this->BTnodes[$num])) { 
                          echo str_repeat("-", $level); 
                          echo $this->BTnodes[$num] . "\n"; 

                          $this->traverse(2 * $num + 1, $level+1); 
                          $this->traverse(2 * ($num + 1), $level+1); 
                        } 
                    } 

                } 
        
                $tree = new BinaryTree($BTnodes); 
                $tree->traverse(0); 
        ?>
        <hr>
    </div>
    
    <div class="container">
        <p class="display-4 text-left">No. 2: </p>
        <p class="display-5 text-left"> Make a Balanced Binary Tree </p>
        <?php
            class Node
            {
                protected   $_parent = null;
                protected   $_left = null;
                protected   $_right = null;
                protected   $_key;
                protected   $_data = null;

                
                public function __construct($key, $data)
                {
                    $this->_key = $key;
                    $this->_data = $data;
                }

                
                public function doEmpty() 
                {
                    $this->_data = null;
                }


                public function __toString()
                {
                    return 'First name: ' . $this->_data['f_name']
                    . '<br />'
                    . 'Last name: ' . $this->_data['l_name']
                    . '<br />' 
                    . 'Birthday: ' . $this->_data['b_day'];
                }

                public function &getParent() { return $this->_parent; }
                public function setParent($parent) { $this->_parent = $parent; }

                public function &getLeft() { return $this->_left; }
                public function setLeft($left) { $this->_left = $left; }

                public function &getRight() { return $this->_right; }
                public function setRight($right) { $this->_right = $right; }

                public function &getKey() { return $this->_key; }
                public function setKey($key) { $this->_key = $key; }

                public function &getData() { return $this->_data; }
                public function setData($data) { $this->_data = $data; }
            }

            class BalancedBinaryTree
            {

                protected $_root = null;


                protected function _insert($new, &$root)
                {

                    if ($root == null) {
                        $root = $new;
                        return;
                    }

                    if ($new->getKey() <= $root->getKey()) {
                        if ($root->getLeft() == null) {
                            $root->setLeft($new);
                            $new->setParent($root);
                        } else {
                            $this->_insert($new, $root->getLeft());
                        }
                    } else {
                        if ($root->getRight() == null) {
                            $root->setRight($new);
                            $new->setParent($root);
                        } else {
                            $this->_insert($new, $root->getRight());
                        }
                    }       
                }


                protected function _search($firstName, &$tree)
                {
                    if ($tree == null) {
                        return FALSE;
                    }

                    $data = $tree->getData();

                    if ($firstName == $data['f_name']) {
                        return $tree;
                    }

                    
                    return $this->_search($firstName, $tree->getLeft())
                    . $this->_search($firstName, $tree->getRight());
                }


                protected function _searchByKey($key, &$tree)
                {
                    if ($tree == null) {
                        return FALSE;
                    }

                    if ($tree->getKey() == $key) {
                        return $tree;
                    } else if ($tree->getKey() > $key) {
                        return $this->_searchByKey($key, $tree->getLeft());
                    } else {
                        return $this->_searchByKey($key, $tree->getRight());
                    }
                }


                protected function _leftRootRight($tree)
                {
                    if ($tree == null) {
                        return array();
                    }

                    return array_merge(
                        $this->_leftRootRight($tree->getLeft()),
                        array(array('key' => $tree->getKey(), 'data' => $tree->getData())),
                        $this->_leftRootRight($tree->getRight()));
                }

                public function _balance($list)
                {
                    if (empty($list)) {
                        return;
                    }

                   
                    $chunks = array_chunk($list, ceil(count($list) / 2));
                    $mid = array_pop($chunks[0]);

                    $node = new Node($mid['key'], $mid['data']);
                    $this->insert($node);

                    $this->_balance($chunks[0]);
                    if (isset($chunks[1]))
                        $this->_balance($chunks[1]);
                }


                public function balance()
                {
                    $list = array();

                    $list = $this->_leftRootRight($this->_root);

                    $chunks = array_chunk($list, ceil(count($list) / 2));
                    $mid = array_pop($chunks[0]);


                    $this->_root = null;


                    $node = new Node($mid['key'], $mid['data']);
                    $this->insert($node);

                    $this->_balance($chunks[0]);
                    $this->_balance($chunks[1]);
                }


                public function insert($newNode)
                {
                    $this->_insert($newNode, $this->_root);
                }


                public function searchByKey($key)
                {
                    return $this->_searchByKey($key, $this->_root);
                }


                protected function _print($tree)
                {
                    if ($tree == null) { return ''; }

                    return $this->_print($tree->getLeft()) . ' ' 
                    . $tree->getKey() . ' ' 
                    . $this->_print($tree->getRight());
                }


                public function __toString()
                {
                    if ($this->_root == null) {
                        return 'The tree is empty!';
                    }

                    return $this->_print($this->_root->getLeft()) . ' '
                    . $this->_root->getKey() . ' '
                    . $this->_print($this->_root->getRight());
                }
            }
            
            $a = new Node(90, array(
                'f_name' => 'Sayed.Rahman',
                'l_name' => 'Hamid',
                'b_day' => '1994-07-07',
                ));

            $b = new Node(100, array(
                'f_name' => 'Shaukat Rahman',
                'l_name' => 'Ansari',
                'b_day' => '23.05.1996',
                ));

            $c = new Node(80, array(
                'f_name' => 'Salim',
                'l_name' => 'Diera',
                'b_day' => 'tomorrow',
                ));

            $d = new Node(60, array(
                'f_name' => 'Mamurjhon',
                'l_name' => 'Khalimof',
                'b_day' => '1997-12-17',
                ));

            $e = new Node(70, array(
                'f_name' => 'Younus',
                'l_name' => 'Darvish',
                'b_day' => 'today',
                ));
            
            $t = new BalancedBinaryTree();
            echo "<br>";
            $t->insert($a);
            $t->insert($b);
            $t->insert($c);
            $t->insert($d);
            $t->insert($e);
             echo "<br>";
            echo $t;
                echo "<br>";
            echo $t->searchByKey(60);
                echo "<br>";
            $t->balance();
               echo "<br>";
            echo $t->searchByKey(80);
        ?>
    </div>
    <div class="container">
         <hr>   
        <p class="display-4 text-left">No. 4: </p>
        <p class="display-5 text-left"> Binary Search Tree </p>
        
        <?php
             class BNode {

              public $info;
              public $left;
              public $right;
              public $level;

              public function __construct($info) {
                     $this->info = $info;
                     $this->left = NULL;
                     $this->right = NULL;
                     $this->level = NULL;
              }

              public function __toString() {

                     return "$this->info";
              }
            }  


            class SearchBinaryTree {

              public $root;

              public function  __construct() {
                     $this->root = NULL;
              }

              public function create($info) {

                     if($this->root == NULL) {

                        $this->root = new BNode($info);

                     } else {

                        $current = $this->root;

                        while(true) {

                              if($info < $current->info) {

                                    if($current->left) {
                                       $current = $current->left;
                                    } else {
                                       $current->left = new BNode($info);
                                       break; 
                                    }

                              } else if($info > $current->info){

                                    if($current->right) {
                                       $current = $current->right;
                                    } else {
                                       $current->right = new BNode($info);
                                       break; 
                                    }

                              } else {

                                break;
                              }
                        } 
                     }
              }

              public function traverse($method) {

                     switch($method) {

                         case 'inorder':
                         $this->_inorder($this->root);
                         break;

                         case 'postorder':
                         $this->_postorder($this->root);
                         break;

                         case 'preorder':
                         $this->_preorder($this->root);
                         break;

                         default:
                         break;
                     } 

              } 

              private function _inorder($Bnode) {

                              if($Bnode->left) {
                                 $this->_inorder($Bnode->left); 
                              } 

                              echo $Bnode. " ";

                              if($Bnode->right) {
                                 $this->_inorder($Bnode->right); 
                              } 
              }


              private function _preorder($Bnode) {

                              echo $Bnode. " ";

                              if($Bnode->left) {
                                 $this->_preorder($Bnode->left); 
                              } 


                              if($Bnode->right) {
                                 $this->_preorder($Bnode->right); 
                              } 
              }


              private function _postorder($Bnode) {


                              if($Bnode->left) {
                                 $this->_postorder($Bnode->left); 
                              } 


                              if($Bnode->right) {
                                 $this->_postorder($Bnode->right); 
                              } 

                              echo $Bnode. " ";
              }


              public function BFT() {

                     $Bnode = $this->root;

                     $Bnode->level = 1; 

                     $queue = array($Bnode);

                     $out = array("<br/>");


                     $current_level = $Bnode->level;


                     while(count($queue) > 0) {

                           $current_node = array_shift($queue);

                           if($current_node->level > $current_level) {
                                $current_level++;
                                array_push($out,"<br/>");  
                           } 

                           array_push($out,$current_node->info. " ");

                           if($current_node->left) {
                              $current_node->left->level = $current_level + 1;
                              array_push($queue,$current_node->left); 
                           }    

                           if($current_node->right) {
                              $current_node->right->level = $current_level + 1;
                              array_push($queue,$current_node->right); 
                           }    
                     }


                    return join($out,""); 
              }
            } 
                       $arr = array(8,3,1,6,4,7,10,14,13);

                       $tree = new SearchBinaryTree();
                       for($i=0,$n=count($arr);$i<$n;$i++) {
                           $tree->create($arr[$i]);
                       }
            $str = <<<INTRO
                 In computer science, a binary search tree (BST) is a node-based binary tree structure which has the following
            properties:
            <ul>
            <li>the left subtree of a node contains only nodes with keys less than the node's key</li>
            <li>the right subtree of a node contains only nodes with keys greater than the node's key</li>
            <li>both the left and right subtrees must also be binary search trees</li>
            </ul> 
            INTRO;

            echo"<h1>Binary Search Tree</h1>"; 

            echo"<p>$str</p>"; 

            echo "<h2>Input vector: ", join($arr," "), "</h2>";

            echo"<h1>Breadh-First Traversal Tree</h1>"; 
            echo $tree->BFT();

            echo"<h1>Inorder</h1>"; 
            $tree->traverse('inorder');


            echo"<h1>Postorder</h1>"; 
            $tree->traverse('postorder');

            echo"<h1>Preorder</h1>"; 
            $tree->traverse('preorder');
        ?>
    </div>
    <br><br><br>
    
</body>
</html>