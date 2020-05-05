<!DOCTYPE html>
<html lang="en">
<head>
<title>GIT</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<!-- these are files that allow for the tooltip functionality -->
<link rel="stylesheet" type="text/css" href="tooltipster/dist/css/tooltipster.bundle.min.css" />
<link rel="stylesheet" type="text/css" href="tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.min.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="tooltipster/dist/js/tooltipster.bundle.min.js"></script>
<!-- this activates the tooltip functionality -->
<script>
	$(document).ready(function() {
		$('.tooltip').tooltipster({
		//theme: 'tooltipster-light',
		interactive: true
		});
	});
</script>
</head>

<body>

<div class="content">
	<div class="wysiwyg">
	<!-- table of contents-->
		<div style="padding:10px; border:1px solid #cccccc; border-radius:10px; width: 800px; height:auto; margin:auto;">
<img src="images/admin_header.jpg" style="width:795px;">
  <a name="top"><b>GIT -> Table of Contents:</b></a>

<div style="display:inline-block; border:1px solid #cccccc; border-radius:10pt; padding:10px; margin:auto; box-shadow:5px 5px 5px #cccccc; font-size:10pt;">Any word that is highlighted in yellow represents a "tooltip." You can hover over it and see some additional information about that particular term. Any edits to that functionality can be investigagted by heading out to <a href="http://iamceege.github.io/tooltipster/#htmlcontentalt" target="_blank">tooltipster.com</a>.</div>

<div style="margin:auto; width:750px; height:auto; padding:10px; text-align:center; color:#fff; background-color:#000000; border-radius:10pt;"> <a href="https://www.udemy.com/git-complete/learn/v4/t/lecture/1438990?start=0" target="_blank" style="color:#ffffff; ">GIT Course by Jason Taylor</a> - for more educational content, click <a href="http://brucegust.com/adm/git_tutorial/git.php" style="color:#ffffff;" target="_blank">here</a></div>
<div class="toc_title"><a href="#intro_oop" class="contents">&nbsp;I) GIT Terminology</a></div>

<span class="tab_once"><a href="#seach_bar" class="contents">A) Objects</a></span>
<span class="tab_once"><a href="#commands" class="contents">B) Classes</a></span>

<div class="toc_title"><a href="#basics" class="contents">&nbsp;II) Basics to OOP</a></div>

Breaking it down...

<span class="tab_once"><a href="#class" class="contents">A) Class</a></span>
<span class="tab_once"><a href="#objects" class="contents">B) Objects</a></span>
<span class="tab_once"><a href="#properties" class="contents">C) Properties</a></span>
<span class="tab_once"><a href="#methods" class="contents">C) Methods</a></span>
<span class="tab_twice"><a href="#members" class="contents">1) Members</a></span>
<span class="tab_twice"><a href="#creation" class="contents">2) Creating Classes and Objects in PHP</a></span>
<span class="tab_twice"><a href="#accessing" class="contents">3) Creating and Accessing Properties</a></span>
<span class="tab_twice"><a href="#print" class="contents">4) Print the Whole Object</a></span>
<span class="tab_twice"><a href="#methods" class="contents">5) Defining and Calling Methods</a></span>
<span class="tab_twice"><a href="#obj_prop" class="contents">6) Accessing Object Properties from Methods</a></span>
<span class="tab_twice"><a name="parameters" class="contents">7) Parameters and Return Value of Methods</a></span>

<div class="toc_title"><a href="#visibility" class="contents">&nbsp;III) Visibility</a></div>

<span class="tab_once"><a href="#visibility_definition" class="contents">A) Definition</a></span>
<span class="tab_once"><a href="#three_levels" class="contents">B) Three Levels</a> </span>

<span class="tab_twice"><a href="#visibility_public" class="contents">1) Public</a></span>
<span class="tab_twice"><a href="#visibility_protected" class="contents">2) Protected</a></span>
<span class="tab_twice"><a href="#visibility_private" class="contents">3) Private</a></span>

