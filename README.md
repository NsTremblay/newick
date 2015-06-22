Building the
======

This is done in a 2 step process. The first step is to build a system of nodes that will represent the tree. The second step is to take this set of nodes and draw it from the root.

The tree of nodes is built recursively by first scanning the whole newick string and taking the 2 or more subsections. This is done by keeping track of the amount of opened parentheses and the locations of the commas relative to the amount of parentheses.

ex:

(,,(,));                               no nodes are named <br>
(A,B,(C,D));                           leaf nodes are named <br>
(A,B,(C,D)E)F;                         all nodes are named <br>
(:0.1,:0.2,(:0.3,:0.4):0.5);           all but root node have a distance to parent <br>
(:0.1,:0.2,(:0.3,:0.4):0.5):0.0;       all have a distance to parent <br>
(A:0.1,B:0.2,(C:0.3,D:0.4):0.5);       distances and leaf names (popular) <br>
(A:0.1,B:0.2,(C:0.3,D:0.4)E:0.5)F;     distances and all names <br>
((B:0.2,(C:0.3,D:0.4)E:0.5)F:0.1)A;    a tree rooted on a leaf node (rare) <br>

Taken from the example in the wikipedia description, the first and second line allow us to make a node having 3 children. In this case A,B and (C,D). The function will then recursively go through the childrens and execute the same process.

Once, all the nodes are built, we can draw it. In this case, the tree is printed as an svg format. This is also done recusively, the recursion needs to keep track of the distance of the node and the deph of the tree to be able to draw the horizontal lines. The length of the vertical line is calculated by the amount of children present and descendants.
The following newick string (KI658372:7.1884765625,(((ADBV01001119:2,HF958831:2):0,(EU643481:1.25,(HF965797:2,JH712158:2):1.25):0):0,((EU643482:4.5,JH712070:4.5):0,(ADBV01001393:1.40625,(HF957929:0.5,((KB201334:0.25,(ADBV01002688:1,GL380099:1):0.25):0,(EU643485:1.5, GL379786:1.5):0):0.5):1.40625):0):0):7.1884765625)

![alt tag](https://github.com/NsTremblay/newick/blob/master/tree.png)

Source code is in newickparser.php
