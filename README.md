bst-child
=========

A starter Child Theme for BST

Version 1.1

-----

BST is a Bootstrap 3 Starter Theme, for WordPress

Get BST here: [https://github.com/SimonPadbury/bst](https://github.com/SimonPadbury/bst)

-----

**bst-child** contains the minimum requirement for a child theme based off **bst**.

So far, all it has is an enqueue function for the linking the stylesheet `css/bst-child.css` *after* the stylesheets of **bst**.

-----

##Notes

(1.) You can't put your styles in this file (style.css). Put them in css/bst-child.css

(2.) Since downloads of BST from GitHub will be in a folder named 'bst-master', therefore in the CSS comment header above I have put 'Template: bst-master'. If the BST root folder has a different name, then you must make the SAME change to the Template line in the CSS comment above.

(3.) You can make this child theme your own by simply:

(a.) Change the name of the root folder
(b.) Change the name of the stylesheet css/bst-child.css
(c.) In functions.php, do a search-and-replace for these two terms:

     "bst-child" => "your-theme-name"
     "bst_child" => "your_theme_name"

(d.) Change the Theme Name in the CSS comment in this file (style.css)