<div class="toc_title"><a href="#constants" class="contents">&nbsp;IV) Constants</a></div>

<div class="toc_title"><a href="encapsulation" class="contents">&nbsp;V) Data Encapsulation</a></div>
<span class="tab_once"><a href="#encapsulation_definition" class="contents">A) Definition</a></span>

		</div>
	<!--end of table of contents-->
<div class="title">&nbsp;<a name="intro_op">I) GIT Terminology</a></div> 

<a href="images/remote.png" target="_blank"><img src="images/remote.png" style="width:400px; float:right; margin:10px;" border="0"></a><table style="padding:5px;"><tr><td colspan="2"><b>Repository</b> - contains files, history and config managed by GIT</td>
</tr><tr><td colspan="2"><b>3 Local States</b></td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>- Working Directory -> holds all app files, usually holds the ".git" folder that holds the actual repository and manages the history of all the commits</td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>- Staging Area -> often referred to as the GIT index. These are the files that are poised to be committed and going live</td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>- Commit - GIT Repository -> files that have been committed and are live</td></tr><tr><td colspan="2"><b>Remote Repository</b> -  see diagram to the right. Basically, it's where your code is <a href="https://help.github.com/articles/about-remote-repositories/" target="_blank">stored</a></td></tr><tr><td colspan="2"><b>Master Branch</b> - your starting point and where the history of your commits resides</td></tr></table>
	

<span class="tab_once"><a name="objects" class="contents">A) Objects</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>
<ul><li>Object - combination of Properties and Values (The "apple" object has a <i>property</i> of color and a <i>value</i> of red).</li>
<li>Objects in some cases have the ability to perform specific actions</li>
<li>Objects can interact with one another</li></ul>
<span class="tab_once"><a name="classes" class="contents">B) Classes</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Classes represent a combination of Objects that are similar in their composition and functionality. For example, all "dog" options go into the "dog" class etc.

BOOM!

<div class="title">&nbsp;<a name="basics">II) Basics of OOP</a></div> 

<span class="tab_once"><a name="class" class="contents">Class</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<a href="images/basics.png" target="_blank"><img src="images/basics.png" style="width:250px; float:right; margin:10px;" border="0"></a>A Class is a blueprint or a template to build a specific type of object. See diagram to the right. You can also think of a Class as a blueprint for a house. You can build the same KIND of house using the same blueprint, but while they're similar (brick ranch house with an asphalt driveway), you still have differences (aluminum sided ranch with aggregate drive).

<span class="tab_once"><a name="objects" class="contents">B) Object</a></span>

Going back to the blueprint illustration of a "house" Class. Every "house" that's created by that blueprint is an "Object." You would say "such and such a house is an "object" of "house class."

<span class="tab_once"><a name="objects" class="contents">C) Properties</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

These are the characteristics of a class. You can also refer to them as "attributes" or "fields."

For example in the illustration you see to the right, you have a "Dress" class. Within that class, you have the "attributes" of "color," "fabric," and "design."

<div style="width:600px; height:auto; margin:auto; text-align:center;"><a href="images/suit.png" target="_blank"><img src="images/suit.png" style="width:600px;" border="0"></a></div>

<span class="tab_once"><a name="methods" class="contents">D) Methods</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

The "Methods" are the actions that happen within the class. Much like functions, and a Class' Method can access its own Properties.

<span class="tab_twice"><a name="members" class="contents">1) Members</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Also, the Methods and the Properties of a Class are called the "Members" of the Class.

<span class="tab_twice"><a name="creation" class="contents">2) Creating Classes and Objects in PHP</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

You write a class in PHP by simply prefacing the Class name with "class." Like this:

<span class="blue">&lt;?php 
	class Dress {
		
	}
?&gt;</span>

If the Class name consists of two words, then you would use "upper camel case," which is just fancy verbiage for capitalizing the first letter of every word. So, if our Class name was "Dress Pattern," we would write it as <span class="blue">DressPattern</span>.

Once we've got the Class defined, we now create <i>object</i> of that class, which is also called <i>instantiation</i>. It looks like this:

<span class="blue">&lt;?php
	class Dress {
		
	}
	
$dress1 = new Dress(); <span class="green">//one thing to be aware of - $dress1 is the variable that we use to hold the object of "Dress." It is not the object itself.</span>
?&gt;</span>

<span class="tab_twice"><a name="accessing" class="contents">3) Creating and Accessing Properties</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Properties are exactly like variable, but their unique to the Class that they're created in, therefore they can only bec accessed using the object of that Class or with that Class name.

You'll preface the property name with either public, private or protected which will be covered in more detail later.

Here's some examples:

<span class="blue">&lt;?php 
class Dress {
	public $color = "red";
	public $fabric = "linen";
	public $design = "Slim Fit Blazer";
}

$dressObject = new Dress();
$dressObject->color;
?&gt;</span>

Take note of the fact that while we could echo $dressObject->color and it would return the value of "red," we could also set the variable using the same kind of syntax. We would simply do:

<span class="blue">$dressObject->color="black";</span>

<span class="tab_twice"><a name="print" class="contents">4) Print the Whole Object</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Now let's print this...
<?php 
class Dress {
	public $color = "red";
	public $fabric = "linen";
	public $design = "Slim Fit Blazer";
	
	public function displayInfo() {
	echo "Here's the info about the dress...";
	echo $this->color.',&nbsp;';
	echo $this->fabric.',&nbsp;';
	echo $this->design;
	}
	
	public function helloWorld() {
		echo $this->displayInfo();
	}

}

$dressObj = new Dress();
$dressObj->color="Black";
var_dump($dressObj);
print_r($dressObj);


?>

<hr>

What you're looking at above is this:

<span class="blue">&lt;?php 
class Dress {
	public $color = "red";
	public $fabric = "linen";
	public $design = "Slim Fit Blazer";
}

$dressObj = new Dress();
$dressObj-&gt;color="Black";
var_dump($dressObj);
echo "&lt;br&gt;&lt;br&gt;";
print_r($dressObj);
?&gt;</span>

<span class="tab_twice"><a name="methods" class="contents">5) Defining and Calling Methods</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Here we're defining and calling a method...

<span class="blue">&lt;?php 
class Dress {
	public $color = "red";
	public $fabric = "linen";
	public $design = "Slim Fit Blazer";
	
	public function displayInfo() { <span class="green">// visibility is public and we're simply echoing the message</span>
		echo "The info about the dress.";
	}
}
?&gt;</span>

<span class="tab_twice"><a name="obj_prop" class="contents">6) Accessing Object Properties from Methods</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

We can also access properties of the same class methods. "$this" keywords is used for that purpose. "$this" refers to the current object, as in "this" object. It is used to access properties and methods that are inside that particular class.

Like this...

<span class="blue">&lt;?php 
class Dress {
	public $color = "red";
	public $fabric = "linen";
	public $design = "Slim Fit Blazer";
	
	public function displayInfo() { <span class="green">// visibility is public and we're simply echoing the message</span>
		echo "The info about the dress.";
		<span class="red">echo $this-&gt;color;
		echo $this-&gt;fabric;
		echo $this-&gt;design;</span>
	}
}
?&gt;</span>

<?php 
	$dressObj->displayInfo();
?>

...and finally, you can grab the functionality of another function from the same class. Like this:

<span class="blue">public function helloWorld() {
	echo $this->displayInfo();
}</span>

Look what happens when we call that function:

<?php 
$dressObj->helloWorld();
?>


<span class="tab_twice"><a href="#parameters" class="contents">7) Parameters and Return Value of Methods</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

This is actually a project you have to do as part of the course. Here's the code:

<div class="code_frame"><div class="inner_code_frame" style="height:250px; overflow-y:scroll;">
&lt;?php

class Calculator {
	
	public function add($number1, $number2) {
		
		if(!is_numeric($number1) AND !is_numeric($number2))
		{
			echo "Numbers have to be numeric.";
		}
		else
		{
			$sum=$number1 +$number2;
			return $sum;
		}
	}	
	
	public function subtract($number1, $number2) {
		
		if(!is_numeric($number1) AND !is_numeric($number2))
		{
			echo "Numbers have to be numeric.";
		}
		else
		{
			$sum=$number1 - $number2;
			return $sum;
		}
	}

	public function multiply($number1, $number2) {
		
		if(!is_numeric($number1) AND !is_numeric($number2))
		{
			echo "Numbers have to be numeric.";
		}
		else
		{
			$sum=$number1 * $number2;
			return $sum;
		}
	}	

	public function divide($number1, $number2) {
		
		if(!is_numeric($number1) AND !is_numeric($number2))
		{
			echo "Numbers have to be numeric.";
		}
		elseif($number2&lt;=0)
		{
			echo "$number2 cannot be a zero.";
		}
		else
		{
			$sum=$number1 / $number2;
			return $sum;
		}
	}		
}

$calc=new Calculator;
$bring_it=$calc-&gtpdivide(6,2);
echo $bring_it;

?&gt
</div></div>

...and here it is in working order:

<?php

class Calculator {
	
	public function add($number1, $number2) {
		
		if(!is_numeric($number1) AND !is_numeric($number2))
		{
			echo "Numbers have to be numeric.";
		}
		else
		{
			$sum=$number1 +$number2;
			return $sum;
		}
	}	
	
	public function subtract($number1, $number2) {
		
		if(!is_numeric($number1) AND !is_numeric($number2))
		{
			echo "Numbers have to be numeric.";
		}
		else
		{
			$sum=$number1 - $number2;
			return $sum;
		}
	}

	public function multiply($number1, $number2) {
		
		if(!is_numeric($number1) AND !is_numeric($number2))
		{
			echo "Numbers have to be numeric.";
		}
		else
		{
			$sum=$number1 * $number2;
			return $sum;
		}
	}	

	public function divide($number1, $number2) {
		
		if(!is_numeric($number1) AND !is_numeric($number2))
		{
			echo "Numbers have to be numeric.";
		}
		elseif($number2<=0)
		{
			echo "$number2 cannot be a zero.";
		}
		else
		{
			$sum=$number1 / $number2;
			return $sum;
		}
	}		
}

$calc=new Calculator;
$bring_it=$calc->divide(6,2);
echo $bring_it;

?>

<div class="title"><a name="#visibility">&nbsp;III) Visibility</a></div>

<span class="tab_once"><a name="visibility_definition" class="contents">A) Definition</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

Visibility determines where and when you can see the properties or a class.

<span class="tab_once"><a name="three_levels" class="contents">B) Three Levels</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

<span class="tab_twice"><a name="visibility_public" class="contents">1) Public</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

This level has no restrictions meaning that it can be accessed from anywhere in your app. The value of a "public" property can be also be changed from anywhere in the script. If you don't define a property or method, then it will be considered "public" by default.

<span class="tab_twice"><a name="visibility_protected" class="contents">2) Protected</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

This refers to a property or method that can be accessed only from within its class or any class that extends that class. 

<span class="tab_twice"><a name="visibility_private" class="contents">3) Private</a> <a href="#top" style="font-weight:normal; text-decoration:none; color:#808080;">(back to top...)</a></span>

This is a very restricted level of visibility. You can access these properties and methods only from within the class.

Let's see how this plays out in real life...

Check this out:

<div class="code_frame"><div class="inner_code_frame">
&lt;?php
class Dress {
	 
	 public $color = "red";
	 private $fabric = "linen";
	 private $design = "Slim Fit Blazer";
	 
	 public function displayInfo() {
		  echo "The info about the dress.";
		  echo $this-&gt;color;
		  echo $this-&gt;fabric;
		  echo $this-&gt;design;	 
	 }
	 
	 private function helloWorld($number1, $number2) {
		return $number1 + $number2; 
	 }

}

$dressObj = new Dress();

echo $dressObj-&gt;color."&lt;br&gt;";
$dressObj-&gt;helloWorld(1,2);

?&gt;
</div></div>

If you were to run the above code, "echo $dressObj->color" would work just fine because it's "public." But "helloWorld" would fail because you're trying to access that functionality from outside the class itself.

BOOM!

<div class="title"><a name="constants">&nbsp;IV) Constants</a></div>

A constant is a variable whose value cannot be changed once it has been assigned. A valid constant name starts with a letter or underscore - no $ sign before the name itself.

It's a good practice to use ALL CAPS.

Now, this...

<span class="blue">class Dress {
	
	const SMALL = "Small";
	const MEDIUM = "Medium";
	
	public function displayInfo() {
		echo self::MEDIUM;
	}
	
}

$displayObj = new Dress();
echo $displayObj->displayInfo();</span>

...will result in the screen saying "Medium." 

You can also use CONST on the fly like this...

<span class="blue">class Dress {
	
	const SMALL = "Small";
	const MEDIUM = "Medium";
	public $size;
	
	public function displayInfo() {
		echo self::MEDIUM;
	}
	
}

$dressObj = new Dress();
$dress_size=$dressObj-&gt;size = Dress::MEDIUM;
echo $dress_size;</span>

This will also produce "Medium."

Very cool!

<div class="title"><a name="encapsulation">&nbsp;VI) Data Encapsulation</a></div>

<span class="tab_once"><a name="encapsulation_definition" class="contents">A) Definition</a></span>
<ul><li>Is it one of the most important concepts in object oriented programming</li>
<li>It is a process of hiding the class data from the outside world and only the code that is inside the clas can access and change the data</li>
<li>Using data Encapsulation we keep the data safe from the outside world</li></ul>

You implement Data Encapsulation in two steps:
<ul><li>Mark all properties private</li>
<li>Provide public methods to access and change the private properties</li></ul>

A good way to envision all this is to imaging a bank dynamic where the balance is a "private" dynamic so it cannot be accessed by the outside world, but you can utilize it by using public methods.

Like this:

<div class="code_frame"><div class="inner_code_frame" style="height:250px; overflow-y:scroll;">&lt;?php
class Account {

private $balance = 0;

	public function deposit ($amount) {
		$this-&gt;balance += $amount;
		echo "An amount of $amount has been deposited in your account. ";
		echo "Your new balance is ".$this-&gt;balance."&lt;br&gt;";
	}
	
	public function getBalance() {
		return $this-&gt;balance;
	}
	
	public function withdraw($amount) {
	
		if($amount&lt;= $this-&gt;balance) {
			$this-&gt;balance -=$amount;
			echo "An amount of $amount has been withdrawn. Your ";
			echo "remaining balance is ".$this-&gt;balance;
		}
		else
		{
			echo "Insufficient balance.";
		}
	
	}

}

$accObj = new Account;
echo $accObj-&gt;getBalance();
echo "&lt;br&gt;&lt;br&gt;";
$accObj-&gt;deposit(100);
$accObj-&gt;withdraw(30);

?&gt;</div></div>

Here's the result of the above code:

0

An amount of 100 has been deposited in your account. Your new balance is 100
An amount of 30 has been withdrawn. Your remaining balance is 70.


		</div><!--closing tag for content-->
	</div><!--closing tag for wysiwyg-->

<!-- any tooltip content that is, by default, hidden-->
<div class="tooltip_templates" style="display:none; width:350px; padding:10px;">
	<span id="event_handler">
	An Event Handler is an element within a verbose quality of functionality<br>that you can read more about at React Native's <a href="https://facebook.github.io/react-native/docs/handling-touches.html" target="_blank" style="color:#ffffff;">documentation</a>.<br>Bottom line: A number of pre-fabricated triggers that initiate some kind of action.
	</span>
</div>

<!--end tooltip content section-->
</body>
</html>